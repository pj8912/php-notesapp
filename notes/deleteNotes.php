<?php


if(isset($_REQUEST['nid']) &&  isset($_REQUEST['bid']) ){
    $nid = $_REQUEST['nid'];
    $bid = $_REQUEST['bid'];
    $conn = mysqli_connect('localhost', 'root', '', 'makeit');

    $sql = "DELETE FROM notes WHERE n_id = '$nid' ";
    mysqli_query($conn, $sql);
    header('location:createnotes.php?bid='.$bid);
    exit();
    }