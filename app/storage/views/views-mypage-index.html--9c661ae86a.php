<?php
// source: /var/www/html/myposter/app/views/mypage/index.html

use Latte\Runtime as LR;

class Template9c661ae86a extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>于照熙--个人主页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="">
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <!-- //meta-tags -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="../public/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../public/css/style.css" type="text/css" media="all"> <!-- Style-CSS -->
    <link href="../public/css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="../public/css/swipebox.css"> <!-- For-Gallery-Swipebox-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="../public/css/page.css" rel="stylesheet">
    <!-- //Web-Fonts -->

</head>
<body>

<!-- Header -->
<div class="banner-agile">
    <div class="logo-w3layouts">
        <h1><a href="http://www.yuzhaoxi.com/mypage/index">个人主页</a></h1>
    </div>
    <div class="container">
        <div class="banner-info-w3l">
            <h3>踽踽独行，笑迎风雨</h3>

            <h2>于照熙->php程序猿</h2>
            <h4><a class="scroll" href="#about">关于我</a></h4>
        </div>
    </div>
</div>
<div class="nav-agile">
    <div class="container">
        <!-- Navigation -->
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                    <li><a class="scroll2" href="http://www.yuzhaoxi.com/mypage/index"><span data-hover="Home">首页</span></a></li>
                    <li><a class="scroll" href="#about"><span data-hover="About">相关</span></a></li>
                    <li><a class="scroll" href="#skills"><span data-hover="Skills">技能</span></a></li>
                    <li><a class="scroll" href="#experience"><span data-hover="Experience">经历</span></a></li>
                    <li><a class="scroll" href="#portfolio"><span data-hover="Projects">项目</span></a></li>
                    <li><a class="scroll" href="#contact"><span data-hover="Contact">联系我</span></a></li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- /.navbar-collapse -->
            <div class="clearfix"></div>
        </nav>
    </div>
</div>
<!-- //Navigation -->
<!-- //Header -->

<!-- main-section-starts-here -->
<!-- About-starts-here -->
<div class="about" id="about">
    <div class="container">
        <h3 class="w3l_head">关于我</h3>

        <div class="w3l-grids-about">
            <div class="col-md-5 w3ls-ab-right">
                <div class="agile-about-right-img">
                    <img src="../public/images/ab.jpg" alt="">
                </div>
            </div>
            <div class="col-md-7 w3ls-agile-left">
                <div class="w3ls-agile-left-info">
                    <div class="wel-left animated wow fadeInLeft" data-wow-delay=".5s">
                        <div class="icon-w3l">
                            <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-leaf"
                                                                    aria-hidden="true"></span></i>
                        </div>
                        <div class="text-w3l">
                            <h4>PHP 开发攻城狮</h4>

                            <p>

                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="w3ls-agile-left-info">
                    <div class="wel-left animated wow fadeInLeft" data-wow-delay=".5s">
                        <div class="icon-w3l">
                            <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-tree-deciduous"
                                                                    aria-hidden="true"></span></i>
                        </div>
                        <div class="text-w3l">
                            <h4>GRAPHIC DESIGNER</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum
                                velit.Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="w3ls-agile-left-info">
                    <div class="wel-left animated wow fadeInLeft" data-wow-delay=".5s">
                        <div class="icon-w3l">
                            <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-star"
                                                                    aria-hidden="true"></span></i>
                        </div>
                        <div class="text-w3l">
                            <h4>UI/UK DEVELOPER</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum
                                velit.Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="w3ls-agile-left-info">
                    <div class="wel-left animated wow fadeInLeft" data-wow-delay=".5s">
                        <div class="icon-w3l">
                            <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-cog"
                                                                    aria-hidden="true"></span></i>
                        </div>
                        <div class="text-w3l">
                            <h4>MULTIMEDIA</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum
                                velit.Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //About-ends-here -->


