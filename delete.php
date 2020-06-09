<?php
require_once 'initialize.php' ?>
<?php
if(!isset($_GET['id'])) {
    redirect_to(url_for('index.php'));
}
$id = $_GET['id'];
$result = delete_subject($id);
redirect_to(url_for('index.php'));

?>

