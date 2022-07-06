<?php //session_start();?>
<?php error_reporting(1); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="./assets/style.css">



 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





</head>

<body>

<!-- style="width:60%; margin:auto;"-->
<div class="container" >

<!--nemu -->
<div class="cnavbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="cdropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="cdropdown-content">
      <div class="header">
        <h2>Mega Menu</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Category 1</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 2</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 3</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
    </div>
  </div> 
  <?php //session_start();?>

   
     <?php
if (isset($_SESSION['user_name'])){
  echo  '<p  class="user_name">'.'Welcome, '.$_SESSION['user_name'].  '!</p>';
}

      
      

   
   ?>
   

</div>

<!-- menu ends-->


<h2>Welcome</h2>

<?php  $link_storage = 'uploads/';?>




