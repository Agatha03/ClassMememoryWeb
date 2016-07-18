<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zAvada Free Responsive Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/component.css">
	<link rel="stylesheet" href="css/responsive.css">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>
    
</head>
<body>
<div class="wrap-body">
<!--------------Header--------------->
<div class="top-header">
	<div class="zerogrid">
		<div class="row">
			<nav>
			  <a class="toggleMenu" href="#">Menu</a>
			  <ul class="menu">
				  <li><a href="index.html">Home</a></li>
				  <li>
					  <a href="single.html" class="parent">Categories</a>
					  <ul>
						  <li><a href="single.html">Menu 1001</a></li>
						  <li><a href="single.html">Menu 1002</a></li>
						  <li>
						  	<a href="single.html" class="parent">Menu 1003</a>
							<ul>
								<li><a href="single.html">Menu 2001</a></li>
						  		<li><a href="single.html">Menu 2002</a></li>
							</ul>
						  </li>
					  </ul>
				  </li>
				  <li><a href="single.html">About</a></li>
				  <li><a href="contact.html">Contact Us</a></li>
			  </ul>
			</nav>
		</div>
	</div>
</div>
<header>
	<div class="wrap-header">
		<div class="zerogrid">
			<div id="logo"><a href="#"><img src="./images/logo.png"/></a></div>
			<div class="row">
				<div class="header-social">
					<a href="#"><img src="images/topfb.png" title="facebook"/></a>
					<a href="#"><img src="images/toptwitter.png" title="twitter"/></a>
					<a href="#"><img src="images/topgoogle.png" title="google"/></a>
					<a href="#"><img src="images/toppin.png" title="pinterest"/></a>
					<a href="#"><img src="images/toptumblr.png" title="tumblr"/></a>
					<a href="#"><img src="images/toprss.png" title="rss"/></a>
				</div>
			</div>
			<div class="header-search">
				<center><form method="get" action="/search" id="search">
				  <input name="q" type="text" size="40" placeholder="Type key to search" />
				</form></center>
			</div>
		</div>
	</div>
</header>


<!--------------Content--------------->
<section class="container ">
	<div class="zerogrid">
		<div class="col-2-3">
			<div id="main-content" class="wrap-col">
				<div class="wrap-content">
					<article class="single">
						<div class="wrap-art">
							<div class="art-header">
								<h1 class="title"><a href="#">Contact Us</a></h1>
							</div>
							<div class="art-content">
							
								<!--Warning-->
								<center><?php echo $text;?></center>
								<!---->	
									
								<div id="contact_form">
									<h3>Hello !! You can send message to us.</h3>
									<p>[Ready to use] Hi Everyone !! Visitor can use this contact form to send message to you. Open file contact.php and modify your email.</p>
									<form name="form1" id="ff" method="post" action="contact.php">
										 <label>
										 Name*:
										 <input type="text" placeholder="Please enter your name" name="name" id="name" required>
										 </label>
									 
										 <label>
										 Email*:
										 <input type="email" placeholder="youremail@gmail.com" name="email" id="email" required>
										 </label>
											
										 <label>
										 Message*:
										 <textarea name="message" id="message">Please enter your message</textarea>
										 </label>
									 
										 <input class="sendButton" type="submit" name="Submit" value="Send">
										 
									</form>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div class="col-1-3">
			<div id="sidebar" class="wrap-col">
				<div class="wrap-slidebar">
					<div class="widget">
						<div class="wid-about"><a href="single.html">About us</a></div>
					</div>
					<div class="widget">
						<div class="wid-header">
							<h4>Tags</h4>
							<div class="clear"></div>
						</div>
						<div class="wid-content">
							<a href="#">animals ,</a>
							<a href="#">cooking ,</a>
							<a href="#">countries ,</a>
							<a href="#">home ,</a>
							<a href="#">likes ,</a>
							<a href="#">photo ,</a>
							<a href="#">travel ,</a>
							<a href="#">video </a>
						</div>
					</div>
					<div class="widget wid-posts">
						<div class="wid-header">
							<h4>Latest Posts</h4>
							<div class="clear"></div>
						</div>
						<div class="wid-content">
							<div class="row post">
								<a href="#"><img src="images/thumb07.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">A Blue Morning</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
							<div class="row post">
								<a href="#"><img src="images/thumb06.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">A Blue Morning</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
							<div class="row post">
								<a href="#"><img src="images/thumb05.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">A Blue Morning</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
							<div class="row post">
								<a href="#"><img src="images/thumb04.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">A Blue Morning</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
							<div class="row post">
								<a href="#"><img src="images/thumb03.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">A Blue Morning</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
						</div>
					</div>
					<div class="widget wid-archives">
						<div class="wid-header">
							<h4>Archives</h4>
							<div class="clear"></div>
						</div>
						<div class="wid-content">
							<select>
							    <option value="audi" selected>Select Month</option>
								<option value="volvo">March 2015</option>
								<option value="saab">Febuary 2015</option>
								<option value="vw">VW</option>
							</select>
						</div>
					</div>
					<div class="widget wid-gallery">
						<div class="wid-header">
							<h4>Gallery</h4>
							<div class="clear"></div>
						</div>
						<div class="wid-content">
							<div class="col-1-3">
								<a href="#"><img src="images/thumb01.jpg"></a>
								<a href="#"><img src="images/thumb02.jpg"></a>
								<a href="#"><img src="images/thumb03.jpg"></a>
								<a href="#"><img src="images/thumb04.jpg"></a>
						    </div>
						    <div class="col-1-3">
								<a href="#"><img src="images/thumb05.jpg"></a>
								<a href="#"><img src="images/thumb06.jpg"></a>
								<a href="#"><img src="images/thumb01.jpg"></a>
								<a href="#"><img src="images/thumb02.jpg"></a>
						    </div>
						    <div class="col-1-3">
								<a href="#"><img src="images/thumb03.jpg"></a>
								<a href="#"><img src="images/thumb04.jpg"></a>
								<a href="#"><img src="images/thumb05.jpg"></a>
								<a href="#"><img src="images/thumb06.jpg"></a>
						    </div>
						</div>
					</div>
					<div class="widget wid-posts">
						<div class="wid-header">
							<h4>Popular Post</h4>
						<div class="clear"></div>
						</div>
						<div class="wid-content">
							<div class="row post">
								<a href="#"><img src="images/thumb02.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">A Blue Morning</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
							<div class="row post">
								<a href="#"><img src="images/thumb03.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">Visiting Austria</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
							<div class="row post">
								<a href="#"><img src="images/thumb01.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">Miscellaneous</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="zerogrid">
	   <div class="col-1-3">
			<div class="copyright">
				<p>© 2015 zAvada. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			</div>
	   </div>
	   <div class="col-1-3">
			<div class="back-to-top">
				<a href="#">Back to top</a>
			</div>
	   </div>
	   <div class="col-1-3">
			<div class="row">
				<div class="footer-social">
					<a href="#"><img src="images/facebook.png" title="facebook"/></a>
					<a href="#"><img src="images/twitter.png" title="twitter"/></a>
					<a href="#"><img src="images/google.png" title="google"/></a>
					<a href="#"><img src="images/pinterest.png" title="pinterest"/></a>
					<a href="#"><img src="images/instagram.png" title="instagram"/></a>
				</div>
			</div>
	   </div>
	</div>
</footer>

</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/navigation.js"></script>
</body></html>