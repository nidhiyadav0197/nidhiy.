// Index.php File 
<?php 
mysql_connect('localhost','root','');
mysql_select_db('Nidhi');
$query="select * from Nidhi"; 
$result=mysql_query($query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align:"center" border:"1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Student Record</h2></th> 
		</tr> 
			  <th> Name </th> 
			  <th> AboutMe </th> 
			  <th> Email </th> 
			  <th> Linkedin </th> 
			  
		</tr> 
		
		<?php while($rows=mysql_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Name']; ?></td> 
		<td><?php echo $rows['AboutMe']; ?></td> 
		<td><?php echo $rows['Email']; ?></td> 
		<td><?php echo $rows['Linkedin']; ?></td> 
		</tr> 
	<?php 
               } 
    ?> 

	</table> 
	</body> 
	</html>