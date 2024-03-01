<section id="contact" footer data-stellar-background-ratio="5">

    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Information</h4>
                    <div class="latest-stories">
                        {{-- <div class="stories-image">
                            <a href="#"><img src="{{asset('front/images/2.jpg')}}" class="img-responsive" alt=""></a>
                        </div> --}}
                        <div class="stories-info">
                            <a href="#"><h5>About Us</h5></a>
                            {{-- <span>Tuesday Jul 25, 2023</span> --}}
                        </div>
                    </div>

                    <div class="latest-stories">
                        {{-- <div class="stories-image">
                            <a href="#"><img src="{{asset('front/images/2.jpg')}}" class="img-responsive" alt=""></a>
                        </div> --}}
                        <div class="stories-info">
                            <a href="#"><h5>Item</h5></a>
                            {{-- <span> January 27, 2023</span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                    <p>{{$_site_profile->description}}</p>

                    <div class="contact-info">
                        <p><i class="fa fa-phone"></i>011-669888</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">himalayancraft@.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <div class="opening-hours">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                        <p>Sunday - Friday <span>06:00 AM - 10:00 PM</span></p>
                        {{-- <p>Saturday <span>09:00 AM - 08:00 PM</span></p> --}}
                        {{-- <p>Sunday <span>Closed</span></p> --}}
                    </div>

                    <ul class="social-icon">
                        {{-- <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li> --}}
                    </ul>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 border-top">
                <div class="col-md-4 col-sm-6">
                    <div class="copyright-text">
                        <p>Copyright &copy;  {{$_site_profile->copyright}}<br>

                            | Design : <a href="#" target="">{{$_site_profile->title}}</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-link">
                        <a href="#">Hand Made Craft</a>
                        <a href="#">Shwal</a>
                        <a href="#">Frame</a>
                        <a href="#">Accesories</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 text-align-center">
                    <div class="angle-up-btn">
                        <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                    </div>
                </div>
            </div>


            <div id="validationModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="validation-errors">
                                @foreach ($errors->all() as $error)
                                    <span class="error-message">{{$error}}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="modal-footer">
                            <pre>
                               The appointment had already been scheduled.Please Choose Another Date/Time. Thank You.
                            </pre>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Your other HTML content -->

            <!--Modal Launch Button-->
            {{--            <button type="button" class="btn btn-info btn-lg openmodal" data-toggle="modal" data-target="#validationModal" hidden>Open Modal</button>--}}

            <!-- Your HTML code here -->



        </div>
    </div>
</section>
</footer>
