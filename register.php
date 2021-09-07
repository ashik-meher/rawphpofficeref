<?php session_start();?>
<?php include 'layouts/header.php'; ?>



<form action="controllers/register_action.php" method="POST" id="dyna-form" enctype="multipart/form-data" >

               

                      <div class="form-group">

                            <label for="name">Name</label>

                            <input  type="text" name="name" class="form-control" placeholder="Enter name" id="name">


                        </div>

                        <div class="form-group">

                            <label for="email">Email Address</label>

                            <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">

                        </div>


                        <div class="form-group">

                                <label for="password">Password</label>

                                <input type="password" name="password" class="form-control" placeholder="Type Password" id="password">

                        </div>

                        <div class="form-group">

                                <label for="password_confirm">Password</label>

                                <input type="password" name="password_confirm" class="form-control" placeholder="Type Password" id="password_confirm">

                       </div>



                        
                        <div class="form-group">

                            <label for="email">Date Of Birth</label>

                            <input type="date" name="dob" class="form-control" placeholder="Enter email" id="dob">

                        </div>

                        
                        
                        <div class="form-group">

                            <label for="document">Profile Picture</label>

                            <input type="file" name="document" class="form-control"  id="document">

                        </div>
                
                <br>

                <input type="submit" class="btn btn-primary" name="register"/>

                
  
    </form>

    <a href="index.php" class="btn btn-primary">Login</a>



<?php include_once('layouts/footer.php');?>