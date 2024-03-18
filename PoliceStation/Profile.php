<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Crime Management System</title>
        <link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style1 {color: #000000}
            -->
        </style>
    </head>
    <body>
        <div id="templatemo_wrapper">
<?php
include "Header.php"
?>
            <div id="templatemo_content">
                <div class="section_w800">
                    <h2>Edit Your Profile</h2>
                    <p>&nbsp;</p>
                    <?php
// Establish Connection with Database
$con = mysqli_connect("localhost", "root");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Select Database
mysqli_select_db($con,"cms");
// Specify the query to execute
$sql = "SELECT * FROM policestation_tbl WHERE Station_Id='" . $_SESSION['ID'] . "'";
// Execute query
$result = mysqli_query($con,$sql);
// Check if the query executed successfully
if ($result) {
    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through each record
        while ($row = mysqli_fetch_array($result)) {
            $stationId = $row['Station_Id'];
            $stationName = $row['Station_Name'];
            $address = $row['Address'];
            $city = $row['City'];
            $mobile = $row['Mobile'];
            $email = $row['Email'];
            $userName = $row['UserName'];
            $password = $row['Password'];
            // Display station details
            ?>
            <table width="100%" height="246" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="35" bgcolor="#91D5E8"><span class="style1 style5"><strong>Station ID:</strong></span></td>
                    <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $stationId; ?></strong></span></td>
                </tr>
                <tr>
                    <td height="37" bgcolor="#DAF1F8"><span class="style1 style5"><strong>Station Name:</strong></span></td>
                    <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $stationName; ?></strong></span></td>
                </tr>
                <tr>
                    <td height="38" bgcolor="#91D5E8"><span class="style1 style5"><strong>Address:</strong></span></td>
                    <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $address; ?></strong></span></td>
                </tr>
                <tr>
                    <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>City:</strong></span></td>
                    <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $city; ?></strong></span></td>
                </tr>
                <tr>
                    <td height="32" bgcolor="#91D5E8"><span class="style1 style5"><strong>Mobile:</strong></span></td>
                    <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $mobile; ?></strong></span></td>
                </tr>
                <tr>
                    <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>Email:</strong></span></td>
                    <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $email; ?></strong></span></td>
                </tr>
                <tr>
                    <td height="34" bgcolor="#91D5E8"><span class="style1 style5"><strong>User Name:</strong></span></td>
                    <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $userName; ?></strong></span></td>
                </tr>
                <tr>
                    <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>Password:</strong></span></td>
                    <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $password; ?></strong></span></td>
                </tr>
            </table>
            <?php
        }
    } else {
        echo "No records found";
    }
} else {
    echo "Error: " . mysqli_error($con);
}
// Close the connection
mysqli_close($con);
?>

                    <div class="cleaner"></div>
                </div> <!-- end of section_w760 -->

            </div> <!-- end of templatemo_content -->
                    <?php
                    include "Footer.php";
                    ?>

        </div> <!-- end of templatemo_wrapper -->
    </body>
</html>