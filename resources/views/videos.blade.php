@extends('layout')

@section('video-css')
.videos-sections{

    margin-left: 1vw;

    
}
.videos-sections div p{
    width: 28vw;
}
.video1{

    background-color: #fff;
    box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
    border-radius: 0px 0px 10px 10px;
    margin-bottom: 20px;
    margin-left: 20px;
    margin-top: 21px;
    padding-left: 35px;
    padding-top: 20px;
}
@endsection

@section('video-section')
<main>
        <div class="videos-sections row">
          <div class="video1 col">
            <video controls width="400px" height="400px" allow-fullscreen>
              <source src="./videos/Umpire.mkv" controls />
            </video>
            <h2>Lorem Ipsum?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
          </div>
          <div class="video1 col">
            <video controls width="400px" height="400px" allow-fullscreen>
              <source src="./videos/Umpire.mkv" controls />
            </video>
            <h2>Lorem Ipsum?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
          </div>
          <div class="video1 col">
            <video controls width="400px" height="400px" allow-fullscreen>
              <source src="./videos/Umpire.mkv" controls />
            </video>
            <h2>Lorem Ipsum?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
          </div>
          <div class="video1 col">
            <video controls width="400px" height="400px" allow-fullscreen>
              <source src="./videos/Umpire.mkv" controls />
            </video>
            <h2>Lorem Ipsum?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
          </div>
          <div class="video1 col">
            <video controls width="400px" height="400px" allow-fullscreen>
              <source src="./videos/Umpire.mkv" controls />
            </video>
            <h2>Lorem Ipsum?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
          </div>
          <div class="video1 col">
            <video controls width="400px" height="400px">
              <source src="./videos/Umpire.mkv" controls />
            </video>
            <h2>Lorem Ipsum?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
          </div>

          <div class="video1 col">
            <video controls width="400px" height="400px">
              <source src="./videos/Umpire.mkv" controls />
            </video>
            <h2>Lorem Ipsum?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
          </div>
          <div class="video1 col">
            <video controls width="400px" height="400px">
              <source src="./videos/Umpire.mkv" controls />
            </video>
            <h2>Lorem Ipsum?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
          </div>
        </div>
      </main>
@endsection