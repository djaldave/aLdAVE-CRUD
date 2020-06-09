<?php
require_once 'initialize.php' ?>
<?php include 'shared/header.php' ?>
<?php
if(!isset($_GET['id'])) {
    redirect_to(url_for('/new/index.php'));
}
$id = $_GET['id'];

$data = find_data_by_id($id);
?>
    <div class="container text-light">
        <a class="btn btn-secondary btn-outline-warning mt-3" href="<?php echo url_for('index.php'); ?>" >&laquo; Back to Homepage</a>
        <h1 class="text-center text-warning">View Details</h1>
        <form autocomplete="off">
            <div class="modal-body">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" readonly class="form-control" id="Name"   value="<?php echo $data['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" readonly class="form-control" id="Address" value="<?php echo $data['address']; ?>">
                </div>
                <div class="form-group">
                    <label for="Birthday">Birth Date</label>
                    <input    class="form-control" value="<?php echo $data['birthdate']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="Salary">Salary</label>
                    <input type="text" class="form-control" value="<?php echo $data['salary'];?>" readonly>
                </div>
            </div>

    </div>
<?php
include 'shared/footer.php' ?>