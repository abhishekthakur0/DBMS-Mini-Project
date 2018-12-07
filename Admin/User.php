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
        <script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
        <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style1 {
                font-size: 12px
            }
            .style3 {
                font-size: 12;
                color: #FFFFFF;
            }
            .style4 {
                color: #FFFFFF
            }
            -->
        </style>
        <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style5 {color: #000000}
            .style6 {color: #CCCCCC}
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
                    <h2>User Management</h2>
                    <div id="TabbedPanels1" class="TabbedPanels">
                        <ul class="TabbedPanelsTabGroup">
                            <li class="TabbedPanelsTab style1 style4" tabindex="0">Create User</li>
                            <li class="TabbedPanelsTab style3 style1 style1" tabindex="0">Display User</li>
                        </ul>
                        <div class="TabbedPanelsContentGroup">
                            <div class="TabbedPanelsContent">
                                <form id="form1" name="form1" method="post" action="InsertUser.php">
                                    <table width="100%" height="118" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><span class="style5">User Name:</span></td>
                                            <td><span id="sprytextfield1">
                                                    <label>
                                                        <input type="text" name="txtUserName" id="txtUserName" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style5">Password:</span></td>
                                            <td><span id="sprytextfield2">
                                                    <label>
                                                        <input type="password" name="txtPassword" id="txtPassword" />
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
                            </div>
                            <div class="TabbedPanelsContent">
                                <table width="100%" border="1" bordercolor="#2AA2C7" >
                                    <tr>
                                        <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Id</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>UserName</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Edit</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style12 style2 style4">Delete</div></th>
                                    </tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost", "root");
// Select Database
mysqli_select_db($con,"cms");
// Specify the query to execute
$sql = "select * from Admin_Tbl ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while ($row = mysqli_fetch_array($result)) {
    $Id = $row['Admin_Id'];
    $UserName = $row['Admin_Name'];
    ?>
                                        <tr>
                                            <td class="style6"><div align="left" class="style9 style5 style4"><strong><?php echo $Id; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4"><strong><?php echo $UserName; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4"><strong><a href="EditUser.php?UserId=<?php echo $Id; ?>">Edit</a></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4"><strong><a href="DeleteUser.php?UserId=<?php echo $Id; ?>">Delete</a></strong></div></td>
                                        </tr>
    <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                                    <?php
// Close the connection
                                    mysqli_close($con);
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
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
            var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
            var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
            var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
        //-->
        </script>
    </body>
</html>