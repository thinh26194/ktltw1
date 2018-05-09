<!DOCTYPE html>
<?php session_start() ?>
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
            ul li {
                list-style: none;
                float: right;
                padding: 20px 10px;
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
                        <?php if(!empty($_SESSION['x'])): ?>
                            <li><a href="logout.php">Sign Out</a></li>
                        <?php else: ?>
                            
                            <li><a href="login.php">Sign In</a></li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.js"></script>
    </body>
</html>