<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Simplepxcreate – Responsive Multipurpose - Ecommerce Bootstrap Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet">

<link href="css/prettyPhoto.css" rel="stylesheet" media="screen">
<link href="css/portfolio.css" rel="stylesheet">
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" href="layerslider/css/layersliderstyle.css" type="text/css">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
</head>
<body>
<!-- Header Start -->
<header>
<!-- connecting and selecting all from the database -->
<?php
$con = mysql_connect("sulley.cah.ucf.edu","USERNAME","PASSWORD");
if (!$con) {
die("Can not Connect: " . mysql_error());
}

mysql_select_db("ju655443",$con);
$sql = 'SELECT * FROM products WHERE featured = "yes"';
$new = 'SELECT * FROM products WHERE new = "yes"';
$all = 'SELECT * FROM products';
$myData = mysql_query($sql,$con);
$myNew = mysql_query($new,$con);
$myAll = mysql_query($all,$con);
?>  
    <div class="headerstrip">
        <div class="container">
            <a class="logo pull-left" href="home.php"><img title="BatchPad" alt="BatchPad" src="img/logo.png"></a>
            <!-- Top Nav Start -->
            <div class="pull-right">
                <div class="navbar" id="topnav">
                    <div class="navbar-inner">
                    	<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
          						<div class="modal-dialog">
            						<div class="modal-content">
              							<div class="modal-header">
                							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                							<h4 class="modal-title">Please Sign-in</h4>
              							</div>
              							<!-- contents of Sign-in modal -->
              							<div class="modal-body"> 
              								<div class="form-group">
                    							<label class="control-label" >Username<span class="red">*</span></label>
                    							<div class="controls">
                      								<input type="text" class=""  value="">
                    							</div>
                  							</div>
                  							<div class="form-group">
                    							<label class="control-label" >Password<span class="red">*</span></label>
                    							<div class="controls">
                      								<input type="text" class=""  value="">
                    							</div>
                  							</div>
              							</div>
              							<div class="modal-footer">
                							<button type="button" class="btn btn-orange" data-dismiss="modal">Cancel</button>
                							<button type="button" class="btn btn-primary">Sign-in</button>
              							</div>
            						</div>
            						<!-- /.modal-content --> 
          						</div>
          						<!-- /.modal-dialog --> 
        					</div>
        					<!-- /.modal -->
                            <ul class="nav" >
                        		<li class="text-nopad text-center"><a href="register.php">Sign-up</a></li>
                            	<li class="text-nopad"><p>or</p></li>
                        		<li class="text-nopad"><a href="#myModal" data-toggle="modal"> &nbsp; login</a></li>
                            	<li class="dropdown hover carticon "> <a href="cart.php" class="dropdown-toggle" > <i class="icon-shopping-cart font18"></i> Shopping Cart <span class="label label-orange font14">2 item(s)</span> - $1,790.00 <b class="caret"></b></a>
                        	<ul class="dropdown-menu topcartopen ">
                            <li>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="image"><a href="product.php"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                                            <td class="name"><a href="product.php">product goes here</a></td>
                                            <td class="quantity">x&nbsp;1</td>
                                            <td class="total">$589.50</td>
                                            <td class="remove"><i class="icon-remove"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="image"><a href="product.php"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                                            <td class="name"><a href="product.php">product goes here</a></td>
                                            <td class="quantity">x&nbsp;1</td>
                                            <td class="total">$589.50</td>
                                            <td class="remove"><i class="icon-remove "></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="textright"><b>Sub-Total:</b></td>
                                            <td class="textright">$1.7900.00</td>
                                        </tr>
                                        <tr>
                                            <td class="textright"><b>Tax (6.00%):</b></td>
                                            <td class="textright">$123.20</td>
                                        </tr>
                                        <tr>
                                            <td class="textright"><b>Total:</b></td>
                                            <td class="textright">$1,813.20</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="well pull-right buttonwrap"> <a class="btn btn-orange" href="cart.php">View Cart</a></div>
                            </li>
                        </ul>
                    </li>
                </ul>
                    </div>
                </div>
            </div>
            <!-- Top Nav End -->
        </div>
    </div>
    <div id="categorymenu">
        <nav class="subnav">
            <ul class="nav-pills categorymenu container">
                <li><a href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
                <li><a href="catalog.php">Shop</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">Contact Us</a> </li>
                <li class="pull-right">
                	<form action="search.php" method="get" class="form-search top-search">
                    	<input type="text" class="input-small search-query" placeholder="Search Here…">
                    	<button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>   
</header>

<!-- Header End -->

