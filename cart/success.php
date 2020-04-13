<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:products.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>

<?php 
#if you wanna clear the items from user_items and not keep a record
/*
    require 'connection.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $delete_query="delete from users_items";
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    header('location: cart.php');
    */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
               <div class="container">
                <center>
                <p>This website is developed by De Hundred</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
