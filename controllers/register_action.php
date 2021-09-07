<?php session_start();?>
<?php




require '../db/config.php';

if(isset($_POST['register'])){


    $name = $_POST['name'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $password_confirm = $_POST['password_confirm'];

   


    $dob = $_POST['dob'];

    $document = $_FILES['document'];


    $sqlEmailIndex = "select id from users where email= '$email' ";

    $check_op = $conn->query($sqlEmailIndex);

    $emailCheck = mysqli_fetch_assoc($check_op);
    var_dump($emailCheck);

    if(mysqli_num_rows($emailCheck)>0){
        $_SESSION['msg'] = 'We have a account associated with this email address, please chosse another email for registration';
        header('location: ../index.php');
    }




    //all valid
    /*
    $names = $document['name'];

    $paths = $document['tmp_name'];

    var_dump($names);
    var_dump($paths);

    echo '-----------------------------------------';

    echo '<br>';


    echo $names[0];
    echo $paths[0];
    echo '<br>';



    echo $names[1];
    echo $paths[1];
    echo '<br>';

    
    echo 'All Right'.'<br>';

    echo $document['name'][0].'<br>';
    echo $document['tmp_name'][0]. '<br>';

    echo "New". '<br>';

    echo $document['name'][1].'<br>';
    echo $document['tmp_name'][1]. '<br>';

    echo "The count of arry doc is : ". count($document);// So this is not valid for iterating key

    echo "Count of files can be derived by count any of the associative array elements as its a multidiemennal arry, inside a assoc array we got indexed arrays based on the file count". '<br>';
    echo 'Let us check the count of names: '. count($document['name']). '</br>'; 
    echo 'Let us check the count of size array'. count($document['size']).'</br>';

    echo "Valid and worked great";

    */



    //$storage_dir = '../uploads/';// for app server use ok
    //$storage_dir = '../../FTP/'; // for localhost server storage FTP ok
    //$storage_dir = '../../../../../D:/FTP/'; not ok
    //$storage_dir = '../../../../FTP/'; // For C: FTP ok
    //$storage_dir = 'C:/FTP/'; // OK
    //$storage_dir = 'D:/FTP/'; // OK

 





    //$path_db = $storage_dir. basename($document['name'][0]); //base is used to take only the base file not full path of the file location, used to extract only the file name

    //$up_pro = move_uploaded_file($document['tmp_name'][0], $path_db); //For file upload
    /*
    if ($up_pro){
        echo "successful";
    }
    else {
        echo "Not Successful";
    }
    */

    // base name function extracts the name of the file with ext, cuttoffs the absolute or relative path 

    //initialization of strorage dir

    $storage_dir = '../uploads/'; // for store files
    $link_storage = 'uploads/'; //for view


    if($password == $password_confirm){

     
        
   

            //$path_db = $storage_dir. basename($document['name'][$count]); // creates conflict when showing files in browser

            //$path_db =  basename($document['name'][$count]); // without unique flag for a file image(timestamp)

            //with timestamp + $count to generate unique value to avoid ambiguity

            $path_db = time().'_'.basename($document['name']);

           


            $sql = "insert into users (name, email, dob, password, document) values ('$name', '$email', '$dob', '$password', '$path_db' )";
            $result = $conn->query($sql);

             // destination must be set correctly with 

             $up_pro = move_uploaded_file($document['tmp_name'], $storage_dir.$path_db);

             if ($up_pro){
                 echo " profile pic upload successful ". '<br>';
             }
             else {
                 echo "Not Successful upload  ". '<br>';
             }
 
    
        }


        if ($result){
            $_SESSION['register_success'] = 'You have been registered successfully!';
            header("location: ../index.php");
            
        }
        else {echo "An error occured";};
    

  

 
    
 
    
}


//$conn->close();


?>














<?php

/*
foreach($name as $key => $value){
    echo "\nThe key is" . $key . "\n";
    echo "The value is ". $value . "\n";
}*/

//var_dump($name);
//print_r($result); returns 1 means successful





/*






/*
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";*/


?>