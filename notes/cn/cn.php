<?php include '../../includes/header.php'; ?>
<div class="container">
    <div class="row mt-5">

        <?php if (isset($_REQUEST['bid'])) : ?>
            <?php $bid = $_REQUEST['bid']; ?>
            <div class="card card-body col-md-6 m-auto" align="center">

                <form action="../insert_name.php" method="post" class="text-center">
                    <h5>Add Note Name</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="note_name" placeholder=" Note Name">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create Note</button>
                        <input type="hidden" name="cnx" value="<?php echo $bid; ?>">
                    </div>
                </form>
            </div>

        <?php endif; ?>
    </div>
</div>
<?php include '../../includes/footer.php'; ?>