<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>@section('mainTitle')
     CodePen
    @show- @yield('title')</title>
  <link rel="stylesheet" href="{{asset('dashboard_yellow/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<head>
   <meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/all.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap" rel="stylesheet">
 </head>
 <body>


   <div id="progress"></div>
    <div id="scrollbar"></div>


   <header class="head-section">
   <nav id="nav-bar">
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <h3 id="brand"> <a href="#" id="brand-link"> @yield('pageName')</a> </h3>

      <ul class="nav-links">
        <li class="menu"><a class="items" href="#">Home</a></li>
        <li class="menu"><a class="items" href="#">Publisher Rates</a></li>
        <li class="menu"><a class="items" href="#">Register</a></li>
        <li class="menu"><a class="items" href="pages/dashborad/Dashborad/Dashboard.html">Dashboard</a></li>
      </ul>

    </nav>






<section class="s1">


   <header class="shorten">
      <div class="container">
      <div class="intro-text wow fadeInUp" style="animation-delay: 0.25s;">
      <div class="intro-lead-in wow "><em>@section('URL')
            Shorten URLs And
            @show
        </em></div>
      <div class="intro-heading wow ">EARN MONEY</div>
      <div class="row wow ">
         <div class="col-sm-8 col-sm-offset-2">
            <form method="post" accept-charset="utf-8" id="shorten" class="form-inline"><div style="display:none;"><input type="hidden" name="_method" value="POST" /><input type="hidden" name="_csrfToken" autocomplete="off" ></div>
               <div class="form-group">
                 <input type="text" name="URL" placeholder="Your URL Here" required="required" class="form-control input-lg" >
                 <input type="hidden" name="ad_type" value="2" >
                 <button class="btn-captcha" id="invisibleCaptchaShort" type="submit"><img src="images/Right-Arrow.png" alt="" ></button></div>
              <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" ></div>
            </form>
      <div class="shorten add-link-result"></div>
      </div>
      </div>
      </div>
      </div>
      </header>
   <div class="wave wave1"></div>

</section>

</header>


<section class="steps">
   <div class="container text-center">

       <div class="row" >
           <div class="col-sm-4">
               <div class="step step1" data-aos="fade-up" data-aos-duration="1300">
                   <div class="step-img"><i class="ms-sprite ms-sprite-step1"></i></div>
                   <h2></h2>
                   <h4 class="step-heading">SHORTEN URL</h4>
                   <p>After creating an account, shorten any URLs with a click of a button.</p>
               </div>
           </div>
           <div class="col-sm-4">
               <div class="step step2" data-aos="fade-up" data-aos-duration="1300">
                   <div class="step-img"><i class="ms-sprite ms-sprite-step2"></i></div>
                   <h2></h2>
                   <h4 class="step-heading">SHARE</h4>
                   <p>Share your shortened URLs on the internet (social media, Youtube, blogs, websites).</p>
               </div>
           </div>
           <div class="col-sm-4">
               <div class="step step3" data-aos="fade-up" data-aos-duration="1300">
                   <div class="step-img"><i class="ms-sprite ms-sprite-step3"></i></div>
                   <h2></h2>
                   <h4 class="step-heading">EARN MONEY</h4>
                   <p>Get paid for every person who clicks on your shortened URL!</p>
               </div>
           </div>
       </div>

   </div>
</section>


<div class="separator">
   <div class="container"></div>
</div>

