<?php include '../includes/header.php'; ?>
<style>
    @media(min-width:750px) {
        .sad {
            margin: 0 auto;
        }

    }

    .sad {
        margin: 0 auto;
    }
</style>
<!-- create notebook title -->
<div class="container">
    <div class="row">
        <div class="col-md-4 sad" style="margin-top:50px;">
            <div class="card card-body " style="margin:0 auto;width:inherit;">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <h4 class='card-text text-center'>Create Note Book</h4>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title of the book" autocomplete="off" name="title" id="">
                    </div>
                    <div class="form-group">
                        <textarea  class="form-control" placeholder="About the book..." autocomplete="off" name="description"  cols="30" rows="7"></textarea>
                        <!-- <input type="text" class="form-control" placeholder="About the book..." autocomplete="off" name="description" id=""> -->
                    </div>
                    <!-- <div class="form-group">
                        <label for="bimg">Background Image<sup>*</sup></label>
                        <input class="form-control" type="file" name="bimg">
                    </div> -->
                    <div class="form-group">
                        <input type="text" name="topic" class="form-control" placeholder="topic" >
                    </div>

                    <div class="form-group">
                        <button type="submit" name="cbtn" class="btn btn-block btn-success">Create </button>
                    </div>
                </form>


            </div>

        </div>
    </div>

</div>
<?php
if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    if (isset($_POST['cbtn'])) {

        $conn = mysqli_connect('localhost', 'root', '', 'makeit');

        $title = trim($_POST['title']);
        
        $r = "SELECT * FROM books WHERE title = '$title'";

        $result=  mysqli_query($conn, $r);
        if (mysqli_num_rows($result) > 1) {
            echo '<script>alert("book ' . $title . ' already exists");</script>';
        } else {


            $desc = trim($_POST['description']);

            $topic = trim($_POST['topic']);

            // $imgName = $_FILES['bimg']['name'];
            // $imgTmpName = $_FILES['bimg']['tmp_name'];

            // move_uploaded_file($imgTmpName, "bimg/" . $imgName);

            $sql = "INSERT INTO books(title, description,topic) VALUES('$title', '$desc','$topic')";
            if (mysqli_query($conn, $sql)) {

                $r = "SELECT * FROM books WHERE title = '$title'";
                if ($row = mysqli_query($conn, $r)){
                   
                    $row = mysqli_fetch_assoc($row);

                    header('location: ../notes/createnotes.php?bid='.$row['b_id']);
                    exit();
                    
                }
            }
        }
    }
}
?>

<?php include '../includes/footer.php'; ?>