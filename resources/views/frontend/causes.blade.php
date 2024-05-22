@extends('frontend.layouts.master')
@section('title')
    Causes- Folon Foundation
@endsection

@section('content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Popular Causes</h2>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('index') }}">Home</a>
                            <a href="{{ route('causes') }}">Causes</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
            
            
            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <p>What We Do?</p>
                        <h2>We believe that we can save more lifes with you</h2>
                    </div>
                    <div class="row">
                        @foreach ($whatwedo as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" style="max-height: 64px; max-width:64px;float: right;" >
                                </div>
                                <div class="service-text">
                                    <h3>{{ $item->name }}</h3>
                                    <p>{!! $item->description !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
          
       
                    </div>
                </div>
            </div>
            <!-- Service End -->
            
    
            <!-- Causes Start -->
            <div class="causes">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Popular Causes</p>
                        <h2>Let's know about charity causes around the world</h2>
                    </div>
                    <div class="owl-carousel causes-carousel">
                        @foreach ($cause as $item)

                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="Image">
                            </div>
                            @php
                            $count = (intval($item->raise) * 100)/ intval($item->goal);
                        @endphp
                            <div class="causes-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ intval($count) }}" aria-valuemin="0" aria-valuemax="100">
                                        <span>{{ intval($count) }}%</span>
                                    </div>
                                </div>
                                <div class="progress-text">
                                    <p><strong>Raised:</strong>  {{ intval($item->raise) }}BDT</p>
                                    <p><strong>Goal:</strong>  {{ intval($item->goal) }}BDT</p>
                                </div>
                            </div>
                            <div class="causes-text">
                                <h3>{{ $item->title }}</h3>
                                <p>{!! substr( $item->description , 0, 300)!!}</p>
                            </div>
                            <div class="causes-btn">
                                <a class="btn btn-custom">Learn More</a>
                                <a class="btn btn-custom">Donate Now</a>
                            </div>
                        </div>
                                     
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Causes End -->
@endsection