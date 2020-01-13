<!--Student: Levi Schanding-->
<!--Assignment 1-->
<!--Personal note: I've been looking forward to this, PHP looks fun.-->
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>Hello, world!</title>
</head>
<body>
<?php
//Variables
$name = "Levi Schanding";
$email = "schandingl1@nku.edu";
$uMajor = "Computer Science";
$uYear = "Junior";
$uImg = "";
?>

<div class="container-fluid" id="animate-area">
    <div class="row">
        <div class="col"></div>
        <div class="col-11" >
            <div class="row scs-bg-hdr">
                <?php echo $name?>
            </div>
            <div class="row cstm-border standard-container">
                <div class="col">
                    <?php echo $email ?>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

</body>
</html>
