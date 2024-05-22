@extends('frontend.layouts.master')
@section('title')
    Events- Folon Foundation
@endsection

@section('content')
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Upcoming Events</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="{{ route('events') }}">Events</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
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
                                    <p><i class="far fa-clock"></i>{{ $item->time }}</p>
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
@endsection