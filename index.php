<!doctype html>
<html lang="en">
<head><?php
    include 'module/header.php';
    //include 'module/alerts.php';
    include "config/connect.php";
    ?>
</head>
<body>
<div class="container">
    <?php include 'module/nav.php'; ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Form Input (Create)</h1>
            </div>
        </div>
    </div>

    <!--form -->
    <?php include 'module/input.php'; ?>
</div>
<?php include 'module/footer.php'; ?>
</body>
</html>