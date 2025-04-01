@extends('front.master')

@section('title')
    Restaurant || Blog
@endsection

@section('content')
<!-- Header End -->
<div class="sub-header align-center">
    <div class="subheader-holder" style=" background:url({{asset('front/extra-images/subheader-img2-1.jpg')}})  no-repeat ; background-size: cover; padding-top: 60px; padding-bottom: 30px; margin-top: 0px; margin-bottom: 0px; min-height: 186px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-holder">
                        <div class="page-title ">
                            <h1 style="color:#ffffff !important;">Blog</h1>
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
                        <li class="active">Blog</li>
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
                <div class="page-section  cs-page-sec-388315  nopadding cs-nomargin">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog blog-medium">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="blog-post">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-02-213x143.jpg')}}" alt=""></a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h4><a href="#">Creating the world’s ...</a></h4>
                                                </div>
                                                <ul class="post-options">
                                                    <li> <a class="post-category" href="#">Restaurant
                                                            Marketing</a><span><a href="#"> October 28, 2016
                                                            </a></span></li>
                                                </ul>
                                                <p> One of the best cities in India to experience a variety of
                                                    dishes is apni Dilli aka Delhi. In this...</p>
                                                <a href="{{route('front.blog_detail')}}" class="read-more text-color">Learn more<i class="icon-arrow-right22"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="blog-post">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-17-213x143.jpg')}}" alt=""></a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h4><a href="#">half year technology ...</a></h4>
                                                </div>
                                                <ul class="post-options">
                                                    <li> <a class="post-category" href="#">Restaurant
                                                            Marketing</a><span><a href="#"> October 28, 2016
                                                            </a></span></li>
                                                </ul>
                                                <p> One of the best cities in India to experience a variety of
                                                    dishes is apni Dilli aka Delhi. In this...</p>
                                                <a href="{{route('front.blog_detail')}}" class="read-more text-color">Learn more<i class="icon-arrow-right22"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="blog-post">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-07-213x143.jpg')}}" alt=""></a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h4><a href="#">Take away fans ...</a></h4>
                                                </div>
                                                <ul class="post-options">
                                                    <li> <a class="post-category" href="#">Cake
                                                            delivery</a><span><a href="#"> October 28, 2016
                                                            </a></span></li>
                                                </ul>
                                                <p> One of the best cities in India to experience a variety of
                                                    dishes is apni Dilli aka Delhi. In this...</p>
                                                <a href="{{route('front.blog_detail')}}" class="read-more text-color">Learn more<i class="icon-arrow-right22"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="blog-post">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-06-213x143.jpg')}}" alt=""></a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h4><a href="#">United Kingdom Fire ...</a></h4>
                                                </div>
                                                <ul class="post-options">
                                                    <li> <a class="post-category" href="#">Halal
                                                            food</a><span><a href="#"> October 28, 2016
                                                            </a></span></li>
                                                </ul>
                                                <p> One of the best cities in India to experience a variety of
                                                    dishes is apni Dilli aka Delhi. In this...</p>
                                                <a href="{{route('front.blog_detail')}}" class="read-more text-color">Learn more<i class="icon-arrow-right22"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="blog-post">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="#"><img src="{{asset('front/extra-images/blogs-food-bakery-08-213x143.jpg')}}" alt=""></a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h4><a href="#">Food Bakery strengthens ...</a></h4>
                                                </div>
                                                <ul class="post-options">
                                                    <li> <a class="post-category" href="#">malaysian
                                                            food</a><span><a href="#"> October 28, 2016
                                                            </a></span></li>
                                                </ul>
                                                <p> One of the best cities in India to experience a variety of
                                                    dishes is apni Dilli aka Delhi. In this...</p>
                                                <a href="{{route('front.blog_detail')}}" class="read-more text-color">Learn more<i class="icon-arrow-right22"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <nav>
                            <ul class="pagination">
                                <li><a class="prev page-numbers"> Prev</a></li>
                                <li><a class="page-numbers active">1</a></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="page-numbers" href="#">4</a></li>
                                <li><a class="next page-numbers" href="#">Next</a></li>
                            </ul>
                        </nav>
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
                                            <h6><a href="#">United Kingdom Fire Brigade launch have take away
                                                    ...</a></h6>
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
