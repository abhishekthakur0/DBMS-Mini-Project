<style type="text/css">
    <!--
    .style1 {color: #000000}
    -->
</style>
<div id="templatemo_header_bar">

    <div id="header">

        <img src="images/Head.JPG"/>
    </div>



</div>
<div id="templatemo_banner">

    <div id="templatemo_menu">
        <ul>
            <li><a href="Index.php" class="current">Home</a></li>
            <li><a href="News.php">News</a></li>
            <li><a href="Tips.php">Safety Tips</a></li>
            <li><a href="Missing.php">Missing Persons</a></li>
            <li><a href="Wanted.php">Most Wanted</a></li>
            <li><a href="Register.php">Register</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
        </ul>    	
    </div> <!-- end of menu -->

    <div id="templatemo_slider">

        <div id="one" class="contentslider">
            <div class="cs_wrapper">

            </div><!-- End cs_wrapper -->
        </div><!-- End contentslider -->



    </div> <!-- end of slider -->

    <div id="login">

        <h2>Member</h2>

        <form action="login.php" method="post">
            <label><span class="style1">Username</span></label>
            <input type="text" value="" name="username" size="10" class="input_field" title="username" />
            <label><span class="style1">Password</span></label>
            <input type="password" value="" name="password" class="input_field" title="password" />
            <label><span class="style1">Select User</span></label>

            <label>
                <select name="cmbUser" id="cmbUser">
                    <option>User</option>
                    <option>Police</option>
                    <option>Admin</option>
                </select>
            </label>
            <input type="submit" name="login" value="Login" alt="login" id="submit_btn" title="Login" />

        </form>
        <div class="cleaner"></div>

    </div>

</div>