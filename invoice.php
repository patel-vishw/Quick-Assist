<?php require'uheader.php';
    $cus_id = $_SESSION['cus_id'];
     ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ELECTRICIAN PAGE</title>
        <script src="customer.js" ></script>
        <script src="https://kit.fontawesome.com/61163db8e0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
        <h4><h4>
                <div>
                    <table id="table" style = "margin : 0px auto; width :80rem">
                        <tr>
                            <td>ID</td>
                            <td>NAME</td>
                            <td>PRICE</td>
                            <td>SERVICE DATE</td>
                            <td>WORKER NO:</td>
                            <td>FEEDBACK Email</td>
                            <td></td>
                        </tr>
                        <?php
                            $sql = "SELECT *FROM appointment INNER JOIN services ON appointment.ser_id = services.ser_id  WHERE cus_id ='$cus_id'";
                            $result = $conn->query($sql);
                            if($result-> num_rows>0){
                                while($row = $result->fetch_assoc())
                                {
                        ?>
                                    <tr>
                                        <td><?php echo $row['a_id'];?></td>
                                        <td><?php echo $row['ser_name'];?></td>
                                        <td><?php echo $row['ser_price'];?></td>
                                        <td><?php echo $row['a_date'];?></td>
                                        <?php
                                            $wor_id = $row['wor_id'];
                                            $sql = "SELECT * FROM worker  WHERE wor_id = $wor_id";
                                            $result = $conn->query($sql);
                                            if($result->num_rows>0){
                                                while($row = $result->fetch_assoc())
                                                {
                                        ?>
                                        <td><?php echo $row['wor_phno']; } }     ?></td>
                                        <td>quickassist@gmail.com</td>
                                    </tr>
                        <?php
                                }
                            } 
                        ?>
                    </table>
            </div>
        </main>       
    </body>
</html>