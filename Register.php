<?php require_once('Connections/CMS.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {

    function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") {
        $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

        $theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string($theValue) : mysql_escape_string($theValue);

        switch ($theType) {
            case "text":
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "long":
            case "int":
                $theValue = ($theValue != "") ? intval($theValue) : "NULL";
                break;
            case "double":
                $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
                break;
            case "date":
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "defined":
                $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
                break;
        }
        return $theValue;
    }

}

mysqli_select_db($CMS,$database_CMS);
$query_Recordset1 = "SELECT Station_Name FROM policestation_tbl";
$Recordset1 = mysqli_query($CMS,$query_Recordset1) or die(mysqli_error($CMS));
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Crime Management System</title>
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style1 {
                color: #000000;
                font-weight: bold;
            }
            -->
        </style>
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
                        [//Mobile

                            ["num",
                                "Please Enter valid Mobile "
                            ],
                            ["minlen=10",
                                "Please Enter valid Mobile "
                            ]

                        ],
                        [//Email
                            ["minlen=1",
                                "Please Enter Email "
                            ],
                            ["email",
                                "Please Enter valid email "
                            ]

                        ],
                        [//Gender


                        ],
                        [//Birthdate

                            ["minlen=1",
                                "Please Select BirthDate "
                            ]

                        ],
                        [//Police Station


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

                        ],
                        [//Document

                            ["minlen=1",
                                "Please Select File "
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
                    <h2>Register Here To Complain Online</h2>
                    <form action="CreateUser.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return validateForm(this, arrFormValidation);">
                        <table width="100%" height="417" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td><span class="style1">Name:</span></td>
                                <td><span id="sprytextfield1">
                                        <label>
                                            <input type="text" name="txtName" id="txtName" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td><span class="style1">Address:</span></td>
                                <td><span id="sprytextarea1">
                                        <label>
                                            <textarea name="txtAdd" id="txtAdd" cols="35" rows="3"></textarea>
                                        </label>
                                        <span class="textareaRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td><span class="style1">City:</span></td>
                                <td><label>
                                        <select name="cmbCity" id="cmbCity">

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
                                <td><span class="style1">Mobile Number:</span></td>
                                <td><span id="sprytextfield2">
                                        <label>
                                            <input type="text" name="txtMobile" id="txtMobile" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td><span class="style1">Email ID:</span></td>
                                <td><span id="sprytextfield3">
                                        <label>
                                            <input type="text" name="txtEmail" id="txtEmail" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td><span class="style1">Gender:</span></td>
                                <td><label>
                                        <select name="cmbGender" id="cmbGender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </label></td>
                            </tr>
                            <tr>
                                <td><span class="style1">Birth Date:</span></td>
                                <td><span id="sprytextfield4">
                                        <label>
                                            <input type="text" name="txtDate" id="txtDate" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td><span class="style1">Police Station:</span></td>
                                <td><label>
                                        <select name="cmbStation" id="cmbStation">
                                            <?php
                                            do {
                                                ?>
                                                <option value="<?php echo $row_Recordset1['Station_Name'] ?>"><?php echo $row_Recordset1['Station_Name'] ?></option>
                                                <?php
                                            } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
                                            $rows = mysql_num_rows($Recordset1);
                                            if ($rows > 0) {
                                                mysql_data_seek($Recordset1, 0);
                                                $row_Recordset1 = mysql_fetch_assoc($Recordset1);
                                            }
                                            ?>
                                        </select>
                                    </label></td>
                            </tr>
                            <tr>
                                <td><span class="style1">User Name:</span></td>
                                <td><span id="sprytextfield5">
                                        <label>
                                            <input type="text" name="txtUserName" id="txtUserName" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td><span class="style1">Password:</span></td>
                                <td><span id="sprytextfield6">
                                        <label>
                                            <input type="password" name="txtPassword" id="txtPassword" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td><span class="style1">Upload Proof:</span></td>
                                <td><label>
                                        <input type="file" name="txtFile" id="txtFile" />
                                    </label></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><label>
                                        <input type="submit" name="button" id="button" value="Submit" />
                                    </label></td>
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
            var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
            var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
            var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
            var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
            var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
            var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
        //-->
        </script>
    </body>
</html>
<?php
mysql_free_result($Recordset1);
?>