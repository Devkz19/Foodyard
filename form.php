<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        p {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 18px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 465px;
            text-decoration: none;
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <table>
    <?php
$dbHost = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = ''; 
$dbName = 'foodtrack'; 

// Establish a database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$a = $_POST["name"];
$b = $_POST["email"];
$c = $_POST["phonenum"];
$d = $_POST["address"];
$e = $_POST["quantity"];
$f = $_POST["datetime"];

$query = "INSERT INTO `donate`(`name`, `email`, `phonenum`, `address`, `quantity`, `datetime`) VALUES ('$a','$b','$c','$d','$e','$f')";
$insert = mysqli_query($conn, $query);
if ($insert) {
    ?>
    <table>
        <tr>
            <td>Name</td><td>Email</td><td>Phone</td><td>Address</td><td>Quantity</td><td>Date and Time</td>
        </tr>
        <tr>
            <td><?php echo isset($_POST["name"]) ? $_POST["name"] : ""; ?></td>
            <td><?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?></td>
            <td><?php echo isset($_POST["phonenum"]) ? $_POST["phonenum"] : ""; ?></td>
            <td><?php echo isset($_POST["address"]) ? $_POST["address"] : ""; ?></td>
            <td><?php echo isset($_POST["quantity"]) ? $_POST["quantity"] : ""; ?></td>
            <td><?php echo isset($_POST["datetime"]) ? $_POST["datetime"] : ""; ?></td>
        </tr>
    </table>
    <p>Your food order has been collected. Thank you for choosing our service!</p>
    <?php
} else {
    echo "Sorry, there was an error.";
}

// Close the database connection
mysqli_close($conn);
?>



    <a href="index.html">Go to Home Page</a>
</body>
</html>
