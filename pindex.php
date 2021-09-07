<?php session_start();?>

<?php if (!(isset($_SESSION['user_name']))){
  header('location: /404');
  echo '<p style="text-align:center;">You are not permitted to see the resource! You are a hacker and we are gonna hack you!</p>';
  //header('location: /404');

};?>
<?php include 'layouts/header.php'; ?>
<a href="test.php" class="btn btn-danger">Test Page</a>

<?php if (isset($_SESSION['user_name'])){

  echo '<a calss="btn btn-dark" href="controllers/logout.php">Logout</a>';
  echo '<p>User     <a class="btn btn-secondary">'.$_SESSION['user_name'].'</a></p>';

};
?>

<?php   
if (isset($_SESSION['login_success']))
{
  echo $_SESSION['login_success'];

}
?>




<form action="controllers/add.php" method="POST" id="dyna-form" enctype="multipart/form-data" >

                <div id="dyna-field">

                      <div class="form-group">

                            <label for="name">Name</label>

                            <input  type="text" name="name[]" class="form-control" placeholder="Enter name" id="name">


                        </div>

                        <div class="form-group">

                            <label for="email">Email Address</label>

                            <input type="email" name="email[]" class="form-control" placeholder="Enter email" id="email">

                        </div>

                        
                        <div class="form-group">

                            <label for="email">Date Of Birth</label>

                            <input type="date" name="dob[]" class="form-control" placeholder="Enter email" id="dob">

                        </div>

                        
                        
                        <div class="form-group">

                            <label for="document">Attach File</label>

                            <input type="file" name="document[]" class="form-control"  id="document">

                        </div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary" name="save">Save </button>
    </form>

    
    <button id="add" name="add" class="btn btn-secondary">Add More Fields</button>

    
<br><span>________________________________________________________________________________________________</span>

    <div class="ajax">

      <form action="search.php" method="POST">
      <span>Search</span>
      <input type="text" id="search_field" name="search_field" placeholder="Enter a Name">

      <input type="submit" name="search" class="btn btn-danger">
      </form>
    </div>

    <h1>Search Result Appear Here</h1>
    <div id="result" style="border:2px solid red; padding:5px;">
   

    </div>


    <script>
      // vue js v for basic dynamic functionalities
      /*

      $(document).ready(function(){
        console.log("ok");
        $('#search-field').keyup(function(){
          var str = $(this).val();
          if(str.length == 0 ){
            $('#result').html('');
          }
          if (str.length > 0){
            $('#result').html(str);
          }
        })
     
      
      })  */
    </script>

    <script>


      

      $(document).ready(function(){
        console.log("ok");
        $('#search_field').keyup(function(){
          var str = $(this).val();
          //console.log(str);

          if (str != ''){

            //funny behavior append with existing content :) // $('#result').append(str);

            $.ajax({
              url:"search.php",
              method:"post",
              data:{search_field:str},
              dataType:"html",
              success: function(data){
                $('#result').html(data)

              }
            })

          }
          else{
            $('#result').html('');
          }
        
        })
     
      
      })  

      </script>


<br><span>________________________________________________________________________________________________</span>
    


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
        <td>Image</td>

      </tr>
    </thead>
    <tbody>


    <?php 

    require_once 'db/config.php';

    $sqlIndex = "select * from users order by id desc";

    $op = $conn->query($sqlIndex);

    ///////////////////////////////////////////////// test
    //echo '<div style="padding:10px; border:1px solid blue;margin>';

    //$cop =  $conn->query($sqlIndex);

    

    //$jformat = json_encode($cop);

    //var_dump($cop);

    


  
   /*foreach($cop as $pata){
     

     //echo json_encode($pata);
      /*echo json_encode($pata['id']);
      echo json_encode($pata['name']);
      echo json_encode($pata['email']);
      echo '<br>';

    }*/

    //$all_data= array();


    //while($data = mysqli_fetch_assoc($cop)){
     // $data = json_encode($data);
    //  array_push($all_data, $data);
    //}
  //echo '<pre>';
   //var_dump($all_data) ;

   //echo '</pre>';
  
   //echo '</div>';

   //$sl =0;

   //echo $sl+=1;echo '.';echo $all_data[4];

   ////////////////////////////////////////////////////////test

    ?>

    <?php


    while($dataObj = mysqli_fetch_object($op))
    

      {

    
    
    ?>

      <tr>
        <td><?=$dataObj->id;?></td>
        <td><?=$dataObj->name;?></td>
        <td><?=$dataObj->email;?></td>
        <td><?=$dataObj->dob;?></td>
        <td><img style="width:200px;height:150px;" src="<?=$link_storage.$dataObj->document;?>"alt="N/A">

        <td><a href="controllers/edit.php?id=<?=$dataObj->id;?>">Edit</a></td>

        <td><a href="controllers/delete.php?id=<?=$dataObj->id;?>">Delete</a></td>
      </tr>


      <?php }; ?>
      
     
  
    </tbody>
  </table>

    

    <script>

        $(document).ready(function (){
            $('#add').click(function(){

                var html = '<div class="nf">';
                    html += '<div class="form-group"><label for="name">Name</label>';
                    html +='<input type="text" name="name[]" class="form-control"></div>';

                    html +='<div class="form-group"><label for="name">Email</label>';
                    html += '<input type="email" name="email[]" class="form-control"></div>';

                    html +='<div class="form-group"><label for="dob">Date of Birth</label>';
                    html += '<input type="date" name="dob[]" class="form-control"></div>';

                    html +=  '<div class="form-group"><label for="document">Attach File</label>';
                    html += '<input type="file" name="document[]" class="form-control"  id="document"></div>';





                    html += '<a id="remove" name="remove" class="btn btn-danger">Remove </a><br>';

                    html += '</div>';

                //$('#dyna-form').append(html);
                $('#dyna-field').append(html);

            })

            $('#dyna-form').on('click', '#remove', function(){
                $(this).closest('.nf').remove();
            })
        })


        

    </script>


<?php include_once 'layouts/footer.php'; ?>