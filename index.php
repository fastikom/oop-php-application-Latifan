<?php
include_once 'inc/class.crud.php';
$crud = new CRUD();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>OOP-PHP</title>
</head>
<body>

<div id="header">
<label>OOP-PHP Coba Coba</label>
</div>

<center>
<table id="dataview">
<tr>
<td colspan="5"><a href="add_records.php">Tambah (+)</a></td>
</tr>
<?php
$res = $crud->read();
if(mysql_num_rows($res)>0)
{
	while($row = mysql_fetch_array($res))
	{
	?>
    <tr>
    <td><?php echo $row['first_name']; ?></td>
    <td><?php echo $row['last_name']; ?></td>
    <td><?php echo $row['user_city']; ?></td>
    <td><a href="edit_records.php?edt_id=<?php echo $row['user_id']; ?>">Edit</a></td>
    <td><a href="dbcrud.php?del_id=<?php echo $row['user_id']; ?>">Hapus</a></td>
    </tr>
    <?php
	}	
}
else
{
	?><tr><td colspan="5">Nothing here... add some new</td></tr><?php
}
?>
</table>

<footer>
           <center> LatifanKholid (2014150123) | Copyright © 2017</center> 
</footer>

</center>
</body>
</html>