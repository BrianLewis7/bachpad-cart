<!DOCTYPE html>

<?php
 include('header.php');
 include_once('db_connect.php');
 include_once('cart_update.php');
 $cart_itm = $_SESSION["cart_products"];
?>

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

<!-- Header End -->
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="home.php">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active"> Cart</li>
      </ul>       
      <h1 class="heading1"><span class="maintext"> <i class="icon-shopping-cart"></i> Shopping Cart</span></h1>
      <!-- Cart-->
      <?php
    if(isset($_SESSION["cart_products"])) //check session var
    {
        $total = 0; //set initial total value
        $b = 0; //var for zebra stripe table 
        foreach ($_SESSION["cart_products"] as $cart_itm)
        {
            //set variables to use in content below
            $product_name = $cart_itm["product_name"];
            $product_qty = $cart_itm["product_qty"];
            $price = $cart_itm["price"];
            // $product_code = $cart_itm["product_id"];
            $subtotal = ($price * $product_qty); //calculate Price x Qty
            // $image = $img ["image_url"];
            $tax = ($subtotal *'1.065');
            
           
        }
        //$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
        // $grand_total = $total + $shipping_cost; //grand total including shipping cost
        // foreach($taxes as $key => $value){ //list and calculate all taxes in array
        //         $tax_amount     = round($total * ($value / 100));
        //         $tax_item[$key] = $tax_amount;
        //         $grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
        // }
        
        // $list_tax = '';
        // foreach($tax_item as $key => $value){ //List all taxes
        //     $list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
        // }
        
    }
    
            echo '<td class ="name">'.$product_name.'</td>';
            echo '<td class="price">'.$currency.$price.'</td>';
            echo '<td class="total">'.$currency.$subtotal.'</td>';
            echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
            echo '</tr>';
            $total = ($total + $subtotal); //add subtotal to total var

?>
      <div class="cart-info">
        <table class="table table-striped table-bordered">
        <form method="post" action="cart_update.php">
          <tr>
            <th class="image">Image</th>
            <th class="name">Product Name</th>
            <th class="model">Model</th>
            <th class="quantity">Qty</th>
              <th class="total">Action</th>
            <th class="price">Unit Price</th>
            <th class="total">Total</th>
           
          </tr>
          
          <tr>
          <div class="cart-view-table-back">
<form method="post" action="cart_update.php">
  <tbody>
    <?php
    include_once("config.php"); //include config file
    if(isset($_SESSION["cart_products"])) //check session var
    {
        $total = 0; //set initial total value
        $b = 0; //var for zebra stripe table 
        foreach ($_SESSION["cart_products"] as $cart_itm)
        {
            //set variables to use in content below
            $product_name = $cart_itm["product_name"];
            $product_qty = $cart_itm["product_qty"];
            $price = $cart_itm["price"];
            $product_code = $cart_itm["product_code"];
            $subtotal = ($price * $product_qty); //calculate Price x Qty
            
            echo '<td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a>'.$img.'</td>';
            echo '<td class ="name">'.$product_name.'</td>';
            echo '<td class="description">'.$product_desc.'</td>';
            echo '<td class="quantity"><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" class="col-lg-3 col-md-3 col-xs-6 col-sm-3"></td>';
            echo '<td class="total"> <a href="#" class="mr10"> <i class="tooltip-test font24 icon-refresh " data-original-title="Update"> </i> </a> 
               <a href="#"><i class="tooltip-test font24 icon-remove-circle" data-original-title="Remove"> </i></a></td>';
            echo '<td class="price">'.$currency.$price.'</td>';
            echo '<td class="total">'.$currency.$subtotal.'</td>';
            echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
            echo '</tr>';
            $total = ($total + $subtotal); //add subtotal to total var
        }
   $grand_total = $total + $shipping_cost; //grand total including shipping cost
        foreach($taxes as $key => $value){ //list and calculate all taxes in array
                $tax_amount     = round($total * ($value / 100));
                $tax_item[$key] = $tax_amount;
                $grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
        }
        
        $list_tax = '';
        foreach($tax_item as $key => $value){ //List all taxes
            $list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
        }
        $shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
    }
    ?>
  </tbody>
</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>
</div>
          
          </tr>
        </table>
      </div>
      <div class="container">
      <div class="pull-right">
          <div class="">
            <table class="table table-striped table-bordered ">
              <tr>
                <td><span class="extra bold">Sub-Total :</span></td>
                <?php echo'<td><span class="bold">'.$subtotal.'</span></td>'?>
              </tr>
              <tr>
                <td><span class="extra bold">Eco Tax (-5.00) :</span></td>
                <?php echo '<td><span class="bold">'.$tax.'</span></td>'?>
              </tr>
              <tr>
                <td><span class="extra bold totalamout">Total :</span></td>
                <?php echo  '<td><span class="bold totalamout">'.$grand_total.'</span></td>'?>
              </tr>
            </table>
            <div class="list-inline">
            <a href="checkout.php"><input type="submit" value="CheckOut" class="btn btn-orange pull-right mb10"></a>
            <a href="catalog.php"><input type="submit" value="Continue Shopping" class="btn btn-orange pull-right mr10"></a>
            </div>
          </div>
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
</body>
</html>