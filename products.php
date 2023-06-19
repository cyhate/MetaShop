<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> MetaShop &copy;</title>
        <!-- Favicon-->
        <link rel="icon" href="http://localhost/MetaShop/Images/tablg.png" type="image/icon type">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>		
    <?php
    include('nav.php');
    include('search.php');
    ?>

<?php

include('db.php');
$status="";
if (isset($_POST['id']) && $_POST['id']!=""){
$id = $_POST['id'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `id`='$id'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$id = $row['id'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$id=>array(
	'name'=>$name,
	'id'=>$id,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($id,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>	

<!--a href="cart.php"><img src="cart-icon.png"> Cart<span>1</span></a-->


				
        <!-- Header-->
        <header>
		<link type="image" href="./products2.jpg" />
		<img src = "<?php echo getBaseUrl();?>/Images/products2.jpg" width="100%" height="550" >
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
				
                </div>
            </div>
        </header>
		
		<?php
$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
    echo "<center><div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='id' value=".$row['id']." />", 
	'<img src="data:image/png;base64,'.base64_encode($row['image']).'"/>', 
	"<div class='name'>".$row['name']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div></center>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


<?php        
include('footer.php');
?>