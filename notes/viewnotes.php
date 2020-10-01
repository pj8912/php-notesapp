<?php include '../includes/header.php' ?>


<!--    -->
<div class="text-center mt-5" style="font-family:arial">
                            <?php 
                        if (isset($_REQUEST['bid'])) {

                            $bid = $_REQUEST['bid'];
                            
                            include '../includes/dbh.php';
                            $sql = "SELECT * FROM notes where b_id = '$bid'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) < 1) {
                                echo '  
                                <h4>No notes created</h4>
                                <a href="createnotes.php?bid=' . $bid . '" class=" btn btn-primary ">Create Notes</a>
                            ';
                            } else {
                                echo '<div class="container p-2 text-center">
                                <div class="row">
                                <div class="m-auto ">

                                <h4 class="text-center p-3"  >Notes Created</h4><br>';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    echo '<div class=" card card-body m-1 " style="width:inherit;">
                                    <a href="note.php?id=' . $row['n_id'] . '" style="text-decoration:none" class="text-secondary">' . $row['note_name'] . '</a>
                                    </div>';
                                    
                                }
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                        
                        ?>

 
                    </div>
<?php include '../includes/footer.php' ?>