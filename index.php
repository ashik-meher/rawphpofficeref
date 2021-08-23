
<?php include 'layouts/header.php'; ?>
<a href="test.php" class="btn btn-danger">Test Page</a>


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

    --------------------------------------------------------------------------------------------------

    <div class="ajax">
      <span>Search</span>
      <input type="text" id="search-field" name="search-field" placeholder="Enter a Name">
    </div>


    <div id="result">

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
        $('#search-field').keyup(function(){
          var str = $(this).val();

          if (str != ''){

            //funny// $('#result').append(str);

            $.ajax({
              url:"search.php",
              method:"POST",
              data:{search:str},
              dataType:"txt",
              success: function(data){
                $('$result').html(data)

              }
            })

          }
          else{
            $('#result').html('');
          }
        
        })
     
      
      })  

      </script>


-------------------------------------------------------------------------------------------------------
    


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

        <td><a href="controllers/edit.php?id=<?=$data->id;?>">Edit</a></td>

        <td><a href="controllers/delete.php?id=<?=$data->id;?>">Delete</a></td>
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