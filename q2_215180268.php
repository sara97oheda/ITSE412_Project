<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>Q2</title>
</head>
<body>
<form style="width: 40%; float: right" method="POST">
	<fieldset>
	<input type="number" name="item_number">
	<label>ادخل رقم القطعة</label>
	
</fieldset>

	<fieldset>
	<input type="text" name="item_name">
	<label>ادخل اسم القطعة</label>
</fieldset>

	<fieldset>
	<input type="float" name="item_price">
	<label>اخل سعر القطعة</label>
</fieldset>
<BUTTON type="submit" name="submit" style="float: right;" >اضافة</BUTTON>

<?php 

    $connect = mysqli_connect("127.0.0.1", "root", "", "items");
		mysqli_set_charset($connect, "utf8");

	if (isset($_POST['submit'])) {

				$itemNumber= mysql_real_escape_string($_POST['item_number']);
				$itemName= mysql_real_escape_string($_POST['item_name']);
				$itemPrice= mysql_real_escape_string($_POST['item_price']);


	
		$query = "INSERT INTO `items`(`itemno`, `itemname`, `itemprice`) VALUES('$itemNumber','$itemName','$itemPrice')";
		$result = mysqli_query($connect, $query);
}
?>

</form>
</body>
</html>