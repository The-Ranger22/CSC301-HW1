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
$bio = "Hello, I'm Levi Schanding. I'm currently in my Junior year at NKU with my major being Computer Science. I got interested in CS because of video games, but have stayed interested because of how cool it is. What other field can offer the emotional roller coaster of testing a program? I enjoy programming, playing games, and trying to learn new things.";
$uInterests = "Programming, NASA, Video Games, D&D, drawing";
$uFacts = "I wake up before my alarm clock and I don't know why";
$reason = "I enjoyed INF286, and I'm interested in finding out how server side programming works. By the end of the class, I hope to have a solid understanding of how server side programming works and to be able to apply said understanding efficiently and effectively.";
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
    <title>CSC301-HW1</title>
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
                                <div class="col cstm-border m-rgt-5">Major: <?= $uMajor ?></div>
                                <div class="col cstm-border m-rgt-5">Year: <?= $uYear ?></div>
                            </div>
                            <div class="row s-5"></div>
                            <div class="row header-text">
                                <div class="col m-rgt-5 cstm-border">Interests: <?= $uInterests ?></div>
                            </div>
                            <div class="row s-5"></div>
                            <div class="row header-text">
                                <div class="col m-rgt-5 cstm-border">Fun Fact: <?=$uFacts?></div>
                            </div>
                            <div class="row s-5"></div>
                            <div class="row">
                                <div class="col m-rgt-5 cstm-border">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col header-text">Why CSC301?</p>
                                            </div>
                                            <div class="row">
                                                <p class="col text-white"><?= $reason ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row s-5"></div>
                            <div class="row">
                                <div class="col m-rgt-5 cstm-border">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col header-text">Bio</p>
                                            </div>
                                            <div class="row">
                                                <p class="col text-white"><?= $bio ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row s-5"></div>
                            <div class="row">
                                <a class="col header-text text-center cstm-border m-rgt-5" href="mailto:<?= $email ?>">Email me at <?= $email ?></a>
                            </div>
                        </div>
                        <img class="cstm-border col-4 p-null " src="<?= $uImg ?>"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

</body>
</html>
