<?php require'head.php'?>
<?php   
    if(isset($_POST['wassign'])){
        $wid = $_POST['wid'];
        $aid = $_POST['aid'];
        $wstatus = "requested";
        $sql = "UPDATE appointment set wor_id = '$wid', wor_status = '$wstatus' where a_id = '$aid'";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo"error";
        }
        else{
            header("location: appointment.php");
        }
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>assign worker</title>
        <link rel="stylesheet" href="admin.css">
        <script src="admin.js"></script> 
        <script src="https://kit.fontawesome.com/61163db8e0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
            <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM appointment INNER JOIN services ON appointment.ser_id = services.ser_id WHERE a_id = $id";
                    $result = mysqli_query($conn,$sql);
                    if(!$result)
                    {   
                       echo"error";
                    }
                    else
                    {
                        while($row = mysqli_fetch_assoc($result)){
            ?>                  
                            <div class="appointmentbox">
                                <div class="applable">
                                    <lable>Service Name:</lable>
                                    <h6><?php echo $row['ser_name'];?></h6>
                                </div>
                                <div class="applable">
                                    <lable>Category:</lable>
                                    <h6><?php echo $row['ser_category'];?></h6>
                                </div>
                                <div class="applable">
                                    <lable>Service Date:</lable>
                                    <h6><?php echo $row['a_date'];?></h6>
                                </div>
                                <div class="applable">
                                    <lable>Service City:</lable>
                                    <h6><?php echo $row['a_city'];?></h6>
                                </div>
                                <div class="applable address">
                                    <lable>Address:</lable>
                                    <h6><?php echo $row['a_addre'];?></h6>
                                </div>
                                <form method="post" action="wassign.php">
                                <div class="applable">
                                    <lable>Worker ID:</lable>
                                    <input type="text" name="wid">
                                    <input type="hidden" name="aid" value="<?php echo $row['a_id'];?>">
                                </div>
                                <input type="submit" name="wassign" value="Assign" class="appointmentboxbtn">
                                </form>
                            </div>
                            <div class="tableview">
                <div>
                    <table id="table">
                        <tr>
                            <td>ID</td>
                            <td>NAME</td>
                            <td>Address</td>
                            <td>PHONE NO</td>
                        </tr>
                        <?php
                            $profession = $row['ser_category'];
                            $sql = "SELECT * FROM worker WHERE profession = '$profession'";
                            $result = $conn->query($sql);
                            if($result->num_rows>0){
                                while($row = $result->fetch_assoc())
                                {
                        ?>
                                    <tr>
                                        <td><?php echo $row['wor_id'];?></td>
                                        <td><?php echo $row['wor_name'];?></td>
                                        <td><?php echo $row['wor_address'];?></td>
                                        <td><?php echo $row['wor_phno']; ?></td>
                                    </tr>
                        <?php
                                }
                            } 
                        ?>
                    </table>
                </div>
            </div>
                <?php
                        }
                    }
                }?>
        </main>
    </body>
</html>

