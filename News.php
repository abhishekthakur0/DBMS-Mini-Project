<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>City Without Crime</title>
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
                    <h2>Latest News</h2>
                    <table width="100%" border="0" bordercolor="#2AA2C7" >

                        <?php
// Establish Connection with Database
                        $con = mysql_connect("localhost", "root");
// Select Database
                        mysql_select_db("cms", $con);
// Specify the query to execute
                        $sql = "select * from News_Tbl";
// Execute query
                        $result = mysql_query($sql, $con);
// Loop through each records 
                        while ($row = mysql_fetch_array($result)) {
                            $Id = $row['News_Id'];
                            $News = $row['News_Title'];
                            $Date = $row['News_Date'];
                            ?>
                            <tr>
                                <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong></strong></div><img src="images/templatemo_list_icon.png" width="13" height="13" /></td>
                                <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo "Date:" . $Date . ":" . $News; ?></strong></div></td>

                            </tr>
                            <?php
                        }
// Retrieve Number of records returned
                        $records = mysql_num_rows($result);
                        ?>
                        <?php
// Close the connection
                        mysql_close($con);
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