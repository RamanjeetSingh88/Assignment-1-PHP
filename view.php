<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Details</title>
    <meta name="description" content="PHP Assingment 1 ">
    <link rel="stylesheet" href="CSS/view.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
        <nav>
            <div class="navbar-brand">Assignment 1 // PHP</div>
            <div id="navbarNav">
                <ul class="nav-item">
                        <a href="index.php">Home</a>
                        <a href="view.php">View</a> 
                </ul>
            </div>
        </nav>
    </header>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>Name</th>
				<th>email</th>
				<th>Age</th>
				<th>grade</th>
			</tr>
			<?php

				while($r = mysqli_fetch_assoc($res)){
			?>
					<tr>
						<td><?php echo $r['name']; ?></td>
						<td><?php echo $r['email'] ?></td>
						<td><?php echo $r['age'] ?></td>
						<td><?php echo $r['grade'] ?></td>
					</tr>
				<?php
				}
			?>
		</table>
	</div>
</div>
</body>
</html>
