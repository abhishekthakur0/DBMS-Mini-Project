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
        <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
        <link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style1 {
                font-size: 12px
            }
            .style2 {color: #FFFFFF}
            -->
        </style>
        <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style3 {color: #000000}
            .style6 {color: #CCCCCC}
            -->
        </style>
    </head>
    <body>
        <SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
        <SCRIPT language="JavaScript1.2">
            var arrFormValidation =
                    [
                        [//Name
                            ["minlen=1",
                                "Please Enter Name "
                            ]

                        ],
                        [//Address
                            ["minlen=1",
                                "Please Enter Address "
                            ]

                        ],
                        [//City


                        ],
                        [//Email
                            ["minlen=1",
                                "Please Enter Email "
                            ],
                            ["email",
                                "Please Enter valid email "
                            ]

                        ],
                        [//Mobile

                            ["num",
                                "Please Enter valid Mobile "
                            ],
                            ["minlen=10",
                                "Please Enter valid Mobile "
                            ]

                 ],
                        [//UserName

                            ["minlen=1",
                                "Please Enter UserName "
                            ]
                        ],
                        [//Password

                            ["minlen=1",
                                "Please Enter Password "
                            ]

                        ]
                    ];
        </SCRIPT>
        <div id="templatemo_wrapper">
<?php
include "Header.php"
?>
            <div id="templatemo_content">
                <div class="section_w800">
                    <h2>Police Station Management</h2>
                    <div id="TabbedPanels1" class="TabbedPanels">
                        <ul class="TabbedPanelsTabGroup">
                            <li class="TabbedPanelsTab style1 style2" tabindex="0">Create Police Station</li>
                            <li class="TabbedPanelsTab style1 style2" tabindex="0">Display Police Station</li>
                        </ul>
                        <div class="TabbedPanelsContentGroup">
                            <div class="TabbedPanelsContent">
                                <form id="form1" name="form1" method="post" action="InsertStation.php" onSubmit="return validateForm(this, arrFormValidation);">
                                    <table width="100%" height="329" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><span class="style3">Police Station Name:</span></td>
                                            <td><span id="sprytextfield1">
                                                    <label>
                                                        <input type="text" name="txtName" id="txtName" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Address:</span></td>
                                            <td><span id="sprytextarea1">
                                                    <label>
                                                        <textarea name="txtAdd" id="txtAdd" cols="35" rows="3"></textarea>
                                                    </label>
                                                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">City:</span></td>
                                            <td><label>
                                                    <select name="cmbCIty" id="cmbCIty">
                                                        <option>Kolkata</option>
                                                        <option>Mumbai</option>
                                                        <option>Chennai</option>
                                                        <option>Delhi</option>
                                                        <option>Patna</option>
                                                        <option>Bangalore</option>
                                                        <option>Medinipur</option>
                                                        <option>Kharagpur</option>
                                                        <option>Panagarh</option>
                                                        <option>Asansol</option>
                                                        <option>Tamluk</option>
                                                    </select>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Email ID:</span></td>
                                            <td><span id="sprytextfield2">
                                                    <label>
                                                        <input type="text" name="txtEmail" id="txtEmail" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Mobile Number:</span></td>
                                            <td><span id="sprytextfield3">
                                                    <label>
                                                        <input type="text" name="txtMobile" id="txtMobile" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">User Name:</span></td>
                                            <td><span id="sprytextfield4">
                                                    <label>
                                                        <input type="text" name="txtUser" id="txtUser" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Password:</span></td>
                                            <td><span id="sprytextfield5">
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
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>StationName</strong></div></th>
                                        <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Address</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>City</strong></div></th>
                                        <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Email</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Mobile</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style12 style2 style4">Delete</div></th>
                                    </tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost", "root");
// Select Database
mysqli_select_db($con,"cms");
// Specify the query to execute
$sql = "select * from policestation_tbl  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while ($row = mysqli_fetch_array($result)) {
    $Id = $row['Station_Id'];
    $Name = $row['Station_Name'];
    $Address = $row['Address'];
    $City = $row['City'];
    $Email = $row['Email'];
    $Mobile = $row['Mobile'];
    ?>
                                        <tr>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Id; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Name; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Address; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $City; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Email; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Mobile; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4"><strong><a href="DeleteStation.php?StationId=<?php echo $Id; ?>">Delete</a></strong></div></td>
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
            var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
            var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
            var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
            var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
            var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
        //-->
        </script>
    </body>
</html>