<?php require_once 'initialize.php' ?>
<?php include 'shared/header.php' ?>

<?php if(is_post_request()){
    $data = [];
    $data['Name'] = $_POST['Name'] ?? '';
    $data['Address'] = $_POST['Address'] ?? '';
    $data['Birthday'] = $_POST['Birthday'] ?? '';
    $data['Salary'] = $_POST['Salary'] ?? '';
    $result = insert_data($data);
}?>
<?php
$get_data = display();

?>
    <!--body/content-->
    <div class="container mt-3">
        <a type="button" class="mb-3 btn btn-secondary btn-outline-warning" href="<?php echo url_for('create.php')?>">
            Create New</a>
        <table class="table table-striped table-responsive-md table-primary">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Birth Date</th>
                <th>Salary</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php while($data = mysqli_fetch_assoc($get_data)) { ?>
            <tr class="bg-dark text-light">
                <td><?php echo ($data['id']); ?></td>
                <td><?php echo ($data['name']);?></td>
                <td><?php echo ($data['address']);?></td>
                <td><?php echo ($data['birthdate']);?></td>
                <td><?php echo ($data['salary']);?></td>
                <td><a type="button" class="btn btn-info btn-sm w-100" href="<?php echo  url_for('view.php?id='.$data['id']);?>" >View</a></td>
                <td><a type="button" class="btn btn-warning btn-sm w-100" href="<?php echo  url_for('edit.php?id='.$data['id']);?>" >Edit</a></td>
                <td><a type="button" class="btn btn-danger btn-sm w-100" href="<?php echo  url_for('delete.php?id='.$data['id']);?>">Delete</td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <!--body/content-->
<?php include 'shared/footer.php' ?>
