<?php include 'sql.php'; ?>
<?php session_start() ?>
<?php if(!empty($_SESSION['x'])): ?>
    <?php if($_SESSION['x'] =='1' || $_SESSION['x'] == '2'): ?>
        <?php header('Location: list.php') ?>
    <?php else:?>
        <?php header('Location: login.php') ?>
    <?php endif; ?>
<?php endif; ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
            .index {
                float: left;
                padding: 10px;
            }
            .index h2 {
                font-size: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 index">
                        <a href="index.php"><h2>TDC</h2></a>
                    </div>
                    <div class="col-md-6 menu">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST">
                        <input type="text" name="iduser" value="<?php echo !empty($_POST['iduser']) ? $_POST['iduser']: "" ?>"><br><br>
                        <input type="text" name="passuser" value="<?php echo !empty($_POST['passuser']) ? $_POST['passuser']: "" ?>"><br><br>
                        <input type="submit" value="Login"><br><br>
                        <?php if (!empty($_POST['iduser']) && !empty($_POST['passuser'])) :  ?>
                            <?php  if($_POST['iduser'] == "user" && $_POST['passuser'] == 'user'):  ?>
                                <?php header('Location: list.php') ?>
                                <?php $_SESSION["x"] = "1" ?>
                        
                            <?php  elseif($_POST['iduser'] == "admin" && $_POST['passuser'] == 'admin'):  ?>
                                <?php header('Location: list.php') ?>
                                <?php $_SESSION["x"] = "2" ?>

                            <?php else: ?>
                                <?php echo 'Sai id or pass' ?>
                            <?php endif; ?>
                        
                        <?php else: ?>
                            <?php echo 'Vui long nhap id voi pass'; ?>
                        <?php endif;  ?>
                        
                    </form>
                </div>
            </div>
        </div>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
    </body>
</html>