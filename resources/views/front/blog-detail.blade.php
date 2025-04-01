@extends('front.master')

@section('title')
    Restaurant || Blog Detail
@endsection

@section('content')
<!-- Header End -->
<div class="sub-header align-center">
    <div class="subheader-holder" style="background:url({{asset('front/extra-images/subheader-img2-1.jpg')}})  no-repeat ; background-size: cover; padding-top: 60px; padding-bottom: 30px; margin-top: 0px; margin-bottom: 0px; min-height: 186px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-holder">
                        <div class="page-title ">
                            <h1 style="color:#ffffff !important;">Creating The World’s Greatest Food Community With Food Bakery</h1>
                        </div>
                        <p style="color:#ffffff !important;">A great restaurant website</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs align-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        <li><a href="{{route('front.index')}}">Home</a></li>
                        <li><a href="{{route('front.blog')}}">Blog</a></li>
                        <li class="active">Current Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Section Start -->
<div class="main-section">
    <div class="container">
        <div class="row">
            <div class="page-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="page-section">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-detail">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="author-info">
                                            <figure>
                                                <img alt="" src="{{asset('front/extra-images/avatar-01.jpeg')}}">
                                            </figure>
                                            <div class="text-holder">
                                                <p>Posted by <span class="name"><a href="#">foodbakery-admin</a></span></p>
                                                <ul class="post-options">
                                                    <li>
                                                        <i class="icon-clock"></i>
                                                        <span class="date"><a href="#">Oct 28, 2016</a></span>
                                                    </li>
                                                    <li>
                                                        <i class="icon-eye4"></i>
                                                        <span>494</span>
                                                    </li>
                                                    <li>
                                                        <span><a href="#"><i class="icon-heart-outlined"></i>1</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="title-area">
                                            <h2>Creating the world’s greatest food community with food bakery
                                            </h2>
                                            <span>One of the best cities in India to experience a variety of
                                                dishes is apni Dilli aka Delhi. In this article, we take you
                                                through Posuere ultrices tortor curae tristique cubilia
                                                ultricies metus duis, integer lorem luctus felis porta ad
                                                curabitur cras, aliquet tincidunt sagittis sed sit fusce
                                                sagittis in cubilia tempor euismod rhoncus luctus condimentum
                                                nibh justo eu massa metus feugiat id vel vitae <a href="#">Read
                                                    More</a>
                                            </span>
                                        </div>
                                        <div class="main-post">
                                            <figure><a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-02-750x422.jpg')}}" alt=""></a></figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="rich-editor-text">
                                            <p>One of the best cities in India to experience a variety of dishes
                                                is apni Dilli aka Delhi. In this article, we take you through
                                                Posuere ultrices tortor curae tristique cubilia ultricies metus
                                                duis, integer lorem luctus felis porta ad curabitur cras,
                                                aliquet tincidunt sagittis sed sit fusce sagittis in cubilia
                                                tempor euismod rhoncus luctus condimentum nibh justo eu massa
                                                metus feugiat id vel vitae velit quam ultrices feugiat platea
                                                feugiat risus velit est justo rutrum inceptos. Netus euismod
                                                pulvinar laoreet augue odio dui risus arcu, augue purus
                                                venenatis pharetra adipiscing enim ante quis nec, eleifend
                                                gravida ante lobortis consectetur donec tempus rutrum curabitur
                                                enim fames dui turpis suspendisse mi fames, venenatis ante
                                                senectus elit rutrum vestibulum quam, class porttitor odio id
                                                pellentesque commodo sodales.</p>
                                            <p>Porta bibendum quisque elit pretium ultricies condimentum neque,
                                                id lacinia ornare habitant ut habitant, suscipit fringilla
                                                congue sodales justo class sapien dictumst pretium sapien hac
                                                sodales molestie dui, sodales a nec eu litora senectus, lobortis
                                                iaculis donec velit ipsum rutrum ligula est faucibus. nec
                                                fringilla felis eget commodo non proin platea faucibus ut ac
                                                nisl libero ad quam.</p>
                                            <blockquote>
                                                <p>Ante magna ipsum pulvinar nisl et placerat platea, integer
                                                    lectus habitant nibh nam platea, dictumst ipsum consequat
                                                    ipsum tellus auctor donec a consequat erat cubilia congue
                                                    aliquam purus, lacus elit nisl urna elit tempor netus
                                                    litora, convallis placerat torquent nisi ac curabitur porta
                                                    sed quam augue malesuada pharetra proin leo pulvinar, augue
                                                    auctor ut elementum risus cursus suspendisse egestas,
                                                    himenaeos elit neque vitae senectus faucibus nisi quisque
                                                    mauris quis etiam sit magna
                                                </p>
                                            </blockquote>
                                            <p>Odio eros cursus diam ut curae odio nibh facilisis, litora eros
                                                suscipit nisi aptent netus in ligula mollis, dictumst tristique
                                                consectetur aliquet eu adipiscing id in amet sem diam sit erat
                                                faucibus vivamus fames aliquam per, faucibus libero
                                                curabiturarcu phasellus risus adipiscing.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="tags-list">
                                            <h6>Tags:</h6>
                                            <ul>
                                                <li><a href="#">Roll</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="related-post-holder">
                                            <div class="element-title">
                                                <h3>Recommended Posts</h3>
                                            </div>
                                            <div class="row">
                                                <div class="swiper-container swiper-container-horizontal">
                                                    <div class="swiper-wrapper" style="transform: translate3d(-520px, 0px, 0px); transition-duration: 0ms;">
                                                        <div class="swiper-slide col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 260px;">
                                                            <div class="related-post">
                                                                <div class="img-holder">
                                                                    <figure><a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-17-200x200.jpg')}}" alt=""></a></figure>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <ul class="post-options">
                                                                        <li>
                                                                            <i class="icon-clock"></i>
                                                                            <span><a href="#">Jun
                                                                                    28, 2016</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icon-eye4"></i>
                                                                            <span>63 read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="post-title">
                                                                        <h5><a href="#">opens new technology
                                                                                innovation...</a></h5>
                                                                    </div>
                                                                    <p>One of the best cities in India to
                                                                        experience a variety of...</p>
                                                                    <a href="#" class="read-more">Read Article<i class="icon-chevron-with-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" style="width: 260px;">
                                                            <div class="related-post">
                                                                <div class="img-holder">
                                                                    <figure><a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-01-200x200.jpg')}}" alt=""></a></figure>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <ul class="post-options">
                                                                        <li>
                                                                            <i class="icon-clock"></i>
                                                                            <span><a href="#">Mar 28,
                                                                                    2016</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icon-eye4"></i>
                                                                            <span>62 read</span>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="post-title">
                                                                        <h5><a href="#">Surge Fee And Food
                                                                                ...</a></h5>
                                                                    </div>
                                                                    <p>Posuere ultrices tortor curae tristique
                                                                        cubilia ultricies metus duis, integer
                                                                        lorem luctus...
                                                                    </p>
                                                                    <a href="#" class="read-more">Read Article<i class="icon-chevron-with-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="3" style="width: 260px;">
                                                            <div class="related-post">
                                                                <div class="img-holder">
                                                                    <figure>
                                                                        <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-09-200x200.jpg')}}" alt=""></a>
                                                                    </figure>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <ul class="post-options">
                                                                        <li>
                                                                            <i class="icon-clock"></i>
                                                                            <span><a href="#">Feb 28,
                                                                                    2016</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icon-eye4"></i>
                                                                            <span>66 read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="post-title">
                                                                        <h5><a href="#">10 Droolworthy Instagram
                                                                                Accounts ...</a></h5>
                                                                    </div>
                                                                    <p>Posuere ultrices tortor curae tristique
                                                                        cubilia ultricies metus duis, integer
                                                                        lorem luctus...</p>
                                                                    <a href="#" class="read-more">Read Article<i class="icon-chevron-with-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide-next" data-swiper-slide-index="0" style="width: 260px;">
                                                            <div class="related-post">
                                                                <div class="img-holder">
                                                                    <figure>
                                                                        <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-17-200x200.jpg')}}" alt=""></a>
                                                                    </figure>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <ul class="post-options">
                                                                        <li>
                                                                            <i class="icon-clock"></i>
                                                                            <span><a href="#">Oct 28,
                                                                                    2016</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icon-eye4"></i>
                                                                            <span>77 read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="post-title">
                                                                        <h5><a href="#">half year technology to
                                                                                ...</a></h5>
                                                                    </div>
                                                                    <p>One of the best cities in India to
                                                                        experience a variety of...</p>
                                                                    <a href="#" class="read-more">Read Article<i class="icon-chevron-with-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide col-lg-4 col-md-4 col-sm-6 col-xs-12" data-swiper-slide-index="1" style="width: 260px;">
                                                            <div class="related-post">
                                                                <div class="img-holder">
                                                                    <figure>
                                                                        <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-17-200x200.jpg')}}" alt=""></a>
                                                                    </figure>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <ul class="post-options">
                                                                        <li>
                                                                            <i class="icon-clock"></i>
                                                                            <span><a href="#">Jun 28,
                                                                                    2016</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icon-eye4"></i>
                                                                            <span>63 read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="post-title">
                                                                        <h5><a href="#">opensnew technology
                                                                                innovation...</a></h5>
                                                                    </div>
                                                                    <p>One of the best cities in India to
                                                                        experience a variety of...</p>
                                                                    <a href="#" class="read-more">Read Article<i class="icon-chevron-with-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide col-lg-4 col-md-4 col-sm-6 col-xs-12" data-swiper-slide-index="2" style="width: 260px;">
                                                            <div class="related-post">
                                                                <div class="img-holder">
                                                                    <figure>
                                                                        <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-01-200x200.jpg')}}" alt=""></a>
                                                                    </figure>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <ul class="post-options">
                                                                        <li>
                                                                            <i class="icon-clock"></i>
                                                                            <span><a href="#">Mar 28,
                                                                                    2016</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icon-eye4"></i>
                                                                            <span>62 read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="post-title">
                                                                        <h5><a href="#">Surge Fee And Food
                                                                                ...</a></h5>
                                                                    </div>
                                                                    <p>Posuere ultrices tortor curae tristique
                                                                        cubilia ultricies metus duis, integer
                                                                        lorem luctus...</p>
                                                                    <a href="#" class="read-more">Read Article<i class="icon-chevron-with-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide col-lg-4 col-md-4 col-sm-6 col-xs-12" data-swiper-slide-index="3" style="width: 260px;">
                                                            <div class="related-post">
                                                                <div class="img-holder">
                                                                    <figure>
                                                                        <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-09-200x200.jpg')}}" alt=""></a>
                                                                    </figure>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <ul class="post-options">
                                                                        <li>
                                                                            <i class="icon-clock"></i>
                                                                            <span><a href="#">Feb 28,
                                                                                    2016</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icon-eye4"></i>
                                                                            <span>66 read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="post-title">
                                                                        <h5><a href="#">10 Droolworthy Instagram
                                                                                Accounts ...</a></h5>
                                                                    </div>
                                                                    <p>Posuere ultrices tortor curae tristique
                                                                        cubilia ultricies metus duis, integer
                                                                        lorem luctus...</p>
                                                                    <a href="#" class="read-more">Read Article<i class="icon-chevron-with-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-slide col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 260px;">
                                                            <div class="related-post">
                                                                <div class="img-holder">
                                                                    <figure>
                                                                        <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-17-200x200.jpg')}}" alt=""></a>
                                                                    </figure>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <ul class="post-options">
                                                                        <li>
                                                                            <i class="icon-clock"></i>
                                                                            <span><a href="#">Oct 28,
                                                                                    2016</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icon-eye4"></i>
                                                                            <span>77 read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="post-title">
                                                                        <h5><a href="#">half year technology to
                                                                                ...</a></h5>
                                                                    </div>
                                                                    <p>One of the best cities in India to
                                                                        experience a variety of...</p>
                                                                    <a href="#" class="read-more">Read Article<i class="icon-chevron-with-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 260px;">
                                                            <div class="related-post">
                                                                <div class="img-holder">
                                                                    <figure>
                                                                        <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-17-200x200.jpg')}}" alt=""></a>
                                                                    </figure>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <ul class="post-options">
                                                                        <li>
                                                                            <i class="icon-clock"></i>
                                                                            <span><a href="#">Jun 28,
                                                                                    2016</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icon-eye4"></i>
                                                                            <span>63 read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="post-title">
                                                                        <h5><a href="#">opens new technology
                                                                                innovation ...</a></h5>
                                                                    </div>
                                                                    <p>One of the best cities in India to
                                                                        experience a variety of...</p>
                                                                    <a href="#" class="read-more">Read Article<i class="icon-chevron-with-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 260px;">
                                                            <div class="related-post">
                                                                <div class="img-holder">
                                                                    <figure><a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-01-200x200.jpg')}}" alt=""></a>
                                                                    </figure>
                                                                </div>
                                                                <div class="text-holder">
                                                                    <ul class="post-options">
                                                                        <li>
                                                                            <i class="icon-clock"></i>
                                                                            <span><a href="#">Mar 28,
                                                                                    2016</a></span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icon-eye4"></i>
                                                                            <span>62 read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="post-title">
                                                                        <h5><a href="#">Surge Fee And Food
                                                                                ...</a></h5>
                                                                    </div>
                                                                    <p>Posuere ultrices tortor curae tristique
                                                                        cubilia ultricies metus duis, integer
                                                                        lorem luctus...</p>
                                                                    <a href="#" class="read-more">Read Article<i class="icon-chevron-with-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-button-prev"><i class="icon-chevron-thin-left"></i></div>
                                                    <div class="swiper-button-next"><i class="icon-chevron-thin-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="comment-form">
                                            <div class="contact-form form-holder">
                                                <div id="respond" class="comment-respond">
                                                    <h4>Post your Comments</h4>
                                                    <form action="#" method="post" id="form-style" class=" contact-form row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="field-holder">
                                                                <textarea id="comment_mes" name="comment" placeholder="Text here.."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="field-holder">
                                                                <strong>NAME *</strong>
                                                                <label>
                                                                    <input id="author" name="author" class="nameinput" type="text" placeholder="First &amp; Last Name " value="" tabindex="1" required="">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="field-holder"><strong>EMAIL *</strong>
                                                                <label>
                                                                    <input id="email" name="email" class="emailinput" type="text" placeholder="Email Address " value="" size="30" tabindex="2" required="">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="field-holder"><strong>PHONE *</strong>
                                                                <label>
                                                                    <input id="url" name="url" type="text" class="websiteinput" placeholder="000 1234 456" value="" size="30" tabindex="3">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cs-message">
                                                            <div class="field-holder">
                                                                <label><textarea name="comment" class="commenttextarea" rows="55" cols="15"></textarea></label>
                                                            </div>
                                                        </div>
                                                        <p class="form-submit"></p>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="field-holder">
                                                                <label><input name="submit" type="submit" class="button bgcolor" tabindex="5" value="Post Comments"></label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!-- #respond -->
                                            </div>
                                        </div>
                                    </div><!-- .comments-area -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="page-sidebar right col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="widget-holder">
                    <div class="widget widget_archive">
                        <div class="widget-title">
                            <h5>archive dropdown</h5>
                        </div>
                        <label class="screen-reader-text" for="archives-dropdown-3">archive dropdown</label>
                        <select id="archives-dropdown-3" name="archive-dropdown">
                            <option value="">Select Month</option>
                            <option value=""> October 2016 </option>
                            <option value=""> July 2016 </option>
                            <option value=""> June 2016 </option>
                            <option value=""> May 2016 </option>
                            <option value=""> April 2016 </option>
                            <option value=""> March 2016 </option>
                            <option value=""> February 2016 </option>
                        </select>
                    </div>
                    <div class="widget widget_search">
                        <div class="widget-title">
                            <h5>Search</h5>
                        </div>
                        <form action="#" method="get" class="form-inline">
                            <fieldset>
                                <div class="input-group">
                                    <input type="text" name="s" id="search" placeholder="Search" value="" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="icon-search"></i></button>
                                    </span>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="widget widget-related-post">
                        <div class="widget widget-recent-blog-post">
                            <div class="widget-title">
                                <h5>Popular Posts</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="img-holder">
                                        <figure><a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-02-150x150.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="text-holder">
                                        <div class="post-title">
                                            <h6><a href="#">Creating the world’s greatest food community with
                                                    food ...</a></h6>
                                        </div>
                                        <div class="post-options">
                                            <span><i class=" icon-clock4"></i> October 28, 2016</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <figure><a href="#"> <img src="{{asset('front/extra-images/blogs-food-bakery-17-150x150.jpg')}}" alt=""> </a></figure>
                                    </div>
                                    <div class="text-holder">
                                        <div class="post-title">
                                            <h6><a href="#">half year technology to update customers and
                                                    restaurants</a></h6>
                                        </div>
                                        <div class="post-options">
                                            <span><i class=" icon-clock4"></i> October 28, 2016</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <figure><a href="#"> <img src="{{asset('front/extra-images/blogs-food-bakery-07-150x150.jpg')}}" alt=""> </a></figure>
                                    </div>
                                    <div class="text-holder">
                                        <div class="post-title">
                                            <h6><a href="#">Take away fans select celeb winners of Food ...</a>
                                            </h6>
                                        </div>
                                        <div class="post-options">
                                            <span><i class=" icon-clock4"></i> October 28, 2016</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <figure><a href="#"> <img src="{{asset('front/extra-images/blogs-food-bakery-06-150x150.jpg')}}" alt=""> </a></figure>
                                    </div>
                                    <div class="text-holder">
                                        <div class="post-title">
                                            <h6><a href="#">United Kingdom Fire Brigade launch have take
                                                    away...</a></h6>
                                        </div>
                                        <div class="post-options">
                                            <span><i class=" icon-clock4"></i> October 28, 2016</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget widget_calendar">
                        <div class="widget-title">
                            <h5>Archives</h5>
                        </div>
                        <div id="calendar_wrap" class="calendar_wrap">
                            <table id="wp-calendar">
                                <caption>April 2020</caption>
                                <thead>
                                    <tr>
                                        <th scope="col" title="Monday">M</th>
                                        <th scope="col" title="Tuesday">T</th>
                                        <th scope="col" title="Wednesday">W</th>
                                        <th scope="col" title="Thursday">T</th>
                                        <th scope="col" title="Friday">F</th>
                                        <th scope="col" title="Saturday">S</th>
                                        <th scope="col" title="Sunday">S</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td id="today">2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                        <td>19</td>
                                        <td>20</td>
                                        <td>21</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>30</td>
                                        <td class="pad" colspan="5">&nbsp;</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" id="prev"><a href="#">« Oct</a></td>
                                        <td class="pad">&nbsp;</td>
                                        <td colspan="3" id="next" class="pad">&nbsp;</td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                    <div class="widget widget_categories">
                        <div class="widget-title">
                            <h5>Categories</h5>
                        </div>
                        <ul>
                            <li><a href="#">Cake delivery</a> (1)</li>
                            <li><a href="#">Chicken with Green Vegetables</a> (2)</li>
                            <li><a href="#">Delicious food</a> (1)</li>
                            <li><a href="#">Halal food</a> (1)</li>
                            <li><a href="#">malaysian food</a> (1)</li>
                            <li><a href="#">Pulled Pork Burger</a> (2)</li>
                            <li><a href="#">Restaurant Marketing</a> (5)</li>
                            <li><a href="#">Spicy Food</a> (1)</li>
                            <li><a href="#">Thai Home Crispy Beef</a> (2)</li>
                        </ul>
                    </div>
                    <div class="widget widget-gallery">
                        <div class="widget-title">
                            <h5>Photo gallery</h5>
                        </div>
                        <ul>
                            <li>
                                <div class="cs-media">
                                    <figure><img alt="" src="{{asset('front/extra-images/15647274066_2ee48c3fe9_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15485436268_846ccca178_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15668911091_4ef20118b5_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15484954949_a4e97a9dc5_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15647103116_1e4b9033f0_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15668909741_eaf3db4054_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15670834825_5f55bb7e4e_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15485435298_7848e85e0a_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15647100406_34599445cf_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15484952219_c43ae000b4_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15484952179_5303848c98_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure> <img alt="" src="{{asset('front/extra-images/15051463473_e9b233ec27_s.jpg')}}">
                                        <figcaption class="cs-bgcolor"><a href="#"></a></figcaption>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_tag_cloud">
                        <div class="widget-title">
                            <h5>Tags Cloud</h5>
                        </div>
                        <div class="tagcloud">
                            <a href="#">B.B.Q.</a>
                            <a href="#">Bendo Delight</a>
                            <a href="#">Curry Udon</a>
                            <a href="#">Donburi</a>
                            <a href="#">Fried Rice</a>
                            <a href="#">Green mango salad</a>
                            <a href="#">Miso Soup</a>
                            <a href="#">Roll</a>
                            <a href="#">Vegetable Udon</a>
                        </div>
                    </div>
                    <div class="widget widget_text">
                        <div class="widget-title">
                            <h5>Food Bakery In Your Pocket!</h5>
                        </div>
                        <div class="textwidget">
                            <span>Available on Google play for android &amp; on the App store for iOS. Download
                                the app and drive hunger far, far away</span>
                            <figure><img src="{{asset('front/extra-images/app-img1-1.png')}}" alt=""></figure>
                            <figure><img src="{{asset('front/extra-images/app-img2-1.png')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
<!-- Main Section End -->
@endsection
