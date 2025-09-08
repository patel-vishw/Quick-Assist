<?php require 'whead.php'; ?>
<?php  
    if(isset($_GET['aid']))
    {
        $a_id = $_GET['aid'];
        $complated = "complated";
        $sqlaccept = "UPDATE appointment  SET a_status ='$complated' WHERE a_id='$a_id' ";
        if(mysqli_query($conn,$sqlaccept))
        {
            header("Location: history.php");
            echo'<script>alert("service accepted")</script>';
        }
        else
        {
            header("location:servicetable.php");
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
            <h4>Tasks<h4>
            <div class="tableview">
                <div>
                    <table id="table">
                        <tr>
                            <td>ID</td>
                            <td>NAME</td>
                            <td>CUSTOMER</td>
                            <td>DATE</td>
                            <td>ADDRESS</td>
                            <td>PRICE</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM appointment INNER JOIN services ON appointment.ser_id = services.ser_id  INNER JOIN customer ON appointment.cus_id = customer.cus_id  WHERE wor_id = '$wor_id' AND wor_status = 'accepted' AND a_status = 'new' ";
                            $result = $conn->query($sql);
                            if($result->num_rows>0){
                                while($row = $result->fetch_assoc())
                                {
                        ?>
                                    <tr>
                                        <td><?php echo $row['a_id'];?></td>
                                        <td><?php echo $row['ser_name'];?></td>
                                        <td><?php echo $row['cus_name'];?></td>
                                        <td><?php echo $row['a_date'];?></td>
                                        <td><?php echo $row['a_addre'];?></td>
                                        <td><?php echo $row['ser_price'];?></td>
                                        <td><a href="task.php?aid=<?php echo $row['a_id'];?>"><i class="fa-regular fa-circle-check"></i></a></td>
                                        <td><a href="serinde.php?rejectid=<?php echo $row['a_id'];?>" name="delete"><i class="fa-solid fa-trash-can"></i></a></td>
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