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
            .style1 {font-weight: bold}
            .style2 {
                color: #000000;
                font-weight: bold;
            }
            -->
        </style>
        <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="templatemo_wrapper">
<?php
include "Header.php"
?>
            <div id="templatemo_content">
                <div class="section_w800">
                    <h2>Welcome To Crime Management System</h2>
<?php
$Id = $_GET['StationId'];
// Establish Connection with Database
$con = mysqli_connect("localhost", "root");
// Select Database
mysqli_select_db($con,"cms");
// Specify the query to execute
$sql = "select * from PoliceStation_Tbl where Station_Id=" . $Id . "";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while ($row = mysqli_fetch_array($result)) {
    $Id = $row['Station_Id'];
    $Name = $row['Station_Name'];
    $Address = $row['Address'];
    $City = $row['City'];
    $Mobile = $row['Mobile'];
    $Email = $row['Email'];
    $UserName = $row['UserName'];
    $Password = $row['Password'];
}
?>
                    <form id="form1" name="form1" method="post" action="UpdateProfile.php?Id=<?php echo $Id; ?>">
                        <table width="100%" border="1" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="30" bgcolor="#91D5E8"><span class="style2">Station Id:</span></td>
                                <td bgcolor="#91D5E8"><?php echo $Id; ?></td>
                            </tr>
                            <tr>
                                <td height="29" bgcolor="#DAF1F8"><span class="style2">Station Name:</span></td>
                                <td bgcolor="#DAF1F8"><span id="sprytextfield1">
                                        <label>
                                            <input type="text" name="txtName" id="txtName" value="<?php echo $Name; ?>" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="29" bgcolor="#91D5E8"><span class="style2">Address:</span></td>
                                <td bgcolor="#91D5E8"><span id="sprytextfield2">
                                        <label>
                                            <textarea name="txtAdd" id="txtAdd"><?php echo $Address; ?></textarea>
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="29" bgcolor="#DAF1F8"><span class="style2">City:</span></td>
                                <td bgcolor="#DAF1F8"><span id="sprytextfield3">
                                        <label>
                                            <input type="text" name="txtCity" id="txtCity" value="<?php echo $City; ?>" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="29" bgcolor="#91D5E8"><span class="style2">Mobile Number:</span></td>
                                <td bgcolor="#91D5E8"><span id="sprytextfield4">
                                        <label>
                                            <input type="text" name="txtMobile" id="txtMobile" value="<?php echo $Mobile; ?>" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="32" bgcolor="#DAF1F8"><span class="style2">Email Id:</span></td>
                                <td bgcolor="#DAF1F8"><span id="sprytextfield5">
                                        <label>
                                            <input type="text" name="txtEmail" id="txtEmail" value="<?php echo $Email; ?>" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="31" bgcolor="#91D5E8"><span class="style2">User Name:</span></td>
                                <td bgcolor="#91D5E8"><span id="sprytextfield6">
                                        <label>
                                            <input type="text" name="txtUser" id="txtUser" value="<?php echo $UserName; ?>" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="34" bgcolor="#DAF1F8"><span class="style2">Password:</span></td>
                                <td bgcolor="#DAF1F8"><span id="sprytextfield7">
                                        <label>
                                            <input type="password" name="txtPass" id="txtPass" value="<?php echo $Password; ?>" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="32">&nbsp;</td>
                                <td><label>
                                        <input type="submit" name="button" id="button" value="Submit" />
                                    </label></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
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
        //-->
        </script>
    </body>
</html>