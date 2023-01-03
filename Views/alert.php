<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
    if (isset($_SESSION['status']))
    {
        if ($_SESSION['status'] == "error")
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['thaotac']?> không thành công",
                    text: "<?php echo $_SESSION['error'] ?>",
                    icon: "error",
                    button: "OK",
                });
            </script>
            <?php
            $_SESSION['status'] = "";
        }
        else if ($_SESSION['status'] == "success")
        {
            ?>
            <script>
                swal({
                    text: "<?php echo $_SESSION['success'] ?>",
                    icon: "success",
                    button: "OK",
                });
            </script>
            <?php
            $_SESSION['status'] = "";
        }
    }
?>