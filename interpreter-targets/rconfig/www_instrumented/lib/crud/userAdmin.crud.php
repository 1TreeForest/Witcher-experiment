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
$____key = 222626497 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 111313248;
require_once "/home/rconfig/classes/usersession.class.php";
require_once "/home/rconfig/classes/ADLog.class.php";
require_once "/home/rconfig/config/functions.inc.php";
$log = ADLog::getInstance();
if (!$session->logged_in) {
    $____key = 44650549 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 22325274;
    echo 'Don\'t bother trying to hack me!!!!!<br /> This hack attempt has been logged';
    $log->Warn("Security Issue: Some tried to access this file directly from IP: " . $_SERVER['REMOTE_ADDR'] . " & Username: " . $session->username . " (File: " . $_SERVER['PHP_SELF'] . ")");
    // need to add authentication to this script
    header("Location: " . $config_basedir . "login.php");
} else {
    $____key = 120580367 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 60290183;
    require_once "../../../classes/db2.class.php";
    $db2 = new db2();
    $log = ADLog::getInstance();
    /* SPECIAL NOTE - due to the use of Login System 2.0, i am using this ../../classes
        features to add/ edit users from the DB. It incorportates ready made error handling, validation and emailing etc..
        There are not any ADD or EDIT CRUD fuctions on this page
       */
    /* begin delete check */
    if (isset($_POST['del'])) {
        $____key = 72984823 ^ $GLOBALS["____instr"]["prev"];
        isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
        $GLOBALS["____instr"]["map"][$____key] += 1;
        $GLOBALS["____instr"]["prev"] = 36492411;
        if (ctype_digit($_POST['id'])) {
            $____key = 163434749 ^ $GLOBALS["____instr"]["prev"];
            isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
            $GLOBALS["____instr"]["map"][$____key] += 1;
            $GLOBALS["____instr"]["prev"] = 81717374;
            $id = $_POST['id'];
        } else {
            $____key = 236891259 ^ $GLOBALS["____instr"]["prev"];
            isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
            $GLOBALS["____instr"]["map"][$____key] += 1;
            $GLOBALS["____instr"]["prev"] = 118445629;
            $errors['Fail'] = "Fatal: id not of type int for getRow";
            $log->Fatal("Fatal: id not of type int for getRow - " . $_SERVER['PHP_SELF'] . ")");
            $_SESSION['errors'] = $errors;
            session_write_close();
            header("Location: " . $config_basedir . "useradmin.php?error");
            exit;
        }
        $____key = 168042535 ^ $GLOBALS["____instr"]["prev"];
        isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
        $GLOBALS["____instr"]["map"][$____key] += 1;
        $GLOBALS["____instr"]["prev"] = 84021267;
        /* the query */
        $db2->query("UPDATE users SET status = 2 WHERE id = :id");
        $db2->bind(':id', $id);
        $resultUpdate = $db2->execute();
        if ($resultUpdate) {
            $____key = 174731894 ^ $GLOBALS["____instr"]["prev"];
            isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
            $GLOBALS["____instr"]["map"][$____key] += 1;
            $GLOBALS["____instr"]["prev"] = 87365947;
            $log->Info("Success: Deleted user of ID: " . $id . " in DB (File: " . $_SERVER['PHP_SELF'] . ")");
            $response = json_encode(array('success' => true));
        } else {
            $____key = 194254616 ^ $GLOBALS["____instr"]["prev"];
            isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
            $GLOBALS["____instr"]["map"][$____key] += 1;
            $GLOBALS["____instr"]["prev"] = 97127308;
            $log->Warn("Failure: Unable to delete user of ID: " . $id . " in DB (File: " . $_SERVER['PHP_SELF'] . ")");
            $response = json_encode(array('failure' => true));
        }
        $____key = 105128559 ^ $GLOBALS["____instr"]["prev"];
        isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
        $GLOBALS["____instr"]["map"][$____key] += 1;
        $GLOBALS["____instr"]["prev"] = 52564279;
        echo $response;
    } elseif (isset($_GET['getRow']) && isset($_GET['id'])) {
        $____key = 143231726 ^ $GLOBALS["____instr"]["prev"];
        isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
        $GLOBALS["____instr"]["map"][$____key] += 1;
        $GLOBALS["____instr"]["prev"] = 71615863;
        if (ctype_digit($_GET['id'])) {
            $____key = 44888128 ^ $GLOBALS["____instr"]["prev"];
            isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
            $GLOBALS["____instr"]["map"][$____key] += 1;
            $GLOBALS["____instr"]["prev"] = 22444064;
            $id = $_GET['id'];
        } else {
            $____key = 20265722 ^ $GLOBALS["____instr"]["prev"];
            isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
            $GLOBALS["____instr"]["map"][$____key] += 1;
            $GLOBALS["____instr"]["prev"] = 10132861;
            $errors['Fail'] = "Fatal: id not of type int for getRow";
            $log->Fatal("Fatal: id not of type int for getRow - " . $_SERVER['PHP_SELF'] . ")");
            $_SESSION['errors'] = $errors;
            session_write_close();
            header("Location: " . $config_basedir . "useradmin.php?error");
            exit;
        }
        $____key = 17827570 ^ $GLOBALS["____instr"]["prev"];
        isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
        $GLOBALS["____instr"]["map"][$____key] += 1;
        $GLOBALS["____instr"]["prev"] = 8913785;
        $db2->query("SELECT id, username, email, userlevel FROM users WHERE status = 1 AND id = :id");
        $db2->bind(':id', $id);
        $resultSelect = $db2->resultset();
        $items = array();
        foreach ($resultSelect as $row) {
            $____key = 115533329 ^ $GLOBALS["____instr"]["prev"];
            isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
            $GLOBALS["____instr"]["map"][$____key] += 1;
            $GLOBALS["____instr"]["prev"] = 57766664;
            array_push($items, $row);
        }
        $____key = 113704512 ^ $GLOBALS["____instr"]["prev"];
        isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
        $GLOBALS["____instr"]["map"][$____key] += 1;
        $GLOBALS["____instr"]["prev"] = 56852256;
        $result["rows"] = $items;
        echo json_encode($result);
    }
    $____key = 217007462 ^ $GLOBALS["____instr"]["prev"];
    isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
    $GLOBALS["____instr"]["map"][$____key] += 1;
    $GLOBALS["____instr"]["prev"] = 108503731;
    /* end GetId */
}
$____key = 97363410 ^ $GLOBALS["____instr"]["prev"];
isset($GLOBALS["____instr"]["map"][$____key]) ?: ($GLOBALS["____instr"]["map"][$____key] = 0);
$GLOBALS["____instr"]["map"][$____key] += 1;
$GLOBALS["____instr"]["prev"] = 48681705;