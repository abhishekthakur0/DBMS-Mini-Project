<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Crime Management System</title>
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style3 {color: #000000}
            .style6 {color: #CCCCCC}
            .style7 {font-size: small}
            .style8 {font-family: Verdana, Arial, Helvetica, sans-serif}
            .style9 {color: #2AA2C7}
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
                    <h2>Missing Persons</h2>
                    <?php
// Establish Connection with Database
                    $con = mysql_connect("localhost", "root");
// Select Database
                    mysql_select_db("cms", $con);
// Specify the query to execute
                    $sql = "select * from missingperson_tbl order by Station_Name";
// Execute query
                    $result = mysql_query($sql, $con);
// Loop through each records 
                    while ($row = mysql_fetch_array($result)) {
                        $Id = $row['Person_Id'];
                        $Name = $row['First_Name'] . " " . $row['Middle_Name'] . " " . $row['Last_Name'];
                        $Gender = $row['Gender'];
                        $Height = $row['Height'];
                        $Weight = $row['Weight'];
                        $Contact_Person = $row['Contact_Person'];
                        $Contact_Address = $row['Contact_Address'];
                        $Contact_City = $row['Contact_City'];
                        $Contact_Mobile = $row['Contact_Mobile'];
                        $Photo = $row['Photo'];
                        ?>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td colspan="5" bgcolor="#E3B71A">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="19%" rowspan="4" align="center" valign="top"><strong><img src="Documents/<?php echo $Photo; ?>" alt="" width="150" height="171" border="5" /></strong></td>
                                <td width="8%" height="38"><span class="style3"><strong>Name:</strong></span></td>
                                <td width="23%"><span class="style3"><strong><?php echo $Name; ?></strong></span></td>
                                <td width="14%"><span class="style3"><strong>Contact Person:</strong></span></td>
                                <td width="36%"><span class="style3"><strong><?php echo $Contact_Person; ?></strong></span></td>
                            </tr>
                            <tr>
                                <td height="41"><span class="style3"><strong>Gender:</strong></span></td>
                                <td><span class="style3"><strong><?php echo $Gender; ?></strong></span></td>
                                <td><span class="style3"><strong>Contact Address:</strong></span></td>
                                <td><span class="style3"><strong><?php echo $Contact_Address; ?></strong></span></td>
                            </tr>
                            <tr>
                                <td height="40"><span class="style3"><strong>Height:</strong></span></td>
                                <td><span class="style3"><strong><?php echo $Height; ?></strong></span></td>
                                <td><span class="style3"><strong>Contact City:</strong></span></td>
                                <td><span class="style3"><strong><?php echo $Contact_City; ?></strong></span></td>
                            </tr>
                            <tr>
                                <td height="52"><span class="style3"><strong>Weight:</strong></span></td>
                                <td><span class="style3"><strong><?php echo $Weight; ?></strong></span></td>
                                <td><span class="style3"><strong>Contact Mobile:</strong></span></td>
                                <td><span class="style3"><strong><?php echo $Contact_Mobile; ?></strong></span></td>
                            </tr>

                            <tr>
                                <td colspan="5" bgcolor="#E3B71A">&nbsp;</td>
                            </tr>
                        </table>
                        <?php
                    }
// Close the connection
                    mysql_close($con);
                    ?>
                    <p>&nbsp;</p>
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