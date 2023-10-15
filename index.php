<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Details</title>
    <meta name="description" content="PHP Assingment 1 ">
    <link rel="stylesheet" href="CSS/index.css">
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
    <main class="container mt-5">
        <h2>Add Content</h2>
        <form  method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Age:</label>
                <input id="Age" name="age" class="form-control">
            </div>
            <div class="form-group">
                <label>Grade:</label>
                <input id="Grade" name="grade" class="form-control">
            </div>       
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="form-group submit-message">
            <?php
                          require_once('database.php');
                         
                         if(!empty($_POST)){
                             $name = $_POST['name'];
                             $email = $_POST['email'];
                             $age = $_POST['age'];
                             $grade = $_POST['grade'];
                             $res   = $database->create($name, $email, $age, $grade);
                             if($res){
                                 echo "<p>Successfully inserted data</p>";
                             }else{
                                 echo "<p>Failed to insert data</p>";
                             }
                         }
                      ?>
         </div>
    </main>
    <footer class="footer">
        Copyright © 2023 Ramanjeet Singh
    </footer>
</body>
</html>