<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
		<th>ID</td>
		<td>HEADING</td>
		<td>DESCRIPTION</td>
		<td>BUTTON</td>
		<td>IMAGE</td>
		<td>UPDATE</td>
		
	</tr>
    </thead>
<?php
	include 'conn.php';
	$q="SELECT * FROM mytab";
	$query=mysqli_query($con,$q);
	while ($res=mysqli_fetch_array($query)) {
		
	?>
    <tbody>
     <tr>
		<td><?php echo $res['id']; ?></td>
		<td><?php echo $res['heading']; ?></td>
		<td><?php echo $res['description']; ?></td>
		<td><?php echo $res['button']; ?></td>
				<td><?php echo $res['image']; ?></td>

		<td><button type="submit"><a href="update.php?id=<?php echo $res['id'] ?>">UPDATE</a></button></td>

	</tr>
    </tbody>
<?php
}
	?>
  </table>
</div>

</body>
</html>
