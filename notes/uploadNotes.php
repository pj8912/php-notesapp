<?php

include '../includes/dbh.php';
$conn = mysqli_connect('localhost', 'root', '', 'makeit');
if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {

  if (isset($_POST['nid'])) {
    if (isset($_POST['bid'])) {

      $bid = $_POST['bid'];

      $nid = $_POST['nid'];

      $notes = $_POST['editor2'];

      $sql = "UPDATE notes set notes= '$notes'  where n_id = '$nid' ";

      mysqli_query($conn, $sql);

      header('location: createnotes.php?bid=' . $bid);
      exit();
    }
  }
}
