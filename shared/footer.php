<!-- Footer -->
<footer class="page-footer font-small">
    <div class="footer-copyright text-center py-3 bg-dark text-white">&copy; <?php echo date('Y')?> Copyright:
        <a href="#" class="text-light">Master Al Dave</a>
    </div>
</footer>
<!-- Footer -->

<script src="<?php echo url_for('bootstrap%20files/js/jquery-3.4.1.slim.min.js')?>"></script>
<script src="<?php echo url_for('bootstrap%20files/js/popper.min.js')?>"></script>
<script src="<?php echo url_for('bootstrap%20files/js/bootstrap.min.js')?>"></script>
</body>
</html>
<?php
db_disconnect($db);
?>
