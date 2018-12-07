<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Crime Management System</title>
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style1 {color: #000000}
            .style2 {color: #000000; font-weight: bold; }
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
                        [//Feedback

                            ["minlen=1",
                                "Please Enter Feedback "
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
                    <h2>Contact Us</h2>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="5%"><img src="images/booknow.png" width="32" height="32" /></td>
                            <td width="95%"><p class="style1"><strong>Head Police Station</strong></p>
                                <p class="style1"><strong>Near State High Way Road</strong></p>
                                <p class="style1"><strong>Gandhinagar</strong></p></td>
                        </tr>
                        <tr>
                            <td><img src="images/call.png" width="32" height="32" /></td>
                            <td><p class="style1"><strong>0 79 99999999</strong></p>
                                <p class="style2">0 79 88888888</p></td>
                        </tr>
                        <tr>
                            <td><img src="images/mail.png" width="32" height="32" /></td>
                            <td><span class="style1"><strong>info@crimemanagement.com</strong></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <h2>Feedback</h2>
                    <form id="form1" name="form1" method="post" action="InsertFeedback.php" onSubmit="return validateForm(this, arrFormValidation);">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="25%" height="37"><span class="style2">Name:</span></td>
                                <td width="75%"><span id="sprytextfield1">
                                        <label>
                                            <input type="text" name="txtName" id="txtName" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="41"><span class="style2">Email:</span></td>
                                <td><span id="sprytextfield2">
                                        <label>
                                            <input type="text" name="txtEmail" id="txtEmail" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="42"><span class="style2">Mobile:</span></td>
                                <td><span id="sprytextfield3">
                                        <label>
                                            <input type="text" name="txtMobile" id="txtMobile" />
                                        </label>
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="116"><span class="style2">Feedback:</span></td>
                                <td><span id="sprytextarea1">
                                        <label>
                                            <textarea name="txtFeedback" id="txtFeedback" cols="45" rows="5"></textarea>
                                        </label>
                                        <span class="textareaRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                                <td height="41">&nbsp;</td>
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
            var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
            var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
            var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
        //-->
        </script>
    </body>
</html>