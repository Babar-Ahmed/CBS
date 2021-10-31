<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CBS--| CBS.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="img/fav.png">
<style>
    /* Contact Section */
#contact{
    position: relative;
    }
#contact::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.7;
    background: url('img/contact2.jpg') no-repeat center center/cover;

}
#home::before{ 
    content: "";
    position: absolute;
    background: url(' img/main.jpg ') no-repeat center center/cover;
    height: 642px;
    top:0px;
    left:0px;
    width: 100%;
    z-index: -1;
    opacity:0.70;
}
/* animation */
.c img{
             
             width: 100px;
             animation: c 3s linear infinite;
         }
         .c{
             width: 100%;
             display: flex;
             align-items: center;
             justify-content: space-around;
             position: absolute;
             bottom: 0;
         }
         @keyframes c {
             0%{
                 transform: transLateY(0);
                 opacity:0;
             }
             50%{
                 opacity:1;
             }
             70%{
                 opacity:1;
             }
             100%{
                 transform: transLateY(-80vh);
                 opacity:0;
             }
         }
         .c img:nth-child(1){
             animation-delay: 2s;
         }
         .c img:nth-child(2){
             animation-delay: 1s;
         }.c img:nth-child(3){
             animation-delay: 3s;
         }.c img:nth-child(4){
             animation-delay: 4.5s;
         }.c img:nth-child(5){
             animation-delay: 3s;
         }.c img:nth-child(6){
             animation-delay: 6s;
         }.c img:nth-child(7){
             animation-delay: 7s;
         }
</style>
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <li id="lo" >Code Bussiness Solution</li>

        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#team-container">Our Team</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 style="color: rgb(24, 5, 41);" class="h-primary">Code Bussiness Solution</h1>
        <p style="color: rgb(24, 5, 41);text-decoration-style: bold;">Provide a Websites & Anroid Application & Logos For Your Company  </p>
        <button class="btn">Welcome</button>
    </section>
    <h1 class="jumbotron-heading"><span id="typed"></span><span class="typed-cursor typed-cursor--blink">|</span></h1>
 <section id="about">
    <div class="box">
    <h1 style="margin-top: 30px;" class="h-primary center">About Us</h1>
    <h4 class="center">Code business solutions software house are provided for your Business Website, Android Application && Graphic work
        and very  reasonable price and on time 
        website: personal Portfolio website eCommerce store, Hospital management, School Management, Online appointments system, etc
        Android: make any android  application
        Graphic: make any Graphically  work   
        Contact Now 03133257604.</h4>
    </div>
    </section>
    
    <section id="services-container">
        <h1 style="margin-top: 30px;" class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src=" img/web-link.png" alt="">
                <h2 class="h-secondary center">Website</h2>
                <p class="center">Code Bussiness Solution are provide Website for your Bussiness CBS make a any Website But Make a Personal Portfolio website eCommerce store, Hospital management, School Management, Online appointments system, etc .</p>
            </div>
            <div class="box">
                <img src=" img/android.png" alt="">
                <h2 class="h-secondary center">Anroid Application</h2>
                <p class="center"> 
                    Code Bussiness Solution are provide Anroid Application for your Bussiness CBS make a any Anroid Application store application, School application, food store application etc 

                    </p>
            </div>
            <div class="box">
                <img src=" img/logo.png" alt="">
                <h2 class="h-secondary center">Graphic</h2>
                <p class="center"> Code Bussiness Solution are provide Graphic   for your Bussiness CBS make a any Graphic work Logos , Banaers, Cards, Photo edit etc </p>
            </div>
        </div>
        <div class="c">
    <img src="img/html-5.png" alt="" > 
 <img src="img/css-3.png" alt="">  
 <img src="img/java-script.png" alt="" >   
 <img src="img/php.png" alt="" >
  <img src="img/python.png" alt="">    
  <img src="img/mysql.png" alt="" >    
   <img src="img/java.png" alt="" >   

</div>
    </section>
    <section id="team-container"  >
        <h1 style="margin-top: 30px;" class="h-primary center">CBS Team</h1>
        <div id="services">
            <div class="box">
                <img src=" img/qm.jpg" alt="">
                <h2 class="h-secondary center">Abdul Qadir</h2>
                <p class="center"> Chief Executive Officer in Code Bussiness Solution  Contact number +92 313 3257604  </p>
            </div>
            <div class="box">
                <img src=" img/hass.jpg" alt="">
                <h2 class="h-secondary center">Hussnain Qureshi</h2>
                <p class="center"> Managing Director in Code Bussiness Solution  Contact number +92 332 2636645 </p>
            </div>
            <div class="box">
                <img src=" img/as.jpeg" alt="">
                <h2 class="h-secondary center">
                    Syed Muhammad Asharib Ali. </h2>
                <p class="center"> Human Resource Manager in Code Bussiness Solution  Contact number  +92 332 2616870 .</p>
            </div>
        </div>
<!-- form backend email send code -->
<?php
if(isset($_POST['esubmit'])){
  $to=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $from="mrqadir1320@gmail.com";
  $headers="From:$from";
if(mail($to,$subject,$message,$headers)){
// echo"email successfully sent to $to...";
}else{
echo'email field';
}

}
?>
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                 <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Subject: </label>
                    <input type="text" name="subject" id="subject" placeholder="Enter your Subject">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                <input style="background-color:blue; color:white" name="esubmit" type="submit">
                </div>
  
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.CBS.com. All rights reserved!
            <!-- <img id="top" src="/img/top.png" alt=""> -->

        </div>
    </footer>
    
</body>

</html>