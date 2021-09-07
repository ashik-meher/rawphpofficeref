<?php session_start();?>
<?php

require '../db/config.php';

if(isset($_POST['login']))
{
    $email= $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sqlVerify = "select * from users where email= '$email' and password='$password' ";

    $op = $conn->query($sqlVerify);
    //$row_count = mysqli_num_rows($op);
    //echo $row_count;

    //while($user=mysqli_fetch_assoc($op)){

        //echo $user['name'];
        //echo $user['password'];
    //$user = mysqli_fetch_assoc($op);
    //echo $user;
    //echo '<pre>';
    //echo $op['current_filed'];
    //var_dump($op['num_rows']) ;
    //var_dump($op);
    //echo $op->lengths;
    //var_dump($op) ;

    //var_dump($user) ;
    //echo '</pre>';

//}
    //echo $op[0]['num_rows'];

    if($op){
        $row_count = mysqli_num_rows($op);
        if($row_count == 1){
            var_dump($user);
        $user = mysqli_fetch_assoc($op);
         
            //echo 'Name: '. $user['name'].'<br>';
            //echo 'Email: '. $user['email'].'<br>';
            //set_time_limit(5);
              
            $_SESSION['user_name'] = $user['name'];
            //var_dump($_SESSION['user_name']);
            $_SESSION['login_success'] = 'You , MR. '.$user['name'].' Logged In Succefully';
            header('location: ../pindex.php');
          
        }
        else if($row_count == 0)
        {
            echo "You are not a registedred user";
        }
        else {
            echo "You are trapped as a duplicated user, where email and password same ! we blocked your account for security purpose";
        }
    
     

    }
    else {
        echo "We have a problem with your account, conatact support center or you have no account here";
    }
    //$_SESSION['user_name'] = $user['name'];
}

?>