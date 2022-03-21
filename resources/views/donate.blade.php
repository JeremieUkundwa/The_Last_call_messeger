@extends('layout')

@section('donate-css')
.main-body {
  margin-top: 30px;
  width: 70%;
  margin-left: 15vw;
  padding: 50px;
  background-color: #fff;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 0px 0px 10px 10px;
  margin-bottom: 30px;
}
.main-body p {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 600;
  
  font-size: 16px;
  line-height: 20px;
  margin-left: 40px;
  margin-top: 20px;

  color: #192646;
}
.inner-main-body-section {
  margin-left: 20px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
}
.inner-main-body-section img {
  width: 200px;
  height: 100px;
}

.inner-main-body-section p {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 20px;
  margin-left: 40px;
  margin-top: 20px;

  color: #192646;
}

@endsection

@section('donate-section')
<main>
        <div class="main-body" style="margin-top: 30px; width: 70%; margin-left: 15vw; padding: 50px; background-color: #fff; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 0px 0px 10px 10px; margin-bottom: 30px;">
          <h1>Help spread the Gospel with your Donation!</h1> <br>
          <p>
            I have showed you all things, how that so laboring ye ought to
            support the weak, and to remember the words of the Lord Jesus, how
            he said, It is more blessed to give than to receive. (Acts 20:35)
          </p> <br>
          <div class="inner-main-body-section">
            <div id="mtn-donate">
              <img src="./images/mtn-logo.png" alt="">
              <p>+250782799851</p>
            </div>
            <div id="WU-donate">
              <img src="./images/logo.wu.big.svg" style="background-color: rgb(7, 7, 99);" alt="">
              <p></p>
            </div>
            <div id="Word-lemit-donate">
              <img src="./images/World-remit-logo.jpeg" alt="">
            </div>
            <div id="kcb-donate-bank">
              <img src="./images/kcb.png" alt="">
              <p>4401316835</p>
            </div>
          </div>
        </div>
      </main>
      <br><br><br><br><br>
@endsection