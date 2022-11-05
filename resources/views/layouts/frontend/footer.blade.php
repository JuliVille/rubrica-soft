<footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ Config::get('settings.logo') }}" width="80"
                                    alt="Logo"></a>
                        </div>
                        <p>Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh id
                            elit. Duis sed odio sit amet nibh vulputate.</p>
                        <ul class="mt-20">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>Sitio</h6>
                        </div>
                        <ul>
                            <li><a href="index-2.html"><i class="fa fa-angle-right"></i>Inicio</a></li>
                            <li><a href="about.html"><i class="fa fa-angle-right"></i>Nosotros</a></li>
                            <li><a href="courses.html"><i class="fa fa-angle-right"></i>Cursos</a></li>
                        </ul>
                        <ul>
                            <li><a href="blog.html"><i class="fa fa-angle-right"></i>Noticias</a></li>
                            <li><a href="events.html"><i class="fa fa-angle-right"></i>Eventos</a></li>
                            <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contacto</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-link support mt-40">
                        <div class="footer-title pb-25">
                            <h6>Soporte</h6>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Privacidad</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Politicas</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Soporte</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Documentacion</a></li>
                        </ul>
                    </div> <!-- support -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>Contacto</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>Barranquilla, Colombia</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>+57 323 456 789</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>info@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- footer address -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer top -->

</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TP PART START ======-->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--====== BACK TO TP PART ENDS ======-->








<!--====== jquery js ======-->
<script src="{{ asset('jambasangsang/frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('jambasangsang/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('jambasangsang/frontend/js/bootstrap.min.js') }}"></script>

<!--====== Slick js ======-->
<script src="{{ asset('jambasangsang/frontend/js/slick.min.js') }}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{ asset('jambasangsang/frontend/js/jquery.magnific-popup.min.js') }}"></script>

<!--====== Counter Up js ======-->
<script src="{{ asset('jambasangsang/frontend/js/waypoints.min.js') }}"></script>
<script src="{{ asset('jambasangsang/frontend/js/jquery.counterup.min.js') }}"></script>

<!--====== Nice Select js ======-->
<script src="{{ asset('jambasangsang/frontend/js/jquery.nice-select.min.js') }}"></script>

<!--====== Nice Number js ======-->
<script src="{{ asset('jambasangsang/frontend/js/jquery.nice-number.min.js') }}"></script>

<!--====== Count Down js ======-->
<script src="{{ asset('jambasangsang/frontend/js/jquery.countdown.min.js') }}"></script>

<!--====== Validator js ======-->
<script src="{{ asset('jambasangsang/frontend/js/validator.min.js') }}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{ asset('jambasangsang/frontend/js/ajax-contact.js') }}"></script>

<!--====== Main js ======-->
<script src="{{ asset('jambasangsang/frontend/js/main.js') }}"></script>

<!--====== Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
<script src="{{ asset('jambasangsang/frontend/js/map-script.js') }}"></script>

@stack('script')
