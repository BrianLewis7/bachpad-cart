<?php
include("db_connect.php");
include("header.php");

	if(!isset($_SESSION['logged_in']) || ($_SESSION['logged_in_user_access'] == 'customer')) {

		print "This is for admins only, Login to view content!.";
		
	}else if($_SESSION['logged_in_user_access'] == 'admin') {
	
	?>
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="home.php">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Admin View</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
          <h1 class="heading1"><span class="maintext"> <i class="icon-signin"></i> Insert into:</span></h1>
          <form class="form-horizontal form-custom">
            <h3 class="heading3">Insert Products</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Product name</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Product Description</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> SKU</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Quantity in Stock</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"> Price</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                                <div class="control-group">
                  <label class="control-label"> Cost</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label"> Image URL</label>
                <div class="controls">
                    <input type="text"  class="">
                </div>
                </div>
                <div class="control-group">
                	<label class="control-label"> on Sale? Yes or No</label>
                <div class="controls">
                    <input type="text"  class="">
                </div>
                </div>                
                <div class="control-group">
                  <label class="control-label"> Featured? Yes or No</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"> New? Yes or No</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="pull-left">
              <input type="Submit" class="btn btn-orange" value="Insert Into Products">
            </div>
              </fieldset>
            </div>
            <h3 class="heading3">Insert Users</h3>
            <div class="registerbox">
              <fieldset>
<div class="control-group">
                  <label class="control-label"><span class="red">*</span> First Name:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Last Name:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Email:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Telephone:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"> Mobile:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"> Company:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Address 1:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"> Address 2:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    <span class="red">*</span>City:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    <span class="red">*</span>State</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
				<div class="control-group">
                  <label class="control-label">
                    <span class="red">*</span>Zip Code:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Password:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Password Confirm:</label>
                  <div class="controls">
                    <input type="text"  class="">
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="pull-left">
              <label class="checkbox inline">
                <input type="checkbox" value="option2" >
              </label>
              administrator
              &nbsp;
              <input type="Submit" class="btn btn-orange" value="Insert Into Users">
            </div>
          </form>
          <div class="clearfix"></div>
          <br>
        </div>        
        <!-- Sidebar Start-->
        <aside class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"> <i class="icon-user"></i> Options</span></h1>
            <ul class="nav nav-list categories">
              <li>
                <a href="client.php"> Edit Products</a>
              </li>
              <li>
                <a href="register.php">Edit Users</a>
              </li>
              <li>
                <a href="#">Logout</a>
              </li>
              <li> <a>Browse Pages</a>
                <ul>
                  <li> <a href="about.php">About </a> </li>
                  <li> <a href="admin.php">Admin </a> </li>
                  <li> <a href="catalog.php">Catalog</a> </li>
                  <li> <a href="checkout1.php">Checkout1</a> </li>
                  <li> <a href="checkout2.php">Checkout2 </a> </li>
                  <li> <a href="checkout3.php">Checkout3 </a> </li>
                  <li> <a href="client.php">Client</a> </li>
                  <li> <a href="contact.php">Contact</a> </li>
                  <li> <a href="home.php">Home </a> </li>
                  <li> <a href="product.php">product view</a> </li>
                  <li> <a href="register.php">Register</a> </li>
                  <li> <a href="register.php">Search</a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
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
</div>
<!-- javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
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
<script  src="js/zoomsl-3.0.min.js"></script> <script  type="text/javascript" src="js/jquery.validate.js"></script> 
<script type="text/javascript"  src="js/jquery.carouFredSel-6.1.0-packed.js"></script> 
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
<?php } ?>