<?php

    include("gOauthConf.php");

    $client->revokeToken();

    session_destroy();

    header("location:../login.php");

?>