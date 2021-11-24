<?php
	$mainDir = '..';
    require_once($mainDir . '/lib/functions.php');
    require_once($mainDir . '/lib/customFunc.php');
    $trealetData = initializeApp('streamline');
    $info = $trealetData["info"];
    $imageItems = $trealetData["items"];
    $numOfImageItems = count($trealetData["items"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $commonFolder = $mainDir . '/common';
        require_once($commonFolder . "/metadata.php");
        require_once($mainDir . '/constant/streamline/constant.php');
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/bootstrap.min.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/font-awesome.min.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/JKS-icons.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/settings.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/owl.carousel.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/owl.transitions.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/jquery.fancybox.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/zerogrid.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/style.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/loader.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/common/common.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/common/header.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/common/footer.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/streamline/index.css';?>" />
    <title>Nhom01</title>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
    <div class="main-container">
        <?php require_once($commonFolder . "/header.php");?>
        <!--Welcome-->
        <div class="row">
            <div class="col-12 col-lg-2 col-xl-1">
                <section id="button-link-web">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <!-- <a class="navbar-brand" href="#">Vertical Navbar</a> -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto flex-column vertical-nav edit-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#welcome">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#image">Hình Ảnh</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#video">Video</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                    </div>
                </section>
            </div>
            <div class="col-12 col-lg-10 col-xl-11">

                <section id="welcome" class="padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="heading"><?php echo $trealetData["title"];?></h2>
                                <hr class="heading_space">
                            </div>
                            <div class="col-md-7 col-sm-6">
                                <?php foreach($info as $infoKey => $infoValue) { ?>
                                    <p class="half_space"><strong><?php echo $infoKey;?></strong>: <?php echo $infoValue;?></p>
                                <?php } ?>
                                <p class="half_space"></p>
                                <p class="half_space"><?php echo $trealetData["decs"];?></p>
                            </div>
                            <div class="col-md-5 col-sm-6">
                                <img class="img-responsive" src="<?php echo $trealetData["titleImage"] ;?>" alt="image">
                            </div>
                        </div>
                    </div>
                </section>
                <!--Food Facilities-->
                <section id="image" class="padding bg_grey">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="heading">Hình Ảnh</h2>
                                <hr class="heading_space">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 grid_layout">
                                <div class="row">
                                    <div class="zerogrid">
                                        <div class="wrap-container">
                                            <div class="wrap-content clearfix">
                                                <?php if($numOfImageItems > 0) { ?>
                                                    <div class="col-3-5 bachground-color-image d-flex align-items-center ">
                                                        <div class="wrap-col first">
                                                            <div class="item-container">
                                                                <img class="image-fix-size" onclick="imgClick(this)" src="<?php echo $imageItems[0]; ?>" alt="<?php echo $trealetData["title"];?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <?php for($i = 1; $i < $numOfImageItems; $i++) { ?>
                                                    <div class="col-1-5 bachground-color-image">
                                                        <div class="wrap-col first ">
                                                            <div class="item-container">
                                                                <img class="image-fix-size" onclick="imgClick(this)" src="<?php echo $imageItems[$i]; ?>" alt="<?php echo $trealetData["title"];?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--Featured Receipes -->
                <section id="video" class="bg_grey padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="heading">Video</h2>
                                <hr class="heading_space">
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $numOfVideos = count($trealetData["videos"]);
                            for($i = 0; $i < $numOfVideos; $i++) {
                                ?>
                                <div class="col-1-2 bachground-color-image">
                                    <iframe width="560" height="315" src="<?php echo $trealetData["videos"][$i]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require_once($commonFolder . "/footer.php");?>
    </div>
    <!-- chỗ này dùng để show full màn hình ảnh hiện vật -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
    <?php require_once($commonFolder . "/scripts.php");?>
    <script src="<?php echo STREAMLINE_ASSETS . '/js/streamline/index.js';?>"></script>
</body>
</html>