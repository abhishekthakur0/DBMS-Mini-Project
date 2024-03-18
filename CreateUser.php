<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
    <?php
// Retrieve form data
$Name = $_POST['txtName'];
$Address = $_POST['txtAdd'];
$City = $_POST['cmbCity'];
$Email = $_POST['txtEmail'];
$Mobile = $_POST['txtMobile'];
$Gender = $_POST['cmbGender'];
$Station = $_POST['cmbStation'];
$BirthDate = $_POST['txtDate'];
$UserName = $_POST['txtUserName'];
$Password = $_POST['txtPassword'];
$path1 = $_FILES["txtFile"]["name"];

// Move uploaded file to directory
move_uploaded_file($_FILES["txtFile"]["tmp_name"], "Documents/" . $path1);

// Establish connection with MySQL
$con = mysqli_connect("localhost", "root", "", "cms");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Prepare SQL statement
$sql = "INSERT INTO user_tbl (Name, Address, City, Mobile, Email, Gender, BirthDate, UserName, Password, Station_Name, VerificationProof) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind parameters
if ($stmt = mysqli_prepare($con, $sql)) {
    mysqli_stmt_bind_param($stmt, "sssssssssss", $Name, $Address, $City, $Mobile, $Email, $Gender, $BirthDate, $UserName, $Password, $Station, $path1);

    // Execute statement
    if (mysqli_stmt_execute($stmt)) {
        echo '<script type="text/javascript">alert("Registration Completed Successfully");window.location=\'index.php\';</script>';
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>

    </body>
</html>
