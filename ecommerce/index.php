    <!--Details Model php files-->
    <?php 
        require_once 'core/init.php';
        
        include_once('connection/conn.php') ;

        //connection
        $sql = "SELECT * FROM products WHERE feature=1";
        $featured = $db->query($sql);
    ?>

<!DOCTYPE>
<html> 
    <head>
        <title>RedKey Online Shop</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
    </head>
    <body>
    <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
        <div class="container">
            <a href="index.php" class="navbar-brand">RedKey Online Shop </a>
            <ul class="nav navbar-nav">
            <!--Drop down menu-->
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Menu <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li> <a href="#">Shirts</a> </li>
                    <li> <a href="#">Pants</a> </li>
                    <li> <a href="#">Shoes</a> </li>
                    <li> <a href="#">Accessories</a> </li>
                </ul>
             </li>
             </ul>
         </div>
        </nav>

        <!--Image insert-->
        <div id="background-image">
            <div id="image-1">  </div>
            <div id="image-2">  </div>
        </div>
        <!--center products-->
        <div class="col-md-2"></div>

        <!--main content for featured products-->
        <!--Product 1-->
        <div class="col-md-8">
            <div class="row">
                <h2 class="text-center">Featured Products</h2>
                <?php while($product = mysqli_fetch_assoc($featured)) :?>
                <div class="col-md-3">
                    <h4> <?php $product['title']; ?> </h4>
                    <img src="<?php $product['image']; ?>" alt="<?php $product['title']; ?>" id="images"/>
                    <p class="list-price text-danger" >List Price: <s>$<?php $product['list_price']; ?></s></p>
                    <p class="price">Our Price: $<?php $product['price']; ?></p>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1" id="details-1">Details</button>
                </div>
                <?php endwhile; ?>
        </div>
        <footer type="text-center" id="footer">&copy; Copyright 2009 RedKey Online Shop</footer>
    </div>
    <?php
        include_once('details-modal-LevisJeans.php') ;
        include_once('details-modal-football.php');
        include_once('details-modal-watch.php') ;
        include_once('details-modal-headband.php');
        include_once('details-modal-hoodie.php');
        include_once('details-modal-purse.php') ;
        include_once('details-modal-joggers.php');
        include_once('details-modal-pooshirt.php');


    ?>
        <!--<p>
        Fact: Facebook and Twitter make money off your data. So you can be sure that they keep everything that you delete.
        In short, if you remove a photo, undo a retweet or a like, other people won’t see it but Facebook and Twitter probably keep it in their database.
        That’s what we call soft deleting. In opposition to hard deleting.

        </p>-->
    </body>
</html>