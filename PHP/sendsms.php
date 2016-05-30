<?php



include('way2sms-api.php');

if (isset($_GET['uid']) && isset($_GET['pwd']) && isset($_GET['phone']) && isset($_GET['msg'])) {
    $res = sendWay2SMS($_GET['uid'], $_GET['pwd'], $_GET['phone'], $_GET['msg']);
    if (is_array($res))
        echo $res[0]['result'] ? 'true' : 'false';
    else
        echo $res;
    exit;
} else if (isset($_POST['uid']) && isset($_POST['pwd']) && isset($_POST['phone']) && isset($_POST['msg'])) {
    $smsg = stripslashes($_POST['msg']);
    $res  = sendWay2SMS($_POST['uid'], $_POST['pwd'], $_POST['phone'], $smsg);
    if (is_array($res))
        echo $res[0]['result'] ? 'true' : 'false';
    else
        echo $res;
    exit;
}
