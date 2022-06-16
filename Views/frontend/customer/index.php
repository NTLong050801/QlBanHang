<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>
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
                <a href="#"><i class="fa fa-user"></i>
                
            </a>
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
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
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
                            <div class="header__top__right__auth" tt = "<?php
                if(isset($_SESSION['check_login'])){
                    echo 'Logout';
                
                }else{
                    echo 'Login';
                }
                ?>" id="iconLogin" >
                                <a href="#"><i class="fa fa-user"></i> 
                                <?php
                if(isset($_SESSION['check_login'])){
                    echo 'Logout';
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
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="http://localhost:88/QlBanHang/index.php?controller=shop">Shop</a>
                                <!-- <ul class="header__menu__dropdown man">
                                    <li><a href="#">Sweater</a> </li>
                                    <li><a href="#">Short</a></li>
                                    <li><a href="#">Khaki pant</a></li>
                                </ul> -->
                            </li>
                            <li><a href="#">Woman</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Long Skirt</a></li>
                                    <li><a href="./shoping-cart.html">Short Skirt </a></li>
                                    <li><a href="./checkout.html">Jean</a></li>
                                    <li><a href="./blog-details.html">Shirt</a></li>
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
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Thể loại quần áo </span>
                        </div>
                        <ul class="ul_category">
                            <?php

                            foreach ($category as $categories) {
                            ?>
                                <li><a href="#" id="<?= $categories['IDLoaiHang'] ?>"><?= $categories['TenLoaiHang'] ?></a></li>
                            <?php
                            }
                            ?>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">


                                    All Sản phẩm
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input id="product_search" type="text" value="<?php
                                                                                if (isset($_POST['input_search'])) {
                                                                                    echo $_POST['input_search'];
                                                                                } else {
                                                                                    echo '';
                                                                                }
                                                                                ?>" placeholder="What do yo u need?">
                                <button id="btn_search" type="button" class="site-btn">SEARCH</button>
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
                    <!-- slideshow -->
                    <!-- <div class="hero__item set-bg" data-setbg="http://localhost:88/clothes/public/img/kingman1.jpg"> -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="height : 500px; ">
                            <div class="carousel-item active">
                                <img src="http://localhost:88/QLBanHang/public/img/aophao.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost:88/QLBanHang/public/img/quannam.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost:88/QLBanHang/public/img/undenim.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" id="left" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" id="right" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <!-- <div class="col-lg-3"> -->
                    <?php
                    foreach ($categories_item as $category_item) {
                    ?>
                        <div class="categories__item " style="background-image: url('http://localhost:88/QLBanHang/public/img/<?= $category_item['img'] ?>');">
                            <h5><a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $category_item['IDSanPham'] ?>"><?= $category_item['TenSP'] ?></a></h5>
                        </div>
                    <?php
                    }
                    ?>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container search_pro">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản Phẩm</h2>
                    </div>
                    <div>
                        <label for="customRange2" class="form-label">Giá</label>
                        <br>
                        <span> 0 </span>
                        <input type="range" min="0" max="1000000" step="100000" value="0" style="width: 50%" class="form-range" id="pro_val">
                        <span id="max_price">1000000</span>
                        <br>
                        <button class="btn-warning" id="price">Lọc giá</button>
                    </div>

                    <div id="xinchao" class="featured__controls">
                        <ul>
                            <li id="0" class="category active" data-filter="*">All</li>
                            <?php
                            foreach ($category as $categories) {
                            ?>
                                <li id="<?= $categories['IDLoaiHang'] ?>" class="category" data-filter="*"><?= $categories['TenLoaiHang'] ?></li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>

            <div class=" featured__filter">

            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản phẩm mới ra</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $product_news_03 = array_slice($product_news, 0, 3);
                                foreach ($product_news_03 as $product_new) { ?>
                                    <a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $product_new['IDSanPham'] ?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="http://localhost:88/QLBanHang/public/img/<?= $product_new['img'] ?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?= $product_new['TenSP'] ?></h6>
                                            <span>$<?= $product_new['DonGiaBan'] ?></span>
                                        </div>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $product_news_46 = array_slice($product_news, 3, 6);
                                foreach ($product_news_46 as $product_new) {
                                ?>
                                    <a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $product_new['IDSanPham'] ?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="http://localhost:88/QLBanHang/public/img/<?= $product_new['img'] ?>" alt="">
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
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản phẩm bán chạy</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $product_solds_03 = array_slice($product_solds, 0, 3);
                                foreach ($product_solds_03 as $product_sold) { ?>
                                    <a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $product_sold['IDSanPham'] ?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="http://localhost:88/QLBanHang/public/img/<?= $product_sold['img'] ?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?= $product_sold['TenSP'] ?></h6>
                                            <span>$<?= $product_sold['DonGiaBan'] ?></span>
                                        </div>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $product_solds_46 = array_slice($product_solds, 3, 6);
                                foreach ($product_solds_46 as $product_sold) {
                                ?>
                                    <a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $product_sold['IDSanPham'] ?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="http://localhost:88/QLBanHang/public/img/<?= $product_sold['img'] ?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?= $product_sold['TenSP'] ?></h6>
                                            <span><?= $product_sold['DonGiaBan'] ?></span>
                                        </div>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <a href=""></a> -->
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản phẩm yêu thích </h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $product_sellings_03 = array_slice($product_sellings, 0, 3);
                                foreach ($product_sellings_03 as $product_selling) { ?>
                                    <a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $product_selling['IDSanPham'] ?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="http://localhost:88/QLBanHang/public/img/<?= $product_selling['img'] ?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?= $product_selling['TenSP'] ?></h6>
                                            <span>$<?= $product_selling['DonGiaBan'] ?></span>
                                        </div>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $product_sellings_46 = array_slice($product_sellings, 3, 6);
                                foreach ($product_sellings_46 as $product_selling) {
                                ?>
                                    <a href="http://localhost:88/QlBanHang/index.php?controller=details&IDSP=<?= $product_selling['IDSanPham'] ?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="http://localhost:88/QLBanHang/public/img/<?= $product_selling['img'] ?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?= $product_selling['TenSP'] ?></h6>
                                            <span><?= $product_selling['DonGiaBan'] ?></span>
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
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://www.elle.vn/wp-content/uploads/2019/12/22/383202/trang-phuc-chat-lieu-da-sang-chanh.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://file.hstatic.net/1000272479/file/pasted_image_0_8_86c237f0037445238278b33470ac82f9_grande.png" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://luvinus.com/wp-content/uploads/2020/08/chan-vay-da-mac-voi-ao-gi-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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
</body>
<div id="regsign" thongbao="<?php
                            // session_start();
                            if (isset($_SESSION['thongbao'])) {
                                echo $_SESSION['thongbao'];
                                unset($_SESSION['thongbao']);
                            } else {
                                echo 'none';
                            }

                            ?>"></div>
<?php
require("./public/Chung/footer.php")
?>
<?php
include('login.php');
?>

</html>
<script>
    $(document).ready(function() {
        $('#ThongBao').show();

        if ($('#regsign').attr("thongbao") == 'none') {

        } else {
            msg($('#regsign').attr("thongbao"))
        }
        id = 0
        // start = 1;
        react(id)
        input = $('#product_search').val();
        if (input != '') {
            search(input, 1)
            //$('#product_search').val('')
        }
        // click chọn loại hàng 
        function react(id, tranghientai) {

            $.ajax({
                url: url + "controller=customer&action=sweater",
                method: "POST",
                // gửi đi id loại hàng và số trang 
                data: {
                    id: id, // id của mặt hàng 
                    // start: start
                    tranghientai: tranghientai
                },
                success: function(dt) {
                    $('.featured__filter').hide().html(dt).fadeIn("slow")
                    // change_color()

                }
            })
        }

        // click chọn loại hàng
        $('.category').click(function() {
            id = $(this).attr('id') // lay id loai hang
            react(id) // goi react

        })

        function search(val, tranghientai) {
            $.ajax({
                url: url + "controller=customer&action=search",
                method: 'POST',
                data: {
                    TenSP: val,
                    tranghientai: tranghientai
                },
                success: function(dt) {
                    $('.featured__filter').hide().html(dt).fadeIn("slow")
                    $('html, body').animate({
                        scrollTop: $(".search_pro").offset().top
                    }, 1000);

                }
            })
        }
        $('#btn_search').click(function() {
            val = $('#product_search').val()
            tranghientai = 1;
            if (val != '') {

                search(val, tranghientai)
            }


        })

        $("#pro_val").on('input', function() {
            val = $(this).val()
            $('#max_price').html(val)

        });

        $(document).on("click", "#price", function() {
            val = $('#pro_val').val()

            $('.featured__controls li').each(function() {
                if ($(this).hasClass('active')) {
                    IDLH = $(this).attr('id')
                }
            })
            // console.log(IDLH)
            $.ajax({
                url: url + "controller=customer&action=show_pro_price",
                method: "POST",
                data: {
                    val: val,
                    IDLoaiHang: IDLH
                },
                success: function(dt) {
                    $('.featured__filter').html(dt)
                }
            })

        })

        // click chuyển trang 
        $(document).on('click', '.page-item', function() {
            tranghientai = $(this).attr('tranghientai');
            // alert(tranghientai)
            // console.log(id)
            id = $(this).attr('IDLH')
            price = $(this).attr('price');
            val = $(this).attr('val_search');
            if (price == 'none') {
                if (val != '') {
                    search(val, tranghientai)
                } else {
                    react(id, tranghientai)
                }
            } else {
                $.ajax({
                    url: url + "controller=customer&action=show_pro_price",
                    method: "POST",
                    // gửi đi id loại hàng và số trang 
                    data: {
                        IDLoaiHang: IDLH, // id của mặt hàng 
                        // start: start
                        tranghientai: tranghientai,
                        val: price
                    },
                    success: function(dt) {
                        $('.featured__filter').hide().html(dt).fadeIn("slow")

                    }
                })
            }
            $('html, body').animate({
                scrollTop: $(".search_pro").offset().top
            }, 1000);
        })

        $('ul.ul_category li a').click(function() {
            id = $(this).attr('id');
            // alert('123')
            $('ul.ul_category li a').removeClass('bg-secondary')
            $(this).addClass('bg-secondary')
            react(id)
            $('html, body').animate({
                scrollTop: $(".search_pro").offset().top
            }, 1000);
            $('.category').removeClass('active')
            $('.category').each(function() {
                id_category = $(this).attr('id');
                if (id_category == id) {
                    $(this).addClass('active')
                }
            })
        })

        function reset() {
            $('#right').click(function() {

            })

        }

        setInterval(reset(), 1000)




    })
</script>