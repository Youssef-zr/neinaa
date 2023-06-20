@extends('frontend._layouts.master')
@section('content')
    <!-- Start main content -->
    <div class="main-content">
        <!-- Start section header   -->
        <section class="section-slider">
            <!-- fixed-tools -->
            <div class="fixed-tools">
                <!-- start colors palette -->
                <div class="colors">
                    <div class="params-icon">
                        <span>
                            <i class="fa fa-cog fa-3x main-color" title="change site color"></i>
                        </span>
                    </div>
                    <div class="flat-colors">
                        <ul class="list-unstyled d-flex">
                            <li class="flat-color" data-color="#d63031"></li>
                            <li class="flat-color" data-color="#f39c12"></li>
                            <li class="flat-color" data-color="#05c46b"></li>
                            <li class="flat-color" data-color="#7d5fff"></li>
                            <li class="flat-color" data-color="#00a8ff"></li>
                            <li class="flat-color" data-color="#ff793f"></li>
                        </ul>
                    </div>
                </div>
                <div class="social-media">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-facebook-square fa-2x mb-3"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square fa-2x mb-3"></i></a></li>
                        <li><a href="#"><i class="fa fa-github-square fa-2x mb-3"></i></a></li>
                        <li><a href="#"><i class="fa fa-google fa-2x"></i></a></li>
                    </ul>
                    <p id="contact"> {{ trans('site.contact-me') }}</p>
                </div>
            </div>

            <!-- Start Slider -->
            <div class="slider-content">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="{{ url('site/images/slider/php-slider-1.jpg') }}" class="img-responsive" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ url('site/images/slider/js-slider-2.jpg') }}" class="img-responsive" />
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <div class="slider-caption">
                    <div class="caption-title">
                        <h1 class="ml2"> {{ trans('site.slider-caption-h1') }} </h1>
                        <h2 class="ml2"> {{ trans('site.slider-caption-h2') }} </h2>
                    </div>
                    <p> {{ trans('site.slider-caption-p') }} </p>
                    <div class="caption-btns">
                        <a href="#" class="btn btn-info btn-sm" id="go-form">
                            <i class="fa fa-envelope"></i>
                            {{ trans('site.contact-me') }}
                        </a>
                    </div>
                </div>
                <div class="slide-bottom">
                    <div class="chevrons">
                        <i class="fa fa-chevron-up"></i>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <a href=""><label id="minus"></label></a>
                </div>
            </div>
        </section>
        <!-- End section header   -->

        <!-- Start section about us   -->
        <section class="section-about-us section">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="info">
                            <h3 class="head-title text-left mb-2">
                                <span>{{ trans('site.about-me') }}</span>
                            </h3>
                            <h4 class="main-title mb-3">{!! trans('site.main-title') !!}</h4>
                            <p class="paragraph">
                                {{ trans('site.about-p') }}
                            </p>
                            <label class="my-name badge badge-info">{{ trans('site.my-name') }}</label>
                            <div class="buttons mt-4">
                                <a href="#" class="btn btn-outline-info btn-sm mr-3" id="btn-portfolio">
                                    <i class="fa fa-globe"></i> {{ trans('site.my-portfolio') }}
                                </a>
                                <a href="{{ url('site/files/cv-neinaa.pdf') }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-book"></i> {{ trans('site.my-cv') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-9 col-12">
                        <div class="about-image">
                            <div class="slashes">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <img src="{{ url('site/images/me1.jpg') }}" alt="youssef img" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section about us   -->

        <!-- Start section skills  -->
        <section class="section-skills section bg-second-dark">
            <div class="container">
                <div class="head-title">
                    <h3>{{ trans('site.my-skills') }}</h3>
                    <p class="sub-title">{{ trans('site.skills-sub-title') }}</p>
                </div>
                <div class="skills-list">
                    <div class="row justify-content-center">
                        <!-- skil item -->
                        <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                            <div class="skil-item">
                                <div class="image">
                                    <img src="{{ url('site/images/skills/html.png') }}" class="img-responsive"
                                        alt="html5">
                                </div>
                            </div>
                        </div>
                        <!-- skil item -->
                        <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                            <div class="skil-item">
                                <div class="image">
                                    <img src="{{ url('site/images/skills/css.png') }}" class="img-responsive"
                                        alt="css3">
                                </div>
                            </div>
                        </div>
                        <!-- skil item -->
                        <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                            <div class="skil-item">
                                <div class="image">
                                    <img src="{{ url('site/images/skills/bootstrap.png') }}" class="img-responsive"
                                        alt="bootstrap">
                                </div>
                            </div>
                        </div>
                        <!-- skil item -->
                        <div class="col-4 col-sm-4 col-lg-2">
                            <div class="skil-item">
                                <div class="image">
                                    <img src="{{ url('site/images/skills/js.png') }}" class="img-responsive"
                                        alt="javascript">
                                </div>
                            </div>
                        </div>
                        <!-- skil item -->
                        <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                            <div class="skil-item">
                                <div class="image">
                                    <img src="{{ url('site/images/skills/jquery.png') }}" class="img-responsive"
                                        alt="jquery">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <!-- skil item -->
                        <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                            <div class="skil-item">
                                <div class="image">
                                    <img src="{{ url('site/images/skills/vuejs.png') }}" class="img-responsive"
                                        alt="vuejs">
                                </div>
                            </div>
                        </div>
                        <!-- skil item -->
                        <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                            <div class="skil-item">
                                <div class="image">
                                    <img src="{{ url('site/images/skills/php.png') }}" class="img-responsive"
                                        alt="php">
                                </div>
                            </div>
                        </div>
                        <!-- skil item -->
                        <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                            <div class="skil-item">
                                <div class="image">
                                    <img src="{{ url('site/images/skills/laravel.png') }}" class="img-responsive"
                                        alt="laravel">
                                </div>
                            </div>
                        </div>
                        <!-- skil item -->
                        <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                            <div class="skil-item">
                                <div class="image">
                                    <img src="{{ url('site/images/skills/mysql.png') }}" class="img-responsive"
                                        alt="mysql">
                                </div>
                            </div>
                        </div>
                        <!-- skil item -->
                        <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                            <div class="skil-item">
                                <div class="image">
                                    <img src="{{ url('site/images/skills/github.png') }}" class="img-responsive"
                                        alt="github">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section skills  -->

        <!-- Start section services   -->
        <section class="section-services section">
            <div class="container">
                <div class="head-title">
                    <h3>{{ trans('site.my-services') }}</h3>
                    <p class="sub-title">{{ trans('site.service-sub-title') }}</p>
                </div>
                <div class="services">
                    <div class="row">
                        <!-- service item -->
                        <div class="col-12 col-md-6 relative">
                            <div class="service-item box main-border-effect">
                                <div class="service-icon"><span class="icon"><i class="fa fa-paint-brush"></i></span>
                                </div>
                                <div class="service-title">
                                    <h3>{{ trans('site.front-end-title') }}</h3>
                                </div>
                                <div class="service-content">
                                    <p>{{ trans('site.front-end-content') }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- service item -->
                        <div class="col-12 col-md-6 relative">
                            <div class="service-item box main-border-effect">
                                <div class="service-icon"><span class="icon"><i class="fa fa-code"></i></span></div>
                                <div class="service-title">
                                    <h3>{{ trans('site.back-end-title') }}</h3>
                                </div>
                                <div class="service-content">
                                    <p>{{ trans('site.back-end-content') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section services   -->

        <!-- Start section portdolio   -->
        <section class="section-portfolio section bg-second-dark">
            <div class="container">
                <div class="head-title">
                    <h3>{{ trans('site.my-portfolio') }}</h3>
                    <p class="sub-title">{{ trans('site.portfolio-sub-title') }}</p>
                </div>
                <div class="portfolio-content">
                    <ul class="list-unstyled controles">
                        <li>
                            <span class="control-link active" data-filter="all">{{ trans('site.web-all') }}</span>
                            <span class="slash">/</span>
                        </li>
                        <li>
                            <span class="control-link" data-filter=".web-design">{{ trans('site.web-design') }}
                            </span>
                            <span class="slash">/</span>
                        </li>
                        <li>
                            <span class="control-link"
                                data-filter=".web-developement">{{ trans('site.web-development') }}</span>
                            <span class="slash"></span>
                        </li>
                        <!-- <li><span class="control-link" data-filter=".wordpress">{{ trans('site.wordpress') }}</span></li> -->
                    </ul>
                    <div class="projects">
                        <div class="row" id="mixin">
                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-developement" data-order="0">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image">
                                            <img src="{{ url('site/images/portfolio/mini/1-min.png') }}"
                                                alt="My Portfolio Site" class="img-responsive">
                                        </div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>My Portfolio Site</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/1-min.png') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php/Laravel | MySQL"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="http://neinaa.com" class="link-gallary"
                                                    target="_blank" title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-developement" data-order="1">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/5-min.png') }}"
                                                alt="Ecommerce / Php->Laravel" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Ecommerce Site</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/5-min.png') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php/Laravel | MySQL"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://www.tanjashop.com" class="link-gallary" target="_blank"
                                                    title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="2">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/4-min.png') }}"
                                                alt="Gym Site" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Gym Site</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/5-min.png') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://train-hard.netlify.app" class="link-item"
                                                    target="_blank" title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="3">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/3-min.png') }}"
                                                alt="Digital company" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Digital company</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/3-min.png') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://corpolink.netlify.app" class="link-gallary"
                                                    target="_blank" title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="4">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/6-min.png') }}"
                                                alt="Dogecoin Currency" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Dogecoin Currency</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/6-min.png') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://snoop-d.netlify.app" class="link-item" target="_blank"
                                                    title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="5">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/2-min.png') }}"
                                                alt="Garage Services" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Garage Services</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/2-min.png') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://yn-upshift.netlify.app" class="link-gallary"
                                                    target="_blank" title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-developement" data-order="6">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/7-min.jpg') }}"
                                                alt="Blog Of News" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Blog Of News</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/7-min.jpg') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php/Laravel | MySql"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://www.blog.neinaa.com" class="link-gallary"
                                                    target="_blank" title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="7">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/8-min.jpg') }}"
                                                alt="Iptv Server Subscription" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Iptv Server Subscription</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/8-min.jpg') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php | VueJs"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://www.iptv.neinaa.com" class="link-gallary"
                                                    target="_blank" title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="8">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/9-min.jpg') }}"
                                                alt="Muslim's Fortress" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Muslim's Fortress</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/9-min.jpg') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | VueJs | Api"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://www.hissn-muslim.neinaa.com" class="link-gallary"
                                                    target="_blank" title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="9">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/10-min.jpg') }}"
                                                alt="Accounting Company" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Accounting Company</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/10-min.jpg') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php | VueJs"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://www.pro-consulting.neinaa.com" class="link-gallary"
                                                    target="_blank" title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-developement" data-order="10">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/12.jpg') }}"
                                                alt="4ktvplus - iptv" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>4ktvplus</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/12.jpg') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php | laravel 10"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://www.4ktvplus.com" class="link-gallary" target="_blank"
                                                    title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-developement" data-order="11">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/11.jpg') }}"
                                                alt="Mahalkoom - Ecommerce" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Mahalkoom</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/11.jpg') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php | laravel 10"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://mahalkoom.com" class="link-gallary" target="_blank"
                                                    title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="12">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/13.jpg') }}"
                                                alt="Omag - Vpinfo" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>Omag</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/13.jpg') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://www.omag.neinaa.com" class="link-gallary" target="_blank"
                                                    title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="13">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/14.jpg') }}"
                                                alt="chatGpt Topics Generator" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>chatGpt Topics</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/14.jpg') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 5 | Font-awesome 4 | Vujs 2"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://aicanhelp.co" class="link-gallary" target="_blank"
                                                    title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-6 col-md-4 col-lg-3 mix web-development" data-order="14">
                                <div class="relative">
                                    <div class="project-item box main-border-effect">
                                        <div class="image"><img src="{{ url('site/images/portfolio/mini/15.jpg') }}"
                                                alt="GmsPortail" class="img-responsive"></div>
                                        <div class="content">
                                            <h6 class="title text-center"><strong>GmsPortail</strong></h6>
                                            <div class="link-items">
                                                <a href="{{ url('site/images/portfolio/large/15.jpg') }}"
                                                    data-fancybox="gallery"
                                                    data-caption="Html5 | Css3 | Bootstra 5 | Font-awesome 4 | Laravel 7 (credentials:[
                                                        developer=> userName:admin@dev.com ,pass:nbx-de08shah^@@ | admin=> userName:said@app.com ,pass:123456 | client=> userName:client1@app.com ,pass:123456
                                                    ])"
                                                    class="link-item" title="Show Site Image">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                <a href="https://www.gms-portail.neinaa.com" class="link-gallary" target="_blank"
                                                    title="Go To Site">
                                                    <i class="fa fa-link"></i>
                                                </a>
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
        <!-- End section portdolio   -->

        <!-- Start section job   -->
        <section class="section-get-me-job">
            <div class="container">
                <div class="job-container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <p class="text">
                                {!! trans('site.get-me-text') !!}
                            </p>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="button">
                                <a href="#" id="go-form-1" class="btn btn-outline-light btn-sm">
                                    <i class="fa fa-envelope"></i> {{ trans('site.contact-me') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section job   -->

        <!-- Start section contact me   -->
        <section class="section-contact section">
            <div class="container">
                <div class="head-title">
                    <h3>{{ trans('site.contact-me') }}</h3>
                    <p class="sub-title">{!! trans('site.contact-me-sub-title') !!}</p>
                </div>
                <div class="info-list">
                    <div class="row">
                        <!-- info item -->
                        <div class="col-12 col-md-4">
                            <div class="info-item">
                                <div class="info-icon"><span class="icon"><i class="fa fa-map-marker"></i></span></div>
                                <div class="info-details">
                                    <h4>{{ trans('site.location') }}</h4>
                                    <p class="mb-1">{{ trans('site.location-tangier') }}</p>
                                    <p>{{ trans('site.location-kenitra') }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- info item -->
                        <div class="col-12 col-md-4">
                            <div class="info-item">
                                <div class="info-icon"><span class="icon"><i class="fa fa-envelope"></i></span></div>
                                <div class="info-details">
                                    <h4>{{ trans('site.email') }}</h4>
                                    <p class="mb-1">contact@neinaa.com</p>
                                    <p class="mb-1">{{ trans('site.email-details') }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- info item -->
                        <div class="col-12 col-md-4">
                            <div class="info-item">
                                <div class="info-icon"><span class="icon"><i class="fa fa-phone"></i></span></div>
                                <div class="info-details">
                                    <h4>{{ trans('site.phone') }}</h4>
                                    <p>{{ trans('site.phone-details') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- form contact -->
                <div class="form-submit">

                    <!-- message success -->
                    @if (session()->has('success'))
                        <div class="messages mt-5 mb-4">
                            <h4 class="alert bg-success text-white text-capitalize">
                                {!! session()->get('success') !!}
                            </h4>
                        </div>
                    @endif

                    <form action="{{ route('contact-us') }}" method="post">
                        @csrf
                        <div class="row">
                            <!-- name field -->
                            <div class="col-12 col-md-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="name" class="form-label text-white"> {{ trans('site.name') }} <span
                                            class="text-danger"><i class="fa fa-star"></i></span></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name') }}" required="">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- email field -->
                            <div class="col-12 col-md-6">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label for="email" class="form-label text-white"> {{ trans('site.email') }} <span
                                            class="text-danger"><i class="fa fa-star"></i></span></label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email') }}" required="">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- phone field -->
                            <div class="col-12 col-md-6">
                                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                    <label for="phone" class="form-label text-white">
                                        {{ trans('site.phone') }}</label>
                                    <input type="tel" name="phone" id="phone" class="form-control"
                                        value="{{ old('phone') }}" placeholder="06xxxxxxxx">

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- subject field -->
                            <div class="col-12 col-md-6">
                                <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                                    <label for="subject" class="form-label text-white"> {{ trans('site.subject') }}
                                        <span class="text-danger"><i class="fa fa-star"></i></span></label>
                                    <input type="tel" name="subject" id="subject" class="form-control"
                                        value="{{ old('subject') }}" required="">

                                    @if ($errors->has('subject'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- message field -->
                            <div class="col-12">
                                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                                    <label for="message" class="form-label text-white"> {{ trans('site.message') }}
                                        <span class="text-danger"><i class="fa fa-star"></i></span></label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="">{{ old('message') }}</textarea>

                                    @if ($errors->has('message'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group mt-0">
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <i class="fa fa-send mr-1"></i>
                                        {{ trans('site.submit-msg') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
        <!-- End section contact me   -->
    </div>
    <!-- End main content -->
@endsection

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
@endpush

@push('js')
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <!-- letters effects -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
@endpush

@if ($errors->any())
    @push('js-condition')
        <script>
            $(() => {

                $('html,body').animate({
                    scrollTop: $("form").offset().top - ($('.navigation').height() + 130)
                }, 700);

                const formControls = [...$(".form-control")];
                formControls.forEach((el) => {
                    const $this = $(el);

                    if ($this.val() !== '') {
                        $this.prev(".form-label").animate({
                                top: "2px",
                                left: "8px",
                            },
                            200
                        );
                    }
                });

            })
        </script>
    @endpush
@endif

@if (session()->has('success'))
    @push('js')
        <script>
            $(() => {
                $('html,body').animate({
                    scrollTop: $("form").offset().top - ($('.navigation').height() + 180)
                }, 700);
                setTimeout(() => {
                    $('.messages').fadeOut(700)
                }, 8000);
            })
        </script>
    @endpush
@endif
