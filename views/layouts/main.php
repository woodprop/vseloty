<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Realtie Real estate Category Bootstrap responsive Web Template | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<!--/banner-sec-->
<div class="banner">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?= Url::home() ?>">ВсеЛоты.ру</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fas fa-bars"></i>
					</span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= Url::home() ?>">Главная
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ml-xl-2">
                        <a class="nav-link" href="<?= Url::to(['lot/index']) ?>">Лоты</a>
                    </li>
                    <li class="nav-item ml-xl-2">
                        <a class="nav-link" href="404.html">Tour</a>
                    </li>
                    <li class="nav-item dropdown ml-xl-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Dropdown
                            <i class="fas fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="register.html">Register</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="news.html">News</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="customer.html">Customers</a>
                        </div>
                    </li>
                    <li class="nav-item ml-xl-2">
                        <a class="nav-link" href="projects.html">Projects</a>
                    </li>
                    <li class="nav-item ml-xl-2">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>
    </header>
    <!--banner-->
    <div class="banner-info">
        <!--/search_form -->
        <div id="search_form" class="search_top text-center">
            <h3>Все Лоты с торгов по банкротству</h3>
            <p>Недвижимость, транспорт и другое</p>
            <form action="#" method="post" class="ban-form row">
                <div class="col-md-3 banf">
                    <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                </div>
                <div class="col-md-3 banf">
                    <select class="form-control" id="country12">
                        <option>Location</option>
                        <option>Uk</option>
                        <option>USA</option>
                        <option>France</option>
                    </select>
                </div>
                <div class="col-md-3 banf">
                    <select id="country13" class="form-control">
                        <option>Real estate</option>
                        <option>Real Homes</option>
                        <option>Aparments</option>
                        <option>Real Flats</option>
                    </select>
                </div>
                <div class="col-md-3 banf">
                    <input class="form-control" type="submit" value="Free Trail">
                </div>
            </form>
        </div>
        <!--//search_form -->
    </div>
    <!--//banner-->
</div>
<!--//banner-sec-->
<!-- about -->
<section class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <img src="images/ab.jpg" alt="Realtie" class="img-fluid" />
            </div>
            <div class="col-lg-6 about-info">
                <h3 class="tittle text-left mb-lg-5 mb-3">About Us</h3>
                <p class="my-xl-4 my-lg-3 my-md-4 my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book.
                </p>

                <a href="single.html" class="btn btn-sm animated-button gibson-three">Read More</a>
            </div>

        </div>
    </div>
</section>
<!-- /about -->
<!--/banner-bottom -->
<section class="banner-bottom py-lg-5 py-3">
    <div class="container py-lg-4 py-3">
        <h3 class="tittle ser text-center mx-auto mb-lg-5 mb-3 ">Provide instant, seamless customer support 24/7 from anywhere you are!</h3>
        <div class="inner-sec-agileits-w3ls">
            <div class="row pt-lg-3">
                <div class="serve-grid col-md-4 col-sm-6 mt-lg-5 text-center">
                    <i class="fab fa-react"></i>
                    <h4 class="my-lg-4 my-3">Reliable</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                        layout.
                    </p>
                </div>
                <div class="serve-grid col-md-4 col-sm-6 mt-lg-5 text-center">
                    <i class="fab fa-codepen"></i>
                    <h4 class="my-lg-4 my-3">Proactive</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                        layout.
                    </p>
                </div>
                <div class="serve-grid col-md-4 col-sm-6 mt-lg-5 text-center">
                    <i class="far fa-edit"></i>
                    <h4 class="my-lg-4 my-3">Accurate</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                        layout.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//banner-bottom -->
