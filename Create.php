<?php
session_start();

?>
<?php
include "connect.php";

if(isset($_POST['submit']))
{	
    $naam = $_POST['Naam'];

    $insert = mysqli_query($link,"INSERT INTO `school`(`Naam`) 
    VALUES ('$naam')");

    if(!$insert)
    {
         echo "<h6>New course added!</h6>";
    }
    else
    {
        echo mysqli_error();
    }
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
    
.form {
  margin: auto;
  width: 50%;
  padding: 10px;
}
.button {
  margin: auto;
  width: 8%;
  padding: 10px;
  object-position: center;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <div class="subnav">
    <button class="subnavbtn">CRUD TEST<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="Create.php">create</a>
      <a href="courseshome.php">update</a>
      <a href="#careers">delete</a>
      <a href="#careers">read</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">Bring</a>
      <a href="#deliver">Deliver</a>
      <a href="#package">Package</a>
      <a href="#express">Express</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Partners <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
    </div>
  </div>
</div>

        <div class="form">
            <form method="POST">
                <h1>School toevoegen</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Naam school </label></div>
                    <div class="col-sm-6 input-column"><input type="text" name="naam" placeholder="Schoolnaam" Required></div>
                </div><input class="button" type="submit" name="submit" value="Submit">
            </form>
        </div>

    


