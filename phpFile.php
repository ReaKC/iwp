<!DOCTYPE html>
<html lang="en">

<head>












<!-- for cascade:-->
      
      <link rel="icon" href="icon.png">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="specialMenu.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel=”stylesheet” id=”font-awesome-css” href=”//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css” type=”text/css” media=”screen”>

   
   <script type="text/javascript" src="data.json"></script>
   <script type="text/javascript" src="jv.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Material Design Bootstrap</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="responsiveMenu.css" rel="stylesheet">    
 
<style>




body
{
	overflow-x:hidden;
	max-width: 100%;
}	
html
{
    overflow-x:hidden;
	max-width: 100%;
}


/*for mobile screens:*/
@media (max-width: 576px)
 {
  .container 
  {
    max-width: 90%;
  }
  
  
  
  
   #gradient1 
   {
     height: 72px;
     background: #990000;
    /* For browsers that do not support gradients */
     background: linear-gradient(to bottom, #6E6E6E, #323232);
    /* Standard syntax (must be last) */
   }
}

@media (min-width: 600px)
{
  .displaySwitcherOne
       {
           display: none;
       }   
}          


/*for full desktop screens:*/
@media (min-width: 1400px)
{
    @media (min-width: 1500px)
  {
     .container
     {
         min-width: 1400px;
     }
     
}
}
</style>
</head>

<body onload="load()">

<a href=”#” class=”back-to-top” style=”display: inline;”>
 
<i class=”fa fa-arrow-circle-up”></i>
 
</a>

 

<div class="header">


  <div class="topBar">
    <div class="centerContainer">
         
         
<!-- Sidebar -->
<div class="displaySwitcherOne w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div class="w3-teal displaySwitcherOne">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
    <h1>My Page</h1>
  </div>
</div>

<img src="img_car.jpg" alt="Car" style="width:100%" class="displaySwitcherOne">

<div class="w3-container displaySwitcherOne">
<p>In this example, the sidebar is hidden (style="display:none")</p>
<p>It is shown when you click on the menu icon in the top left corner.</p>
<p>When it is opened, it hides all the page content (style.width="100%").</p>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

         
           <div class="topnav" id="myTopnav">
              <a href="index.html" >Home</a>
              <a href="#news">News</a>
               <a href="#contact" class="active">Contact</a>
               <a href="#about">About</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
     </div>
     


     
     
     
  </div>
  
   <div class="secondTopBar" style="">
       
          <div class="row align-items-center" style="height: 100%; width: 80%; margin: 0 auto;">
          
             <div class="col-md-4" id="">
                 <img src="icon.png" style="width: 150px;" >                  
             </div>
          
            <div class="col-md-8" id="" style="text-align: left;">
                 <p style="font: italic bold 12px/30px Georgia, serif; font-size: 200%;  color: #DCDCC8"> Share your ideas with us</p>                 
             </div>
             
          </div>
     
  </div> 
  

</div>



 <div style="width: 100%; height: 155px; background-color: grey;">
 

</div>

  </div>




      






  






    <div class="container">
        <!-- Start your project here-->


 


    
        
<div style="height: 100vh; padding: 10px; background-color: #D6D6D6; border-radius: 15px;" >
     <div class="flex-center flex-column" style="background-color: transparent;">
     
                <h2 class="animated fadeIn mb-4" >Compliments and complaints.</h2>
       			<h3 class="animated fadeIn mb-4" >For any sugestion or problem, please send us your thoughts and we are going to deal with that.</h3>
       			
                <h5 class="animated fadeIn mb-3">Thank you for using our product. We're glad you're with us.</h5>

                <p class="animated fadeIn text-muted">Eigendrones Team</p>
                
                <br><br><br>
                
   
<form action="phpFile.php">
             Name: 
  <input type="text" name="name" value="" placeholder="name">
  
  <br>
  
 Phone number: 
  <input type="text" name="phone" value="" placeholder="xxxx xxx xxx">
  
  <br>
  
  e-mail: 
  <input type="email" name="phone" value="" placeholder="xxxx@yyyy.zz"> 
  
  <br><br>
  
  
  <input type="submit" value="Submit">
</form> 
             

                
                
            
  
  
     </div>
</div>
        
                     
            




 
 



   


    </div>
    <!-- container -->




 <footer class="page-footer font-small  pt-4 mt-4" style="background-color: black;">
<div class="centerContainer">


        <!--Footer Links-->
        <div class="text-center text-md-left">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!--First column-->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Eigendrones. Your drone place.</h6>
                    <p>We are a network that provides access to one of the biggest drone markets in the world.</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                    <p><a href="#!">MDBootstrap</a></p>
                    <p><a href="#!">MDWordPress</a></p>
                    <p><a href="#!">BrandFlow</a></p>
                    <p><a href="#!">Bootstrap Angular</a></p>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                    <p><a href="#!">Your Account</a></p>
                    <p><a href="#!">Become an Affiliate</a></p>
                    <p><a href="#!">Shipping Rates</a></p>
                    <p><a href="#!">Help</a></p>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fa fa-home mr-3"></i> Bucharest, str Iuliu Maniu, Romania</p>
                    <p><i class="fa fa-envelope mr-3"></i> alex.inntekt@gmail.com</p>
                    <p><i class="fa fa-phone mr-3"></i> +40 773 995 330</p>
                    
                </div>
                <!--/.Fourth column-->

            </div>
            <!-- Footer links -->

            <hr>

            <div class="row py-3 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-8 col-lg-8">

                    <!--Copyright-->
                    <p class="text-center text-md-left grey-text">© 2018 Copyright: <a href="https://mdbootstrap.com/material-design-for-bootstrap/"><strong> MDBootstrap.com</strong></a></p>
                    <!--/.Copyright-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 col-lg-4 ml-lg-0">

                    <!--Social buttons-->
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-facebook" ></i></a></li>
                            <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!--/.Social buttons-->

                </div>
                <!--Grid column-->

            </div>

        </div>
           
    </div>
    </footer>








    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    



    

    
    
</body>






</html>