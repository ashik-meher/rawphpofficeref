<?php
/*

$name = $_POST['name'];

$email = $_POST['email'];

$dob = $_POST['dob'];

for($count=0; $count < count($name); $count++){
    echo $name[$count];
    echo $email[$count];
    echo $dob[$count];
};
*/


$document = $_FILES['document'];

echo '<pre>';
var_dump($document);
echo '</pre>';


echo 'document name:  '. $document['name'][0]. '<br>';
echo 'size of document:  ' . $document['size'][0].'bytes'. '  OR '. round(($document['size'][0]/1024),2). 'KB' . '  OR '. ($document['size'][0]/1024/1024). 'MB' .'<br>';

echo 'Temp location:  '. $document['tmp_name'][0]. '<br>';

echo 'File type:  '. $document['type'][0]. '<br>';
echo 'Error Code:  '. $document['error'][0]. '<br>';


?>







<?php




require '../db/config.php';

if(isset($_POST['save'])){
    $name = $_POST['name'];

    $email = $_POST['email'];

    $dob = $_POST['dob'];

    //$storage_dir = '../uploads/';// for app server use ok
    //$storage_dir = '../../FTP/'; // for localhost server storage FTP ok
    //$storage_dir = '../../../../../D:/FTP/'; not ok
    //$storage_dir = '../../../../FTP/'; // For C: FTP ok
    //$storage_dir = 'C:/FTP/'; // OK
    $storage_dir = 'D:/FTP/'; // OK




    $document = $_FILES['document'];

    $path_db = $storage_dir. basename($document['name'][0]); //base is used to take only the base file not full path of the file location, used to extract only the file name

    $up_pro = move_uploaded_file($document['tmp_name'][0], $path_db);

    if ($up_pro){
        echo "successful";
    }
    else {
        echo "Not Successful";
    }

    // base name function extracts the 


   /* if(count($name) == count($email)){

        for($count =0; $count < count($name); $count++){



            $sql = "insert into users (name, email, dob) values ('$name[$count]', '$email[$count]', '$dob[$count]')";
            $result = $conn->query($sql);
    
        }


        if ($result){
            echo "Successful";
        }
        else {echo "An error occured";};
    

    }*/

 
    
 
    
}


$conn->close();


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