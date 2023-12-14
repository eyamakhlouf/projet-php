<?php
session_start();
require_once('../controllers/ArticleController.php');
require_once('../models/Article.php');

session_start();
?>


<header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="about.html">about</a></li>
                                
                                   
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="panier.php">Cart</a></li>
                                            
                                            <li><a href="confirmation.html">Confirmation</a></li>
                                            <li><a href="deconnexion.php">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="../admin-side/login.html">Admin</a></li>
                                    <li><?php echo $_SESSION['email']?></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <li> <a href="login.html"><span class="flaticon-user"></span></a></li>
                                <li><a href="panier.php"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>



<?php
include('../user-side/index.html');
$article=new Article($libelle,$matiere,$prix,$img);
$articleCtr=new ArticleController();
$res=$articleCtr->liste();
echo "
<div class='popular-items section-padding30'>
<div class='container'><div class='row'>";
if (is_array($res) || is_object($res)){
  foreach ($res as $l){
?>
 
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/<?=$l['img']?>">
                            <div class="img-cap">
                            <a href="ajouter_panier.php?id=<?=$l['idArticle']?>"><span>Add to cart</span></a>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html"></a><?=$l['libelle']?></h3>
                            <span><?=$l['prix']?>dt</span>
                        </div>
                    </div>
                </div>
<?php }}
echo "</div></div></div>";
?>
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>


