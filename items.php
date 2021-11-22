<?php
    // bổ sung thêm tham số page để xem là load page nào
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    $mainDir = '.';
    require_once('./lib/customFunc.php');
    $sourceAllItems = __DIR__ . '/tempscripts' . '/' . $page . '/list-all-items.json';
    $sourceNotableItems = __DIR__ . '/tempscripts' . '/' . $page . '/list-notable-items.json';
    $listAllItems = getItemsFromJSON($sourceAllItems);
    $listNotableItems = getItemsFromJSON($sourceNotableItems);
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
                    $countNotableItems = count($listNotableItems);
                    for ($i = 0; $i < $countNotableItems; $i++) { ?>
                    <div class="carousel-item<?php if ($i == 0) {echo ' active';} else echo ''; ?>">
                        <div class="parent d-flex justify-content-center">
                            <img src="<?php echo MAIN_ASSETS . $listNotableItems[$i]['thumbnail']?>" height="400px" width="auto" />
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
                $countAllItems = count($listAllItems);
                for ($i = 0; $i < $countAllItems; $i++) { ?>
                <div class="col-lg-4 col-6">
                    <div class="nhom01-item">
                        <!-- href đến file trealet của hiện vật -->
                        <a href="<?php echo $listAllItems[$i]['trealet'];?>" class="item-img">
                            <img src="<?php echo MAIN_ASSETS . $listAllItems[$i]['thumbnail']?>" />
                        </a>
                        <h3 class="item-title">
                            <!-- href đến file trealet của hiện vật -->
                            <a href="<?php echo $listAllItems[$i]['trealet'];?>" class="item-title-link"><?php echo $listAllItems[$i]['title'] ?></a>
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