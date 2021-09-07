<?php session_start();?>
<?php// include 'layouts/header.php'; ?>




<!--

    


    <table class="table table-hover">

    <form action="search.php" method="POST">
        <label for="">From</label>
      <input type="date" name="fromDate">
      <label for="">To</label>
      <input type="date" name="toDate">
      <input type="submit" name="search">
    </form>
    <thead>
      <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Email Address</th>
        <th>Date of Birth</th>

      </tr>
    </thead>
    <tbody>

-->
    <?php 
    /*

    require_once 'db/config.php';

    if (isset($_POST['search'])){
        $fromDate = $_POST['fromDate'];
        $toDate = $_POST['toDate'];

        $sqlSearch = "select * from users where dob between '$fromDate' and '$toDate' ";

        $op = $conn->query($sqlSearch);

        while($data = mysqli_fetch_object($op))
    

        {





 

    

   
*/
    
    
    ?>

    <!--

      <tr>
        <td><?=$data->id;?></td>
        <td><?=$data->name;?></td>
        <td><?=$data->email;?></td>
        <td><?=$data->dob;?></td>

        <td><a href="controllers/edit.php?id=<?=$data->id;?>">Edit</a></td>

        <td><a href="controllers/delete.php?id=<?=$data->id;?>">Delete</a></td>
      </tr>  


      <?php //    };
           //  };
     ?>
      
     
  
    </tbody>
  </table>  -->


   
  

  <?php

  //for fresh ajax request

  
  require_once 'db/config.php';

  
      $param = $_POST['search_field'];

      $sqlSearch = "select * from users where `name` like '%$param%' ";
      //***** Remember not valid:  where name like '%'.'$param'. '%'     ";

      var_dump($param);

      $op = $conn->query($sqlSearch);

      $output = '';


      if(mysqli_num_rows($op) > 0){

        $output .=    '<table class="table"><thead>
                      <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Date of Birth</th>
                        <th></th>
                        <th></th>
                        

                     </tr><thead><tbody>';

        while($row = mysqli_fetch_array($op)){

          $output .= '
                        <tr>
                          <td>'.$row['id'].'</td>
                          <td>'.$row['name'].'</td>
                          <td>'.$row['email'].'</td>
                          <td>'.$row['dob'].'</td>
                  
                          <td><a href="controllers/edit.php?id=<?=$data->id;?>">Edit</a></td>
                  
                          <td><a href="controllers/delete.php?id=<?=$data->id;?>">Delete</a></td>
                         </tr>';


        }
        $output .='</tbody></table>';

        echo $output;

      }
      else {
        echo "Not Found any data";
      };

    


?>

   


<?php // include_once 'layouts/footer.php'; ?>