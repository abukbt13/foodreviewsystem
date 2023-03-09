<?php
include 'account/includes/connect.php';
//unset(sess)

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JKS</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bistro-icons.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/navigation.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="shortcut icon" href="images/favicon.png">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
<style>
    .fodsfromdb{
        margin-top:1rem;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;gap:0.5rem;
    }
    .item{
        width: 40rem;
    }
    .link{
        display: flex;
        justify-content: space-between;
    }
    @media screen and (max-width: 500px) and (min-width: 200px) {
        .fodsfromdb{
            margin-top:1rem;
            display: grid;
            grid-template-columns: 1fr;
            gap:0.5rem;
        }
        .item{
            width: 100%;
        }
    }
</style>
<!--Loader-->
<div class="loader"> 
   <div class="cssload-container">
     <div class="cssload-circle"></div>
     <div class="cssload-circle"></div>
   </div>
</div>

<!--Topbar-->
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">Aarons and sans Foods and Restaurant, the Best in Town</p>
        <p class="pull-right"><i class="fa fa-phone"></i>Order Online +91-892-808-5056</p>
      </div>
    </div>
  </div>
</div>

<!--Header-->
<header id="main-navigation">
  <div id="navigation" data-spy="affix" data-offset-top="20">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false"> 
            <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> 
            </button>
           <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive"></a> 
         </div>
        
            <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li>
                   <a href="index.html">Home</a>
                   
                </li>
                <li><a href="food.php">Our Food</a></li>
                
                
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                  
                <li><a href="./account/register.php">Order Now</a></li>
                
              </ul>
            </div>
         </nav>
         </div>
       </div>
     </div>
  </div>
</header>



<!-- REVOLUTION SLIDER -->			

				<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
					<div id="rev_slider_34_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
						<ul>	<!-- SLIDE  -->
							<li data-index="rs-129" data-transition="fade" data-slotamount="default" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"  data-title="Fish &nbsp; Steak" data-description="Enjoy Delicious Food!">
								<!-- MAIN IMAGE -->
								<img src="images/banner2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
								<!-- LAYER NR. 2 -->
								<h1 class="tp-caption tp-resizeme" 
                          data-x="left" data-hoffset="15"
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">Yes We Have</span> <br> The &nbsp; Best &nbsp; Fish &nbsp;<span class="color">Steak</span>
                       </h1>
								<!-- LAYER NR. 2 -->
                        <p class="tp-caption tp-resizeme"
                          data-x="left" data-hoffset="15"
                          data-y="210" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="800"
                          style="z-index: 9;">Enjoy Delicious Food!
                          
                        </p>
                        <div class="tp-caption fade tp-resizeme"
                           data-x="left" data-hoffset="15"
                           data-y="280"
                           data-width = "full"  
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                       <a href="./account/register.php" class="btn-common btn-white page-scroll">Order Now</a>
                       </div>
                        
                       
							</li>
							
							<li class="text-center" data-index="rs-130" data-transition="slideleft" data-slotamount="default" data-rotate="0"  data-title="Bakery &nbsp; Items" data-description="Enjoy Delicious Food!">
								<img src="images/banner1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <h1 class="tp-caption tp-resizeme" 
                          data-x="center" data-hoffset="15"
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">  Delicious Bakery Items</span> <br> Coconut &nbsp; with &nbsp; <span class="color">Lemon &nbsp; Grass</span>
                        </h1>
                        <p class="tp-caption tp-resizeme"
                          data-x="center" data-hoffset="15"
                          data-y="210" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="800"
                          style="z-index: 9;">Enjoy Delicious Food!
                        </p>
							
                            
                          <div class="tp-caption fade tp-resizeme"
                           data-x="center" data-hoffset="15"
                           data-y="280"
                           data-width = "full"  
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                          <a href="#specialities" class="btn-common btn-white page-scroll">Learn &nbsp; More</a> &nbsp; <a href="#order-form" class="btn-common btn-orange page-scroll">Order &nbsp; Now</a>
                       </div>  
                            
                            
                            
                            </li>
						
							<li class="text-right" data-index="rs-131" data-transition="slideleft"   data-rotate="0" data-title="Fresh &nbsp; Food" data-description="Enjoy Delicious Food!">
								<img src="images/banner4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <h1 class="tp-caption tp-resizeme" 
                          data-x="right" data-hoffset="" 
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">We Prepare</span> <br> Fresh &nbsp; Food &nbsp; <span class="color">Vegies</span>
                        </h1>
                        <p class="tp-caption tp-resizeme"
                          data-x="right" data-hoffset="" 
                          data-y="210" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="800"
                          style="z-index: 9;">Enjoy Delicious Food!
                        </p>
							
                           <div class="tp-caption fade tp-resizeme"
                           data-x="right" data-hoffset=""
                           data-y="280"
                           data-width = "full" 
                           data-transform_idle="o:1;"
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                       <a href="./account/register.php" class="btn-common btn-white page-scroll">Order Now</a>
                       </div>  
                            </li>
							<!-- SLIDE  -->
						</ul>
					</div>
				</div>
 <!-- END REVOLUTION SLIDER -->
						






