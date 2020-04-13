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
<?= $content ?>
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