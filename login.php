<?php 
session_start(); 

// Database connection parameters
$dbHost = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = ''; 
$dbName = 'foodtrack'; 

// Establish database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check if connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.html?error=User Name is required");
        exit();
    } else if(empty($pass)) {
        header("Location: index.html?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM login WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            } else {
                header("Location: index.html?error=Incorrect User name or password");
                exit();
            }
        } else {
            header("Location: index.html?error=Incorrect User name or password");
            exit();
        }
    }
} else {
    header("Location: index.html");
    exit();
}
?>
