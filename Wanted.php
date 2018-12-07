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
            .style7 {color: #289EC2}
            .style9 {font-weight: bold}
            .style10 {color: #FFFFFF; font-weight: bold; }
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
                    <h2>Most Wanted</h2>
                    <?php
// Establish Connection with Database
                    $con = mysql_connect("localhost", "root");
// Select Database
                    mysql_select_db("cms", $con);
// Specify the query to execute
                    $sql = "select * from mostwanted_tbl order by Station_Name";
// Execute query
                    $result = mysql_query($sql, $con);
// Loop through each records 
                    while ($row = mysql_fetch_array($result)) {
                        $Id = $row['Wanted_Id'];
                        $Name = $row['Wanted_Name'];
                        $Loc = $row['Wanted_Location'];
                        $Crime = $row['Wanted_Crime'];
                        $Desc = $row['Wanted_Desc'];
                        $Photo = $row['Wanted_Image'];
                        ?>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tr>
                                <td width="16%" rowspan="3"><strong><img src="Documents/<?php echo $Photo; ?>" alt="" width="125" height="125" /></strong></td>
                                <td height="21" bgcolor="#FFFFFF"><span class="style3"><strong>Name:</strong></span><span class="style3"><strong><?php echo $Name; ?></strong></span></td>
                                <td width="46%" bgcolor="#FFFFFF"><span class="style3"><strong>Location:</strong></span><span class="style3"><strong><?php echo $Loc; ?></strong></span></td>
                            </tr>
                            <tr>
                                <td width="38%" height="21" bgcolor="#2AA2C7"><span class="style10">Description of Most Wanted</span></td>
                                <td bgcolor="#2AA2C7"><span class="style10">Crime Done By Most Wanted</span></td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $Crime; ?></strong></td>
                                <td><strong><?php echo $Desc; ?></strong></td>
                            </tr>
                            <tr>
                                <td colspan="3" bgcolor="#DFB418">&nbsp;</td>
                            </tr>
                        </table>
                        <?php
                    }

// Close the connection
                    mysql_close($con);
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