<?php

    $conn = mysqli_connect('localhost', 'root', '', 'makeit');
    if (isset($_POST['cnx'])) {
     
      $bid = $_POST['cnx'];
      $cname = htmlspecialchars($_POST['note_name']);

      $sql = "INSERT into notes(note_name, b_id) values('$cname', '$bid')";
      $result = mysqli_query($conn, $sql);
      header('location: createnotes.php?bid='.$bid);
      exit();
    }
  