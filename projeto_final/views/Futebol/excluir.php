<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {

    require_once "../../controllers/FutebolController.php";

    $FutebolController = new FutebolController();

    $rs = $FutebolController->remove($_GET['id']);

    if ($rs) {
        header("location: ./");
        exit();
    }
}