<!--Skills-starts-here -->
<div class="wthreeskills" id="skills">
    <div class="container-fluid">
        <h3>我的技能</h3>

        <div class="wthreeskills-grids">
            <div class="col-md-6 wthreeskills-grid wthreeskills-grid-2">
                <h4>TECHNICAL SKILLS</h4>

                <div class="bar_group">
                    <div class='bar_group__bar thin' label='PHP DESIGN' show_values='true' tooltip='true'
                         value='75'></div>
                    <div class='bar_group__bar thin' label='CSS3' show_values='true' tooltip='true' value='82'></div>
                    <div class='bar_group__bar thin' label='HTML' show_values='true' tooltip='true' value='95'></div>
                    <div class='bar_group__bar thin' label='JAVA SCRIPT' show_values='true' tooltip='true'
                         value='86'></div>
                    <div class='bar_group__bar thin' label='PHOTOSHOP' show_values='true' tooltip='true'
                         value='76'></div>
                </div>

            </div>
            <div class="col-md-6 wthreeskills-grid wthreeskills-grid-1">
                <h4>PROFESSIONAL SKILLS</h4>

                <!-- Tabs -->
                <div class="tabs">
                    <div class="sap_tabs">
                        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                            <ul class="resp-tabs-list">
                                <li class="resp-tab-item"><span>My Skill 1</span></li>
                                <li class="resp-tab-item"><span>My Skill 2</span></li>
                                <li class="resp-tab-item"><span>My Skill 3</span></li>
                            </ul>

                            <div class="resp-tabs-container">
                                <div class="tab-1 resp-tab-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged.</p>

                                    <div class="w3lsstatsaits-info">
                                        <div class="col-md-4 w3lsstatsaits-grid w3lsstatsaits-grid-1">
                                            <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0'
                                                 data-max='9000' data-delay='.5' data-increment=4>7000
                                            </div>
                                            <p>Lorem</p>
                                        </div>
                                        <div class="col-md-4 w3lsstatsaits-grid w3lsstatsaits-grid-2">
                                            <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0'
                                                 data-max='17000' data-delay='8' data-increment="1">16000
                                            </div>
                                            <p>Ipsum</p>
                                        </div>
                                        <div class="col-md-4 w3lsstatsaits-grid w3lsstatsaits-grid-3">
                                            <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0'
                                                 data-max='12000' data-delay='.5' data-increment="11">12000
                                            </div>
                                            <p>Dolores</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="tab-2 resp-tab-content">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                        Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                        Lorem Ipsum passage, and going through the cites of the word.</p>

                                    <div class="w3lsstatsaits-info">
                                        <div class="col-md-4 w3lsstatsaits-grid w3lsstatsaits-grid-1">
                                            <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0'
                                                 data-max='9000' data-delay='.5' data-increment=4>16000
                                            </div>
                                            <p>Sitamet</p>
                                        </div>
                                        <div class="col-md-4 w3lsstatsaits-grid w3lsstatsaits-grid-2">
                                            <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0'
                                                 data-max='17000' data-delay='8' data-increment="1">10000
                                            </div>
                                            <p>Consect</p>
                                        </div>
                                        <div class="col-md-4 w3lsstatsaits-grid w3lsstatsaits-grid-3">
                                            <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0'
                                                 data-max='12000' data-delay='.5' data-increment="11">12000
                                            </div>
                                            <p>Teturs</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="tab-3 resp-tab-content">
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English. Many desktop
                                        publishing packages and web page editors now use.</p>

                                    <div class="w3lsstatsaits-info">
                                        <div class="col-md-4 w3lsstatsaits-grid w3lsstatsaits-grid-1">
                                            <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0'
                                                 data-max='9000' data-delay='.5' data-increment=4>8000
                                            </div>
                                            <p>Adipisce</p>
                                        </div>
                                        <div class="col-md-4 w3lsstatsaits-grid w3lsstatsaits-grid-2">
                                            <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0'
                                                 data-max='17000' data-delay='8' data-increment="1">7000
                                            </div>
                                            <p>Elitsed</p>
                                        </div>
                                        <div class="col-md-4 w3lsstatsaits-grid w3lsstatsaits-grid-3">
                                            <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0'
                                                 data-max='12000' data-delay='.5' data-increment="11">1400
                                            </div>
                                            <p>Eiusmod</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Tabs -->
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<!-- //Skills-ends-here -->

<!-- services-starts-here -->
<div class="services" id="service">
    <div class="container">
        <h3 class="agileits-title">我的兴趣爱好</h3>

        <div class="services-w3ls-row">
            <div class="col-md-3 services-grids">
                <div class="w3agile-servs-img">
                    <div class="icon-holder">
                        <span class="glyphicon glyphicon-queen" aria-hidden="true"></span>
                    </div>
                    <h4 class="mission">游泳</h4>

                    <p class="description">喜欢水里安静的感觉，目前水平为爱好者水平~~</p>
                </div>
            </div>
            <div class="col-md-3 services-grids">
                <div class="w3agile-servs-img">
                    <div class="icon-holder">
                        <span class="fa fa-gears icon" aria-hidden="true"></span>
                    </div>
                    <h4 class="mission">文章</h4>

                    <p class="description">偶尔写一些日记或者记录对应处理方案等有趣的事情</p>
                </div>
            </div>
            <div class="col-md-3 services-grids">
                <div class="w3agile-servs-img">
                    <div class="icon-holder">
                        <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
                    </div>
                    <h4 class="mission">程序开发</h4>

                    <p class="description">喜欢这样一句话：程序是最值得信赖的，因为0就是0,1就是1</p>
                </div>
            </div>
            <div class="col-md-3 services-grids">
                <div class="w3agile-servs-img">
                    <div class="icon-holder">
                        <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                    </div>
                    <h4 class="mission">音乐</h4>

                    <p class="description">喜欢80-90年代流行音乐，偶尔和朋友一起K歌算是半个麦霸</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //services-ends-here -->

