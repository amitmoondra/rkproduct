
<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
        
        <div class="row">
            <div class="col-xs-2">
                <img class="img-responsive" src="images/logo/Icon-72.png"><img>
            </div>
            <div class="col-xs-2">
                <div id="gtco-logo"><a href="index.php">R K Paper Products</div>
            </div>
            <ul>
            <div class="col-xs-8 text-right menu-1">
                <ul class="navigate">
                    <?php if ($page == 'home') { ?>
                        <li class="active"><a href="index.php">Home</a></li>
                        <?php } else { ?>
                        <li><a href="index.php">Home</a>
                    <?php } ?>

                     <?php if ($page == 'about') { ?>
                        <li class="active"><a href="about.php">About</a></li>
                        <?php } else { ?>
                        <li><a href="about.php">About</a></li>
                    <?php } ?>
                    <?php if ($page == 'services') { ?>
                        <li class="active">
                            <a href="services.php">Services</a>
                            <!--<ul class="dropdown">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">eCommerce</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">API</a></li>
                            </ul>-->
                        </li>
                    <?php } else { ?>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                    <?php } ?>
                    <?php if ($page == 'products') { ?>
                        <li class="active"><a href="products.php">Products</a></li>
                        <?php } else { ?>
                        <li><a href="products.php">Products</a></li>
                    <?php } ?>
                    <?php if ($page == 'contact') { ?>
                        <li class="active"><a href="contact.php">Contact</a></li>
                        <?php } else { ?>
                        <li><a href="contact.php">Contact</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        
    </div>
</nav>