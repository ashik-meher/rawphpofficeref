
<?php include '../layouts/header.php';?>

<?php

require_once '../db/config.php';

$id = $_GET['id'];

$sqlFind = "select * from users where id='$id' ";

$op = $conn->query($sqlFind);

$data = mysqli_fetch_object($op);

if (isset($_POST['update'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sqlUpdate = "update users set name= '$name', email= '$email' where id= '$id' "; 

    $op = $conn->query($sqlUpdate);

    if($op){
        echo "Successfully Updated record";
    }

    else {
        echo "Something went wrong";
    }

}


?>

<a href="../index.php" class="btn btn-success">Back to Home</a>

<form action="<?= $_SERVER['PHP_SELF'];?>" method="POST" id="dyna-form" >

                <div id="dyna-field">
                    <h3>Edit Record</h3>

                      <div class="form-group">

                            <label for="name">Name</label>

                            <input  type="text" name="name" value="<?=$data->name?:'';?>" class="form-control" placeholder="Enter name" id="name" required>


                        </div>

                        <div class="form-group">

                            <label for="email">Email Address</label>

                            <input type="email" name="email" value="<?=$data->email?:'';?>" class="form-control" placeholder="Enter email" id="email" required>

                        </div>
                </div>
                <br>

                <input type="hidden" value="<?=$data->id;?>" name="id">

                <button type="submit" class="btn btn-primary" name="update">Update </button>
    </form>



    

 




<?php include_once '../layouts/footer.php'; ?>