<!-- Experience-starts-here -->
<div class="aitsresumewthree" id="experience">
    <div class="container">
        <div class="aitsresumewthree-tag">
            <h3 class="title">我的任职经历</h3>
        </div>
        <div class="load_more">
            <ul id="myList">
                <li class="aitsaitsresumewthreeli-1">
                    <div class="l_g">
                        <div class="l_g_r g_r">
                            <div class="work">
                                <div class="work-info">
                                    <div class="col-md-6 work-grid work-left">
                                        <h4>2015 - 至今</h4>
                                    </div>
                                    <div class="col-md-6 work-grid work-right">
                                        <h5>一九零五（北京）网络科技有限公司</h5>

                                        <p>现在的工作：</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="work-info">
                                    <div class="col-md-6 work-grid work-right work-right2">
                                        <h4>2013 - 2015</h4>
                                    </div>
                                    <div class="col-md-6 work-grid work-left work-left2">
                                        <h5>北京数字通软件有限公司</h5>

                                        <p>毕业以后的第一份工作，</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="work-info">
                                    <div class="col-md-6 work-grid work-left">
                                        <h4>2011 - 2011</h4>
                                    </div>
                                    <div class="col-md-6 work-grid work-right">
                                        <h5 class="comp">廊坊世纪光华科技有限公司</h5>

                                        <p>在该公司以实习生的身份工作两个月。之所以记录这个经历是时时刻刻提醒我，这是我第一家以程序研发者的身份工作的单位~~~</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--<li>-->
                    <!--<div class="l_g">-->
                        <!--<div class="l_g_r g_r">-->
                            <!--<div class="work">-->
                                <!--<h4 class="title title2">EDUCATION</h4>-->

                                <!--<div class="work-info">-->
                                    <!--<div class="col-md-6 work-grid work-left">-->
                                        <!--<h4>2007-2009</h4>-->
                                    <!--</div>-->
                                    <!--<div class="col-md-6 work-grid work-right">-->
                                        <!--<h5 class="univ">Post Graduate</h5>-->

                                        <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium-->
                                            <!--doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore-->
                                            <!--veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>-->
                                    <!--</div>-->
                                    <!--<div class="clearfix"></div>-->
                                <!--</div>-->
                                <!--<div class="work-info">-->
                                    <!--<div class="col-md-6 work-grid work-right work-right2">-->
                                        <!--<h4>2003-2007</h4>-->
                                    <!--</div>-->
                                    <!--<div class="col-md-6 work-grid work-left work-left2">-->
                                        <!--<h5>Graduate</h5>-->

                                        <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium-->
                                            <!--doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore-->
                                            <!--veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>-->
                                    <!--</div>-->
                                    <!--<div class="clearfix"></div>-->
                                <!--</div>-->
                                <!--<div class="work-info">-->
                                    <!--<div class="col-md-6 work-grid work-left">-->
                                        <!--<h4>1994-2003</h4>-->
                                    <!--</div>-->
                                    <!--<div class="col-md-6 work-grid work-right">-->
                                        <!--<h5 class="sch">School</h5>-->

                                        <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium-->
                                            <!--doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore-->
                                            <!--veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>-->
                                    <!--</div>-->
                                    <!--<div class="clearfix"></div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</li>-->
            </ul>
            <!--<div class="wow fadeInUp" id="loadMore">Show More <i class="fa fa-chevron-down" aria-hidden="true"></i>-->
            <!--</div>-->
            <!--<div class="wow fadeInDown" id="showLess">Show Less <i class="fa fa-chevron-up" aria-hidden="true"></i>-->
            <!--</div>-->
        </div>
    </div>
</div>
<!-- //Experience-ends-here -->