<!--Services plus working hours-->
<!--################# from database foods###########-->
<section id="services" class="padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
         <h2 class="heading">Featured &nbsp; Food</h2>
         <hr class="heading_space">
         <div class="slider_wrap">
        <div id="service-slider" class="owl-carousel">
          <div class="item">
            <div class="item_inner">
            <div class="image">
              <img src="images/food-1.jpg" alt="Services Image">
              <a  href="./account/register.php"></a>
            </div>
              <h3><a href="./account/register.php">Thai Chicken Chilly</a></h3>
              <p>Enjoy Delicious Food!</p>
            </div>
          </div>
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/food-2.jpg" alt="Services Image">
              <a  href="./account/register.php"></a>
              </div>
              <h3><a href="./account/register.php">Celeriac Soup & Beer</a></h3>
              <p>Enjoy Delicious Food!</p>
            </div>
          </div>
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/food-3.jpg" alt="Services Image">
              <a  href="./account/register.php"></a>
              </div>
              <h3><a href="./account/register.php">Tex Mex Chicken</a></h3>
              <p>Enjoy Delicious Food!</p>
            </div>
          </div>
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/food-4.jpg" alt="Services Image">
              <a  href="./account/register.php"></a>
              </div>
              <h3><a href="./account/register.php">Baked Potato Jackets</a></h3>
              <p>Enjoy Delicious Food!</p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-md-4">

        <h2 class="heading">Our &nbsp; Menu</h2>
        <hr class="heading_space">
        <ul class="menu_widget">
<!--            #####################Price from db #################-->
          <li>Classic Nachos<span>INR 499.00</span></li>
          <li>Nachos Grande<span>INR 249.00</span></li>
          <li>Avocado Shell Stuffed<span>INR 150.00</span></li>
          <li>Stuffed Mushroom<span>INR 199.00</span></li>
          <li>Baked Potato Jackets<span>INR 99.00</span></li>
          <li>Mexican Taco<span>INR 899.00</span></li>
          <li>Tex-Mex Chicken<span>INR 1250.00</span></li>
          <li>Quesadillas Acapulco<span>INR 399.00</span></li>
        </ul>
         <h3>Other Special Menu</h3>
         <p>Enjoy Delicious Food!</p>
      </div>
    </div>
  </div>
</section>


<!-- image with content -->
<section class="info_section paralax">
  <div class="container">
    <div class="row">
      <div class="col-md-2"> </div>
      <div class="col-md-8">
         <div class="text-center">
         <h2 class="heading_space">HOT Deal of the Day</h2>
         <p class="heading_space detail">Enjoy Delicious Food!</p>
         <a href="./account/register.php" class="btn-common-white page-scroll">Order Now</a>
         </div>          
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>

<div class="fodsfromdb">
<?php
//include 'account/includes/connect.php';

$sql =  "SELECT *  FROM items limit 6";
$sqlrun=mysqli_query($con,$sql);
//echo mysqli_num_rows($sqlrun);
while ($row = mysqli_fetch_array($sqlrun)) {
    ?>
    <div class="link">
        <div class="foodItem">
            <a href="food.php">
                <img src="account/items/<?php echo $row['image']; ?>" width="100%" height="300">
            </a>
        </div>
    </div>
<?php
}

?>
</div>




<!-- facts counter  -->
<section id="facts">
  <div class="container">
    <div class="row number-counters"> 
      <!-- first count item -->
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="counters-item row">
        <i class="icon-smile"></i> 
        <h2><strong data-to="4680">0</strong></h2>
          <p>Happy Customers</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
        <div class="counters-item  row"> 
        <i class="icon-food"></i>
        <h2><strong data-to="865">0</strong></h2>
          <p>Dishes Served</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">
        <div class="counters-item  row"> 
        <i class="icon-glass"></i>
        <h2><strong data-to="510">0</strong></h2>
          <p>Total Beverages</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
        <div class="counters-item  row"> 
        <i class="icon-coffee"></i>
        <h2><strong data-to="1350">0</strong></h2>
          <p>Cup of coffees</p>
        </div>
      </div>
    </div>  
  </div>
</section>








