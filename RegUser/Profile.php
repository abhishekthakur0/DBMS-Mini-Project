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
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
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
// Select Database
mysqli_select_db($con,"cms");
// Specify the query to execute
$sql = "select * from user_tbl where User_Id='" . $_SESSION['ID'] . "' ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while ($row = mysqli_fetch_array($result)) {
    $Id = $row['User_Id'];
    $Name = $row['Name'];
    $Address = $row['Address'];
    $City = $row['City'];
    $Email = $row['Email'];
    $Mobile = $row['Mobile'];
    $Gender = $row['Gender'];
    $Birthdate = $row['BirthDate'];
    $Station_Name = $row['Station_Name'];

    $UserName = $row['UserName'];
    $Password = $row['Password'];
}
?>
                    <table width="100%" height="246" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="35" bgcolor="#91D5E8"><span class="style1 style5"><strong>ID:</strong></span></td>
                            <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $Id; ?></strong></span></td>
                        </tr>
                        <tr>
                            <td height="37" bgcolor="#DAF1F8"><span class="style1 style5"><strong>Name:</strong></span></td>
                            <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $Name; ?></strong></span></td>
                        </tr>
                        <tr>
                            <td height="38" bgcolor="#91D5E8"><span class="style1 style5"><strong>Address:</strong></span></td>
                            <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $Address; ?></strong></span></td>
                        </tr>
                        <tr>
                            <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>City:</strong></span></td>
                            <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $City; ?></strong></span></td>
                        </tr>
                        <tr>
                            <td height="32" bgcolor="#91D5E8"><span class="style1 style5"><strong>Mobile:</strong></span></td>
                            <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $Mobile; ?></strong></span></td>
                        </tr>
                        <tr>
                            <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>Email:</strong></span></td>
                            <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $Email; ?></strong></span></td>
                        </tr>
                        <tr>
                            <td height="34" bgcolor="#91D5E8"><span class="style1 style5"><strong>Gender:</strong></span></td>
                            <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $Gender; ?></strong></span></td>
                        </tr>
                        <tr>
                            <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>BirthDate:</strong></span></td>
                            <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $Birthdate; ?></strong></span></td>
                        </tr>
                        <tr>
                            <td height="34" bgcolor="#91D5E8"><span class="style1 style5"><strong>Station Name:</strong></span></td>
                            <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $Station_Name; ?></strong></span></td>
                        </tr>



                        <tr>
                            <td>&nbsp;</td>
                            <td><a href="EditProfile.php?Id=<?php echo $Id; ?>"><strong>Edit Profile</strong></a></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
<?php
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