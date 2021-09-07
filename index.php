<?php session_start();?>
<?php include_once('layouts/header.php');?>


<h1>Hi Tech Login</h1>

<?php

if(isset($_SESSION['msg'])){
  echo '<p class="middle s-msg">'.$_SESSION['msg']. '</p>';

  //session_unset();
  
}

if(isset($_SESSION['register_success'])){
  echo '<p class="middle s-msg">'.$_SESSION['register_success']. '</p>';

  //session_unset();

}

?>


<form action="controllers/login_action.php" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <input type="submit" class="btn btn-primary" name="login" value="LOGIN"/>
</form>
<div class="card">
  <p>Not a user?</p>
  <a href="register.php" class="btn btn-primary">Register</a>
</div>




<?php include_once('layouts/footer.php');?>
