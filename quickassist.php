<?php require 'qaconn.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QUICK ASSIST</title>
        <link rel="stylesheet" href="customer.css">    
        <script src="customer.js"></script>
        <script src="https://kit.fontawesome.com/61163db8e0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <h2>Quick Assist</h2>
            </div>
            <div class="qalinks">
                    <a  href="login.php" >Login</a>
                    <a href="login.php" id="rbtn">Register Business</a>
            </div>       
        </header>
        <main>
        <div class="webpage">
            <div class="searchwrap">
                <h1>What do you need ?</h1>
                <h3>Search service</h3>
                <input type="text" placeholder="Ex.Electricians,Plumber etc..">
                <a href="service.php"><button type="submit">Get Details</button></a>
            </div>
        </div>
        <div class="contantwrap">
                <h2>How We work</h2>
                <h4>Quick Assist can connect you to the right person,first time and every time</h4>
                <div class="step">
                    <div class="box">
                        <img src="..\image\webpage\search.jpg" alt="">
                        <h3>Tell us what you need done</h3>
                        <p>Do some a few simple search about your need to receive competitive list.</p>
                    </div>
                    <div class="box">
                        <img src="..\image\webpage\booking.jpg" alt="">
                        <h3>Book your appoitment </h3>
                        <p>Select service as per your need & book your slot in few steps </p>
                    </div>
                    <div class="box">
                        <img src="..\image\webpage\interaction.jpg" alt="">
                        <h3>Interaction with worker</h3>
                        <p>Provide information and clear the task details</p>
                    </div>
                </div>
                <!----<button type="submit">Sign Up</button>----->
        </div>
        <div class="contantwrap">
                <h2>QUICK ASSIST FOR WORKERS</h2>
                <h4>Start connect with new customers . Get new tasks and clients at home</h4>
                <div class="step">
                    <div class="box">
                        <img src="..\image\webpage\search.jpg" alt="">
                        <h3>Access 1,000s of customers</h3>
                        <p>Get more tasks and take advantage of the 12,000+ customers who need help.</p>
                    </div>
                    <div class="box">
                        <img src="..\image\webpage\booking.jpg" alt="">
                        <h3>Pick the task you want </h3>
                        <p>Browse through all the tasks for the type of tasks you like and the area you work</p>
                    </div>
                    <div class="box">
                        <img src="..\image\webpage\interaction.jpg" alt="">
                        <h3>Fill your schedule</h3>
                        <p>Grow your working area. Pick and choose which customers to connect with.</p>
                    </div>
                </div>
                <!----<button type="submit">Join With Us</button>----->
        </div>
        <div class="contantwrap">
                <h1>Browse popular categories</h1>
                <div class="qservicelist">
                    <a href = "electrician.php">
                    <div class="qcategorybox">
                        <img src="..\image\webpage\electrician1.jpg" alt="Electricians">
                        <h3>Electricians</h3>
                    </div>
                    </a>
                    <a href = "plumber.php">
                    <div class="qcategorybox">
                        <img src="..\image\webpage\plumber1.jpg" alt="Plumber">
                        <h3>Plumber</h3>
                    </div>
                    </a>
                    <a href = "carpenter.php">
                    <div class="qcategorybox">
                        <img src="..\image\webpage\carpenter1.jpg" alt="Carpenter">
                        <h3>Carpenter</h3>
                    </div>
                    </a>
                    <a href = "salon.php">
                    <div class="qcategorybox">
                        <img src="..\image\webpage\salon1.jpg" alt="Salon">
                        <h3>Salon</h3>
                    </div>
                    </a>
                    <a href = "cleaning.php">
                    <div class="qcategorybox">
                        <img src="..\image\webpage\cleaning1.jpg" alt="cleaning">
                        <h3>cleaning</h3>
                    </div>
                    </a>
                </div>
            </div>
        <main>
    <?php require 'ufooter.php'; ?>
    </body>
</html>