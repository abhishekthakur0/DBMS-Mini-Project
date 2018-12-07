<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
<?php
if (isset($_SESSION['ID'])) {
    $UserId = $_SESSION['ID'];
    $cmbStation = $_POST['cmbStation'];
    $cmbType = $_POST['cmbType'];
    $txtDesc = $_POST['txtDesc'];
    $CDate = date("Y/m/d");
    $Status = "Submited";

    // Establish Connection with MYSQL
    $con = mysqli_connect("localhost", "root");
    // Select Database
    mysqli_select_db($con,"cms");
    // Specify the query to Insert Record
    $sql = "insert into complaint_tbl (User_Id,Station_Name,Complaint_Type,Complaint_Desc,Complaint_Date,Status) values('" . $UserId . "','" . $cmbStation . "','" . $cmbType . "','" . $txtDesc . "','" . $CDate . "','" . $Status . "')";
    // execute query
    mysqli_query($con,$sql);
    // Close The Connection
    mysqli_close($con);

    echo '<script type="text/javascript">alert("Complaint Submited Succesfully");window.location=\'Complain.php\';</script>';
} else {
    header("location:../index.php");
}
?>
    </body>
</html>
