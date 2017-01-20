<?php

    if ($_POST["submit"]) {
            
      if (!$_POST['name']) {
        
        $error="<br />Please enter your first name";
        
      }
      
      if (!$_POST['surname']) {
        
        $error.="<br />Please enter your last name";
        
      }
      
      if (!$_POST['email']) {
        
        $error.="<br />Please enter your email address";
        
      }
      
      if (!$_POST['message']) {
        
        $error.="<br />Please leave a message";
        
      }
      
      if ($_POST['email'] !="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        
        $error.="<br />Please enter a valid email address";
        
      }
      
      if ($error) {
        
        $result='<div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <span class="glyphicon glyphicon-exclamation-sign"></span>
                    <strong> There were error(s) in your form: </strong>'.$error.'
                </div>';
        
      } else {
        
        if (mail("hellowoodworker@gmail.com",
             "Message from website!",
             "Name: ".$_POST['name']. " ".$_POST['surname']. "  
             Email Address: ".$_POST['email']. "
             Comment: ".$_POST['message'])) {
              
                $result='<div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <span class="glyphicon glyphicon-send"></span>
                            <strong> Thank you!</strong> We will get back to you shortly.
                        </div>';
              
             } else {
              
                $result='<div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            Sorry, there was an error submitting your message. Please try again later.
                        </div>';
              
             }
             
      }
        
    }

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>The Happy Wood Worker Ireland</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!--CSS File -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body data-spy="scroll">
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><span class="glyphicon glyphicon-tree-conifer"></span></a>
            </div>
            
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#homePage">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li>
                        <a class="navbar-fb" href="https://www.facebook.com/happywoodworkerIreland/" target="_blank">
                          <img src="icon_fb_small.png" height="15px" width="15px">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container" id="homePage">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" id="topRow">
          
            <h1><span style="font-size: 30px;">The</span> <br/>Happy <br/>Wood Worker <br/><span style="font-size: 30px;">Ireland</span></h1>
            
            <p class="lead">High quality crafts lovingly made by an Irish carpenter with over 40 years experience!</p>
            
            <a href="#products"><button type="button" class="btn btn-success btn-md marginTop">View products</button></a>
            
        </div>  
      </div>
    </div>
    
    <div id="about" class="container">  
      <div class="row scrollHeader">  
        <h2><span class="glyphicon glyphicon-info-sign"></span> About</h2>      
      </div>
      
      <div class="row">
        <p class="aboutIntro"><strong>The Happy Wood Worker is a Dublin-based Irish carpenter with over 40 years experience, who specializes in creating bespoke products for every occasion, all year round.</strong></p>
      </div>
      
      <div class="row">
        <p class="aboutIntro">Looking for beautifully designed, quality made wooden crafts and furniture pieces at affordable prices? Then look no further than the Happy Wood Worker!</p>
        <p class="aboutIntro">If you have a query or request, feel free to <a href="#contact"><span>drop me a message</span></a> for more information!</p>
      </div>
      
      <div class="row scrollHeader">
        
      </div>
      
      <div class="row quoteContainer">
        
        <div class="col-md-3">
            <p class="pullQuote">"Have had work done by the happy wood worker. Absolutely delighted; excellent, high quality work for excellent prices. Would highly recommend."</p>
            <p class="quoteSource">- Julie M</p><br/>
        </div>
        
        <div class="col-md-3">
            <p class="pullQuote">"The Happy wood worker has made me customised wooden stands in the past, excellent service and quality products, delivered on time."</p>
            <p class="quoteSource">- Kathy L</p><br/>
        </div>
        
        <div class="col-md-3">
            <p class="pullQuote">"Delighted with our Christmas stocking stand and Elf door. Excellent quality and service"</p>
            <p class="quoteSource">- Michelle E</p><br/>
        </div>
        
        <div class="col-md-3">
            <p class="pullQuote">"Thank you so much to the Happy Wood Worker!
                                Not only are the kids so happy with it but I could
                                not recommend you enough. Amazing workmanship. Looking forward to seeing what else you create!"</p>
            <p class="quoteSource">- David K</p><br/>
        </div>
        
      </div>
      
      <div class="row">
        <a href="https://www.facebook.com/happywoodworkerIreland/reviews/" target="_blank">
          <br/><button type="button" class="btn btn-primary btn-md">Leave a Review!</button>
        </a>
      </div>
      
    </div>
      
    <div id="products" class="container">  
      <div class="row scrollHeader">  
        <h2><span class="glyphicon glyphicon-picture"></span> Products</h2>      
      </div>
      
      <div class="row">
        <p class="aboutIntro"><strong>Christmas 2016 has brought the first range of Happy Wood Worker-made seasonal products; The Christmas Elf Door, Nanny and Grandad picture frames and the hugely popular Merry Stocking Holder!</strong></p>
        
        <p class="aboutIntro">The Merry Stocking Holder is an ideal gift for anyone living in an apartment who doesn't have a fireplace or simply wants to avoid damaging their mantlepiece when Santa arrives!
        Each wooden stand is decorated with an adorable Santa topper and holds four stockings each.
        Priced at <strong>€29.99 + €5.00 delivery</strong> within the Dublin 15 area.<br />
        Available in white, green and red (stockings not included).</p>
        <p class="aboutIntro"><strong>More beautiful seasonal product ranges to come throughout the year- watch this space!</strong></p><br/>
      </div>
  
      <div class="row">
        <div class="col-md-3">
            <div class="thumbnail">
                <img class="img-responsive" src="images/wood6.jpg" alt="Christmas stocking stand" style="width: 90%;">
                <div class="caption">
                  <p>Santa Merry Stocking Holders</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="thumbnail">
                <img class="img-responsive" src="images/wood10.jpg" alt="Christmas stocking stand" style="width: 100%;">
                <div class="caption">
                  <p>Christmas Elf Doors and Nanny & Grandad picture frames</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="thumbnail">
                <img class="img-responsive" src="images/wood8.jpg" alt="Christmas stocking stand" style="width: 100%;">
                <div class="caption">
                  <p>Christmas Fair, St Benedicts NS, Ongar</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="thumbnail">
                <img class="img-responsive" src="images/wood7.jpg" alt="Christmas stocking stand" style="width: 90%;">
                <div class="caption">
                  <p>Cup Cake Merry Stocking Stand</p>
                </div>
            </div>
        </div>
        
    </div>
    
  <div id="contact" class="container">
      
    <div class="row scrollHeader">
      <h2><span class="glyphicon glyphicon-envelope"></span> Contact Us</h2>
    </div>
    
    <p class="messageAction">Please leave your message and contact details below and I will get back to you as soon as I can!</p>
    
    <?php echo $result; ?>
    
    <form id="contactForm" method="post">

    <div class="controls">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" name="name" class="form-control"
                           placeholder="Your First Name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="surname">Last Name</label>
                    <input type="text" name="surname" class="form-control"
                           placeholder="Your Last Name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" class="form-control"
                           placeholder="Your Email Address">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" rows="4">
                    </textarea>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success btn-md" value="Submit">
                <input type="button" class="btn btn-warning btn-md" onclick="clearForm()" value="Clear">
            </div>
        </div>
    </div>

    </form>
    
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="validator.js"></script>
    
    <script>
      
      $("#homePage").css("height", $(window).height());
      
      function clearForm() {
        document.getElementById("contactForm").reset();
      }
      
    </script>
    
  </body>
</html>