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
$____key = 227039702 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 113519851;
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
if (isset($_SESSION['errors'])) {
    $____key = 213121093 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 106560546;
    $errors = $_SESSION['errors'];
}
$____key = 56389251 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 28194625;
/* "Do NOT unset the whole $_SESSION with unset($_SESSION) as this will disable the registering of session variables through the $_SESSION superglobal." */
$_SESSION['errors'] = array();
?>
                <fieldset  id="tableFieldset">
                    <legend>Custom Properties</legend>
                    <?php 
if (isset($errors['Success'])) {
    $____key = 11046518 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 5523259;
    echo "<span class=\"error\">" . $errors['Success'] . "</span><br/>";
}
$____key = 20791271 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 10395635;
if (isset($errors['Fail'])) {
    $____key = 111346718 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 55673359;
    echo "<span class=\"error\">" . $errors['Fail'] . "</span><br/>";
}
$____key = 139385214 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 69692607;
?>
                    <div id="toolbar">
                        <button class="show_hide">Add Property</button>
                        <?php 
// removed<button onclick="editCustProp()">Edit Property</button>
?>
                        <button onclick="delCustProp()">Remove Property</button>
                    </div>
                    <!-- begin devices form -->
                    <div class="mainformDiv">
                        <form id="propertyAdd" method="post" action="lib/crud/customProperties.crud.php" enctype="multipart/form-data" class="myform stylizedForm stylized"  style="width:100%;">

                            <div style="width:300px; margin-bottom:10px;">
                                <label for="customProperty"><font color="red">*</font> Custom Property: 
                                    <span class="small">(White Space will be removed from text)</span>
                                </label>
                                <input name="customProperty" id="customProperty">
                                <div class="spacer"></div>
                                <?php 
// echo error message if is sent back in GET from CRUD
if (isset($errors['customProperty'])) {
    $____key = 67978970 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 33989485;
    echo "<span class=\"error\">" . $errors['customProperty'] . "</span>";
}
$____key = 121137693 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 60568846;
?> 
                                <div class="spacer"></div>

                                <input type="hidden" id="add" name="add" value="add">
                                <div class="spacer"></div>
                                <button id="save" type="submit">Save</button>
                                <button class="show_hide" type="button">Close</button><?php 
/* type="button" to remove default form submit function which when pressed can cause the form action attr to take place */
?>
                            </div>
                        </form>
                    </div>
                    <!-- End mainformDiv -->
                    <div id="table">
                        <?php 
/* full table stored off in different script */
include "customProperties.inc.php";
?>
                    </div>
                </fieldset>
            </div>
            <!-- End Content -->
            <div style="clear:both;">
            </div>
        </div>
        <!-- End Main -->
        <!-- JS script Include -->
        <script type="text/JavaScript" src="js/customProperties.js"></script>
        <!-- Footer Include -->
        <?php 
include "includes/footer.inc.php";
?>
    </div>
    <!-- End Mainwrap -->
</body>
</html>