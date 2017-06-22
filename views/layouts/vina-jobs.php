<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\components\tona\Common;
use app\components\tona\Login;
use \app\components\tona\Helper;
use app\assets\AppAsset;


$this->title = 'Vina-jobs | Tona Nguyen';
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<title>Vina-jobs | Tona Nguyen</title>-->
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel='shortcut icon' type='image/x-icon' href='<?= \app\components\tona\Helper::siteURL() ?>/favicon.ico' />

        <!-- Yoast SEO plugin. -->
        <meta name="description" content="Website tìm kiếm việc làm."/>
        <meta name="robots" content="noodp"/>
        <link rel="canonical" href="http://vina-jobs.com/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Việc làm cho sinh viên mới ra trường." />
        <meta property="og:description" content="Việc làm lương cao" />
        <meta property="og:url" content="http://vina-jobs.com/" />
        <meta property="og:site_name" content="Jobs" />
        <meta property="article:author" content="http://vina-jobs.com/" />
        <meta property="article:section" content="Jobs, việc làm, nghề nghiệp" />
        <meta property="article:published_time" content="2015-12-12T14:08:51+00:00" />
        <meta property="article:modified_time" content="2015-12-12T18:19:26+00:00" />
        <meta property="og:updated_time" content="2015-12-12T18:19:26+00:00" />
        <meta property="fb:admins" content="tonanguyen" />
        <meta property="og:image" content="http://vina-jobs.com/" />
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:description" content="Tìm kiếm việc làm, việc làm lương cao"/>
        <meta name="twitter:title" content="Website tìm kiếm việc làm"/>
        <meta name="twitter:site" content="@Jobs"/>
        <meta name="twitter:image" content="http://vina-jobs.com/"/>
        <meta name="twitter:creator" content="@Jobs"/>
        <!-- / Yoast SEO plugin. -->

        <!--Core CSS -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body >
    <?php

