<?php

if (!array_key_exists("____instr", $GLOBALS)) {
    $GLOBALS["____instr"]["map"] = array();
    $GLOBALS["____instr"]["prev"] = 0;
    function ____instr_write_map()
    {
        $f = fopen("/var/instr/map." . (isset($_SERVER["HTTP_REQ_ID"]) ? $_SERVER["HTTP_REQ_ID"] : 0), "w+");
        foreach ($GLOBALS["____instr"]["map"] as $k => $v) {
            fwrite($f, $k . "-" . $v . "\n");
        }
        fclose($f);
    }
    register_shutdown_function("____instr_write_map");
}
$____key = 101920723 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 50960361;
include "includes/head.inc.php";
?>
<body>
    <!-- Headwrap Include -->
    <?php 
include "includes/masthead.inc.php";
?>
    <div id="mainwrap">
        <!-- TopNav Include -->
        <?php 
include "includes/topnav.inc.php";
?>
        <div id="main">
            <!-- Breadcrumb Include -->
            <?php 
include "includes/breadcrumb.inc.php";
?>
            <!-- Announcement Include -->
            <?php 
include "includes/announcement.inc.php";
?>
            <div id="content">
                <?php 
// echo error message if is sent back in GET from CRUD
if (isset($_SESSION['errors'])) {
    $____key = 177543138 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 88771569;
    // move nested errors array to new array
    $errors = $_SESSION['errors'];
}
$____key = 256587540 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 128293770;
/* "Do NOT unset the whole $_SESSION with unset($_SESSION) as this will disable the registering of session variables through the $_SESSION superglobal." */
$_SESSION['errors'] = array();
?>
                <fieldset id="tableFieldset">
                    <legend>User Management</legend>
                    <?php 
if (isset($errors['Success'])) {
    $____key = 14135486 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 7067743;
    echo "<span class=\"error\">" . $errors['Success'] . "</span><br/>";
}
$____key = 17877065 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 8938532;
?> 
                    <?php 
if (isset($errors['Fail'])) {
    $____key = 45892325 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 22946162;
    echo "<span class=\"error\">" . $errors['Fail'] . "</span><br/>";
}
$____key = 211804975 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 105902487;
?>
                    <div id="toolbar">
                        <button class="show_hide">Add User</button>
                        <button onclick="editUser()">Edit User</button>
                        <button onclick="delUser()">Remove User</button>
                    </div>
                    <!-- begin devices form -->
                    <div id="userAddDiv" class="mainformDiv">

                        <form id="userAdd" method="post" action="lib/crud/userprocess.php" enctype="multipart/form-data" class="myform stylizedForm stylized">

                            <div style="width:300px; margin-bottom:10px;">
                                <label for="username"><font color="red">*</font> Username: </label>
                                <input name="username" id="username" tabindex='1'>
                                <div class="spacer"></div>
                                <?php 
// echo error message if is sent back in GET from CRUD
if (isset($errors['username'])) {
    $____key = 105211230 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 52605615;
    echo "<span class=\"error\">" . $errors['username'] . "</span>";
}
$____key = 170210071 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 85105035;
?>

                                <label for="password"><font color="red">*</font> Password:</label>
                                <input name="password" id="password" type="password" tabindex='2'>
                                <div class="spacer"></div>
<?php 
// echo error message if is sent back in GET from CRUD
if (isset($errors['password'])) {
    $____key = 92098502 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 46049251;
    echo "<br /><span class=\"error\">" . $errors['password'] . "</span>";
}
$____key = 107534153 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 53767076;
?>

                                <label for="passconf"><font color="red">*</font> Password Confirm:</label>
                                <input name="passconf" id="passconf" type="password" tabindex='3'>
                                <div class="spacer"></div>
<?php 
// echo error message if is sent back in GET from CRUD
if (isset($errors['passconf'])) {
    $____key = 41689435 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 20844717;
    echo "<br /><span class=\"error\">" . $errors['passconf'] . "</span>";
}
$____key = 221818033 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 110909016;
?>

                                <label for="email"><font color="red">*</font> E-mail:</label>
                                <input name="email" id="email" size="40" tabindex='4'>
                                <div class="spacer"></div>
<?php 
// echo error message if is sent back in GET from CRUD
if (isset($errors['email'])) {
    $____key = 146811530 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 73405765;
    echo "<br /><span class=\"error\">" . $errors['email'] . "</span>";
}
$____key = 218912571 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 109456285;
?>
<div class="spacer"></div>
                                <label for="ulevelid"><font color="red">*</font> User Level:</label>
                                <select name="ulevelid" id="ulevelid" tabindex='5'>
                                    <option value="1" selected>User</option>
                                    <option value="9">Admin</option>
                                </select>
                                <div class="spacer"></div>

                                <input type="hidden" id="add" name="add" value="add">
                                <input type="hidden" id="editid" name="editid" value="">

                                <button id="save" tabindex='6' type="submit">Save</button>
                                <button class="show_hide" type="button" tabindex='7'>Close</button><?php 
/* type="button" to remove default form submit function which when pressed can cause the form action attr to take place */
?>
                                <div class="spacer"></div>
                            </div>
                        </form>
                    </div>
                    <!-- End mainformDiv -->
                    <div id="table">
<?php 
/* full table stored off in different script */
include "useradmin.inc.php";
?>
                    </div>
                </fieldset>
            </div><!-- End Content -->
            <div style="clear:both;"></div>
        </div><!-- End Main -->
        <!-- JS script Include -->
        <script type="text/JavaScript" src="js/useradmin.js"></script>
        <!-- Footer Include -->
<?php 
include "includes/footer.inc.php";
?>
    </div>
    <!-- End Mainwrap -->
</body>
</html>