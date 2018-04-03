
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Gramin Chitty Management</title>
      <script src='https://www.google.com/recaptcha/api.js'></script>  
    <meta name="Keywords" content="Chit Fund Software in Bangalore, Best Chit Fund, low cost Chit Fund Software, Online Chit Fund, Web Based Chit, chit fund company registration, Chitfund India" />
    <meta name="description" content="Chit Fund Software Bangalore is a online web based  software  built especially for Chit Fund company with automatic posting of business data to accounts module. Websoftex Chit Fund Software is a .NET based centralized database online software for Chit Fund company with core Chit Fund operations such Monthly Income Schemes, Dividend declarations, Management of Cheque book, Passbook and Bond. Websoftex Chit Fund Software handles all kind of Chit Fund  operations." />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
       <!-- Favicons
    ================================================== -->
     <link rel="icon" type="image/x-icon" href="chitfund/img/favicon.png" />   

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="chitfund/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="chitfund/fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="chitfund/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="chitfund/css/owl.theme.css" rel="stylesheet" media="screen">
       
    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="chitfund/css/style.css">
    <link rel="stylesheet" type="text/css" href="chitfund/css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <!-- Lightbox
    ================================================= -->
    <link href="chitfund/css/lightbox/css/demo.css" rel="stylesheet" />
    <link href="chitfund/css/lightbox/css/jquery.lightbox.css" rel="stylesheet" />

