<?php
    $mainDir = '.';
    require_once($mainDir . '/lib/customFunc.php');
    $commonFolder = __DIR__ . '/common';
    require_once($commonFolder . "/metadata.php");
    require_once($mainDir . '/constant/main/constant.php');
    // bổ sung thêm tham số page để xem là load page nào (đơn vị nào)
    $page = isset($_GET['page']) ? '/' . $_GET['page'] : '';
    $customPageSrc = MAIN_TREALET_FOLDER . '/streamline' . $page . '/streamline-page.trealet';
    $sourceItems = __DIR__ . '/tempscripts' . '/' . $page . '/list-notable-items.json';
    $listItems = getItemsFromJSON($sourceItems);
    $pageInfo = loadCustomPageInfo($customPageSrc);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo MAIN_ASSETS . '/css/css/font-awesome.min.css';?>" />
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/common/common.css';?>" />
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/common/header.css';?>" />
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/common/footer.css';?>" />
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/draft/index.css';?>" />
    <title>Nhom01</title>
</head>
<body>
    <div class="main-container">
        <?php require_once($commonFolder . "/header.php"); ?>
        <div class="banner-area">
            <img class="banner-bg" src="<?php echo MAIN_ASSETS . $pageInfo['banner-src'];?>"/>
            <div class="overlay overlay-bg"></div>
            <div class="container ctn-banner">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="banner-content col-lg-8">
                        <h1 class="banner-title"><?php echo $pageInfo['title'];?></h1>
                        <p class="banner-description pt-3 pb-3"><?php echo $pageInfo['desc'];?></p>
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
                            <p class="item-event-description"><?php echo $pageInfo['opening-hours'];?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-event">
                            <h4 class="item-event-title">Triển lãm</h4>
                            <p class="item-event-description"><?php echo $pageInfo['exhibition'];?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-event">
                            <h4 class="item-event-title">Sự kiện</h4>
                            <p class="item-event-description"><?php echo $pageInfo['upcoming-events'];?></p>
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
                        <p><?php echo $pageInfo['registration-desc'];?></p>
                    </div>
                    <div class="col-md-6 col-sm-12 feature text-center">
                        <a class="btn btn-visit btn-buyticket" href="#" role="button">
                            <!-- <i class="fa fa-ticket"></i> -->
                            Mua vé trực tuyến
                        </a>
                        <p><?php echo $pageInfo['buyonline-desc'];?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once($commonFolder . "/footer.php");?>
    </div>
    <?php require_once($commonFolder . "/scripts.php");?>
</body>
</html>