<!--/process-->
<section class="banner-bottom py-lg-5 py-3" id="plats">
    <div class="container py-lg-4 py-3">
        <h3 class="tittle text-center">Latest in Sales</h3>
        <div class="row inner-sec-agileits-w3ls">
            <div class="tabs">
                <ul class="nav nav-pills my-4 justify-content-center my-lg-5 my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                           aria-selected="true">Houses</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                           aria-selected="false">Appartments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-edit-tab" data-toggle="pill" href="#pills-edit" role="tab" aria-controls="pills-profile" aria-selected="false">Garages</a>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="menu-grids mt-4">

                            <div class="row t-in">
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g4.jpg" alt="Realtie" class="img-fluid" />
                                            <h5 class="card-title mt-3">Eaton Garth
                                                <span>$731,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 3</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 4</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 3</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g5.jpg" alt="Realtie" class="img-fluid" />
                                            <div class="label-inner">
                                                <span class="status">For Rent</span>
                                            </div>
                                            <h5 class="card-title mt-3">Bill Tower
                                                <span>$431,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 2</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 1</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g6.jpg" alt="Realtie" class="img-fluid" />
                                            <h5 class="card-title mt-3">Abestian Villa
                                                <span>$531,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 3</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 2</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row t-in mt-4">
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g1.jpg" alt="Realtie" class="img-fluid" />
                                            <div class="label-inner">
                                                <span class="status">For Rent</span>
                                            </div>
                                            <h5 class="card-title mt-3">Eaton Garth
                                                <span>$731,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 2</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 1</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g2.jpg" alt="Realtie" class="img-fluid" />
                                            <h5 class="card-title mt-3">Bill Tower
                                                <span>$431,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 3</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 2</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g3.jpg" alt="Realtie" class="img-fluid" />
                                            <div class="label-inner">
                                                <span class="status">For Sale</span>
                                            </div>
                                            <h5 class="card-title mt-3">Abestian Villa
                                                <span>$531,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 2</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 1</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="menu-grids mt-4">
                            <div class="row t-in">
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g1.jpg" alt="Realtie" class="img-fluid" />
                                            <div class="label-inner">
                                                <span class="status">For Rent</span>
                                            </div>
                                            <h5 class="card-title mt-3">Eaton Garth
                                                <span>$731,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 2</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 1</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g2.jpg" alt="Realtie" class="img-fluid" />
                                            <h5 class="card-title mt-3">Bill Tower
                                                <span>$431,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 3</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 2</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g3.jpg" alt="Realtie" class="img-fluid" />
                                            <div class="label-inner">
                                                <span class="status">For Sale</span>
                                            </div>
                                            <h5 class="card-title mt-3">Abestian Villa
                                                <span>$531,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 2</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 1</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row t-in mt-4">
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g4.jpg" alt="Realtie" class="img-fluid" />
                                            <h5 class="card-title mt-3">Eaton Garth
                                                <span>$731,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 3</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 4</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 3</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g5.jpg" alt="Realtie" class="img-fluid" />
                                            <div class="label-inner">
                                                <span class="status">For Rent</span>
                                            </div>
                                            <h5 class="card-title mt-3">Bill Tower
                                                <span>$431,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 2</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 1</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g6.jpg" alt="Realtie" class="img-fluid" />
                                            <h5 class="card-title mt-3">Abestian Villa
                                                <span>$531,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 3</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 2</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-edit" role="tabpanel" aria-labelledby="pills-edit-tab">
                        <div class="menu-grids mt-4">
                            <div class="row t-in">
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g1.jpg" alt="Realtie" class="img-fluid" />
                                            <div class="label-inner">
                                                <span class="status">For Rent</span>
                                            </div>
                                            <h5 class="card-title mt-3">Eaton Garth
                                                <span>$731,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 2</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 1</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g2.jpg" alt="Realtie" class="img-fluid" />
                                            <h5 class="card-title mt-3">Bill Tower
                                                <span>$431,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 3</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 2</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-info-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/g3.jpg" alt="Realtie" class="img-fluid" />
                                            <div class="label-inner">
                                                <span class="status">For Sale</span>
                                            </div>
                                            <h5 class="card-title mt-3">Abestian Villa
                                                <span>$531,000 </span>
                                            </h5>
                                            <p class="card-text">
                                                <i class="fas fa-map-marker-alt"></i> Staten Island / New York City</p>
                                            <ul class="property-box">
                                                <li class="field-item">
														<span>
															<i class="fas fa-bed"></i> 2</span> Bedrooms </li>
                                                <li class="field-item mx-lg-2 mx-md-1">
														<span>
															<i class="fas fa-bath"></i> 1</span> Bathroom </li>
                                                <li class="field-item">
														<span>
															<i class="far fa-building"></i> 2</span> Garages </li>
                                            </ul>
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
<!--//preocess-->
<!-- stats -->
<section class="stats_test pb-5 container-fluid">
    <div class="row inner_stat_wthree_agileits">
        <div class="col-sm-3 col-6 py-5 stats_info counter_grid">
            <i class="far fa-building"></i>
            <p class="counter">145</p>
            <h4>Branches</h4>
        </div>
        <div class="col-sm-3 col-6 py-5 stats_info counter_grid1">
            <i class="fas fa-users"></i>
            <p class="counter">165</p>
            <h4>Agents</h4>
        </div>
        <div class="col-sm-3 col-6 py-5 stats_info counter_grid2">
            <i class="far fa-edit"></i>
            <p class="counter">563</p>
            <h4>Projects</h4>
        </div>
        <div class="col-sm-3 col-6 py-5 stats_info counter_grid3">
            <i class="far fa-smile"></i>
            <p class="counter">1045</p>
            <h4>Happy Customers</h4>
        </div>
    </div>
