<?php

if (!isset($_REQUEST['secret']) || $_REQUEST['secret'] !== "AniOhevJS") die('BYE');

require_once 'db.php';

$conn = dbConnect();

$result = mysqli_query($conn,"SELECT * FROM contact");





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coding Academy Contacts</title>
</head>
<body>
	<h1>Coding Academy Contacts</h1>	
	<table border="1" cellpadding="10px">
    <tr>
        <th>Id</th>
		<th>CreatedAt</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Txt</th>
        
    </tr>
	<?php while($row = $result->fetch_assoc()) : ?>
    <tr>
        <td><?php echo $row['id']  ?></td>
		<td><?php echo $row['created_at']  ?></td>
        <td><?php echo $row['name']  ?></td>
        <td><?php echo $row['email']  ?></td>
        <td><?php echo $row['phone']  ?></td>
        <td><?php echo $row['txt']  ?></td>
        
    </tr>
	<?php endwhile ?>
</table>
</body>
</html>

<?php
 $conn->close();
?>