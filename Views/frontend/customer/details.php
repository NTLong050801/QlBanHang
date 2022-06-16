<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
   
    <link rel="stylesheet" href="http://localhost:88/QLBanHang/public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:88/QLBanHang/public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:88/QLBanHang/public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:88/QLBanHang/public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:88/QLBanHang/public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:88/QLBanHang/public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:88/QLBanHang/public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:88/QLBanHang/public/css/style1.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- mdbootstrap -->
    <!-- Font Awesome -->
    

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="http://localhost:88/QlBanHang/index.php?controller=cart&action=checkLogin"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth" id="iconLogin">
                                <a href="#"><i class="fa fa-user"></i> 
                                <?php
                if(isset($_SESSION['check_login'])){
                    echo 'Logout';
                    session_destroy();
                }else{
                    echo 'Login';
                }
                ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="http://localhost:88/QlBanHang/index.php?controller=customer#">Home</a></li>
                            <li class="active"><a href="http://localhost:88/QlBanHang/index.php?controller=shop">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Tất cả</a></li>
                            <?php
                            foreach ($get_categories as $get_category) {
                            ?>
                                <li><a href="http://localhost:88/QlBanHang/index.php?controller=shop&IDLH=<?= $get_category['IDLoaiHang'] ?>"><?= $get_category['TenLoaiHang'] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="http://localhost:88/QlBanHang/index.php?controller=customer" method="POST">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" name="input_search" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="http://localhost:88/QlBanHang/public/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Clothes Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="http://localhost:88/QlBanHang/index.php?controller=customer#">Home</a>
                            <?php
                            foreach ($data_lh as $data) { ?>
                                <a href="http://localhost:88/QlBanHang/index.php?controller=shop&IDLH=<?= $data['IDLoaiHang'] ?>">
                                <?php
                                echo $data['TenLoaiHang'];
                            }
                                ?>
                                </a>
                                <span><?php
                                        foreach ($data_sp as $data) {
                                            echo $data['TenSP'];
                                        }

                                        ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <?php
                foreach ($data_sp as $data) {
                ?>

                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large" src="http://localhost:88/QlBanHang/public/img/<?= $data['img'] ?>" alt="">
                            </div>
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-imgbigurl="https://cf.shopee.vn/file/857d138b054cce2112e68a0a0b4f71de" src="https://cf.shopee.vn/file/857d138b054cce2112e68a0a0b4f71de" alt="">
                                <img data-imgbigurl="https://toplist.vn/images/800px/giay-sneaker-nu-729209.jpg" src="https://toplist.vn/images/800px/giay-sneaker-nu-729209.jpg" alt="">
                                <img data-imgbigurl="https://statics.pancake.vn/web-media/c6/a6/43/a8/21cac694b38b833d44793378aa2b0b5e70e330d2c8276423bcab5a97.png" src="https://statics.pancake.vn/web-media/c6/a6/43/a8/21cac694b38b833d44793378aa2b0b5e70e330d2c8276423bcab5a97.png" alt="">

                                <img data-imgbigurl="https://cf.shopee.vn/file/88648984bd6512f6d8aae1fca85c11c9" src="https://cf.shopee.vn/file/88648984bd6512f6d8aae1fca85c11c9" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__text">
                            <h3><?= $data['TenSP'] ?></h3>
                            <div class="product__details__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(18 đánh giá)</span>
                            </div>
                            <div class="product__details__price">$ <span id="gia"><?= $data['DonGiaBan'] ?></span> </div>
                            <p><?= $data['MoTaSP'] ?></p>
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input id="sluong" type="text" value="1">
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="primary-btn" IDSP="<?= $data['IDSanPham'] ?>" id="add_cart">Thêm vào giỏ hàng</a>
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <ul>
                                <li><b>Đã bán</b> <span><?= $data['SoLuongBan'] ?></span></li>
                                <li><b>Số Lượng Trong Kho</b> <span><?= $data['SoLuongCon'] ?><samp> Free pickup today</samp></span></li>
                                <!-- <li><b>Weight</b> <span>0.5 kg</span></li> -->
                                <li><b>Chia sẻ</b>
                                    <div class="share">
                                        <a href="https://www.facebook.com/profile.php?id=100028971874945"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.facebook.com/profile.php?id=100028971874945"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/profile.php?id=100028971874945"><i class="fa fa-instagram"></i></a>
                                        <a href="https://www.facebook.com/profile.php?id=100028971874945"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Sản Phẩm Tương Tự</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Sản Phẩm Cùng Nha Cung Cấp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Đánh Giá Sản Phẩm <span>(1)</span></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <!-- Sản Phẩm tương tự -->
                                    <div class="product__details__tab__desc">
                                        <div class="row">
                                            <?php
                                            foreach ($SPTTS as $SPTT) {
                                            ?>
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <div class="product__item">
                                                        <div class="product__item__pic set-bg" data-setbg="http://localhost:88/QlBanHang/public/img/<?= $SPTT['img'] ?>">
                                                            <ul class="product__item__pic__hover">
                                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product__item__text">
                                                            <h6><a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $SPTT['IDSanPham'] ?>"><?= $SPTT['TenSP'] ?></a></h6>
                                                            <h5>$<?= $SPTT['DonGiaBan'] ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <div class="row">
                                            <?php
                                            foreach ($SPNCCS as $SPTT) {
                                            ?>
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <div class="product__item">
                                                        <div class="product__item__pic set-bg" data-setbg="http://localhost:88/QlBanHang/public/img/<?= $SPTT['img'] ?>">
                                                            <ul class="product__item__pic__hover">
                                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product__item__text">
                                                            <h6><a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $SPTT['IDSanPham'] ?>"><?= $SPTT['TenSP'] ?></a></h6>
                                                            <h5>$<?= $SPTT['DonGiaBan'] ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-3" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h1>Đây là đánh giá của khách</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>CÓ THỂ BẠN THÍCH</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($SPNNS as $SPTT) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="http://localhost:88/QlBanHang/public/img/<?= $SPTT['img'] ?>">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $SPTT['IDSanPham'] ?>"><?= $SPTT['TenSP'] ?></a></h6>
                                <h5>$<?= $SPTT['DonGiaBan'] ?></h5>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
  

    <!-- Js Plugins -->
    <script src="http://localhost:88/QlBanHang/public/js/jquery-3.3.1.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/bootstrap.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/jquery.nice-select.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/jquery-ui.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/jquery.slicknav.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/mixitup.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/owl.carousel.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/main.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/admin/chung.js"></script>
    <!-- MDB -->
   
    <?php
     include('login.php');
    ?>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#add_cart').click(function() {
            IDSanPham = $(this).attr("IDSP")
            sluong = $('#sluong').val();
            gia = $('#gia').html();
            $.ajax({
                url: "http://localhost:88/QlBanHang/index.php?controller=cart&action=checkLogin",
                method: "POSt",
                data: {
                    sluong: sluong,
                    gia: gia,
                    IDSanPham: IDSanPham
                },
                success: function(dt) {
                    if (dt == 'false') {
                        $('#modalLogin').modal('show')
                    }
                    // console.log(dt)
                }

            })
        })
        
    })
</script>