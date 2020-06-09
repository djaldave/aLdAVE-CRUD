<?php
require_once 'initialize.php' ?>
<?php include 'shared/header.php' ?>

<div class="container text-light">
    <a class="btn btn-secondary btn-outline-warning mt-3" href="<?php echo url_for('index.php'); ?>" >&laquo; Back to Homepage</a>
    <h1 class="text-center text-warning">Create</h1>
    <form method="post" action="<?php echo url_for('index.php')?>" autocomplete="off">
        <div class="modal-body">
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" required class="form-control" id="Name" name="Name"  placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" required class="form-control" id="Address" name="Address"  placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label for="Birthday">Birth Date</label>
                <input id="datepicker" required name="Birthday"/>
                <script>
                    $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4'
                    });
                </script>
            </div>
            <div class="form-group">
                <label for="Salary">Salary</label>
                <input type="number" required class="form-control" id="Salary" name="Salary" placeholder="Enter Salary">
            </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
            <button type="submit" class="btn btn-success w-50" name="submit">Submit</button>
        </div>
    </form>
</div>
<?php include 'shared/footer.php' ?>
