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
        <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
        <link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style1 {font-size: 12px}
            .style2 {color: #FFFFFF}
            .style3 {color: #000000}
            -->
        </style>
        <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
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
                    <h2>News Management</h2>
                    <div id="TabbedPanels1" class="TabbedPanels">
                        <ul class="TabbedPanelsTabGroup">
                            <li class="TabbedPanelsTab style1 style2" tabindex="0">Create News</li>
                            <li class="TabbedPanelsTab style1 style2" tabindex="0">Display News</li>
                        </ul>
                        <div class="TabbedPanelsContentGroup">
                            <div class="TabbedPanelsContent">
                                <form id="form1" name="form1" method="post" action="InsertNews.php">
                                    <table width="100%" height="127" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="80"><span class="style3">News Description:</span></td>
                                            <td><span id="sprytextarea1">
                                                    <label>
                                                        <textarea name="txtNews" id="txtNews" cols="45" rows="3"></textarea>
                                                    </label>
                                                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
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
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>News</strong></div></th>
                                        <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Date</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style12 style2 style4">Delete</div></th>
                                    </tr>
                                    <?php
// Establish Connection with Database
                                    $con = mysqli_connect("localhost", "root");
// Select Database
                                    mysqli_select_db($con,"cms");
// Specify the query to execute
                                    $sql = "select * from News_Tbl";
// Execute query
                                    $result = mysqli_query($sql, $con);
// Loop through each records 
                                    while ($row = mysqli_fetch_array($result)) {
                                        $Id = $row['News_Id'];
                                        $News = $row['News_Title'];
                                        $Date = $row['News_Date'];
                                        ?>
                                        <tr>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Id; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $News; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Date; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4"><strong><a href="DeleteNews.php?NewsId=<?php echo $Id; ?>">Delete</a></strong></div></td>
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
            var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
        </script>
    </body>
</html>