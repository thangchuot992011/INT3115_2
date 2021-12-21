<?php
    $commonFolder = __DIR__ . '/common';
    require_once("./constant/main/constant.php");
    // bổ sung thêm tham số page để xem là load page nào
    $page = isset($_GET['page']) ? $_GET['page'] : 'firstpage';
    $mainDir = '.';
    $listAllItems = null;
    require_once($mainDir . '/lib/customFunc.php');
    if(isset($_GET['trealet'])) {
        $pageInfo = customInitializeApp($mainDir, 'streamline', $listAllItems);
    }
    // hoặc đơn giản nếu không truyền hoặc chỉ truyền tham số page
    else {
        $stlFilePath = MAIN_TREALET_FOLDER . '/streamline-' . $page . '.trealet';
        $pageInfo = loadCustomPageInfo($stlFilePath, $listAllItems);
    }
    $listNotableItems =  array_filter($listAllItems, function ($item) {
        return $item['isNotable'];
    });
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once($commonFolder . "/metadata.php");
    ?>
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/common/common.css';?>" />
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/common/header.css';?>" />
    <link rel="stylesheet" href="<?php echo MAIN_ASSETS . '/css/common/footer.css';?>" />
    <link rel="stylesheet" href=<?php echo MAIN_ASSETS . '/css/draft/items.css';?> />
    <title>Nhom01</title>
</head>
<body>
    <div class="main-container">
        <?php require_once($commonFolder . "/header.php");?>
        <div id="nhom01-items-carousel" class="carousel slide carousel-of-items" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <?php
                    $countNotableItems = count($listNotableItems);
                    for ($i = 0; $i < $countNotableItems; $i++) { ?>
                    <li data-target="#nhom01-items-carousel" data-slide-to="<?php echo $i ?>" class="<?php if ($i == 0) {echo 'active';} else echo ''; ?>"></li>
                <?php } ?>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <?php
                $notableValues = array_values($listNotableItems);
                // foreach($listNotableItems as $itemKey => $itemValue) {
                    $countNotableItems = count($notableValues);
                    for ($i = 0; $i < $countNotableItems; $i++) { ?>
                    <div class="carousel-item<?php if ($i == 0) {echo ' active';} else echo ''; ?>">
                        <div class="parent d-flex justify-content-center">
                            <img src="<?php echo MAIN_ASSETS . $notableValues[$i]['thumbnail']?>" height="400px" width="auto" />
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#nhom01-items-carousel" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#nhom01-items-carousel" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="ctn-items container" style="margin-top: 1.5rem">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading text-center ctn-items-title">Danh sách hiện vật</h2>
                    <hr class="heading_space">
                </div>
            </div>
            <div class="row">
            <?php
                // $countAllItems = count($listAllItems);
                // for ($i = 0; $i < $countAllItems; $i++) {
                foreach($listAllItems as $itemKey => $itemValue) { ?>
                <div class="col-lg-4 col-6">
                    <div class="nhom01-item">
                        <!-- href đến file trealet của hiện vật -->
                        <a href="<?php echo $mainDir . '/Streamline?page=' . $page . '&' . 'id=' . $itemValue['itemID'];?>" class="item-img">
                            <img src="<?php echo MAIN_ASSETS . $itemValue['thumbnail']?>" />
                        </a>
                        <h3 class="item-title">
                            <!-- href đến file trealet của hiện vật -->
                            <a href="<?php echo $mainDir . '/Streamline?page=' . $page . '&' . 'id=' . $itemValue['itemID'];?>" class="item-title-link"><?php echo $itemValue['shortTitle'] ?></a>
                        </h3>
                    </div>
                </div>
            <?php } ?>
                
            </div>
        </div>
        <?php require_once($commonFolder . "/footer.php");?>
    </div>
    <?php require_once($commonFolder . "/scripts.php");?>
</body>
</html>