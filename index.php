<?php
    $mainDir = '.';
    require_once('./lib/customFunc.php');
    $sourceFile = __DIR__ . '/tempscripts/list-notable-items.json';
    $listItems = getItemsFromJSON($sourceFile);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $commonFolder = __DIR__ . '/common';
        require_once($commonFolder . "/metadata.php");
        require_once("./constant/main/constant.php");
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo MAIN_ASSETS . '/css/css/font-awesome.min.css';?>" />
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/common/common.css';?>" />
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/common/header.css';?>" />
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/common/footer.css';?>" />
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/draft/index.css';?>" />
    <title>Nhom01</title>
</head>
<body>
    <div class="main-container">
        <?php 
            require_once($commonFolder . "/header.php");
        ?>
        <div class="banner-area">
            <div class="overlay overlay-bg"></div>
            <div class="container ctn-banner">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="banner-content col-lg-8">
                        <h1 class="banner-title">Khám phá các di sản văn hóa</h1>
                        <p class="banner-description pt-3 pb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
                        </p>
                        <a href="./items.php" class="btn-start text-uppercase">Bắt đầu</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ctn-items container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading text-center ctn-items-title">Hiện vật tiêu biểu</h2>
                    <hr class="heading_space">
                </div>
            </div>
            <div class="row">
                <?php
                    $countItems = count($listItems);
                    for ($i = 0; $i < $countItems; $i++) { ?>
                <div class="col-lg-4 col-6">
                    <div class="nhom01-item">
                        <!-- href đến file trealet của hiện vật -->
                        <a href="<?php echo $listItems[$i]['trealet'];?>" class="item-img">
                            <img src="<?php echo MAIN_ASSETS . $listItems[$i]['thumbnail']?>" />
                        </a>
                        <h3 class="item-title">
                            <!-- href đến file trealet của hiện vật -->
                            <a href="<?php echo $listItems[$i]['trealet'];?>" class="item-title-link"><?php echo $listItems[$i]['title'] ?></a>
                        </h3>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="event-area">
            <div class="ctn-event container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item-event">
                            <h4 class="item-event-title">Giờ mở cửa</h4>
                            <p class="item-event-description">
                                Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-event">
                            <h4 class="item-event-title">Triển lãm</h4>
                            <p class="item-event-description">
                                Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-event">
                            <h4 class="item-event-title">Sự kiện</h4>
                            <p class="item-event-description">
                                Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature_wrap visit-area padding-half">
            <div class="ctn-visit container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="heading" style="font-size: 28px;">Tham quan</h2>
                        <hr class="heading_space">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 feature text-center">
                        <a class="btn btn-visit btn-register" href="#" role="button">
                            <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                            Đăng ký tham quan
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-6 col-sm-12 feature text-center">
                        <a class="btn btn-visit btn-buyticket" href="#" role="button">
                            <!-- <i class="fa fa-ticket"></i> -->
                            Mua vé trực tuyến
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once($commonFolder . "/footer.php");?>
    </div>
    <?php require_once($commonFolder . "/scripts.php");?>
</body>
</html>