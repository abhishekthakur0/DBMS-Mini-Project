<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Crime Management System</title>
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style2 {color: #FFFFFF}
            .style3 {color: #000000}
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
                    <h2>Safety Tips</h2>
                    <table width="100%" height="33" border="0" bordercolor="#2AA2C7" >

                    <?php
// Establish Connection with Database
$con = mysqli_connect("localhost", "root", "", "cms");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Specify the query to execute
$sql = "SELECT * FROM Tips_Tbl";
// Execute query
$result = mysqli_query($con, $sql);

// Check if query execution was successful
if (!$result) {
    echo "Error: " . mysqli_error($con);
    exit();
}

// Loop through each record
while ($row = mysqli_fetch_array($result)) {
    $Id = $row['Tips_Id'];
    $Detail = $row['Tips_Detail'];
    ?>
    <tr>
        <td width="4%" class="style6"><img src="images/templatemo_list_icon.png" width="13" height="13" /></td>
        <td width="96%" class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Detail; ?></strong></div></td>
    </tr>
    <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);

// Close connection
mysqli_close($con);
?>

                    </table>
                    <p>&nbsp;</p>
                    <div class="cleaner"></div>
                </div> <!-- end of section_w760 -->

            </div> <!-- end of templatemo_content -->
<?php
include "Footer.php";
?>

        </div> <!-- end of templatemo_wrapper -->
    </body>
</html>