//    \app\components\UserOnlineWidget::getStatistic();
    \app\components\LogSystemWidget::createLogs();

    if(Login::checked()){

    }else{
        echo \app\components\LoginWidget::widget(['message' => '']); /* Use: data-toggle="modal" data-target="#signup-modal" */
        echo \app\components\SignUpWidget::widget(['message' => '']); /* Use: data-toggle="modal" data-target="#login-modal" */
        echo \app\components\SignUpCompanyWidget::widget(['message' => '']); /* Use: data-toggle="modal" data-target="#login-modal" */
    }
    ?>

    <div class="container-popover-index">
        <script type="text/template" id="listService">
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        <li><?= Html::a('TÌM KIẾM ỨNG VIÊN', ['/resume/'], ['data' => ['method' => 'post']]) ?></li><a href="#"></a></li>
                        <li><?= Html::a('TÌM CÔNG VIỆC', ['/job/'], ['data' => ['method' => 'post']]) ?></li><a href="#"></a></li>
                        <li><?= Html::a('ĐĂNG TUYỂN DỤNG', ['/job/post'], ['data' => ['method' => 'post']]) ?></li><a href="#"></a></li>
                        <li><?= Html::a('GỬI CV', ['/resume/create'], ['data' => ['method' => 'post']]) ?></li><a href="#"></a></li>
                        <?php if(!Login::checked()){ ?>
                        <li><a href="#" class="signup-select-modal">SIGN UP </a> or <a href="#" data-toggle="modal" data-target="#login-modal">LOGIN</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </script>
    </div>
    <!-- Header Section Start -->
    <header id="header_part">
        <div class="header_part" id="head">
            <div class="overlay">
                <div class="start_part">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <!-- Logo Start -->
                                    <div class="site_logo">
                                        <a href="<?= Helper::siteURL() ?>" title=""><img src="<?= Helper::siteURL()?>/web/images/logo2.png" height="45" alt="vina-jobs" title="Tona Nguyen"/></a>
                                    </div>
                                    <!-- Logo End-->
                                    <!-- Site Title start-->
                                    <div class="site_title">
                                        <h1>Bạn muốn tìm ứng viên hoặc một công việc ?</h1>
                                        <p>Một giải pháp tìm kiếm cơ hội việc làm cho bạn. <br/>Hoặc bạn cũng có thể cung cấp thông tin (cv, porfolio) đến nhà tuyển dụng.<br/> Hãy để chúng tôi giúp bạn!</p>
                                    </div>
                                    <!-- Site Title end-->
                                    <!-- Countdown start -->
                                    <div class="countdown wow bounceInUp text-center">
                                        <button class="btn btn-primary start_submit_box popover-index" title="VUI LÒNG CHỌN">BẮT ĐẦU</button>
                                    </div>
                                    <!-- Countdown end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu Start -->
                <div class="menu_area" id="stick_menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">
                                        <div class="collapse navbar-collapse mainnavmenu" id="bs-example-navbar-collapse-1">
                                            <div id="menu-center">
                                                <ul class="nav navbar-nav navbar-right mainnav">
                                                    <li><a href="#header_part" >Trang bắt đầu</a></li>
                                                    <li><a href="#welcome_section">Giới thiệu</a></li>
                                                    <li><a href="#email_subscribe_section">Nhận thông báo</a></li>
                                                    <li><a href="#contact_section">Liên hệ</a></li>
                                                    <?php if(Login::checked()){ ?>
                                                    <li>
                                                        <?= Html::a('Hồ sơ', ['/'.Common::currentUser('username').'/profile.html'], ['data' => ['method' => 'post']]) ?>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End-->
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- About Section Start -->
    <section id="welcome_section">
        <div class="welcome_section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <!-- About text start -->
                            <div class="section-title">
                                <h2>Chào mừng bạn đến website <?= Helper::siteURL() ?></h2>
                                <p>Hãy đăng ký một tài khoản, và tìm kiếm ứng viên phù hợp hoặc gửi CV của bạn.</p>
                            </div>
                            <!-- About text end -->
                        </div>
                        <!-- About service part start-->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="welcome_part wow fadeInLeft">
                                    <div class="welcome_icon">
                                        <i class="fa fa-search fa-4x"></i>
                                    </div>
                                    <h2>TÌM KIẾM ỨNG VIÊN</h2>
                                    <p>Curabitur blandit tempus ptitor. Cum socielerisque nisl cons commodo cursus magna, vel scelerisque nisl onsec teet. </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="welcome_part wow fadeInUp">
                                    <div class="welcome_icon">
                                        <i class="fa fa-search fa-4x"></i>
                                    </div>
                                    <h2>TÌM CÔNG VIỆC</h2>
                                    <p>Curabitur blandit tempus ptitor. Cum socielerisque nisl cons commodo cursus magna, vel scelerisque nisl onsec teet. </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="welcome_part wow fadeInDown">
                                    <div class="welcome_icon">
                                        <i class="fa fa-briefcase fa-4x"></i>
                                    </div>
                                    <h2>ĐĂNG TUYỂN DỤNG</h2>
                                    <p>Curabitur blandit tempus ptitor. Cum socielerisque nisl cons commodo cursus magna, vel scelerisque nisl onsec teet. </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="welcome_part wow fadeInRight">
                                    <div class="welcome_icon">
                                        <i class="fa fa-cloud-upload fa-4x"></i>
                                    </div>
                                    <h2>GỬI CV</h2>
                                    <p>Curabitur blandit tempus ptitor. Cum socielerisque nisl cons commodo cursus magna, vel scelerisque nisl onsec teet. </p>
                                </div>
                            </div>
                        </div>
                        <!-- About service part end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
    <!-- Subscriber Section Start -->
    <section id="email_subscribe_section">
        <div class="email_subscribe_section" >
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <!-- Email Subscriber text start-->
                        <div class="section-title">
                            <h2>Nhận thông báo từ chúng tôi</h2>
                            <p>Hãy nhập email của bạn và chúng tôi sẽ gửi thông báo cho bạn.</p>
                        </div>
                        <!-- Email Subscriber text end-->
                        <div class="email_subscribe_form_part wow zoomIn">
                            <!-- Email Subscribe Form start -->
                            <form method="post" id="subscriber_form" action="contact.php">
                                <input type="email" id="subscriberemail" name="subscriber_email" class="form-control email_input_box" placeholder="Your email" required/>
                                <button type="submit" class="btn btn-primary email_submit_box"><i class="fa fa-envelope-o"></i> Get Notified</button>
                            </form>
                            <!-- Email Subscribe Form End -->
                            <div id="show_subscriber_msg"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscriber Section End -->
    <!-- Contact Section Start -->
    <section id="contact_section">
        <div class="contact_section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="section-title">
                                <h2>Contact us.</h2>
                                <p>Bạn cũng có thể liên hệ với chúng tôi để được giúp đỡ hoặc đóng góp ý kiến của bạn.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="address_part">
                                    <div class="address">
                                        <i class="fa fa-map-marker"></i> GO DAU <br/> F.TAN QUI <br/> Q.TAN PHU <br/> TP.HO CHI MINH
                                    </div>
                                    <div class="phone">
                                        <i class="fa fa-phone"></i> +84 932 252 414
                                    </div>
                                    <div class="email">
                                        <i class="fa fa-envelope-o"></i> nguyennguyen.vt88@gmail.com
                                    </div>
                                    <div class="social_icons">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" data-rel="tooltip" class="icon_fb" ><i class="fa fa-facebook-square"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter" data-rel="tooltip" class="icon_twitter"><i class="fa fa-twitter-square"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google+" data-rel="tooltip" class="icon_gplus"><i class="fa fa-google-plus-square"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Linkdin" data-rel="tooltip" class="icon_linkdin"><i class="fa fa-linkedin-square"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube" data-rel="tooltip" class="icon_youtube"><i class="fa fa-circle fa-youtube-square"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Vimeo" data-rel="tooltip" class="icon_vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="contact_form">
                                    <div id="show_contact_msg"></div>
                                    <!-- Contact Form Start -->
                                    <form method="post" id="contact_form" action="contact.php">
                                        <input type="text" id="contact_name" name="name" class="form-control contact_input_box wow fadeInUp" placeholder="Name" required/>
                                        <input type="email" id="contact_email" name="email" class="form-control contact_input_box wow fadeInUp" placeholder="E-mail" required/>
                                        <textarea id="contact_text" name="message" rows="5" cols="30" class="form-control contact_input_box wow fadeInUp" placeholder="Message" required></textarea>
                                        <button type="submit" class="btn btn-primary contact_button wow fadeInUp"> <i class="fa fa-send-o"></i>  Send message</button>
                                    </form>
                                    <!-- Contact Form End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>