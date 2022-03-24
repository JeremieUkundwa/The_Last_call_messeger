<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{url('css/font-awesome-4.7.0/css/font-awesome.css')}}" />
        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.csshtml*/{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0;overflow-x: hidden;}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link rel="stylesheet" href="{{url('css/footer.css')}}">
        <link rel="stylesheet" href="{{ url('css/header.css')}}">
        <link rel="stylesheet" href="{{ url('css/archive.css')}}">
        <link rel="stylesheet" href="{{url('css/video.css')}}">
        <style>

/* home-page-main */
.tweet-widgets{
    margin-left: 30px;
    background-color: #FAF6F6;
    width: 325px;
    /* margin-top: 120px; */
    height: 480px;
    border-radius: 10px;
    font-size: 12px;
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
}

.block{
    width: 50px;
}

.twitter-tweet{
    margin-left: 20px;
}
/* ================================================== sroll bars ========================== */
.tweet-widgets::-webkit-scrollbar {
width: 12px;               /* width of the entire scrollbar */
}

.tweet-widgets::-webkit-scrollbar-track {
background: #192646;        /* color of the tracking area */
}

.tweet-widgets::-webkit-scrollbar-thumb {
background-color: #fff;    /* color of the scroll thumb */
border-radius: 20px;       /* roundness of the scroll thumb */
border: 2px solid #192646;  /* creates padding around scroll thumb */
}

.twetter{
    margin-top: 65px;
}
/* --middle components */
main {
  background: #faf6f6;
}
.carousel-item img {
  height: 30vw;
  width: 100vw;
}

.middle-components {
  margin-top: 40px;
  width: 39.4vw;
  background-color: rgb(255, 249, 249);
  /* height: 63vh; */
  margin-bottom: 100px;
}
.middle-components .nav-middle {
  margin-left: 2vw;
  margin-right: 2vw;
}

.middle-caption {
  display: block;
  margin-top: 30px;
}

.nav-middle nav a {
  display: inline-block;
  font-family: Open Sans;
  font-style: normal;
  margin-bottom: 20px;
  font-weight: bold;
  font-size: 16px;
  line-height: 27px;
  margin-top: 20px;
  margin-left: 80px;
  text-decoration: none;
  color: #fff;
}
.nav-middle nav a:hover{
  color: #4f3f96;
}

.middle-content {
  width: 38vw;
}
.middle-content p strong{
  margin-top: 20px;
  text-align: center;
}
.middle-content p{
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 16px;

  text-align: center;

  color: #000000;
}
.middle-content ol li{
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 16px;
 
  text-align: center;

  color: #000000;
}
/* --Youtube section */
.youtube-widgets {
    margin-top: 65px;
}
.videos{
  margin-right: 20px;
    width: 400px;
    height: 376px;
    background-color: #FAF6F6;
    overflow-x: hidden;
    overflow-y: auto;
}
 iframe{
    width: 400px;
    height: 370px;
}
/* main-ask-questions */

.ask-li {
  list-style: none;
  margin-left: 20px;
}

