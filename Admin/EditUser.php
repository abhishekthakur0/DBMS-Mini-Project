<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
if (!isset($_SESSION)) {
    session_start();
    if (!isset($_SESSION['Name'])) {
        header("location:../index.php");
    }
}
?>
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
                    <h2>Welcome To Control Panel</h2>
            <?php
            $Id = $_GET['UserId'];
// Establish Connection with Database
            $con = mysqli_connect("localhost", "root");
// Select Database
            mysqli_select_db($con,"cms");
// Specify the query to execute
            $sql = "select * from admin_tbl where Admin_Id=" . $Id . "";
// Execute query
            $result = mysqli_query($con,$sql);
// Loop through each records 
            while ($row = mysqli_fetch_array($result)) {
                $Id = $row['Admin_Id'];
                $Name = $row['Admin_Name'];
                $Password = $row['Admin_Password'];
            }
            ?>

                    <form id="form1" name="form1" method="post" action="UpdateUser.php?Id=<?php echo $Id; ?>">
                        <table width="100%" height="118" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="30"><span class="style2">User Id:</span></td>
                                <td><?php echo $Id; ?></td>
                            </tr>
                            <tr>
                                <td height="28"><span class="style2">User Name:</span></td>
                                <td><span id="sprytextfield1">
                                        <label>
                                            <input type="text" name="txtName" id="txtName" value="<?php echo $Name; ?>" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="29"><span class="style2">Password:</span></td>
                                <td><span id="sprytextfield2">
                                        <label>
                                            <input type="password" name="txtPass" id="txtPass" value="<?php echo $Password; ?>" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><label>
                                        <input type="submit" name="button" id="button" value="Submit" />
                                    </label></td>
                            </tr>
                        </table>
                    </form>
<?php
// Close the connection
mysqli_close($con);
?>
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
        //-->
        </script>
    </body>
</html>