<!DOCTYPE html>
<html lang="en">
<head>
    <title>Civic - CV Resume</title>
    <meta charset="UTF-8">
    <meta name="description" content="Civic - CV Resume">
    <meta name="keywords" content="resume, civic, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<div class="home-four-style">
    <!-- Header section start -->
   <!-- <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="site-logo">
                        <h2><a href="#">Civic</a></h2>
                        <p>Enhance your online presence</p>
                    </div>
                </div>
                <div class="col-md-8 text-md-right header-buttons">
                    <a href="#" class="site-btn">Download CV</a>
                    <a href="#" class="site-btn">Discover me</a>
                </div>
            </div>
        </div>
    </header>
     Header section end -->

    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-5 col-lg-5 p-0">
                <div class="main-left-area h-100">
                    <!-- hero section -->
                    <section class="intro-section">
                        <figure class="hero-image">
                            <img src="{{asset('img/IMG_8129.JPG')}}" alt="">
                        </figure>
                        <div class="hero-text">
                            <h2>{{$programmer->first_name}}<br>{{$programmer->last_name}}</h2>
                            <p>I’m a digital designer in love with photography, painting and discovering new worlds and cultures.</p>
                        </div>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consectetur eget felis et volutpat. Integer id nulla at diam eleifend fringilla. Donec eu ornare libero. Fusce pulvinar magna id pharetra laoreet. Donec convallis cursus libero. Nam semper risus sit amet rhoncus maximus. Integer eros ante, convallis sit amet vulputate nec, molestie vitae nisi. Phasellus convallis augue vel rhoncus congue. Morbi interdum molestie orci sed ullamcorper. Vivamus aliquet eros ut leo luctus, a venenatis metus faucibus. Maecenas ipsum nisi, iaculis in orci vel, molestie gravida erat. </p>
                        <div class="hero-info pt-5">
                            <h2>General Info</h2>
                            <ul>
                                <li><span>Date of Birth</span>Aug 25, 1988</li>
                                <li><span>Address</span>Rosia Road 55, Gibraltar, UK</li>
                                <li><span>E-mail</span>{{$programmer->email}}</li>
                                <li><span>Phone </span>{{$programmer->phone}}</li>
                            </ul>
                        </div>
                    </section>
                    <!-- extra section -->
                    <section class="extra-section spad">
                        <div class="section-title">
                            <h2>Extra Skills</h2>
                            {{$programmer->skills}}
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <div class="fact-box trans">
                                    <div class="fact-content">
                                        <div class="circle-progress">
                                            <div id="progress3" class="prog-circle"></div>
                                            <div class="progress-info">
                                                <h2>75%</h2>
                                            </div>
                                            <div class="prog-title">
                                                <h3>Inspiration</h3>
                                                <p>Etiam nec odio vestibulum est.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="fact-box trans">
                                    <div class="fact-content">
                                        <div class="circle-progress">
                                            <div id="progress4" class="prog-circle"></div>
                                            <div class="progress-info">
                                                <h2>83%</h2>
                                            </div>
                                            <div class="prog-title">
                                                <h3>Inspiration</h3>
                                                <p>Etiam nec odio vestibulum est.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fact-box">
                                    <div class="fact-content">
                                        <img src="{{asset('img/icon/1-w.png')}}" alt="">
                                        <h2>14</h2>
                                        <p>Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fact-box">
                                    <div class="fact-content">
                                        <img src="{{asset('img/icon/2-w.png')}}" alt="">
                                        <h2>9</h2>
                                        <p>Awards Won</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- language skill section -->
                    <section class="language-section spad">
                        <div class="section-title">
                            <h2>Languages</h2>
                        </div>
                        <ul class="language-progress">
                            <li>English <div class="lan-prog" data-lanprogesss="5"></div></li>
                            <li>Spanish <div class="lan-prog" data-lanprogesss="4"></div></li>
                            <li>Chinesse <div class="lan-prog" data-lanprogesss="3"></div></li>
                        </ul>
                    </section>
                    <div class="social-links">
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="main-right-area">
                    <!-- Resume section start -->
                    <section class="resume-section spad pt-0">
                        <div class="section-title">
                            <h2>{{$programmer->professional_title}}</h2>
                        </div>
                        <ul class="resume-list">
                            <li>
                                <h2>2016-Present</h2>
                                {{$programmer->experience}}
                                <h3>Web Design Company</h3>
                                <h4>Web Designer</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                            </li>
                            <li>
                                <h2>2014-2016</h2>
                                <h3>Web Design Company</h3>
                                <h4>Web Designer</h4>
                                <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                            </li>
                        </ul>
                    </section>
                    <!-- Resume section end -->

                    <!-- Resume section start -->
                    <section class="resume-section">
                        <div class="section-title">
                            <h2>Education</h2>
                        </div>
                        <ul class="resume-list">
                            <li>
                                {{$programmer->education}}
                                <h2>2008</h2>
                                <h3>Ui/Ux Diploma</h3>
                                <h4>Design College California</h4>
                                <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                            </li>
                            <li>
                                <h2>2006</h2>
                                <h3>Web design Diploma</h3>
                                <h4>Design College California</h4>
                                <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                            </li>
                        </ul>
                    </section>
                    <!-- Resume section end -->


                    <!-- Review section start -->
                    <section class="review-section spad">
                        <div class="section-title">
                            <h2>References</h2>
                        </div>
                        <div class="review-slider owl-carousel">
                            <div class="single-review">
                                <div class="qut">“</div>
                                <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                                <h3>Robert G. Smith</h3>
                                <h4>Manager, Company</h4>
                            </div>
                            <div class="single-review">
                                <div class="qut">“</div>
                                <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                                <h3>Robert G. Smith</h3>
                                <h4>Manager, Company</h4>
                            </div>
                            <div class="single-review">
                                <div class="qut">“</div>
                                <p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
                                <h3>Robert G. Smith</h3>
                                <h4>Manager, Company</h4>
                            </div>
                        </div>
                    </section>
                    <!-- skill section start -->
                    <div class="skill-section">
                        <div class="section-title">
                            <h2>Skills</h2>
                        </div>
                        <!-- progress bars -->
                        <div class="skills">
                            <div class="single-progress-item">
                                <div class="progress-bar-style" data-progress="99"></div>
                                <p>Design</p>
                            </div>
                            <div class="single-progress-item">
                                <div class="progress-bar-style" data-progress="75"></div>
                                <p>Illsutrator</p>
                            </div>
                            <div class="single-progress-item">
                                <div class="progress-bar-style" data-progress="87"></div>
                                <p>Photoshop</p>
                            </div>
                            <div class="single-progress-item">
                                <div class="progress-bar-style" data-progress="60"></div>
                                <p>HTML</p>
                            </div>
                        </div>
                        <!-- icon boxes -->
                        <div class="icon-box-area spad">
                            <div class="icon-box">
                                <i class="flaticon-032-cooking"></i>
                                <p>Cooking</p>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-015-photo-camera"></i>
                                <p>Photography</p>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-013-chess-1"></i>
                                <p>Playing Chess</p>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-001-yoga"></i>
                                <p>Yoga</p>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-035-tent"></i>
                                <p>Camping in nature</p>
                            </div>
                        </div>
                    </div>
                    <!-- skill section end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer section start -->
<footer class="footer-section">
    <div class="container text-center">
        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distirbuted by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </div>
</footer>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/circle-progress.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
