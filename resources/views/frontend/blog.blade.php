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
                        <h2>From Blog</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="{{ route('blogs') }}">Blog</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
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
                                    {!! $item->desc !!}
                                </p>
                            </div>
      
                        </div>
                    </div>
                    @endforeach

   
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                           {{$blog->links()}}
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
@endsection