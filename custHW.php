<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Table</title>
</head>
<body>
    <?php 
         $servername = "localhost";
         $username = "steverq1_dev";
         $password = "Csci213+#006";
         $dbname = "steverq1_devdb";
         
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT cust_id, cust_fname, cust_lname, cust_email
         from customer";
        $result = $conn->query($sql); 

        if($result->num_rows > 0) {
            //output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["cust_id"]. " - Name: ". 
                $row["cust_fname "]. " " . $row["cust_lname"]. 
                "email: " . $row["cust_email"]. "<br>"; 
            }
        }else {
            echo "0 results"; 
        }
        $conn->close(); 



    ?>
</body>
</html>