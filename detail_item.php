<?php
    require_once('./lib/customFunc.php');
    $sourceAllItems = __DIR__ . '/tempscripts/list-all-items.json';
    $sourceNotableItems = __DIR__ . '/tempscripts/list-notable-items.json';
    $listAllItems = getItemsFromJSON($sourceAllItems);
    $listNotableItems = getItemsFromJSON($sourceNotableItems);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $commonFolder = './common';
        require_once($commonFolder . "/metadata.php");
    ?>
    <link rel="stylesheet" href=<?php echo ASSETS . '/css/draft/items.css';?> />
    <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . '/css/css/bootstrap.min.css';?> />
    <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . '/css/css/font-awesome.min.css';?> />
    <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . '/css/css/JKS-icons.css';?> />
    <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . '/css/css/settings.css';?> />
    <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . '/css/css/owl.carousel.css';?> />
    <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . '/css/css/owl.transitions.css';?> />
    <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . '/css/css/jquery.fancybox.css';?> />
    <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . '/css/css/zerogrid.css';?> />
    <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . '/css/css/style.css';?> />
    <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . '/css/css/loader.css';?> />
    <title>Nhom01</title>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
    <div class="main-container">
        <?php require_once($commonFolder . "/header.php");?>
        <!--Welcome-->
        <section id="button-link-web">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Vertical Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto flex-column vertical-nav">
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
        <section id="welcome" class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading">TRỐNG NGỌC LŨ</h2>
                        <hr class="heading_space">
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <p class="half_space"><strong>Chất liệu:</strong>  Đồng</p>
                        <p class="half_space"><strong>Kích thước:</strong> Đường kính mặt: 79,3cm; Đường kính chân: 80cm; Chiều cao: 63cm; Trọng lượng: 86 kg</p>
                        <p class="half_space"><strong>Niên đại: </strong>Văn hoá Đông Sơn, khoảng 2.500 - 2.000 năm cách ngày nay</p>
                        <p class="half_space"><strong>Nơi phát hiện:</strong> Làng Ngọc Lũ, huyện Bình Lục, tỉnh Hà Nam, năm 1893</p>
                        <p class="half_space"><strong>Công nhận: </strong>Là Bảo vật Quốc gia theo Quyết định số 1426/QĐ-TTg ngày 01/10/2012 của Thủ tướng Chính phủ.</p>
                        <p class="half_space"></p>
                        <p class="half_space">Trống được phát hiện khi đắp đê Trần Thủy tại xã Như Trác, huyện Nam Xang (nay là huyện Lý Nhân, tỉnh Hà Nam) năm 1893, sau đó được đưa về thờ tại đình làng Ngọc Lũ (huyện Bình Lục, tỉnh Hà Nam). Tháng 4 năm 1903, Viện Viễn Đông Bác cổ sưu tầm về Bảo tàng Louis Finot (nay là Bảo tàng Lịch sử quốc gia).

                            Trống Ngọc Lũ là trống đẹp nhất trong những trống đồng Đông Sơn được phát hiện cho đến nay ở Việt Nam. Trống có patin màu xanh xám gồm bốn phần: mặt, tang, thân và chân trống. Hoa văn trang trí tập trung ở mặt, tang và thân. Giữa mặt trống là hình mặt trời 14 tia, xung quanh đúc chìm 16 băng hoa văn: hình học, vòng tròn tiếp tuyến có chấm giữa, đặc biệt là các băng trang trí diễn tả cảnh sinh hoạt, lễ hội (đánh trống đồng, cầu mùa, giã gạo), hươu, chim... vận động ngược chiều kim đồng hồ. Tang trống cong phình đều, trang trí 6 hình thuyền chiến, các chiến binh, chim, thú... Thân trống hình trụ đứng trang trí hình người hóa trang nhảy múa trong ô hình chữ nhật. Chân trống choãi hình nón cụt.

                            Tất cả các đề tài trang trí trên trống phản ánh đời sống vật chất và tinh thần của cư dân Việt cổ. Với vẻ đẹp hoàn hảo, hình dáng hài hòa, cân đối, hoa văn tinh xảo, phong phú, Trống Ngọc Lũ là hiện vật đặc sắc, quý hiếm, có giá trị trên nhiều phương diện về lịch sử và văn hóa Việt Nam, thể hiện đỉnh cao của nghệ thuật luyện kim, đúc đồng của cư dân Đông Sơn. Các đề tài trang trí trên Trống Ngọc Lũ đã hội tụ đầy đủ tri thức và quan niệm nhân sinh sâu sắc cũng như tài năng, nghệ thuật và tâm hồn của người Việt cổ, trở thành biểu tượng của văn hóa Việt Nam.
                        </p>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <img class="img-responsive" src="http://baovatquocgia.baotangso.com/content/uploads//baovat/group/group-slides/ngoc-lu-az8j3six.jpg" alt="image">
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
                                        <div class="col-3-5 bachground-color-image d-flex align-items-center ">
                                            <div class="wrap-col first">
                                                <div class="item-container">
                                                    <img class="image-fix-size" src="http://baovatquocgia.baotangso.com/content/uploads//baovat/group/album-images/04-bz9klyon.jpg" alt="cook"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1-5 bachground-color-image">
                                            <div class="wrap-col first ">
                                                <div class="item-container">
                                                    <img class="image-fix-size" src="http://baovatquocgia.baotangso.com/content/uploads//baovat/group/album-images/3-dwzcs3rm.png" alt="cook"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2-5 bachground-color-image">
                                            <div class="wrap-col first">
                                                <div class="item-container">
                                                    <img class="image-fix-size" src="http://baovatquocgia.baotangso.com/content/uploads//baovat/group/album-images/2-4hbfm8yc.png" alt="cook"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1-5 bachground-color-image">
                                            <div class="wrap-col first">
                                                <div class="item-container">
                                                    <img class="image-fix-size" src="http://baovatquocgia.baotangso.com/content/uploads//baovat/group/album-images/3-k45ms2g7.png" alt="cook"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1-5 bachground-color-image">
                                            <div class="wrap-col first">
                                                <div class="item-container">
                                                    <img class="image-fix-size" src="http://baovatquocgia.baotangso.com/content/uploads//baovat/group/album-images/4-iprbhyxc.png" alt="cook"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1-5 bachground-color-image">
                                            <div class="wrap-col first">
                                                <div class="item-container">
                                                    <img class="image-fix-size" src="http://baovatquocgia.baotangso.com/content/uploads//baovat/group/album-images/6-g7v1ixmd.png" alt="cook"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1-5 bachground-color-image">
                                            <div class="wrap-col first">
                                                <div class="item-container">
                                                    <img class="image-fix-size" src="http://baovatquocgia.baotangso.com/content/uploads//baovat/group/album-images/16-guyiho1o.jpg" alt="cook"/>
                                                </div>
                                            </div>
                                        </div>
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
                    <div class="col-1-2 bachground-color-image">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/s5Ef8NaJPdk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-1-2 bachground-color-image">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/p-4aQ34aFAc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>


        <script src="js/jquery-2.2.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery-countTo.js"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/functions.js" type="text/javascript"></script>

        <?php require_once($commonFolder . "/footer.php");?>
    </div>
    <?php require_once($commonFolder . "/scripts.php");?>
</body>
</html>