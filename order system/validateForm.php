<?php
$op ='none';
if(isset($_GET['op'])) $op = $_GET['op'];

if($op=='createOrder')
{
    createOrder();
}
if($op=='checkLogin')
{
    checkLogin($_POST['email'],$_POST['password']);
}
if($op=='logout')
{
    logout();
}

function isStaff() 
{
    return isset($_SESSION['email']);
}
function logout()
{
    session_start();
    session_destroy();
    header("Location: index.html");
}
function checkLogin($email, $password)
{
    $staffEmail     =   "admin@admin";
    $staffPassword  =   "pass";

    if($email == $staffEmail && $staffPassword == $password)
    {
        session_start();
        $_SESSION['email'] = $email;

        header("Location: admin.php");
    }
    else
    {   
        session_start();
        $_SESSION['login_error'] = true;
        header("Location: login.php");
        
    }
}


$fname = $lname = $mobile = $email  = $model  = $store = $pickup = "";
$fnameErr = $lnameErr = $emailErr = $mobileErr = $modelErr = $storeErr= $pickupErr = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  if (empty($_POST["fname"])) {
      $fnameErr = "First Name is required";
  } else {
      $fname = test_input($_POST["fname"]);
      if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
          $fnameErr = "Only allow entering English alphabet";
      }
  }


    
    if (empty($_POST["lname"])) {
      $lnameErr = "Last Name is required";
  } else {
      $lname = test_input($_POST["lname"]);
      if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
          $lnameErr = "Only allow entering English alphabet";
      }
  }

    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
  } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
      }
  }

    
    if (empty($_POST["mobile"])) {
      $mobileErr = "Mobile is required";
  } elseif (!preg_match("/^\d{8}$/", $_POST["mobile"])) {
      $mobileErr = "Mobile must be 8 digits";
  } else {
      $mobile = test_input($_POST["mobile"]);
  }

   
    if (empty($_POST["pickup"])) {
      $pickupErr = "Pickup Date is required";
  } else {
      $pickup = test_input($_POST["pickup"]);
  }


    // If there are no errors, proceed with saving the data to the database
    if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($mobileErr) && empty($modelErr) && empty($storeErr) && empty($pickupErr)) {
        // Database connection
        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "sehs4517";


        $conn = new mysqli($host_name, $user_name, $password, $db_name);

       
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $stmt = $conn->prepare("INSERT INTO reservation (fname, lname, email, mobile, model, store, pickup) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["mobile"], $_POST["model"], $_POST["store"], $_POST["pickup"]);

        if ($stmt->execute()) {
           
            $stmt->close();
            $conn->close();

           
            header("Location: order-completed.php");
            exit;
        } else {
            
            header("Location: /reserve.php");
            exit;
        }
  }
}
 function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}





    
