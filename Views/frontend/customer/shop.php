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
                <li class="active"><a href="http://localhost:88/QlBanHang/index.php?controller=customer#">Home</a></li>
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
                ?>
                            </a>
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
                            <?php
                            foreach ($get_category as $get_categories) {
                            ?>
                                <li id="<?= $get_categories['IDLoaiHang'] ?>"><a href="#"><?= $get_categories['TenLoaiHang'] ?></a></li>
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
                                <input type="text" placeholder="What do yo u need?" name="input_search">
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
    <section class="breadcrumb-section set-bg" data-setbg="https://fashionista.com/.image/ar_16:9%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cg_faces:center%2Cq_auto:good%2Cw_620/MTgyMjQwNDY3MzQ4NDMyMjAw/christian-dior-haute-couture-fall-2021-collection-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Clothes Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="http://localhost:88/QlBanHang/index.php?controller=customer#">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                                <li id='0'><a href="#">Tất cả</a></li>
                                <?php
                                foreach ($get_category as $get_categories) {
                                ?>
                                    <li id="<?= $get_categories['IDLoaiHang'] ?>"><a href="#"><?= $get_categories['TenLoaiHang'] ?></a></li>
                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="50000" data-max="1000000">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount" style="float: right;">
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-success" id="btn_search_price">Tìm kiếm </button>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    White
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Gray
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Red
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Nhà Cung Cấp</h4>
                            <?php
                            foreach ($allnccs as $ncc) {
                            ?>
                                <div class="sidebar__item__size">
                                    <label for="large" idncc="<?= $ncc['IDNhaCungCap'] ?>">
                                        <?= $ncc['TenCongTy'] ?>
                                        <!-- <input type="radio" id="large"> -->
                                    </label>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Sản Phẩm mới</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <?php
                                        foreach ($product_news as $product_new) {
                                        ?>
                                            <a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $product_new['IDSanPham'] ?>" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <img src="http://localhost:88/QLbanhang/public/img/<?= $product_new['img'] ?>" alt="">
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6><?= $product_new['TenSP'] ?></h6>
                                                    <span><?= $product_new['DonGiaBan'] ?></span>
                                                </div>
                                            </a>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <?php
                                        foreach ($product_new_twos as $product_new) {
                                        ?>
                                            <a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $product_new['IDSanPham'] ?>" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <img src="http://localhost:88/QLbanhang/public/img/<?= $product_new['img'] ?>" alt="">
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6><?= $product_new['TenSP'] ?></h6>
                                                    <span><?= $product_new['DonGiaBan'] ?></span>
                                                </div>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Top sản phẩm </h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <?php
                                foreach ($top_sanpham as $top_sanphams) {
                                ?>

                                    <div class="col-lg-4">
                                        <div class="product__discount__item">
                                            <div class="product__discount__item__pic set-bg" data-setbg="public/img/<?= $top_sanphams['img'] ?>">
                                                <div class="product__discount__percent">-20%</div>
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                                <span><?= $top_sanphams['IDLoaiHang'] ?></span>
                                                <h5><a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $top_sanphams['IDSanPham'] ?>"><?= $top_sanphams['TenSP'] ?></a></h5>
                                                <div class="product__item__price"><?= $top_sanphams['DonGiaBan'] - $top_sanphams['DonGiaBan'] * 0.2 ?>
                                                    <span><?= $top_sanphams['DonGiaBan'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php

                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sắp xếp giá sản phẩm theo</span>
                                    <br>
                                    <select id="slt_order">
                                        <option value="None">mặc định</option>
                                        <option value="DESC">Giảm dần</option>
                                        <option value="ASC">Tăng dần</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="shop_data_item">


                    </div>
                </div>
            </div>
    </section>
    <!-- Product Section End -->

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
    <!-- <script src="http://localhost:88/QlBanHang/public/js/jquery-3.3.1.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/bootstrap.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/jquery.nice-select.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/jquery-ui.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/jquery.slicknav.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/mixitup.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/owl.carousel.min.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/main.js"></script>
    <script src="http://localhost:88/QlBanHang/public/js/admin/chung.js"></script>
 -->
 <?php

require("./public/Chung/footer.php")
?>

</body>

</html>
<?php
include('login.php');
?>
<script>
    $(document).ready(function() {
        tranghientai = 1;
        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
            return false;
        };
        IDLH = getUrlParameter('IDLH')
        tranghientai = getUrlParameter('page');
        console.log(IDLH)
        if (IDLH == false && tranghientai == false) {
            load_item(0, '1', '')
        }
        if (IDLH != false && tranghientai == false) {
            load_item(IDLH, '1', '')
            $('.sidebar__item ul li,.hero__categories ul li').each(function() {
                $(this).removeClass('bg-secondary');
                if ($(this).attr('id') == IDLH) {
                    $(this).addClass('bg-secondary')
                }
            })
            $('.sidebar__item__size label').css("background", "#ffff")
            $('html, body').animate({
                scrollTop: $(".filter__item").offset().top
            }, 1000);
        }
        if (IDLH != false && tranghientai != false) {
            load_item(IDLH, tranghientai, '')
        }
        $('#slt_order').change(function() {
            orderby = $('#slt_order').val()
            // alert(order)
            IDLH = $('#get_idlh').attr('idlh');
            tranghientai = 1;
            price_min = $('#get_idlh').attr('price_min')
            IDNCC = $('#get_idlh').attr('IDNCC')
            if (price_min == 'none') {
                if (IDLH != 'none') {
                    load_item(IDLH, tranghientai, orderby)
                    window.history.pushState("object or string", "Title", "/QlBanHang/index.php?controller=shop&IDLH=" + IDLH + "&page=" + tranghientai);
                } else {
                    search_by_ncc(IDNCC, tranghientai, orderby)
                }
            } else {
                price_max = $('#get_idlh').attr('price_max')
                search_by_price(price_min, price_max, IDLH, tranghientai, orderby)
            }
        })

        //click chuyển trang
        $(document).on('click', '.product__pagination a', function() {
            tranghientai = $(this).attr('tranghientai')
            IDLH = $('#get_idlh').attr('IDLH')
            IDNCC = $('#get_idlh').attr('IDNCC')
            price_min = $('#get_idlh').attr('price_min')
            orderby = $('#slt_order').val()
            if (price_min == 'none') {
                if (IDLH != 'none') {
                    load_item(IDLH, tranghientai, orderby)
                    window.history.pushState("object or string", "Title", "/QlBanHang/index.php?controller=shop&IDLH=" + IDLH + "&page=" + tranghientai);
                } else {
                    search_by_ncc(IDNCC, tranghientai, orderby)
                }

            } else {
                price_max = $('#get_idlh').attr('price_max')
                search_by_price(price_min, price_max, IDLH, tranghientai, orderby)
            }
            $('html, body').animate({
                scrollTop: $(".filter__item").offset().top
            }, 1000);
            // $(this).attr("href", "http://www.jakcms.com")
        })
        IDLH = 0;
        count_product(IDLH)
        //load_item(0, tranghientai, orderby)
        $('.sidebar__item ul li,.hero__categories ul li').click(function() {
            IDLH = $(this).attr('id')
            tranghientai = 1
            load_item(IDLH, tranghientai)
            count_product(IDLH)
            $('html, body').animate({
                scrollTop: $(".filter__item").offset().top
            }, 1000);
            $('.sidebar__item ul li,.hero__categories ul li').each(function() {
                $(this).removeClass('bg-secondary');
                if ($(this).attr('id') == IDLH) {
                    $(this).addClass('bg-secondary')
                }
                $('.sidebar__item__size label').css("background", "#ffff")
            })
        })
        //click search lọc giá
        $('#btn_search_price').click(function() {
            // alert('123')
            tranghientai = 1
            price_min = ($('#minamount').val()).substr(1)
            price_max = ($('#maxamount').val()).substr(1)
            IDLoaiHang = $('#get_idlh').attr('idlh');
            orderby = $('#slt_order').val()
            // alert(IDLoaiHang)
            if (IDLoaiHang == 'none') {
                IDLoaiHang = 0
            }
            search_by_price(price_min, price_max, IDLoaiHang, tranghientai, orderby)
            count_product(IDLoaiHang, price_min, price_max)
            $('.sidebar__item ul li,.hero__categories ul li').each(function() {
                $(this).removeClass('bg-secondary');
                if ($(this).attr('id') == 0) {
                    $(this).addClass('bg-secondary')
                }
            })
            $('.sidebar__item__size label').css("background", "#ffff")
            $('html, body').animate({
                scrollTop: $(".filter__item").offset().top
            }, 1000);
        })

        // click nhà cung cấp
        $('.sidebar__item__size label').click(function() {
            IDNCC = $(this).attr('idncc');
            $('.sidebar__item__size label').css("background", "#ffff")
            $(this).css("background", "#25aa5e")
            console.log(IDNCC)
            search_by_ncc(IDNCC, 1, '')
            $('.sidebar__item ul li,.hero__categories ul li').each(function() {
                $(this).removeClass('bg-secondary');
            })
            count_product(0, '', '', IDNCC)
        })

        //số sản phẩm lọc đc
        function count_product(IDLoaiHang, price_min, price_max, IDNCC) {
            $.ajax({
                url: "http://localhost:88/QlBanHang/index.php?controller=shop&action=count_product",
                method: "POST",
                data: {
                    IDLoaiHang: IDLoaiHang,
                    price_min: price_min,
                    price_max: price_max,
                    IDNCC: IDNCC
                },
                success: function(dt) {
                    $('.filter__found h6 span').html(dt)
                    //console.log(dt)
                }
            })
        }
        //funcion lọc giá
        function search_by_price(price_min, price_max, IDLoaiHang, tranghientai, orderby) {
            $.ajax({
                url: "http://localhost:88/QlBanHang/index.php?controller=shop&action=search_by_price",
                method: "POSt",
                data: {
                    price_min: price_min,
                    price_max: price_max,
                    IDLoaiHang: IDLoaiHang,
                    page: tranghientai,
                    orderby: orderby
                },
                success: function(dt) {
                    // console.log(dt)
                    $('#shop_data_item').hide().html(dt).fadeIn('slow')
                    $('.product__pagination').css("margin-left", "65%")
                }
            })
        }

        function search_by_ncc(IDNCC, tranghientai, orderby) {
            $.ajax({
                url: "http://localhost:88/QlBanHang/index.php?controller=shop&action=all_ncc",
                method: "POST",
                data: {
                    IDNCC: IDNCC,
                    page: tranghientai,
                    orderby: orderby,
                },
                success: function(dt) {
                    $('#shop_data_item').hide().html(dt).fadeIn('slow')
                    $('.product__pagination').css("margin-left", "65%")

                }
            })
        }

        function load_item(IDLH, tranghientai, orderby) {
            $.ajax({
                url: "http://localhost:88/QlBanHang/index.php?controller=shop&action=get_item",
                method: "POST",
                data: {
                    IDLH: IDLH,
                    page: tranghientai,
                    orderby: orderby,

                },
                success: function(dt) {
                    $('#shop_data_item').hide().html(dt).fadeIn('slow')
                    $('.product__pagination').css("margin-left", "65%")

                }
            })
        }

    })
</script>