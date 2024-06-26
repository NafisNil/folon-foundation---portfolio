<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h2>Our Head Office</h2>
                    <p><i class="fa fa-map-marker-alt"></i>{!! $setting->address !!}</p>
                    <p><i class="fa fa-phone-alt"></i>{{ $setting->phone }}</p>
                    <p><i class="fa fa-envelope"></i>{{ $setting->email }}</p>
                    <div class="footer-social">
                        <a class="btn btn-custom" href="{{ $social->twitter }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-custom" href="{{ $social->facebook }}"><i class="fab fa-facebook-f"></i></a>

                        <a class="btn btn-custom" href="{{ $social->instagram }}"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-custom" href="{{ $social->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Popular Links</h2>
                    <a href="">About Us</a>
                    <a href="">Contact Us</a>
                    <a href="">Popular Causes</a>
                    <a href="">Upcoming Events</a>
                    <a href="">Latest Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Useful Links</h2>
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Help</a>
                    <a href="">FQAs</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-newsletter">
                    <h2>Newsletter</h2>
                    <form>
                        <input class="form-control" placeholder="Email goes here">
                        <button class="btn btn-custom">Submit</button>
                        <label>Don't worry, we don't spam!</label>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="#">Folon Foundation</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By <a href="https://lab-ar.com/">Lab AR</a></p>
            </div>
        </div>
    </div>
</div>
