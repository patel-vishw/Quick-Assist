<?php require'qaconn.php';
      session_start();
        $ad_name = $_SESSION['ad_name'];
        $sql = "SELECT * FROM admin WHERE ad_name = '$ad_name'";
        $result = mysqli_query($conn,$sql);
        if(!$result)
        {   
            echo"nothing";
        }
        else
        {
            while($row = mysqli_fetch_assoc($result))
            {   
                $_SESSION['ad_id'] = $row['ad_id']; 
                $_SESSION['ad_img'] = $row['ad_img'];
            }
        }

    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>header - nav bar</title>
        <link rel="stylesheet" href="admin.css">
        <script src="https://kit.fontawesome.com/61163db8e0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo">Quick Assist</div>
            <ul class="menubar">
                <li>
                    <a href="dashboard.php">
                        <i class="fa-solid fa-address-card"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="service.php">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <span>Services</span>
                    </a>
                </li>
                <li>
                    <a href="appointment.php">
                        <i class="fa-solid fa-bell"></i>
                        <span>New Request</span>
                    </a>
                </li>
                <li>
                    <a href="worker.php">
                        <i class="fa-solid fa-helmet-safety"></i>
                        <span>Worker</span>
                    </a>
                </li>
                <li>
                    <a href="customer.php">
                        <i class="fa-solid fa-users"></i>
                        <span>Customer</span>
                    </a>
                </li>
            <!---
                <li>
                    <a href="#">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Profile</span>
                    </a>
                </li>--->
                <li class="logout">
                    <a href="logout.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <header>
            <div class="searchbar">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="search">
            </div>
            <div class="headerlink">
                <a href=""><i class="fa-solid fa-envelope-open-text"></i></a>
                <div class="admin">
                    <img src="../fadmin/adminimg/<?php echo $_SESSION['ad_img'];?>">
                    <h3><?php echo $_SESSION['ad_name'];?></h3>
                </div>
            </div>
        </header>
    </body>
</html>