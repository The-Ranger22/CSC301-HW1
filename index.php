<!--Student: Levi Schanding-->
<!--Assignment 1-->
<!--Personal note: I've been looking forward to this, PHP looks fun.-->
<?php
//Echo Vs Print: They're the same to the point that the differences between them are negligible.
//Variables
$name = "Levi Schanding";
$email = "schandingl1@nku.edu";
$uMajor = "Computer Science";
$uYear = "Junior";
$uImg = "img/dummy_pic.png";
$bio = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec ornare enim. Vestibulum ut tortor eget magna vehicula ultricies eu non tellus. Nunc cursus malesuada justo, eget egestas enim cursus eu. Nunc sed neque in eros tincidunt lacinia sed sed tortor. Quisque aliquam semper dignissim. Vivamus gravida consectetur dolor ut sollicitudin. Aenean aliquet euismod ipsum, id sollicitudin sem pulvinar in. Ut tempor massa vel risus pretium dapibus. Praesent at nulla nec est dictum finibus.";
?>
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


<div class="container-fluid" id="animate-area">
    <div class="row">
        <div class="col"></div>
        <div class="col-11">
            <div class="row scs-bg-hdr">
                <?= $name ?>
            </div>
            <div class="row cstm-border standard-container">
                <div class="col">
                    <div class="row">
                        <div class="col-8">
                            <div class="row header-text">
                                <div class="col">Major: <?= $uMajor ?></div>
                                <div class="col">Year: <?= $uYear ?></div>
                            </div>
                        </div>
                        <img class="cstm-border col-4 p-null m-null" src="<?= $uImg ?>"/>
                    </div>
                    <div class="spacer2"></div>
                    <div class="row">
                        <a class="col header-text text-center" href="mailto:<?= $email ?>">Email me here!</a>
                    </div>
                    <div class="row standard-container cstm-border">
                        <div class="col">
                            <div class="row">
                                <h4 class="col header-text">Bio:</h4>
                            </div>
                            <div class="row">
                                <p class="col text-center"><?= $bio ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer2"></div>
        </div>
        <div class="col"></div>
    </div>
</div>

</body>
</html>
