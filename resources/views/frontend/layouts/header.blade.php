        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p><a href="tel:+{{ @$setting->phone }}" class="credentials">{{ @$setting->phone }}</a> </p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p> <a href="mailto:{{ @$setting->email }}" class="credentials">{{ @$setting->email }}</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="{{ $social->twitter }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $social->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $social->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{ $social->instagram }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand"><img src="{{(!empty($setting->logo))?URL::to('storage/'.$setting->logo):URL::to('image/no_image.png')}}" alt="" style="max-width:96px;max-height:96px"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about_us') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('causes') }}" class="nav-item nav-link">Causes</a>
                        <a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
                        <a href="{{ route('blogs') }}" class="nav-item nav-link">Blog</a>

                        <a href="#" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
