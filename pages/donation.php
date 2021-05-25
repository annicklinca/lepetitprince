
<!DOCTYPE html>
<!--
Template Name: Yeinydd
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>www.EBPPcenterfordisabilities children.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1" style="background-color: #0e5e03; ">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
<h1 style="float: right; color: white; font-weight: bold; margin-left: 20px;">Ecole Le Petit Prince<br>Bilingue</h1>
        <img src="../images/logo.jpg" alt="Logo" style="height: 60px; margin-top: -20px;">       </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../index.php">Home</a></li>
            <li><a class="drop" href="#">Aboutus</a>
            <ul>
              <li><a href="commitment.php">Our Commitment</a></li>
              <li><a href="whatwedo.php">What We Do </a></li>
              <li><a href="board.php">Board of Directors</a></li>
              <li><a href="yourmoney.php">How Your Money Helps</a></li>
            
            </ul>
          </li>
           <li class="active"><a  href="donation.php">Support</a>
         
          </li>
            <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
 
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
 <h6 style="font-weight: bold;">Leave a message to support Ecole Le Petit Prince Bilingue</h6>
 <p style="font-weight: bold;">Thank you so much for considering making a choice to support education. We, and those we work with, really appreciate you support.</p>
 <div style="margin-left: 25%;">
  <?php

  if(isset($_POST['submit'])){

   $names=$_POST['names'];
   $phone=$_POST['phone'];
   $comment=$_POST['comment'];
    $to = "lincaannick14@gmail.com";
$subject = "support";

$message = "
<html>
<head>
<title>support</title>
</head>
<body>
<p>"+$names+","+$phone","+$comment" </p>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@EBPPcenterfordisabilities.com>' . "\r\n";


mail($to,$subject,$message,$headers);
  }
  ?>
 <form method="POST" action="donation.php">
  <h3>Personal Information</h3>
  <label style="font-weight: bold;">Name</label> 
  <input type="text" name="name" placeholder="enter your name please" style="width: 700px; height: 40px;border-radius: 5px;">
  <label style="font-weight: bold;">Country</label>
  <input type="text" name="country" placeholder="enter your country" style="width: 700px; height: 40px;border-radius: 5px;">
  <label style="font-weight: bold;">Phonenumber</label>
  <input type="text" name="phone" placeholder="+250.............." style="width: 700px; height: 40px;border-radius: 5px;">
  <label style="font-weight: bold;">E-mail</label>
  <input type="text" name="email" placeholder="myemail@gmail.com" style="width: 700px; height: 40px;border-radius: 5px;">
  <label style="font-weight: bold;">Comment</label>
  <textarea type="text" name="comment"  style="width: 700px; height: 70px;border-radius: 5px;" placeholder="leave your message here"></textarea><br>
  <input type="submit" name="submit" value="send" style="width: 300px;height: 40px;background-color: #145904;color: white;margin-left: 160px;"><br>
 </form>
</div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="group btmspace-80">
      <div class="one_third first">
        <h6 c lass="heading">For More Informations</h6>
        <p>Incase you need any more information, Ecole le Petit prince Bilingue we'll always be pleased to 
        communicate with you.</p>
        <p class="btmspace-30">Also our hands and our hearts will always be open to receive and take care of our children who live with disabilities [<a href="#"><i class="fas fa-arrow-right"></i></a>]</p>
        
      </div>
      <div class="one_third" style="margin-top: 70px;">
        
        <p class="nospace btmspace-15">For more informations you can send an email here.</p>
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <div class="one_third">
      
        <ul class="nospace clear latestimg">
          <li><a class="imgover" href="#"><img src="../images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="../images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="../images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="../images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="../images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="../images/demo/100x100.png" alt=""></a></li>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ -->
   <div id="ctdetails" class="clear">
      <ul class="nospace clear">
        <li class="one_quarter first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +250786404866(Rwanda)<br>+25779392105(Burundi)</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> ecobilinguelepetitprince@gmail.com</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Friday:</strong> 08.00am - 18.00pm</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">Burundi-Bujumbura(Buconyori Road)<br>Rwanda-Kigali(Kisimenti YYUSSA Plaza 2nd Floor)</a></span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">www.EBPPcenterfordisabilitieschildren.com</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html> 