<div id="maincontainer">
  <section id="product">
    <div class="container"> 
      <!--  breadcrumb -->
      <ul class="breadcrumb">
        <li> <a href="home.php">Home</a> <span class="divider">/</span> </li>
        <li class="active">Search Results</li>
      </ul>
      <div class="row"> 
        <!-- Sidebar Start--> 
        <!-- Sidebar-->
        <aside class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3"> 
          <!-- Category-->
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"><i class="icon-th-list"></i> Categories</span></h1>
            <ul class="nav nav-list categories">
              <li> <a href="category.php">Furniture</a>
                <ul>
                  <li> <a href="category.php">Kitchen </a> </li>
                  <li> <a href="category.php">Outdoor </a> </li>
                  <li> <a href="category.php">Living Room</a> </li>
                  <li> <a href="category.php">Bed &amp; Bath</a> </li>
                </ul>
              </li>
              <li> <a href="category.php">Kitchen</a> </li>
              <li> <a href="category.php">Electronics </a> </li>
              <li> <a href="category.php">Bathroom </a> </li>
              <li> <a href="category.php">Outdoor</a> </li>
              <li> <a href="category.php">Living Room</a> </li>
              <li> <a href="category.php">Miscellanious</a> </li>
            </ul>
          </div>
          <!-- Latest Product -->
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"><i class="icon-trophy"></i> related Products</span></h1>
            <ul class="bestseller">
              <li> <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"> <a class="productname" href="product.php"> Product Name</a> <span class="price">$250</span>
                <div class="ratingstar"> <i class="icon-star"> </i><i class="icon-star"> </i><i class="icon-star"> </i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></div>
              </li>
              <li> <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"> <a class="productname" href="product.php"> Product Name</a> <span class="price">$250</span> <i class="icon-star"> </i><i class="icon-star"> </i><i class="icon-star"> </i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
            </ul>
          </div>
          <!--  Best Seller -->
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"><i class="icon-bookmark"></i> Featured</span></h1>
            <ul class="bestseller">
              <li> <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"> <a class="productname" href="product.php"> Product Name</a> <span class="procategory">Women Accessories</span> <span class="price">$250</span> </li>
              <li> <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"> <a class="productname" href="product.php"> Product Name</a> <span class="procategory">Electronics</span> <span class="price">$250</span> </li>
            </ul>
          </div>
          
          <!--  Newsletters -->
          
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"><i class="icon-pencil"></i> Newsletters</span></h1>
            <section id="newslettersignup">
              <div class="pull-left mt20">
                <form class="form-horizontal">
                  <div class="input-prepend">
                    <input type="text" placeholder="Subscribe to Newsletter" id="inputIcon" class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <input value="Subscribe" class="btn btn-orange" type="submit">
                    Sign in </div>
                </form>
              </div>
            </section>
          </div>
        </aside>
        
        <!-- Sidebar End--> 
        <!-- Category-->
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12"> 
          <!-- Category Products-->
          <section id="category">
                <h1 class="heading1"><span class="maintext"> <i class="icon-search"></i> Search Results</span></h1>
            <div class="row">
              <div class=""> 
                <!-- Sorting-->
                <div class="sorting well">
                  <form class=" form-inline pull-left">
                    Sort By :
                    <select class="span2">
                      <option>Relevance</option>
                      <option>High Price</option>
                      <option>Low Price</option>
                      <option>Rating</option>
                    </select>
                    &nbsp;&nbsp;
                    Show:
                    <select class="span1">
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                      <option>30</option>
                    </select>
                  </form>
                </div>              
                <!-- Category-->
                <section id="categorygrid">
                  <ul class="thumbnails list row" style="display:block" >
                  <?php
                        while($row = mysql_fetch_array($myAll)){
				  ?>
                    <li>
                      <div class="thumbnail">
                        <div class="row">
						<?php echo "<div class='col-lg-4 col-md-4 col-xs-12 col-sm-6 span3'><a href='product.php'><img alt='' src=" . $row['image_url'] . "></a> </div>";
                              echo "<div class='col-lg-6 col-md-6 col-xs-12 col-sm-12'><a class='prdocutname' href='product.php'>" . $row['product_name'] . "</a>";
                              echo "<div class='productdiscrption'>" . $row['description'] . "<br></div>";
                              echo "<div class='price'>";
                              echo "<div class='pricenew'>" . $row['price'] . "</div>";
                              echo "<div class='ratingstar'>";
                              echo "<div class='rw-ui-container' data-urid=" . $row['product_id'] . "></div>"; ?>
                              		</div>
                                    <a  class='btn btn-orange btn-large addtocartbutton pull-left'>Add to Cart</a>
                            	</div>					
                            </div>
                            
                          </div>
                         
                        </div>
                    </li>
                   <?php } ?>
                  </ul>
                  <div class="pull-right">
                    <ul class="pagination">
                      <li><a href="#">Prev</a> </li>
                      <li class="active"> <a href="#">1</a> </li>
                      <li><a href="#">2</a> </li>
                      <li><a href="#">3</a> </li>
                      <li><a href="#">4</a> </li>
                      <li><a href="#">Next</a> </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
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