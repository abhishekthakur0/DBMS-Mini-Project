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
                    <h2>Manage Complaints</h2>
                    <table width="100%" border="1" bordercolor="#E3B71A" >
                        <tr>
                            <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Id</strong></div></th>
                            <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Person Name</strong></div></th>
                            <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Type</strong></div></th>
                            <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Complaint</strong></div></th>
                            <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Date</strong></div></th>
                            <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Status</strong></div></th>

                            <th bgcolor="#E3B71A" class="style6 style2"><div align="center" class="style2">Process</div></th>
                        </tr>
                        <?php
// Establish Connection with Database
                        $con = mysqli_connect("localhost", "root");
// Select Database
                        mysqli_select_db($con,"cms");
// Specify the query to execute
                        $sql = "SELECT complaint_tbl.Complaint_Id, complaint_tbl.User_Id, complaint_tbl.Station_Name, complaint_tbl.Complaint_Type, complaint_tbl.Complaint_Desc, complaint_tbl.Complaint_Date, complaint_tbl.Status, user_tbl.Name
FROM  complaint_tbl, user_tbl
WHERE complaint_tbl.User_Id=user_tbl.User_Id and  complaint_tbl.Station_Name='" . $_SESSION['Name'] . "' and complaint_tbl.Status='Submited'";
// Execute query
                        $result = mysqli_query($con,$sql);
// Loop through each records 
                        while ($row = mysqli_fetch_array($result)) {
                            $Id = $row['Complaint_Id'];
                            $Name = $row['Name'];
                            $Type = $row['Complaint_Type'];
                            $Desc = $row['Complaint_Desc'];
                            $Status = $row['Status'];
                            $Date = $row['Complaint_Date'];
                            $RegId = $row['User_Id'];
                            ?>
                            <tr>
                                <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Id; ?></strong></div></td>
                                <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><a href="ViewDetail.php?UserId=<?php echo $RegId; ?>"><?php echo $Name; ?></a></strong></div></td>
                                <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Type; ?></strong></div></td>
                                <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Desc; ?></strong></div></td>
                                <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Date; ?></strong></div></td>
                                <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Status; ?></strong></div></td>

                                <td class="style6"><div align="center"><a href="Process.php?Id=<?php echo $Id; ?>">Process</a></div></td>
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