</div>
<section id="sec2">

   <div class="container">
      <div class="about wow bounceIn" style="visibility: hidden; animation-name: bounceIn;">
         <span id="title-brand">
            PlusEarn
         </span>
         <p id="title">
            WHY JOIN US?
         </P>
      </div>
      <!-- code below for the cards -->
      <div class="row">
         <div class="col-md-4 wow " data-aos="fade-up" data-aos-duration="1200">
            <div class="card testimonials-item">
               <div>
                  <div class="card-content">
                     <div class="imgcon">
                        <img src="images/much.svg" alt="spongee" class="card-img">
                     </div>
                     <div class="card-info">
                      <h6 id="text1">What is PlusEarn?</h6>
                        <p id="text2">My name is sponge bob and i'm12 years old, can you guess my color?LALALALALALALALALALALALALAL</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 wow" data-aos="fade-up" data-aos-duration="1200">
            <div class="card testimonials-item">
               <div>
                  <div class="card-content">
                     <div class="imgcon">
                        <img src="images/stats.svg" alt="spongee" class="card-img">
                     </div>
                     <div class="card-info">
                      <h6 id="text1">Spongebob</h6>
                        <p id="text2">My name is sponge bob and i'm12 years old, can you guess my color?LALALALALALALALALALALALALAL</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 wow" data-aos="fade-up" data-aos-duration="1200">
            <div class="card testimonials-item">
               <div>
                  <div class="card-content">
                     <div class="imgcon">
                        <img src="images/dash.svg" alt="spongee" class="card-img">
                     </div>
                     <div class="card-info">
                      <h6 id="text1">Spongebob</h6>
                        <p id="text2">My name is sponge bob and i'm12 years old, can you guess my color?LALALALALALALALALALALALALAL</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row row2">
         <div class="col-md-4 wow " data-aos="fade-up" data-aos-duration="1200">
            <div class="card testimonials-item">
               <div>
                  <div class="card-content">
                     <div class="imgcon">
                        <img src="images/what.svg" alt="spongee" class="card-img">
                     </div>
                     <div class="card-info">
                      <h6 id="text1">Spongebob</h6>
                        <p id="text2">My name is sponge bob and i'm12 years old, can you guess my color?LALALALALALALALALALALALALAL</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 wow" data-aos="fade-up" data-aos-duration="1200">
            <div class="card testimonials-item">
               <div>
                  <div class="card-content">
                     <div class="imgcon">
                        <img src="images/api.svg" alt="spongee" class="card-img">
                     </div>
                     <div class="card-info">
                      <h6 id="text1">Spongebob</h6>
                        <p id="text2">My name is sponge bob and i'm12 years old, can you guess my color?LALALALALALALALALALALALALAL</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 wow " data-aos="fade-up" data-aos-duration="1200">
            <div class="card testimonials-item">
               <div>
                  <div class="card-content">
                     <div class="imgcon">
                        <img src="images/ref.svg" alt="spongee" class="card-img">
                     </div>
                     <div class="card-info">
                      <h6 id="text1">Spongebob</h6>
                        <p id="text2">My name is sponge bob and i'm12 years old, can you guess my color?LALALALALALALALALALALALALAL</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row row2">
         <div class="col-md-4 wow " data-aos="fade-up" data-aos-duration="1200">
            <div class="card testimonials-item">
               <div>
                  <div class="card-content">
                     <div class="imgcon">
                        <img src="images/rate.svg" alt="spongee" class="card-img">
                     </div>
                     <div class="card-info">
                      <h6 id="text1">Spongebob</h6>
                        <p id="text2">My name is sponge bob and i'm12 years old, can you guess my color?LALALALALALALALALALALALALAL</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 wow" data-aos="fade-up" data-aos-duration="1200">
            <div class="card testimonials-item">
               <div>
                  <div class="card-content">
                     <div class="imgcon">
                        <img src="images/support.svg" alt="spongee" class="card-img">
                     </div>
                     <div class="card-info">
                      <h6 id="text1">Spongebob</h6>
                        <p id="text2">My name is sponge bob and i'm12 years old, can you guess my color?LALALALALALALALALALALALALAL</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 wow " data-aos="fade-up" data-aos-duration="1200">
            <div class="card testimonials-item">
               <div>
                  <div class="card-content">
                     <div class="imgcon">
                        <img src="images/support.svg" alt="spongee" class="card-img">
                     </div>
                     <div class="card-info">
                      <h6 id="text1">Spongebob</h6>
                        <p id="text2">My name is sponge bob and i'm12 years old, can you guess my color?LALALALALALALALALALALALALAL</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</section>


<section class="stats">

   <div class="container">
      <div class="section-head text-center wow bounceIn" style="visibility: hidden; animation-name: bounceIn;">
         <span id="head">LET'S GROW TOGTHER</span>
         <h1 id="our-growing">OUR GROWING</h1>
      </div>
   <div class="row">
   <div class="col-sm-4 text-center">
   <div class="stat wow " data-aos="flip-left" data-aos-duration="1100">
      <i class="fas fa-mouse-pointer"></i>
   <div class="stat-num">
   9,339,746 </div>
   <div class="stat-text">
   Total Clicks </div>
   </div>
   </div>
   <div class="col-sm-4 text-center">
   <div class="stat wow " data-aos="flip-left" data-aos-duration="1100">
      <i class="fas fa-link"></i>
   <div class="stat-num">
   2,067,572 </div>
   <div class="stat-text">
   Total URLs  </div>
   </div>
   </div>
   <div class="col-sm-4 text-center">
   <div class="stat wow " data-aos="flip-left" data-aos-duration="1100">
      <i class="fas fa-users"></i>
   <div class="stat-num">
   61,701 </div>
   <div class="stat-text">
   Registered users </div>
   </div>
   </div>
   </div>
   </div>
   </section>

    <script src="style/javascript.js"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3h66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 </body>
<!-- partial -->
  <script  src="{{asset('dashboard_yellow/script.js')}}"></script>

</body>
</html>
