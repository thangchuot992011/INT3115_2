<?php
    $pageStr = '';
    
    if(isset($_GET['trealet'])) {
        $trealetLink = $_GET['trealet'];
        $pageStr = str_replace('albums/nhom01/app/streamline-','', $trealetLink);
        $pageStr = str_replace('/', '', $pageStr);
        $pageStr = str_replace('.trealet', '', $pageStr);
        // $pageStr= preg_replace('/@.*/i', '', $pageStr);
        if($pageStr != '') {
            $pageStr = '?page=' . $pageStr;
        }
    }
    else {
        $pageStr = isset($_GET['page']) ? '?page=' . $_GET['page'] : '?page=secondpage';
    }
?>
<header class="ctn-header">
    <div class="container ctn-main-menu">
        <div class="main-menu">
            <nav class="main-nav">
                <ul>
                    <li><a href="<?php echo $GLOBALS['mainDir'] . '/index.php'. $pageStr;?>">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="<?php echo $GLOBALS['mainDir'] . '/items.php' . $pageStr;?>">Hiện vật</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>