<!--Featured Receipes -->
<section id="news" class="bg_grey padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">Featured &nbsp; Food &nbsp; Receipes</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="cheffs_wrap_slider">
          <div id="news-slider" class="owl-carousel">
            <div class="item">
              <div class="news_content">
               <img src="images/news-img3.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>22<small>apr</small></span>
                  <a href="#."><i class="icon-comment"></i> 5</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Quesadillas Acapulco</a></h3>
                 <p>Enjoy Delicious Food!</p>
               </div>
              </div>
            </div>
            <div class="item">
              <div class="news_content">
               <img src="images/news-img2.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>22<small>apr</small></span>
                  <a href="#."><i class="icon-comment"></i> 5</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Barbecue Beef</a></h3>
                 <p>Enjoy Delicious Food!</p>
               </div>
              </div>
            </div>
            <div class="item">
              <div class="news_content">
               <img src="images/news-img1.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>22<small>apr</small></span>
                  <a href="#."><i class="icon-comment"></i> 5</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Mexican Taco</a></h3>
                 <p>Enjoy Delicious Food!</p>
               </div>
              </div>
            </div>
            
            <div class="item">
              <div class="news_content">
               <img src="images/food-1.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>22<small>apr</small></span>
                   <a href="#."><i class="icon-comment"></i> 5</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Thai Chicken Chilly</a></h3>
                 <p>Enjoy Delicious Food!</p>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- testinomial -->
<section id="testinomial" class="padding">
  <div class="container">
  <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">Our &nbsp; happy &nbsp; Customers</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      <div id="testinomial-slider" class="owl-carousel text-center">
        <div class="item">
          <h3>Awesome Food. Food from some of the finest restaurants in India!</h3>
          <p>Chris Martin</p>
        </div>
        <div class="item">
          <h3>Good Recipes, Nice staff and customer care. A good service overall</h3>
          <p>Alex Hales</p>
        </div>
        <div class="item">
          <h3>Awesome Food. Food from some of the finest restaurants in India!</h3>
          <p>Shane Robertson</p>
        </div>
       </div>
      </div>
    </div>
  </div>
</section>


<!--Footer-->
<footer class="padding-top bg_black">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Who are we?</h4>
        <hr class="half_space">
        <p class="half_space"></p>
        <p>Launched in Mumbai, JKS has grown from a home project to one of the largest food aggregators in the world. We are present in 24 countries and 10000+ cities globally, enabling our vision of better food for more people. We not only connect people to food in every context but work closely with restaurants to enable a sustainable ecosystem.</p>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Quick Links</h4>
        <hr class="half_space">
        <ul class="widget_links">
          <li><a href="index.html">Home</a></li>
          <li><a href="food.php">Our Food</a></li>
          <li><a href="about.html">About Us</a></li>
          
          <li><a href="faq.html">Faq's</a></li>
          <li><a href="./account/register.php">Order Now</a></li>
          
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Newsletter</h4>
        <hr class="half_space">
        <p class="icon"><i class="icon-dollar"></i>Sign up with your name and email to get updates fresh updates.</p>
        <div id="result1" class="text-center"></div>        
        
       <form action="http://themesindustry.us13.list-manage.com/subscribe/post-json?u=4d80221ea53f3a4487ddebd93&id=494727d648&c=?" method="get" onSubmit="return false" class="newsletter">
          <div class="form-group">
            <input type="email" placeholder="E-mail Address" required name="EMAIL" id="EMAIL" class="form-control" />
          </div>
          <div class="form-group">
            <input type="submit" class="btn-submit button3" value="Subscribe" />
          </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Get in Touch</h4>
        <hr class="half_space">
        <p></p>
        <p class="address"><i class="icon-location"></i>JKS, Opposite S.L.Raheja Hospital, Mahim Causeway, Mahim (West), Mumbai, Maharashtra 400016.</p>
        <p class="address"><i class="fa fa-phone"></i>(+91) 892 808 5056</p>
        <p class="address"><i class="icon-dollar"></i><a href="office@jks.com">office@jks.com</a></p>
      </div> 
    </div>
    <div class="row">
     <div class="col-md-12">
        <div class="copyright clearfix">
          <p>Copyright &copy; 2020 JKS. All Right Reserved</p>
          <ul class="social_icon">
               <li><a href="#" class="facebook"><i class="icon-facebook5"></i></a></li>
               <li><a href="#" class="twitter"><i class="icon-twitter4"></i></a></li>
               <li><a href="#" class="google"><i class="icon-google"></i></a></li>
              </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script src="js/jquery-2.2.3.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/slider.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.appear.js"></script>  
<script src="js/jquery.fancybox.js"></script>
<script src="js/functions.js" type="text/javascript"></script>
 
</body>
</html>
