<?php require'head.php'?>
<?php 
if(isset($_GET['id']))
{
    $a_id = $_GET['id'];
    $sqlDelete = "DELETE FROM appointment WHERE a_id='$a_id'";
    if(mysqli_query($conn,$sqlDelete))
    {
        header("Location: appointment.php");
        echo'<script>alert("Request deleted")</script>';
    }
    else
    {
        header("location:wassign.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Service</title>
        <link rel="stylesheet" href="admin.css">
        <script src="admin.js"></script> 
        <script src="https://kit.fontawesome.com/61163db8e0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
            <h4>Appointment List<h4>
            <div class="tableview">
                <div class="heading">
                    <div class="tablesearchbox">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="search" onkeyup="search()">
                    </div>
                    <div class="filter">
                        
                    </div>
                </div>
                <div>
                    <table id="table">
                        <tr>
                            <td>ID</td>
                            <td>SERVICE</td>
                            <td>CUSTOMER</td>
                            <td>CITY</td>
                            <td>PRICE</td>
                            <td>WORKER</td>
                            <td>W_STATUS</td>
                            <td>STATUS</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM appointment INNER JOIN services ON appointment.ser_id = services.ser_id INNER JOIN customer ON appointment.cus_id = customer.cus_id ";
                            $result = $conn->query($sql);
                            if($result->num_rows>0){
                                while($row = $result->fetch_assoc())
                                {
                        ?>
                                    <tr>
                                        <td><?php echo $row['a_id'];?></td>
                                        <td><?php echo $row['ser_name'];?></td>
                                        <td><?php echo $row['cus_name'];?></td>
                                        <td><?php echo $row['a_city'];?></td>
                                        <td><?php echo $row['ser_price'];?></td>
                                        <td><?php echo $row['wor_id'];?></td>
                                        <td><?php echo $row['wor_status'];?></td>
                                        <td><?php echo $row['a_status'];?></td>
                                        <td><a href="wassign.php?id=<?php echo $row['a_id'];?>"><i class="fa-solid fa-magnifying-glass-arrow-right"></i></a></td>
                                        <td><a href="appointment.php?id=<?php echo $row['a_id'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
                                    </tr>
                        <?php
                                }
                            } 
                        ?>
                    </table>
                </div>
            </div>
            
        </main>
    </body>
</html>
