<?php
require_once 'initialize.php' ?>
<?php include 'shared/header.php' ?>
<?php
if(!isset($_GET['id'])) {
    redirect_to(url_for('/new/index.php'));
}
$id = $_GET['id'];
if (is_post_request()) {
    $data = [];
    $data['id'] = $id;
    $data['Name'] = $_POST['Name'] ?? '';
    $data['Address'] = $_POST['Address'] ?? '';
    $data['Birthday'] = $_POST['Birthday'] ?? '';
    $data['Salary'] =  $_POST['Salary'] ?? '';
    $result = update_data($data);
    if ($result === true) {
//        redirect_to(url_for('/staff/subjects/show.php?id=' . $id));
        redirect_to(url_for('index.php'));
    }
}
$data = find_data_by_id($id);
?>
<div class="container text-light">
    <a class="btn btn-secondary btn-outline-warning mt-3" href="<?php echo url_for('/index.php'); ?>" >&laquo; Back to Homepage</a>
    <h1 class="text-center text-warning">Edit Details</h1>
    <form method="post" action="<?php echo  url_for('edit.php?id='.$id);?>" autocomplete="off">
        <div class="modal-body">
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" required class="form-control" id="Name" name="Name"  placeholder="Enter Name" value="<?php echo $data['name']; ?>">
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" required class="form-control" id="Address" name="Address"  placeholder="Enter Address" value="<?php echo $data['address']; ?>">
            </div>
            <div class="form-group">
                <label for="Birthday">Birth Date</label>
                <input id="datepicker" required name="Birthday" value="<?php echo $data['birthdate']; ?>"/>
                <script>
                    $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4'
                    });
                </script>
            </div>
            <div class="form-group">
                <label for="Salary">Salary</label>
                <input type="text" required class="form-control" id="Salary" name="Salary" placeholder="Enter Salary" value="<?php echo $data['salary']; ?>">
            </div>
        </div>
        <div class="border-top-0 d-flex justify-content-center">
            <button type="submit" class="btn btn-dark btn-outline-success w-50 m-3" name="submit">Edit</button>
        </div>
</div>
<?php
include 'shared/footer.php' ?>