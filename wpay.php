<?php require'uheader.php' ?>
<?php 
                    if(isset($_GET['id'])){   
                        $id = $_GET['id'];
                        $sqlupdate = "SELECT * FROM appointment INNER JOIN services ON appointment.ser_id = services.ser_id WHERE a_id = $id";
                        $result = mysqli_query($conn,$sqlupdate);
                        if(!$result)
                        {   
                            die("query Failed".mysqli_error());
                        }
                        else
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $price = $row['ser_price'];
                                $amount = $price * 60 /100;
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
    <form method = "post" action ="https://www.sandbox.paypal.com/cgi-bin/webscr" >
        <input type="hidden" name = "business" value="sb-ai2v329125215@business.example.com">
        <input type="hidden" name = "item_name" value ="home service">
        <input type="hidden" name = "amount" value ="<?php echo $amount;?>">
        <input type="hidden" name = "no_shipping" value ="1">
        <input type="hidden" name = "currency_code" value ="USD">
        <input type="hidden" name = "cmd" value ="_xclick">
        <input type="hidden" name = "return" value ="http://localhost/program/project/fcus/pay.php">
        <input type="hidden" name = "canel_return" value ="http://localhost/program/aashrayspot/home.php">
        <input type="submit" name = "book" id="btn" style = "visibility : hidden;">
    </form>
    </body>
</html>