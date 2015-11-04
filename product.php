<?php
  include('header.php');
  include('db_connect.php');
  $id= $_GET['id'];
  $select_id = "SELECT * FROM products WHERE product_id = $id";
  $myProduct = $mysqli->query($select_id);
?>

<!-- Header End -->
<div id="categorymenu">
        <nav class="subnav">
            <ul class="nav-pills categorymenu container">
                <li><a class="home" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
                <li><a class="active" href="catalog.php">Shop</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">Contact Us</a> </li>
                <?php
                if(isset($_SESSION['logged_in_user_access'])&&($_SESSION['logged_in_user_access'] == "admin")) {
                print "<li><a href='admin.php'>Admin</a> </li>";
                }
                ?>
                <li class="pull-right">
                    <form action="search.php" method="get" class="form-search top-search">
                        <input type="text" class="input-small search-query" placeholder="Search Here…">
                        <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
    </div> 
<!-- Header End -->

<div id="maincontainer">
    <section id="product">
        <div class="container"> 
        <ul class="breadcrumb">
        <li>
          <a href="home.php">Home/ </a>
        </li>
        <li>
          <a href="catalog.php">Shop&nbsp;/ </a>
        </li>
        <li class="active">Product view</li>
      </ul>
            <!-- Product Details-->
            <div class="row"> 
                <!-- Left Image-->
                <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 span5">
                      <ul class="thumbnails mainimage clearfix">
          <?php
		  $row = $myProduct->fetch_object(); 
		  echo '<li class="col-lg-12 col-md-12 col-xs-12 col-sm-12 span5"> <img class="my-foto-container" src="'.$row->image_url.'"  data-large="'.$row->image_url.'" data-title="'.$row->product_name.'" data-help="'.$row->product_name.'" title="'.$row->product_name.'" /> </li>'; ?>
        </ul>
        <div class="m5">Mouse move on Image to zoom</div>
                </div>
                <!-- Right Details-->
                <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12 span7">
                    <div class="row">
                        <div class="span7">
                            <?php echo '<h1 class="productname"><span class="bgnone">'.$row->product_name.'</span></h1>'; ?>

                            <!-- Product Description tab & comments-->
                            <div class="productdesc">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#description">Description</a> </li>
                                    <li><a href="#specification">Specifications</a> </li>
                                    <li><a href="#review">Reviews</a> </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="description">
                                        <h2>Product Description</h2>
                                        <?php echo $row->description; ?> 
                                        <br>
                                    </div>
                                    <div class="tab-pane " id="specification">
                                        <ul class="productinfo">
                                            <li> <span class="productinfoleft"> Product Code:</span> Product 16 </li>
                                            <li> <span class="productinfoleft"> Reward Points:</span> 60 </li>
                                            <li> <span class="productinfoleft"> Availability: </span> In Stock </li>
                                            <li> <span class="productinfoleft"> Old Price: </span> $500.00 </li>
                                        </ul>
                                    </div>
                                    <!-- need to put an isset if user is logged in here, if not display link to log in -->
                                    <div class="tab-pane" id="review">
                                        <h3>Write a Review</h3>
                                        <form class="form-vertical">
                                            <fieldset>
                                                <div class="control-group">
                                                    <label class="control-label">Name</label>
                                                    <div class="controls">
                                                        <input type="text" class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Review</label>
                                                    <div class="controls">
                                                        <textarea rows="3"  class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3"></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <input type="submit" class="btn btn-orange" value="continue">
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="productprice">
                                <?php echo '<div class="productpageprice"> <span class="spiral"></span>'.$row->cost.'</div>';
                                	  echo '<div class="productpageoldprice">Old price : '.$row->price.'</div>'; ?>
                                </div>
                            <div class="productbtn">
                            
                                <button class="btn btn-orange tooltip-test" data-original-title="Cart"> <i class="icon-shopping-cart icon-white"></i>  Add to Cart</button>
                            </div>
                                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Related Products-->
    <section id="related" class="row mt40">
        <div class="container">
            <h1 class="heading1"><span class="maintext">Related Products</span></h1>
            <ul class="thumbnails">
                                <li class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3"> <a class="prdocutname" href="product.php">My First Product</a>
                                    <div class="thumbnail"> <a href="#"><img alt="" src="img/product2a.jpg"></a>
                                        <div class="shortlinks">
                                            <button  data-original-title="Cart" class="btn btn-orange tooltip-test"> <i class="icon-shopping-cart icon-white"></i> </button>
                                            <button  data-original-title="Wishlist" class="btn btn-orange btn-small tooltip-test"> <i class="icon-heart icon-white"></i> </button>
                                            <button  data-original-title="Compare" class="btn btn-orange btn-small tooltip-test"> <i class="icon-refresh icon-white"></i> </button>
                                        </div>
                                        <div class="price">
                                            <div class="pricenew">$4459.00</div>
                                            <div class="priceold">$5000.00</div>
                                            <div class="ratingstar"> <i class="icon-star orange"> </i><i class="icon-star orange"> </i><i class="icon-star orange"> </i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></div>
                                        </div>
                                        <a  class="btn btn-orange btn-small  addtocartbutton">Add to Cart</a> </div>
                                </li>
                            </ul>
        </div>
    </section>
    <!-- Popular Brands-->
