<?php include '../layouts/header.php';?>

<?php

require_once '../db/config.php';

$id = $_GET['id'];

if(isset($_POST['delete'])){

  
    $id = $_POST['id'];
    
    $sqlDelete = "DELETE FROM users where id ='$id' ";

    $op = $conn->query($sqlDelete);

    if($op){
        echo "Successfully Deleted";
        header('location: ../index.php');
    }

    else {
        echo "Not succeed";
        
    }

    $conn->close();

}





?>

<a href="../index.php" class="btn btn-success">Back to Home</a>
<div class="card">
  <div class="card-body">
    <h4 class="card-title"> Delete record <?=$id;?> </h4>
    <p class="card-text">Please confirm, are you sure to delete?</p>

    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
     <button type="submit" class="btn btn-danger" name="delete">Yes</button>
     <input type="hidden" name="id" value="<?=$id;?>">
    </form>

    <a href="../index.php" class="btn btn-info">No</a>
  </div>
</div>













<?php include_once '../layouts/footer.php'; ?>