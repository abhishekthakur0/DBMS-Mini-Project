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
        <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style1 {font-weight: bold}
            .style2 {
                color: #000000;
                font-weight: bold;
            }
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
                    <h2>Welcome To Crime Management System</h2>
                    <form id="form1" name="form1" method="post" action="UpdateProfile.php">
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost", "root");
// Select Database
mysqli_select_db($con,"cms");
// Specify the query to execute
$sql = "select * from user_tbl where User_Id='" . $_GET['Id'] . "' ";
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
                                <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><span id="sprytextfield1">
                                                <label>
                                                    <input type="text" name="txtName" id="txtName" value="<?php echo $Name; ?>" />
                                                </label>
                                                <span class="textfieldRequiredMsg">A value is required.</span></span></strong></span></td>
                            </tr>
                            <tr>
                                <td height="38" bgcolor="#91D5E8"><span class="style1 style5"><strong>Address:</strong></span></td>
                                <td bgcolor="#91D5E8"><span class="style1 style5"><strong><span id="sprytextfield2">
                                                <label>
                                                    <input type="text" name="txtAdd" id="txtAdd" value="<?php echo $Address; ?>" />
                                                </label>
                                                <span class="textfieldRequiredMsg">A value is required.</span></span></strong></span></td>
                            </tr>
                            <tr>
                                <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>City:</strong></span></td>
                                <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><span id="sprytextfield4">
                                                <label>
                                                    <input type="text" name="txtCity" id="txtCity" value="<?php echo $City; ?>" />
                                                </label>
                                                <span class="textfieldRequiredMsg">A value is required.</span></span></strong></span></td>
                            </tr>
                            <tr>
                                <td height="32" bgcolor="#91D5E8"><span class="style1 style5"><strong>Mobile:</strong></span></td>
                                <td bgcolor="#91D5E8"><span class="style1 style5"><strong><span id="sprytextfield3">
                                                <label>
                                                    <input type="text" name="txtMobile" id="txtMobile"  value="<?php echo $Mobile; ?>"/>
                                                </label>
                                                <span class="textfieldRequiredMsg">A value is required.</span></span></strong></span></td>
                            </tr>
                            <tr>
                                <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>Email:</strong></span></td>
                                <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><span id="sprytextfield5">
                                                <label>
                                                    <input type="text" name="txtEmail" id="txtEmail" value="<?php echo $Email; ?>" />
                                                </label>
                                                <span class="textfieldRequiredMsg">A value is required.</span></span></strong></span></td>
                            </tr>
                            <tr>
                                <td height="34" bgcolor="#91D5E8"><span class="style1 style5"><strong>Gender:</strong></span></td>
                                <td bgcolor="#91D5E8"><label>
                                        <select name="cmbGender" id="cmbGender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </label></td>
                            </tr>
                            <tr>
                                <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>BirthDate:</strong></span></td>
                                <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><span id="sprytextfield6">
                                                <label>
                                                    <input type="text" name="txtBirthDate" id="txtBirthDate" value="<?php echo $Birthdate; ?>" />
                                                </label>
                                                <span class="textfieldRequiredMsg">A value is required.</span></span></strong></span></td>
                            </tr>
                            <tr>
                                <td height="34" bgcolor="#91D5E8"><span class="style1 style5"><strong>Station Name:</strong></span></td>
                                <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $Station_Name; ?></strong></span></td>
                            </tr>
                            <tr>
                                <td height="34" bgcolor="#91D5E8"><span class="style2">User Name:</span></td>
                                <td bgcolor="#91D5E8"><span id="sprytextfield7">
                                        <label>
                                            <input type="text" name="txtUser" id="txtUser"  value="<?php echo $UserName; ?>"/>
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="34" bgcolor="#91D5E8"><span class="style2">Password:</span></td>
                                <td bgcolor="#91D5E8"><span id="sprytextfield8">
                                        <label>
                                            <input type="text" name="txtPass" id="txtPass" value="<?php echo $Password; ?>" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>



                            <tr>
                                <td><label>
                                        <div align="center"></div>
                                    </label></td>
                                <td><input type="submit" name="button" id="button" value="Update Profile" /></td>
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
                    </form>
                    <p>&nbsp;</p>
                    <div class="cleaner"></div>
                </div> <!-- end of section_w760 -->

            </div> <!-- end of templatemo_content -->
<?php
include "Footer.php";
?>

        </div> <!-- end of templatemo_wrapper -->
        <script type="text/javascript">
        <!--
            var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
            var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
            var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
            var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
            var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
            var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
            var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
            var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
        //-->
        </script>
    </body>
</html>