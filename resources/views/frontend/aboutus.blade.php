@extends('frontend.layouts.master')
@section('title')
    About Us - Folon Foundation
@endsection

@section('content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>About Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('index') }}">Home</a>
                            <a href="{{ route('about_us') }}">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
            
    
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6" >
                            <div class="about-img" data-parallax="scroll" data-image-src="{{(!empty($aboutus->logo))?URL::to('storage/'.$aboutus->logo):URL::to('image/no_image.png')}}"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-header">
                                <p>Learn About Us</p>
                                <h2>Worldwide non-profit charity organization</h2>
                            </div>
                            <div class="about-tab">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                    </li>
                                </ul>
    
                                <div class="tab-content">
                                    <div id="tab-content-1" class="container tab-pane active">
                                        {!! $aboutus->about !!}
                                    </div>
                                    <div id="tab-content-2" class="container tab-pane fade">
                                        {!! $aboutus->mission !!}
                                    </div>
                                    <div id="tab-content-3" class="container tab-pane fade">
                                        {!! $aboutus->vision !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
@endsection