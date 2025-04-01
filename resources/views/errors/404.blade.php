@extends('front.master')

@section('title')
    Restaurant || 404
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    <!-- 404 Page Start -->
    <div class="page-section nopadding cs-nomargin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-not-found">
                        <div class="cs-text">
                            <span class="cs-error">404</span>
                            <span>ERROR page not found</span>
                            <p>The page you are looking for does not exist.</p>
                        </div>
                        <form>
                            <div class="input-holder">
                                <i class="icon-search"></i>
                                <input type="text" placeholder="Enter your keyword" class="form-control txt-bar">
                                <input type="submit" class="bgcolor" value="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 Page End -->
</div>
<!-- Main Section End -->
@endsection
