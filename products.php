<?php session_start();?>

<?php if (!(isset($_SESSION['user_name']))){
  header('location: /404');
  echo '<p style="text-align:center;">You are not permitted to see the resource! You are a hacker and we are gonna hack you!</p>';
  //header('location: /404');

};?>
<?php include 'layouts/header.php'; ?>
<a href="test.php" class="btn btn-danger">Test Page</a>

<?php if (isset($_SESSION['user_name'])){

  echo '<a class="btn btn-dark" href="controllers/logout.php">Logout</a>';
  echo '<p>User     <a class="btn btn-secondary">'.$_SESSION['user_name'].'</a></p>';

};
?>

<?php   
if (isset($_SESSION['login_success']))
{
  echo $_SESSION['login_success'];

}
?>

<?php require('db/config.php');?>

<?php


$sqlProducts = "select * from products";

$products = $conn->query($sqlProducts);


?>


<div id="content">

<p>Your IP is <?=$_SERVER['REMOTE_ADDR'];?></p>
<p>Server IP is <?=$_SERVER['SERVER_ADDR'];?></p>


<div class="row">
<?php foreach($products as $product)
{

?>

<div class="col-md-4" style="margin:20px;border:2px solid blue;background:blue;" >


            <div class="card" style="width: 18rem; padding:5px;margin:5px;background:skyblue;">
            <img class="card-img-top" style="width:300px;height:250px;" src="uploads/products/<?= $product['image']; ?>" alt="Card image cap">
            <div class="card-body">

                <h4 class="card-title"><?php echo '#00'.$product['id'];?></h4>

                <p><?=$product['title'];?></p>

                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>

                
                
                <p>Price Per Unit <?=$product['price_per_unit'];?>/ <?=$product['sku'];?></p>
                <p>Stock Avalable <?=$product['stock'];?></p>

            </div>
            </div>



</div>










<?php }; ?>



</div>



</div>


<?php include_once 'layouts/footer.php'; ?>