<style>
.w3_whatsapp_btn {

	    background-image: url('icon.html');

	    border: 1px solid rgba(0, 0, 0, 0.1);

	    display: inline-block !important;

	    position: relative;

	    font-family: Arial,sans-serif;

	    letter-spacing: .4px;

	    cursor: pointer;

	    font-weight: 400;

	    text-transform: none;

	    color: #fff;

	    border-radius: 2px;

	    background-color: #5cbe4a;

	    background-repeat: no-repeat;

	    line-height: 1.2;

	    text-decoration: none;

	    text-align: left;

	}

	 

	.w3_whatsapp_btn_small {

	    font-size: 12px;

	    background-size: 16px;

	    background-position: 5px 2px;

	    padding: 3px 6px 3px 25px;

	}

	 

	.w3_whatsapp_btn_medium {

	    font-size: 16px;

	    background-size: 20px;

	    background-position: 4px 2px;

	    padding: 4px 6px 4px 30px;

	}

	 

	.w3_whatsapp_btn_large {

	    font-size: 16px;

	    background-size: 20px;

	    background-position: 5px 5px;

	    padding: 8px 6px 8px 30px;

	    color: #fff;

	}

	a.whatsapp { color: #fff;}
</style>

<script>
$(document).ready(function() {
    $(document).on("click", '.mct_whatsapp_btn', function() {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var text = $(this).attr("data-text");
            var url = $(this).attr("data-link");
            var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);
            var whatsapp_url = "whatsapp://send?text=" + message;
            window.location.href = whatsapp_url;
        } else {
            alert("Please use an Mobile Device to Share this Article");
        }
    });
});
</script>
<!-- Place this tag in your head or just before your close body tag. -->
<script src="../../apis.google.com/js/platform.js" async defer></script>

    </head>
  <!--Body-->
  <body>
  <div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../../connect.facebook.net/en_US/all.html#xfbml=1&appId=277491302351988";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <img src="chitfund/img/logo.png"  alt="logo" class="img-responsive" /> 
        <?php
           include 'gtrans.php';
            ?>
		
		
		</div>

        <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
			  
                  <li><a href="#" class="page-scroll">Home</a></li>
                  <li><a href="#tf-Demo" class="page-scroll">Login</a></li>
                  <li><a href="#tf-team" class="page-scroll">Feature</a></li>
                  <!--<li><a href="#tf-Demo" class="page-scroll">Demo</a></li>-->
                  <!--<li><a href="#tf-testimonials" class="page-scroll">Testimonials</a></li>-->
                  <li><a href="#tf-services" class="page-scroll">Support  & Clients</a></li>
                  
                  <li><a href="#tf-contact"class="page-scroll">Contact</a></li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
          <div class="overlay">
              <div class="container">
                  <div class="content home">
                     
                     
                  </div>
                  <div class="row news">
                      <div class="col-md-3 col-sm-12 col-xs-12"></div> 
                      <div class="col-md-6 col-sm-12 col-xs-12 home_news">                                               
                          
                      </div> 
                      <div class="col-md-3 col-sm-12 col-xs-12"></div> 
                  </div>
                  <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-12 home-icon">
                          
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12 home-icon">
                          
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12 home-icon">
                          
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12 home-icon">
                         
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <div class="clearfix"></div>
   

              
             
    <!--software feature Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2><strong><a href="chitfund-software-powerful-feature.html">Packed Full of Powerful Features</a></strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row powerful-features">                  
                    <div class="item">
                        <div class="thumbnail">
                            <img src="chitfund/img/team/01.jpg" alt="Admin Panel & Branch Panel" class="img-circle team-img">
                            <div class="caption">
                                  <a href="#adminpanel"><h3>Admin Panel & Branch Panel</h3></a>                           
                            </div>
                        </div>
                    </div>

                     <div class="item" >
                        <div class="thumbnail">
                            <img src="chitfund/img/team/02.jpg" alt="Member Panel" class="img-circle team-img">
                            <div class="caption">
                                <a href="#memberpanel"><h3>Member Panel</h3></a>                             
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="chitfund/img/team/03.jpg" alt="Chit collector" class="img-circle team-img">
                            <div class="caption">
                                <a href="#chitcollector"><h3>Chit collector</h3></a>                               
                            </div>
                        </div>
                    </div>

                    

                                      
                </div>              
             </div>
            

       <!-- Demo Section
    ==========================================-->
    <div id="tf-Demo" class="text-center">
          <div class="container">
              <!-- Container -->
              <div class="section-title center">
                  <h2><strong><a href="chitfund-software-demo.html">LOGIN</a></strong></h2>
                  <div class="line">
                      <hr>
                  </div>
                  <div class="clearfix"></div>
              </div>
              <div class="space"></div>
          </div>
        <div class="container">
            <div class="row demo">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="#screenshot-demo">
                    <img src="chitfund/img/team/demo3.jpg"alt="screenshot demo" class="img-circle team-img">                    
                        <h3>Admin Login</h3>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                     <a href="#screenshot-demo">
                    <img src="chitfund/img/team/demo3.jpg" alt="video demo" class="img-circle team-img">                   
                        <h3>Staff Login</h3>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="#screenshot-demo">
                    <img src="chitfund/img/team/demo3.jpg" alt="online demo" class="img-circle team-img">                    
                        <h3>Customer Login</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container screen-page" id="screenshot-demo">
            <div class="row screen-row">
                <!--<h3>screenshot demo:</h3>-->
                <div class="col-md-4 col-sm-4 col-xs-12">
               
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12"> 
                     <table width="150px" align="center">
<tr><td>
<center><h3 class="login_head"><u><br>Login to Gramin Chitty<u></h3></center>
      <form name="myform" method="post" action='logcon.php'>
        <center><h3><br><br>Username<br><input type="text" name="uname"  placeholder="email-id" required><br><br>
          Password<br><input type="password" name="pwd"  placeholder="password" required><br><br>
		  <div style="margin-left:0% width:50" class="g-recaptcha" data-sitekey="6Ldc50AUAAAAAJigIpJTBa2uhb42POdk3e-ahDU-"></div>

          <input type="submit" name= "submit" value="login"><br><br>
		  <a href="forgot.php">Forgot password?</a>
           </h3>
		   

        </form>
