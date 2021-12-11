

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>IT-Work | Homepage</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('home_page/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('home_page/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('home_page/css/responsive.css') }}">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="header">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="{{ asset('home_page/assets/itwork-logo.png') }}" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.html"> Home  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact us</a>
                                 </li>
                              </ul>
                              <div class="sign_btn"><a href="{{ route('sign-up') }}">Sign up</a></div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1>Find your dream job in <b style="color: #03a9f4">IT</b></h1>
                           <strong>Browse latest</strong>
                           <span>Job offers</span>
                           <a href="{{ route('dashboard') }}">Browse</a>
                        </div>
                     </div>
                     <div class="col-md-7 padding_right1">
                        <div class="text-img">
                           <figure><img src="{{ asset('home_page/assets/top_img.png') }}" alt="#"/></figure>
                           <h3>01</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
      <!-- end banner -->
      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>About <b style="color: #03a9f4">IT-Work</b></h2>
                     <span>d to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum gener</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2 ">
                  <div class="about_box ">
                     <figure><img src="{{ asset('home_page/assets/about_img.png') }}" alt="#"/></figure>
                     <a class="read_more" href="#">Read more</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about -->
      <!-- best -->
      <div id="" class="best">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Latest job offers</h2>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</span>
                  </div>
               </div>
            </div>
            <div class="row">
            @foreach($job_offers as $offer)
               <div class="col-md-4">
                  <div class="best_box">
                     <h4>{{ $offer->title}}</h4>
                     <p>{{ $offer->salary_min}} - {{ $offer->salary_max}} €</p>
                     <a class="read_more" href="#">More info</a>
                  </div>
               </div>
              @endforeach
               <div class="col-md-12">
                  <a class="read_more" href="#">Read more</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end best -->
      <!-- request -->
      <div id="contact" class="request">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request a Call back</h2>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>
                     incididunt ut labore et dolore magna</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="black_bg">
                     <div class="row">
                        <div class="col-md-7 ">
                           <form class="main_form">
                              <div class="row">
                                 <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Nmae" type="text" name="Name">
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Phone number" type="text" name=" Phone number">
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Email" type="text" name="Email">
                                 </div>
                                 <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message "> Message </textarea>
                                 </div>
                                 <div class="col-sm-12">
                                    <button class="send_btn">Send</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="col-md-5">
                           <div class="mane_img">
                              <figure><img src="{{ asset('home_page/assets/mane_img.jpg') }}" alt="#"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end request -->
      <!-- two_box section -->
      <div  class="two_box">
         <div class="container-fluid">
            <div class="row d_flex pb-5 pt-5">
               <div class="col-md-6">
                  <div class="two_box_img">
                     <figure><img style="height:400px" src="{{ asset('home_page/assets/pc_person.svg') }}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="two_box_img">
                     <h2><span class="offer"><strong>20</strong></span><br>New job offers everyday</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end two_box section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="cont">
                        <h4> <strong class="multi"> Free Multipurpose</strong><br>
                           Responsive Landing Page 2019
                        </h4>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="cont_call">
                        <h4> <strong class="multi"> Call Now</strong><br>
                           (+1) 12345667890
                        </h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
   </body>
</html>