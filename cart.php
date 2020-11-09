<?php require 'inc/head.php';
require 'inc/data/products.php';
if (!isset($_SESSION['loginname'])) {
    header('location:login.php');
}
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php
        if(isset($_SESSION['cart']))
        {
            foreach($_SESSION['cart'] as $id){
                echo $catalog[$id]['name'] .'<br>';
            }
        }else
        {
            echo "Your cart is empty !";
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>