</td>
</tr>
</table>           
              
            </div>
        </div>
       
      </div>

       
    <!--  Our Support & Clients Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center Support_buttomspace">
                <h2><strong><a href="chitfund-software-support-training.html">Our Support </a></strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>               
            </div>            
            <h3 style="color: red">Standard Support: M-F 10:00AM – 6:00PM In the customer’s time zone.<br />
               </h3>
          
            <div id="services" class="owl-carousel owl-theme support_bg_color">               
                <div class="item">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-top-space">
                        <i class="fa fa-phone"></i>
                        <h4><strong>TELEPHONE SUPPORT</strong></h4>
                        <p>Call (+91 - 9496705582)</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-top-space">
                        <i class="fa fa-whatsapp"></i>
                        <h4><strong>WHATSAPP SUPPORT</strong></h4>
                        <p><a data-rel="external" href="tel:9916741666" target = "_blank">Whats App call (+91 - 9916741666)</a></p>
                       <!-- <p><a href="whatsapp://send?text=Hello%20World!">Hello, world!</a></p>
                        <p><a data-rel="external" href="tel:9379913407" target = "_blank">Whats App</a></p>-->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-top-space">
                        <i class="fa fa-envelope"></i>
                        <h4><strong>EMAIL SUPPORT</strong></h4>
                        <p><a href="mailto:chitund@gmail.com">chit@gmail.com</a></p>                                           
                    </div>
                </div>
                
            </div>
             
        </div>
    </div>

    <div id="tf-contact" class="text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title center">
                        <h2><strong><a href="chitfund-software-contact-details.html">contact us</a></strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>                       
                    </div>
                    <form action="newjoin.php" method="post">
                    
                      <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Name: <strong>*</strong></label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"required />
                                </div>
                            </div>
                         </div>
                            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address <strong>*</strong></label>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Phone">Phone: <strong>*</strong></label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone"required />
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <label for="Message">Message: <strong>*</strong></label>
                            <textarea name="message" id="message" class="form-control" rows="5">we are  like your chit fund and we want to join us.</textarea>
                        </div>
                        
                        <button type="submit" name="submit" id="submit" class="btn tf-btn btn-default">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

     <!--footer-->     
     

</div>
  <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                 <p class="copy-right">&copy; Aswathy PS 2018   </p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script type="text/javascript" src="https://mylivechat.com/chatinline.aspx?hccid=14401119"></script>  
    
      <!--footer-->

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script type="text/javascript" src="chitfund/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="chitfund/js/bootstrap.js"></script>
    <script type="text/javascript" src="chitfund/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="chitfund/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="chitfund/js/owl.carousel.js"></script>
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="chitfund/js/main.js"></script>

    <!--Lightbox Slider js start here
    =================================================-->
      <script src="chitfund/css/lightbox/css/jquery.lightbox.js"></script>
      <script>
          // Initiate Lightbox
          $(function () {
              $('.gallery a').lightbox();
          });
    </script>     
    <!--Lightbox Slider js end here
    =================================================-->
<script>
$(document).ready(function() {

	 

	var isMobile = {

	    Android: function() {

	        return navigator.userAgent.match(/Android/i);

	    },

	    BlackBerry: function() {

	        return navigator.userAgent.match(/BlackBerry/i);

	    },

	    iOS: function() {

	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);

	    },

	    Opera: function() {

	        return navigator.userAgent.match(/Opera Mini/i);

	    },

	    Windows: function() {

	        return navigator.userAgent.match(/IEMobile/i);

	    },

	    any: function() {

	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());

	    }

	};

	 $(document).on("click", '.whatsapp', function() {

	        if( isMobile.any() ) {

	 

	            var text = $(this).attr("data-text");

	            var url = $(this).attr("data-link");

	            var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);

	            var whatsapp_url = "whatsapp://send?text=" + message;

	            window.location.href = whatsapp_url;

	        } else {

	            alert("Please share this article in mobile device");

	        }

	 

	    });

	});
</script>

  </body>


</html>