.ask-question-section {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.ask-questions h1 {
  text-align: center;
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  font-size: 28px;
  margin-bottom: 30px;
  line-height: 38px;

  color: #192646;
}
.ask-question-section {
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
  margin-bottom: 20px;
  padding: 30px 5vw;
  width: 90vw;
  margin-left: 5vw;
}
.ask-question-section input,
textarea {
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
}
.ask-li input {
  width: 360px;
  height: 46px;
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
}
.ask-li label {
  margin-right: 50px
}
.info-inner-section {
  padding-top: 30px;
  width: 550px;
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
}
.textArea-inner-section textarea {
  margin-left: 10vw;
}
.textArea-inner-section h3 {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 600;
  font-size: 18px;
  line-height: 25px;
  text-align: center;
  text-transform: uppercase;

  color: #192646;
}
.textArea-inner-section textarea {
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
}

.textArea-inner-section button {
  background: #192646;
  box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
  border-radius: 10px;
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 600;
  font-size: 18px;
  line-height: 25px;
  text-align: center;
  color: #ffffff;
  margin-left: 10vw;
  width: 220px;
  height: 44px;
  margin-top: 10px;
}
/* responsive */
@media (max-width: 574px) {
  .middle-components {
    margin-top: 40px;
    width: 94vw;
    background-color: rgb(255, 249, 249);
    margin-bottom: 100px;
}
.middle-content {
    width: 90vw;
}
.twetter {
    margin-left: 30px;
}
.youtube-widgets {
    margin-top: 0px;
    margin-left: 60px;
}
.ask-question-section {
    background: rgba(255, 255, 255, 0.6);
    box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
    border-radius: 10px;
    margin-bottom: 20px;
    padding: 30px 5vw;
    width: 89vw;
    margin-left: 5vw;
}
.ask-question-section {
    display: grid;
    grid-template-columns: 1fr;
}
.info-inner-section {
    width: 360px;
    
}
.ask-li input {
    width: 300px;
}
.textArea-inner-section textarea {
    margin-left: 0vw;
}
.textArea-inner-section h3 {
    padding-top: 40px;
}
.nav-middle nav a {
    
    margin-left: 40px;
    
}
}

/* =================for nav-bar=============== */

.row{
  width: 99vw;
}
/* ================end================== */

  @yield('about-us-css');
  @yield('activities-css');
  @yield('contactUs-css');
  @yield('donate-css');
  @yield('video-css');
  @yield('sermony-css');
        </style>
    </head>
    <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a href="/home"><img class="image-logo" src="./images/logo.jpeg" alt="logo" style="width: 125px;height: 102px;" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home.about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{route('home.activities')}}">Activities Of The Ministry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{route('home.videos')}}">Videos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{route('home.contact')}}">Contact US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{route('home.donate')}}">Donate</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

      <!-- <div class="nav-bar relative p-4">
        <div class="logo">
          <a href="/home"><img class="image-logo" src="./images/logo.jpeg" alt="logo" /></a>
        </div>
        <div>
          <nav>
            <a class="nav-link-header" style="color: #ffb72b;" href="./index.html">Home</a>
            <a class="nav-link-header" href="./aboutUs.html">About Us</a>
            <a class="nav-link-header" href="./activites.html">Activities Of The Ministry</a>
            <a class="nav-link-header" href="./video.html">Videos</a>
            <a class="nav-link-header" href="./contactUs.html">Contact US</a>
            <a class="nav-link-header" href="./donate.html">Donate</a>
            
          </nav>
        </div>
        <div class="search-container">
          <form action="">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div> -->
    </header>
    
    <div>
        @yield('homePageMain')
        @yield('about-us')
        @yield('activites of the ministry')
        @yield('contact-section')
        @yield('donate-section')
        @yield('video-section')
        @yield('sermony-section')
        @yield('archive-section')

    </div>


    <footer class="footer" style="overflow-x: hidden;">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <ul>
              <li><a href="#"><i class="fa fa-archive"></i> Archive</a></li>
              <li><a href="./book.html"><i class="fa fa-book"></i> SOP Books</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <ul id="special">
                <li><a href="https://twitter.com/amateraniro"  target="_blank"><i class="fa fa-twitter"></i></a> </li>
                <li><a href="https://t.me/Lastcallmessages" target="_blank"><i class="fa fa-telegram"></i></a> </li>
                <li><a href=""><i class="fa fa-instagram" target="_blank"></i></a> </li>
                <li><a href="https://www.youtube.com/channel/UCrfUkYxS2sh4Pt-gL7CXBtQ" target="_blank"><i class="fa fa-youtube"></i></a> </li>
                <li><a href="mailto:onlineamateraniro@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a> </li>
                <li><a href="https://web.facebook.com/amateraniro.online.9" target="_blank"><i class="fa fa-facebook"></i></a> </li>
              </ul>
            </div>
            <div class="footer-col">
              <ul>
              <li><a href=""> <i class="fa fa-phone"></i>  +250 782799851 </a> </li>
              <li><a href=""> <i class="fa fa-map-marker"></i>  Kigali, Rwanda</a> </li>
              </ul>
            </div>
          </div>
          </div>
        </div> 
        <div class="copyright"> <hr> &copy; Copyright 2022 - The Last Call Messages all rights reserved</div>
      </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    </body>
</html>
