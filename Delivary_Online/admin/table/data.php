<?php
include("db_connect.php");
$per_page = 5;
if(isset($_GET['page'])) {
	$page=$_GET['page'];
}
$start = ($page-1)*$per_page;
$sql_query = "select id, name, gender, skills, address, designation, age FROM `developers` order by id limit $start,$per_page";
$resultset = mysqli_query($conn, $sql_query);
?>
<table width="100%">
	<thead>
		<tr>
		<th>   Id</th>
		<th>Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Address</th>
		<th>Designation</th>
		<th>Skills</th>				
		</tr>
	</thead>
	<?php
		while($rows = mysqli_fetch_array($resultset)){	?>	
			<tr bgcolor="#DDEBF5">
			<td>   <?php echo $rows['id']; ?></td>
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['gender']; ?></td>
			<td><?php echo $rows['age']; ?></td>
			<td><?php echo $rows['address']; ?></td>
			<td><?php echo $rows['designation']; ?></td>
			<td><?php echo $rows['skills']; ?></td>
			</tr>
	<?php }	?>
</table>