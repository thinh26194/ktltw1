<!DOCTYPE html>
<?php include 'sql.php'; ?>
<?php session_start(); ?>

<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
            .col-md-6 {
                float: left;
            }
            ul li {
                list-style: none;
                float: right;
            }
            li a:hover{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row header">
                <div class="col-md-6 index">
                    <a href="index.php"><h2>TDC</h2></a>
                </div>
                <div class="col-md-6 menu">
                    <ul>
                        <li><a href="logout.php">Sign Out</a></li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <?php if (!empty($_SESSION['x'])): ?>

                    <?php if ($_SESSION['x'] == '1'): ?>
                        <div class="col-md-12">
                            <h4>Danh Sach Users:</h4>
                            <div class="col-md-6">
                                <p>ID User: </p>
                                <p>Name User: </p>
                                <p>Pass User: </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                <?php
                                    $sqli = "SELECT * FROM users WHERE username LIKE '%Us%' ";
                                    $dt = mysqli_real_query($connect, $sqli);
                                    $dsuser = array();
                                    while ($dulieu = mysqli_fetch_assoc($dt)){
                                        $dsuser[] = $dulieu;
                                    }
                                    foreach ($dsuser as $value){
                                        echo $value."<br>";
                                    }
                                ?>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>


                    <?php if ($_SESSION['x'] == '2'): ?>
                        <div class="col-md-12">
                            <h4>Danh Sach Admin:</h4>
                            <div class="col-md-6">
                                <p>ID Admin: </p>
                                <p>Name Admin: </p>
                                <p>Pass Admin: </p>
                            </div>
                            <div class="col-md-6">
                                <p>   <?php foreach ($users[0] as $value): ?>
                                        <?php echo $value . '<br>' ?></p>
                                <?php endforeach; ?>
                            </div>

                            <h4>Danh Sach Users:</h4>

                            <div class="col-md-6">
                                <p>ID User: </p>
                                <p>Name User: </p>
                                <p>Pass User: </p>
                            </div>
                            <div class="col-md-6">
                                <p>   <?php foreach ($users[1] as $value): ?>
                                        <?php echo $value . '<br>' ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>


            </div>
        </div>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
    </body>
</html>