<!-- Portfolio-starts-here -->
<div id="portfolio" class="portfolio">
    <div class="container">
        <h3 class="agile-title">项目经历</h3>

        <div class="gallery_gds">
            <div class="filtr-container">
                <div class="col-md-3 filtr-item" data-category="1, 4" data-sort="Busy streets">
                    <div class="agileits-img">
                        <a href="../public/images/g55.jpg" class="swipebox" title="My Project">
                            <img src="../public/images/g5.jpg" alt="" class="img-responsive img-style row2">
                        </a>
                    </div>
                    <div class="agileits-img">
                        <a href="../public/images/g33.jpg" class="swipebox" title="My Project">
                            <img src="../public/images/g3.jpg" alt="" class="img-responsive img-style row2">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 filtr-item" data-category="2, 3" data-sort="Luminous night">
                    <a href="../public/images/g11.jpg" class="swipebox" title="My Project">
                        <img src="../public/images/g1.jpg" alt="" class="img-responsive img-style row2">
                    </a>

                    <div class="col-md-6 agileits-img g2">
                        <a href="../public/images/g88.jpg" class="swipebox" title="My Project">
                            <img src="../public/images/pro8.jpg" alt="" class="img-responsive img-style row2">
                        </a>
                    </div>
                    <div class="col-md-6 agileits-img g4">
                        <a href="../public/images/g77.jpg" class="swipebox" title="My Project">
                            <img src="../public/images/pro6.jpg" alt="" class="img-responsive img-style row2">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <a href="../public/images/g22.jpg" class="swipebox" title="My Project">
                        <img src="../public/images/g2.jpg" alt="" class="img-responsive img-style row2">
                    </a>
                </div>
                <div class="col-md-3 filtr-item" data-category="1, 4" data-sort="Busy streets">
                    <div class="agileits-img">
                        <a href="../public/images/g44.jpg" class="swipebox" title="My Project">
                            <img src="../public/images/g4.jpg" alt="" class="img-responsive img-style row2">
                        </a>
                    </div>
                    <div class="agileits-img">
                        <a href="../public/images/g66.jpg" class="swipebox" title="My Project">
                            <img src="../public/images/g6.jpg" alt="" class="img-responsive img-style row2">
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio-ends-here -->

<!-- contact-starts-here -->
<div class="contact" id="contact">
    <h3 class="agile-contact">联系我</h3>

    <div class="contact-agile">
        <div class="map">
            <!---<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84008838347!2d-74.25818880297903!3d40.705831640339994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1465278069158"> </iframe>--->
        </div>
        <div class="contact-left-agile">
            <h4>About Me</h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>

            <div class="add-w3ls-main">
                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>

                <div class="add-w3ls2">
                    <h5>我的通讯地址</h5>

                    <p>北京市西城区北展北街华远企业号F座301室</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="add-w3ls-main">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>

                <div class="add-w3ls2">
                    <h5>我的电子邮箱</h5>

                    <p><a href="mailto:info@example.com">yu10670599@163.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="add-w3ls-main">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>

                <div class="add-w3ls2">
                    <h5>我的联系方式</h5>

                    <p>+8615010670599</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="contact-right-w3l">
            <div class="contact-form">
                <form action="#" method="post">
                    <input placeholder="NAME" name="Name" type="text" required="">
                    <input placeholder="LASTNAME" name="Name" type="text" required="">
                    <input placeholder="E-MAIL" name="Email" type="email" required="">
                    <textarea placeholder="TYPE YOUR MESSAGE......" required=""></textarea>
                    <input type="submit" value="Submit" name="login">
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //contact-ends-here -->

<!-- copyright-starts-here -->
<div class="copy-section">
    <div class="container">
        <div class="footer-top">
            <p></p>
        </div>
    </div>
</div>
<!-- copyright-ends-here -->
<!-- //main-section-ends-here -->


<!-- Custom-JavaScript-Files -->

<script type="text/javascript" src="../public/js/jquery-2.1.4.min.js"></script> <!-- Default-JavaScript-File -->
<script type="text/javascript" src="../public/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->

<!-- for-projects -->
<!-- swipe box js -->
<script src="../public/js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //swipe box js -->

<script src="../public/js/jquery.adipoli.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('.row2').adipoli({
            'startEffect': 'overlay',
            'hoverEffect': 'sliceDown'
        });
    });

</script>
<!-- //for-projects -->

<!-- Horizontal-Tabs-JavaScript -->
<script src="../public/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default',
            width: 'auto',
            fit: true,
        });
    });
</script>
<!-- Horizontal-Tabs-JavaScript -->

<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="../public/js/waypoints.min.js"></script>
<script src="../public/js/counterup.min.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000,
        });
    });
</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->

<!-- Progressive-Bars-JavaScript -->
<script src="../public/js/bars.js"></script>
<!-- //Progressive-Bars-JavaScript -->

<!-- for-experience -->
<!-- Show-More-JavaScript -->
<script>
    $(document).ready(function () {
        size_li = $("#myList li").size();
        x = 1;
        $('#myList li:lt(' + x + ')').show();
        $('#loadMore').click(function () {
            x = (x + 1 <= size_li) ? x + 1 : size_li;
            $('#myList li:lt(' + x + ')').show();
        });
        $('#showLess').click(function () {
            x = (x - 1 < 0) ? 1 : x - 1;
            $('#myList li').not(':lt(' + x + ')').hide();
        });
    });
</script>
<!-- //Show-More-JavaScript -->
<!-- //for-experience -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../public/js/move-top.js"></script>
<script type="text/javascript" src="../public/js/easing.js"></script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<!-- //here ends scrolling icon -->


<!-- //Custom-JavaScript-Files -->

</body>
</html><?php
		return get_defined_vars();
	}

}
