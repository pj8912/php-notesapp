<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="createnotes.css">

  <link rel="stylesheet" href="css/note.css">
  <script src="js/note.js"></script>

</head>
<div class="wrapper">
    
</div>
<div class="container">
<div class="row">
<div class="col-md-12 m-auto">
<?php
include '../includes/dbh.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    include '../includes/dbh.php';
    $sql = "SELECT * FROM notes where n_id = '$id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        echo '<div class="mt-5 card  ">
                    <div class="nav card-header  ">
                    <p class="m-2 card-title h2">' . $row['note_name'] . '</p> 
                    
                    <a href="createnotes.php?bid='.$row['b_id'].'&nid=' . $row['n_id'] . '&name=' . $row['note_name'] . '" class="ml-auto btn btn-dark m-2 btn-sm" style="font-size:15px;">
                        <svg  width="0.8em" height="1em" viewBox="0 0 16 16" class="m-1 bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg>
                        edit
                    </a>
                    </div>

                    <div class="card-body " >
                ' . $row['notes'] .
            '</a>
                    </div>
                    </div>';
    }
}
?>
</div>

</div>
</div>

<?php include '../includes/footer.php' ?>