<?php include '../includes/header.php'; ?>
<h1 align="center">Edit Book Info</h1>
<div class="container">
    <div class="row ">

        <?php

        include '../includes/dbh.php';
        if (isset($_REQUEST['bid'])) {
            $bid = $_REQUEST['bid'];

            $sql = "SELECT * FROM  books WHERE b_id = '$bid'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $bid = $row['b_id'];
                $title = $row['title'];
                $desc  = $row['description'];
                $topic = $row['topic'];
                echo '<div class="card card-body col-md-6 m-auto"  >

        <form action="editbook.php" method="post">
        <div class="form-group">
        <label class="text-secondary" for="title" >Title<sup>*</sup></label>
                <input class="form-control" type="text" name="title" value="' . $title . '">
            </div>
            <div class="form-group">
            <label class="text-secondary" for="">Description<sup>*</sup></label>
            <textarea class="form-control" name="desc"  cols="30" rows="10">' . $desc . '</textarea>    
            </div>
            <div class="form-group">
            <input type="text" name="topic" value="' . $topic . '" class="form-control" placeholder="Topic" >
        </div>
            <div class="form-group">
            <button class="btn btn-secondary" type="submit" name="ebtn">save changes</button>
            <input type="hidden" name="e" value="' . $bid . '">
            </div>
    
        </form>
    </div>';
            }
        }

        if (isset($_POST['e'])) {

            $bid = $_POST['e'];
            $title = htmlspecialchars($_POST['title']);
            $desc = htmlspecialchars($_POST['desc']);
            $topic = htmlspecialchars($_POST['topic']);


            $sql = "UPDATE books SET  title = '$title', description = '$desc', topic = '$topic', on_date = NOW() WHERE b_id = '$bid' ";
            mysqli_query($conn, $sql);
            header('location:editbook.php?bid=' . $bid);
            exit();
        }
        ?>

    </div>
</div>
<!-- <textarea name="desc"  cols="30" rows="10">'.$desc.'</textarea> -->