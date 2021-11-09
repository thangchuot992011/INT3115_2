<?php
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
            <h2 class="ctn-items-title">Hiện vật tiêu biểu</h2>
            <div class="row">
                <?php
                    $countItems = count($listItems);
                    for ($i = 0; $i < $countItems; $i++) { ?>
                <div class="col-lg-4 col-6">
                    <div class="nhom01-item">
                        <!-- href đến file trealet của hiện vật -->
                        <a href="#" class="item-img">
                            <img src="<?php echo MAIN_ASSETS . $listItems[$i]['thumbnail']?>" />
                        </a>
                        <h3 class="item-title">
                            <!-- href đến file trealet của hiện vật -->
                            <a href="#" class="item-title-link"><?php echo $listItems[$i]['title'] ?></a>
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
        <?php require_once($commonFolder . "/footer.php");?>
    </div>
    <?php require_once($commonFolder . "/scripts.php");?>
</body>
</html>