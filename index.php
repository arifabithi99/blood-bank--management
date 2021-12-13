<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Blood Bank Bangladesh</title>
  </head>
  <header>
        <div class="container">
        <nav class="flex items-center justify-between">
            <div class="left flex items-center">
            <div>
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#contact">contact</a>
                <a href="register.php">Registration</a>
                <a href="#donor">Donor Information </a>
                <a href="">  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p> </a>
                
            </div>
        </div>
        <div class="right">
              <a href="logout.php"> <button class="btn btn-primary">Logout</button></a> 
            </div>
        </nav>
        <div class="hero flex items-center justify-between">
            <div class="left flex-1">
            <img src="./image/blood.png" alt="">   
            </div>
            <div class="right flex-1">
                <h2>Blood Bank</h2>
                <h1> <span>Bangladesh</span></h1>
                   
            </div>
        </div>
    </div>
    </header>

    <section id="about" class="about">
        <div class="container flex items-center">
            <div class="flex-1">
            <img src="./image/about.png" alt="">
            </div>
            <div class="flex-1">
                <h1>About <span>Us</span> </h1>
                
                <p>
                Across Bangladesh, every day there remains an urgent need for all types of blood groups. Especially donors with rare blood 	groups such as O-, B- and A- are in high demand. Your timely response is essential to the supply of healthy blood for the 	massive daily demand we face.
	              Your donation can save the lives of many, make a difference or simply make you feel great about your contribution to humanity. 	Whatever your reason, whatever your motivation we welcome you to learn more about eligibility and benefits of donating blood 	with a trusted organization like us.
                </p>
                
            </div>
        </div>
    </section>

    <section id="donor" class="donor">
        <div class="container flex items-center"> 
            <div class="flex-1">
            <h1>Donor Information </h1>
            
         <p>
             <h5>Please click on the Find Blood button</h5>
         </p>
         </div>
            <div class="left">
            <a href="services.php"> <button class="btn btn-primary"> Find Blood</button></a>
                               
            </div>
        </div>
    </section>
    
    <section id="contact"class="contact">
        <div class="container">
            <h1 class="section-heading">Contact<span> Us</span> </h1>
            <div class="card-wrapper">
                <div class="card">
                    <img src="./images/phone-2.svg" alt="">
                    <h2>Call Us On</h2>
                    <h5>+8801987973681</h5>
                </div>
                <div class="card">
                    <img src="./images/msg.svg" alt="">
                    <h2>Email Us At</h2>
                    <h5>bloodbankbd@gmail.com</h5>
                </div>
                <div class="card">
                    <img src="./images/map.svg" alt="">
                    <h2>Visit Office</h2> 
                    <h5>H#22,Block-C, Banasree</h5>
                </div>
            </div>
            <form action="">
                <div class="input-wrap">
                    <input type="text" placeholder="Your Name">
                    <input type="email" placeholder="Your Email">
                </div>
                <div class="input-wrap-2">
                    <input type="text" placeholder="Your Subject">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                </div>
                <div class="btn-wrapper">
                    <button class="btn btn-primary">Send message</button>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <h1>Thank You</h1>
    </footer>
  </body>
</html>
