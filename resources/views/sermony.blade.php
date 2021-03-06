@extends('layout')

@section('sermony-css')
.row-post {
  display: grid;
  grid-template-columns: 0.5fr 2fr 1fr;
  margin-left: 5vw;
  padding-top: 25px;
  margin-bottom: 30px;
}
.sermon-title {
  text-align: center;
  font-size: 24px;
}
.sermon-section {
  background-color: #fff;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 0px 0px 10px 10px;
  padding: 10px;
}
.comment-section {
  background-color: #fff;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 0px 0px 10px 10px;
  height: 45vh;
  padding: 20px;
  margin-right: 20px;
  margin-left: 10px;
}
.sermon-content {
  text-align: center;
}
.comment-section h3 {
  text-align: center;
}
.comment-section .comment-div {
  margin-left: 30px;
}

.comment-section .comment-div input {
  width: 334px;
  height: 39px;
  margin-bottom: 10px;
  padding: 5px;
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
}

.comment-section .comment-div textarea {
  width: 337px;
  height: 147px;
  padding: 5px;
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
}

.comment-button {
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
  margin-left: 3vw;
  width: 220px;
  height: 44px;
  margin-top: 10px;
}

#tabs {
  margin-left: 20px;
  padding-left: 32vw;
  font-size: 16px;
  padding-top: 20px;
  padding-bottom: 20px;
  background-color: rgba(169, 169, 169, 0.356);
  color: rgb(104, 104, 104);
  display: flex;
  margin: 0;
}
#tabs nav a {
  padding: 15px;
  border-radius: 10px;
  text-decoration: none;
}
#tabs nav a:hover {
  background: #ffb72b;
  cursor: pointer;
  color: black;
}

.intro-sermony {
    padding: 20px;
    margin-top: 30px;
    margin-left: 30px;
    margin-top: 3;
    display: grid;
    grid-template-columns: 1fr 1fr;
    background-color: #fff;
    box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
    border-radius: 0px 0px 10px 10px;
}
.sermon-intro-content {
  background-color: #fff;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 0px 0px 10px 10px;
  padding: 5px;
  margin-left: -5vw;
}
.sermon-intro-content button {
  margin-top: 50px;
  font-weight: 500;
  color: #fff;
  padding: 5px;
  border-radius: 10px;
  background-color: darkblue;
}
.sermon-intro-content button a{
  color: #fff;
  text-decoration: none;
}
.introduction col-md-6 {
  margin-top: 20px;
  margin-bottom: 30px;
  margin-left: 30vw;
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
  .intro-sermony {
    padding: 20px;
    margin-top: 30px;
    margin-left: 30px;
    margin-top: 3;
    display: grid;
    grid-template-columns: 1fr;
    background-color: #fff;
    box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
    border-radius: 0px 0px 10px 10px;
  }
}

@endsection

@section('sermony-section')
<main style="background: #faf6f6;">
      <div id="tabs">
        <nav>
            <a
            href="/sermony"
            style="background-color: #ffb72b; color: black"
            >Justification By Faith</a
          >
          <a href="/sermony-current-event">Current Events (Prophecy)</a>
          <a href="./sermony-temperence">Temperence</a>
        </nav>
      </div>
      <div class="row" style="display: flex;
  min-height: 50vh;
  flex-direction: column;
  justify-content: space-between;">
      @foreach ($sermonies as $sermon)
      <div class="introduction col-md-6">
        <div class="intro-sermony">
          <div class="date-bar">
            <div class="day">{{ date("d", strtotime($sermon->created_at)) }}</div>
            <div>
              <span class="month">{{ date("F", strtotime($sermon->created_at)) }}</span>
              <span class="year">{{ date("Y", strtotime($sermon->created_at)) }}</span>
            </div>
            <img src="{{ $sermon->photo }}" alt="" style="width:260px; height: 220px;">
          </div>
          <div class="sermon-intro-content">
            <div class="sermon-title">
              <h3>{{ $sermon->title }}</h3>
            </div>
            <div class="sermon-content">
              <p>
                <span style="font-weight: 400"
                  >
                  {{ $sermon->introduction }}
                  </span
                >
              </p>
              <button><a href="{{route('sermon.show',['sermon'=>$sermon])}}">Read More</a></button>
            </div>
          </div>
        </div>
      </div>

      @endforeach
      

      </div>
      
    </main>
@endsection