</div>

<footer id="footer">
    <section class="footersocial">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3 info">
                    <h2> <i class="icon-link"></i> SiteMap </h2>
                    <ul>
                        <li><a href="home.php">Home</a> </li>
                        <li><a href="client.php">My Account</a> </li>
                        <li><a href="catalog.php">Shop</a> </li>
                        <li><a href="contact.php">Contact Us</a> </li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="cart.php">My Cart</a> </li>
                        <li><a href="register.php">Sign-Up</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3 contact">
                    <h2> <i class="icon-phone-sign"></i> Contact Info </h2>
                    <ul>
                        <li class="location"> 404 Not found Rd.‎ Melbourne, Fl 32903</li>
                        <li class="phone">(800)555-7890 &nbsp; (877)555-7890</li>
                        <li class="mobile"> #Bachpad</li>
                        <li class="email"> sales@batchpad.com</li>
                    </ul>
                </div>
                <!-- Testimonial-->
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
                    <div class="sidewidt">
                        <h2 class="heading2"><span><i class="icon-edit"></i> Testimonials</span></h2>
                        <div class="flexslider" id="testimonialsidebar">
                            <ul class="slides">
                                <li>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."<br>"Lorem Ipsum is simply dummy text of the printing and industry.<br><br>
                                    <span class="pull-left orange">By : Lorem Ipsum</span> 
                                </li>
                                <li>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."<br>"Lorem Ipsum is simply dummy text of the printing and industry.<br><br>
                                    <span class="pull-left orange">By : Lorem Ipsum</span> 
                                </li>
                                <li>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."<br>"Lorem Ipsum is simply dummy text of the printing and industry.<br><br>
                                    <span class="pull-left orange">By : Lorem Ipsum</span> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3 facebook">
                    <h2> <i class="icon-facebook-sign"></i> Facebook </h2>
                    <div class="seperator"></div>
                    <div class="seperator1"></div>
                    <div id="fb-root"></div>
                    <div class="fb-like-box" data-href="https://www.facebook.com/BachelorHaus" data-width="292" data-show-faces="true" data-colorscheme="dark" data-stream="false" data-show-border="false" data-header="false"  data-height="240"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="copyrightbottom">
        <div class="container">
            <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span5 col-lg-3 col-md-3 col-xs-12 col-sm-12 paymentsicons"></div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 textcenter"> This site is not official and is an assignment for a UCF Digital Media course - Designed by Justin Duncan </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span5 col-lg-3 col-md-3 col-xs-12 col-sm-12 paymentsicons"> <img title="PayPal" alt="paypal" src="img/payment_paypal.png"> <img title="American Express" alt="american-express" src="img/payment_american.png"><img title="Maestro" alt="maestro" src="img/payment_maestro.png"> <img title="Discover" alt="discover" src="img/payment_discover.png"> </div>
            </div>
        </div>
    </section>
    <a id="gotop" href="#">Back to top</a>
</footer>
</div>
<!-- javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate.min.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script> 
<script src="js/respond.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script  src="js/jquery.prettyPhoto.js"></script> 
<script defer src="js/jquery.flexslider.js"></script> 
<script src="layerslider/js/greensock.js" type="text/javascript"></script> 
<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script> 
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.tweet.js"></script> 
<script  src="js/zoomsl-3.0.min.js"></script> <script  type="text/javascript" src="js/jquery.validate.js"></script> 
<script type="text/javascript"  src="js/jquery.carouFredSel-6.1.0-packed.js"></script> 
<script type="text/javascript"  src="js/jquery.mousewheel.min.js"></script> 
<script type="text/javascript"  src="js/jquery.touchSwipe.min.js"></script> 
<script type="text/javascript" src="js/jquery.gmap.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script defer src="js/custom.js"></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "259474",
            uid: "3b0bc03895785eed657c9e205359ca03",
            source: "website",
            options: {
                "advanced": {
                    "font": {
                        "hover": {
                            "color": "#B7D086"
                        },
                        "size": "12px",
                        "bold": true,
                        "color": "#B7D086"
                    }
                },
                "size": "tiny",
                "label": {
                    "background": "#427E53"
                },
                "style": "oxygen_green",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
<?php
mysql_close($con);
?>
</body>
</html>