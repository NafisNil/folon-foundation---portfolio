@extends('frontend.layouts.master')
@section('title')
    Index - Folon Foundation
@endsection
@section('content')
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    @foreach ($slider as $item)
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>{{ $item->title }}</h1>
                            <p>
                               {!! $item->subtitle !!}
                            </p>

                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="{{(!empty($aboutus->logo))?URL::to('storage/'.$aboutus->logo):URL::to('image/no_image.png')}}"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p> About Us</p>
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
                                <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" style="max-height: 64px; max-width:64px">
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


        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="{{ asset('frontend') }}/img/facts.jpg">
            <div class="container">
                <div class="row">
                    @foreach ($counter as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            {!! $item->icon !!}
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">{{ $item->count }}</h3>
                                <p>{{ $item->name }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Facts End -->


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
                            $count = (intval($item->raise) * 100)/ intval($item->goal)
                        @endphp
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ intval($count) }}" aria-valuemin="0" aria-valuemax="100">
                                    <span>{{ intval($count) }}%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> {{ intval($item->raise) }}BDT</p>
                                <p><strong>Goal:</strong> {{ intval($item->goal) }}BDT</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>{{ $item->title }}</h3>
                            <p>{!! substr( $item->description , 0, 300)!!}</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom" href="{{ route('cause_details', $item->id) }}">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Causes End -->


        <!-- Donate Start -->
        <div class="donate" data-parallax="scroll" data-image-src="{{ asset('frontend') }}/img/donate.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>Let's donate to needy people for better lives</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non. Aliquam metus tortor, auctor id gravida, viverra quis sem. Curabitur non nisl nec nisi maximus. Aenean convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-custom active">
                                        <input type="radio" name="options" checked> $10
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="options"> $20
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="options"> $30
                                    </label>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Donate Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->


        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Upcoming Events</p>
                    <h2>Be ready for our upcoming charity events</h2>
                </div>
                <div class="row">
                    @foreach ($event as $item)
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>{{ $item->date }}</p>
                                    <p><i class="far fa-clock"></i>{{ $item->time }} (24h)</p>
                                    <p><i class="fa fa-map-marker-alt"></i>{!! $item->address !!}</p>
                                </div>
                                <div class="event-text">
                                    <h3>{{ $item->title }}</h3>
                                    <p>
                                       {!! $item->desc !!}
                                    </p>
                                    <a class="btn btn-custom" href="{{ $item->link }}">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Event End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Awesome guys behind our charity activities</h2>
                </div>
                <div class="row">
                    @foreach ($team as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>{{ $item->name }}</h2>
                                <p>{{ $item->designation }}</p>
                                <div class="team-social">
                                    <a href="{{ $item->twitter }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ $item->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $item->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{ $item->instagram }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="{{ asset('frontend') }}/img/volunteer.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non. Aliquam metus tortor, auctor id gravida, viverra quis sem. Curabitur non nisl nec nisi maximus. Aenean convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What people are talking about our charity activities</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    @foreach ($testimonial as $item)
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="Image">
                            <div class="testimonial-name">
                                <h3>{{ $item->name }}</h3>
                                <p>{{ $item->designation }}</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                {!! $item->comment !!}
                            </p>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="contact-img">
                    <img src="{{ asset('frontend') }}/img/contact.jpg" alt="Image">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        @include('backend.sessionMsg')
                        <form action="{{ route('contactformsubmit') }}" method="POST">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name"  name="name"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email"  name="email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject"   name="subject"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"  name="message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles directly from our blog</h2>
                </div>
                <div class="row">
                    @foreach ($blog as $item)
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{ route('blogs_details', $item->id) }}">{{ $item->title }}</a></h3>
                                <p>
                                    {!! substr( $item->desc , 0, 200)!!}
                                </p>
                            </div>

                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Blog End -->
@endsection
