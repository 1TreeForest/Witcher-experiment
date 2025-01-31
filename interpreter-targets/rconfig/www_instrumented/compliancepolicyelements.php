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
$____key = 263084647 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 131542323;
include "includes/head.inc.php";
?>
<body>
    <!-- Masthead Include -->
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
    $____key = 238489368 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 119244684;
    // move nested errors array to new array
    $errors = $_SESSION['errors'];
}
$____key = 106491709 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 53245854;
/* "Do NOT unset the whole $_SESSION with unset($_SESSION) as this will disable the registering of session variables through the $_SESSION superglobal." */
$_SESSION['errors'] = array();
?>
                <fieldset id="tableFieldset">
                    <legend> Policy Elements </legend>
                    <?php 
if (isset($errors['Success'])) {
    $____key = 51444569 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 25722284;
    echo "<span class=\"error\">" . $errors['Success'] . "</span><br/>";
}
$____key = 64777056 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 32388528;
if (isset($errors['Fail'])) {
    $____key = 231767493 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 115883746;
    echo "<span class=\"error\">" . $errors['Fail'] . "</span><br/>";
}
$____key = 23787476 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 11893738;
if (isset($errors['selectRadioErr'])) {
    $____key = 122282355 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 61141177;
    echo "<span class=\"error\">" . $errors['selectRadioErr'] . "</span>";
}
$____key = 96043821 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 48021910;
?>
                    <div id="toolbar">
                        <button class="show_hide">Add Element</button>
                        <button onclick="editPolElem()">Edit Element</button>
                        <button onclick="delPolElem()">Remove Element</button>
                    </div>
                    <!-- begin devices form -->
                    <div class="mainformDiv">
                        <form id="elementAddForm" name="elementAddForm" method="post" action="lib/crud/compliancepolicyelements.crud.php" enctype="multipart/form-data" class="myform stylizedForm stylized" style="width:100%;">

                            <div id="formDiv" style="width:600px; margin-bottom:10px;">
                                <div>
                                    <label for="elementName"><font color="red">*</font> Element Name:</label>
                                    <input name="elementName" id="elementName" size="75" tabindex='1' <?php 
if (isset($errors['elementNameVal'])) {
    $____key = 187428824 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 93714412;
    echo 'value="' . $errors['elementNameVal'] . '"';
}
$____key = 38498206 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 19249103;
?>>
                                    <div  id="errorDiv" style="float:left;margin-left:220px; margin-top:-10px; margin-bottom:10px;">
                                        <?php 
if (isset($errors['elementName'])) {
    $____key = 24620807 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 12310403;
    echo "<span class=\"error\">" . $errors['elementName'] . "</span>";
}
$____key = 214275579 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 107137789;
?>
                                    </div>
                                </div>
                                <div style="float:left;">
                                    <label for="elementDesc"><font color="red">*</font> Element Description:</label>
                                    <input name="elementDesc" id="elementDesc" size="150" tabindex='2'  <?php 
if (isset($errors['elementDescVal'])) {
    $____key = 156092682 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 78046341;
    echo 'value="' . $errors['elementDescVal'] . '"';
}
$____key = 146379861 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 73189930;
?>>
                                    <div id="errorDiv" style="float:left;margin-left:220px; margin-top:-10px; margin-bottom:10px;">
<?php 
if (isset($errors['elementDesc'])) {
    $____key = 85443330 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 42721665;
    echo "<span class=\"error\">" . $errors['elementDesc'] . "</span>";
}
$____key = 197931931 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 98965965;
?>
                                    </div>
                                </div>

                                <div style="clear:both">
                                    <select id="singleParam1" name="singleParam1" style="width: 60px" tabindex='5'>
                                        <option value="1">equals</option>
                                        <option value="2">contains</option>
                                    </select>
                                    <input type="text" id="singleLine1" name="singleLine1" tabindex='6' style="width:345px;" <?php 
if (isset($errors['singleLine1val'])) {
    $____key = 160458839 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 80229419;
    echo 'value="' . $errors['singleLine1val'] . '"';
}
$____key = 44418010 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 22209005;
?>/>

                                    <div class="spacer"></div>
                                    <div  id="errorDiv" style="float:left;margin-left:77px; margin-top:-10px; margin-bottom:10px;">
<?php 
if (isset($errors['singleLine1'])) {
    $____key = 118348234 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 59174117;
    echo "<span class=\"error\">" . $errors['singleLine1'] . "</span>";
}
$____key = 81891966 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 40945983;
?>
                                    </div>						
                                </div>

                                <input type="hidden" id="add" name="add" value="add" tabindex='3'>
                                <input type="hidden" id="editid" name="editid" value="" tabindex='4'>
                                <div class="spacer"></div>
                                <button id="save" type="submit" tabindex='21'>Save</button>
                                <button class="show_hide" type="button" tabindex='22'>Close</button><?php 
/* type="button" to remove default form submit function which when pressed can cause the form action attr to take place */
?>
                            </div>
                        </form>
                    </div>
                    <!-- End mainformDiv -->
                    <div id="table">
<?php 
/* full table stored off in different script */
include "compliancepolicyelements.inc.php";
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
        <script type="text/JavaScript" src="js/compliancepolicyelements.js"></script>
        <!-- Footer Include -->
<?php 
include "includes/footer.inc.php";
?>
    </div>
    <!-- End Mainwrap -->
</body>
</html>