</section>
<!-- //stats -->
<!--/features-->
<section class="banner-bottom py-lg-5 py-3">
    <div class="container py-lg-4 py-3">
        <h3 class="tittle text-center">Agents Details</h3>
        <div class="row inner-sec-agileits-w3ls mt-lg-5 mt-3">
            <div class="col-sm-4">
                <div class="team-grid text-center">
                    <div class="team-img">
                        <img class="img-fluid rounded" src="images/team1.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h4>Agent 1</h4>
                        <span>Chief Executive </span>
                        <ul class="d-flex justify-content-center py-3 social-icons">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="mx-3">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-grid text-center">
                    <div class="team-img">
                        <img class="img-fluid rounded" src="images/team2.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h4>Agent 2</h4>
                        <span>Senior Engineer</span>
                        <ul class="d-flex justify-content-center py-3 social-icons">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="mx-3">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-grid text-center">
                    <div class="team-img">
                        <img class="img-fluid rounded" src="images/team3.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h4>Agent 3</h4>
                        <span>HR Manager</span>
                        <ul class="d-flex justify-content-center py-3 social-icons">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="mx-3">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //end row -->
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="team-grid text-center">
                    <div class="team-img">
                        <img class="img-fluid rounded" src="images/team4.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h4>Agent 4</h4>
                        <span>Accounts Manager</span>
                        <ul class="d-flex justify-content-center py-3 social-icons">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="mx-3">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-grid text-center">
                    <div class="team-img">
                        <img class="img-fluid rounded" src="images/team1.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h4>Agent 5</h4>
                        <span>Marketing Head</span>
                        <ul class="d-flex justify-content-center py-3 social-icons">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="mx-3">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //end row -->
    </div>
</section>
<!--//features-->
<!--/middle-->
<section class="middle banner-bottom py-lg-5 py-3">
    <div class="container py-lg-5 py-3">
        <h3 class="tittle cen text-left mb-lg-3 mb-2">Over than
            <strong>7000</strong> Happy Customer</h3>
        <div class="inner-sec-agileits-w3ls">
            <div class="row pt-lg-3">
                <div class="serve-grid col-md-6 col-sm-6 mt-lg-5 text-left">
                    <i class="fas fa-chart-line"></i>
                    <h4 class="my-lg-4">Good Sale & Marketing</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                        layout.
                    </p>
                </div>
                <div class="serve-grid col-md-6 col-sm-6 mt-lg-5 text-left">
                    <i class="fas fa-male"></i>
                    <h4 class="my-lg-4">Good Sale & Marketing</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                        layout.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//middle-->
