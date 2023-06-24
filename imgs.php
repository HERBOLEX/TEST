<?php include 'dbcon/db.php' ?>
<div class="w-100">
    <section class="section">
            <img src="img/fini_1.webp" class="w-100" alt="" >
            <div class="container bg-land" id="form">
    <div class="h1 text-center mt-2 mb-3">لاجراء طلبكم يرجى ملأ الاستمارة اسفله</div>
	<form class="row m-2" action="dbcon/get_com.php" method="POST">
	    <div class="mb-3" >
	        <select name="cars" id="cars" class="form-control">
              <option value="no-selected" desabled>اختر العرض المناسب لك</option>
              <option value="وحدة فقط">وحدة فقط</option>
              <option value="العرض المميز">العرض المميز</option>
            </select>
	    </div>
	    <?php 
    // Fetch data from the database
    $sql = "SELECT * FROM `edit_from`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>
		<div class="mb-3">
			<label for="<?php echo htmlspecialchars($row["name_id_input"]) ?>" class="form-label"><?php echo htmlspecialchars($row["name_input"]) ?></label>
			<input type="<?php echo htmlspecialchars($row["name_type"]) ?>" name="<?php echo htmlspecialchars($row["name_id_input"]) ?>" class="form-control arfont-normal" id="<?php echo htmlspecialchars($row["name_id_input"]) ?>" placeholder="<?php echo htmlspecialchars($row["placeholder"]) ?>" required="<?php echo htmlspecialchars($row["required"]) ?>" >
		</div>
		    <?php } 
  }
    ?>
		<div class="mb-3">
						<button type="submit" name="save" class="form-control btn-land" id="btntest1" >
			    <i class="bi bi-bag-plus"></i>
			    <span style="margin-right: 10px;">
			        تاكيد الطلب
			    </span>
			    </button>
			<input type="hidden" name="ip" id="ip" value="<?=$ipaddress ?>">
		</div>
	</form>
</div>
            <img src="img/fini_2.webp" class="w-100" alt="" >
            <img src="img/fini_3.webp" class="w-100" alt="" >
            
    </section>
</div>


