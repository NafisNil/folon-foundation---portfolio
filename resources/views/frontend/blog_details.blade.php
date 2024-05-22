@extends('frontend.layouts.master')
@section('title')
    Event ({{  $blog->title}})- Folon Foundation
@endsection

@section('content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>{{  $blog->title}}</h2>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('index') }}">Home</a>
                            <a href="{{ route('blogs_details', $blog->id) }}">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
    
    
            <!-- Single Post Start-->
            <div class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="single-content">
                                <img src="{{(!empty($blog->logo))?URL::to('storage/'.$blog->logo):URL::to('image/no_image.png')}}" />
                                <h2>{{ $blog->title }}</h2>
                                <p>
                                    {!! $blog->desc !!}
                                </p>
                             
                            </div>
 
                        </div>
    
                        <div class="col-lg-4">
                            <div class="sidebar">
                             <!--   <div class="sidebar-widget">
                                    <div class="search-widget">
                                        <form>
                                            <input class="form-control" type="text" placeholder="Search Keyword">
                                            <button class="btn"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div> -->
    
                                <div class="sidebar-widget">
                                    <h2 class="widget-title">Recent Post</h2>
                                    <div class="recent-post">
                                        @foreach ($blog_recent as $item)
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" />
                                            </div>
                                            <div class="post-text">
                                                <a href="{{ route('blogs_details', $item->id) }}">{{ $item->title }}</a>
                                               
                                            </div>
                                        </div>
                                        @endforeach
                                        
                         
                                    </div>
                                </div>
    

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Post End-->   
@endsection