<!-- Testimonials-->
<section class="testimonials py-lg-5 py-3 text-center">
    <div class="container py-lg-5 py-3">
        <h3 class="tittle">Отзывы пользователей</h3>
        <div class="inner-sec-agileits-w3ls mt-lg-5  mt-3">
            <section class="slider">
<!--                Слайдер с отзывами-->
            </section>
        </div>
    </div>
</section>
<!-- //testimonials -->
<!--footer-->
<footer>
    <div class="footer-sec-w3-agileits py-lg-5 py-3">
        <div class="container py-lg-4 py-3">
            <div class="row">
                <div class="col-lg-4 footer-grid-wthree text-left">
                    <h3>About US</h3>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>
                    <address class="ad-info mt-3">
                        <strong>Twitter, Inc.</strong>
                        <br> 1355 Market St, Suite 900
                        <br> San Francisco, CA 94103
                        <br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
                <div class="col-lg-4 footer-grid-wthree text-left">

                    <div class="tech-btm">
                        <h3>Popular Properties </h3>
                        <div class="blog-grids row mb-3">
                            <div class="col-md-5 blog-grid-left">
                                <a href="single.html">
                                    <img src="images/g1.jpg" class="img-fluid rounded" alt="">
                                </a>
                            </div>
                            <div class="col-md-7 blog-grid-right">
                                <h6 class="price mb-2">$12,000</h6>
                                <h5>
                                    <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                </h5>
                                <div class="sub-meta mt-2">
										<span>
											<i class="fab fa-periscope"></i> 51-199 Pike St,</span>
                                </div>
                            </div>

                        </div>
                        <div class="blog-grids row mt-2">
                            <div class="col-md-5 blog-grid-left">
                                <a href="single.html">
                                    <img src="images/g5.jpg" class="img-fluid rounded" alt="">
                                </a>
                            </div>
                            <div class="col-md-7 blog-grid-right">
                                <h6 class="price mb-2">$13,000</h6>
                                <h5>
                                    <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                </h5>
                                <div class="sub-meta mt-2">
										<span>
											<i class="fab fa-periscope"></i> 51-199 Pike St,</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- subscribe -->
                <div class="col-lg-4 subscribe-main footer-grid-wthree text-left">
                    <h2>Signup to our newsletter</h2>
                    <div class="subscribe-main text-left">
                        <div class="subscribe-form">
                            <form action="#" method="post" class="subscribe_form">
                                <input class="form-control" type="email" placeholder="Enter your email..." required="">
                                <button type="submit" class="btn btn-primary submit">Submit</button>
                            </form>
                            <div class="clearfix"> </div>
                        </div>
                        <p>We respect your privacy.No spam ever!</p>
                    </div>
                    <!-- //subscribe -->
                </div>
            </div>
            <!-- //footer -->
        </div>
    </div>
    <!-- footer -->
    <div class="footer-cpy p-lg-4 p-md-3 p-3 container-fluid">
        <div class="row">
            <div class="col-lg-6 copyrightbottom text-left">
                <h3>
                    <a class="navbar-brand" href="<?= Url::home() ?>">ВсеЛоты.ру</a>
                </h3>
                <p>© 2020 VseLoty.ru - All Rights Reserved | Created by
                    <a href="http://kkokarev.ru">Konstantin Kokarev</a>
                </p>

            </div>
            <div class="col-lg-6 copyrighttop mt-3 text-right">
                <ul>
                    <li class="mx-3">
                        <a class="facebook" href="#">
                            <i class="fab fa-facebook-f"></i>
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
                            <i class="fab fa-twitter"></i>
                            <span>Twitter</span>
                        </a>
                    </li>
                    <li class="mx-3">
                        <a class="facebook" href="#">
                            <i class="fab fa-google-plus-g"></i>
                            <span>Google+</span>
                        </a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
                            <i class="fab fa-pinterest-p"></i>
                            <span>Pinterest</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!---->



<!-- //dropdown nav -->
<!-- smooth-scrolling-of-move-up -->

<!-- //smooth-scrolling-of-move-up -->
<!-- js file -->
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>