@extends('layout')

@section('activities-css')
.react-body{
    margin-top: 30px;
}
.react-body h1 {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  font-size: 28px;
  line-height: 38px;
  text-align: center;
  color: #192646;
}

.activity {
  margin-top: 30px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-column-gap: 40px;
  width: 80vw;
  margin-left: 10vw;
  margin-bottom: 20px;
}
.activity-grid {
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
  padding: 20px;
}
.activity h3 {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  font-size: 21px;
  line-height: 29px;
  text-align: center;

  color: #192646;
}
.activity h4 {
  text-align: center;
  font-family: "Open Sans";
  font-style: normal;
  font-weight: bold; padding: 10px;
  font-size: 18px;
  line-height: 35px;
  /* or 194% */

  color: #192646;
}
.activity ul li {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  line-height: 35px;
  /* or 194% */

  color: #000000;
}
#evangelism-activity {
  margin-top: 45px;
}

.special-programs {
  margin-top: 50px;
  width: 80vw;
  margin-left: 10vw;
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
}
.special-programs h3 {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  font-size: 21px;
  line-height: 29px;
  /* identical to box height */

  text-align: center;
  letter-spacing: 0.02em;

  color: #192646;
}
.special-programs h4 {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 600;
  font-size: 21px;
  line-height: 36px;
  /* or 171% */

  text-align: center;

  color: #192646;
}

.special-programs p {
  text-align: center;
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  line-height: 35px;
  /* or 194% */

  color: #000000;
}
.speaker {
  margin-top: 50px;
  width: 80vw;
  margin-left: 10vw;
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
  margin-bottom: 20px;
}
.speaker h3 {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  font-size: 21px;
  line-height: 29px;
  /* identical to box height */

  text-align: center;
  letter-spacing: 0.02em;

  color: #192646;
}
.speaker ul{
    padding: 20px;
}
.speaker ul li{
    margin-left: 10vw;
}
@media (max-width: 574px){
  .activity {
    grid-template-columns: 1fr;
    grid-row-gap: 40px;
}
.react-body h1 {
    
    padding-top: 20px;
    font-size: 20px;
    
}
}
@endsection


@section('activites of the ministry')
<!-- Home Page carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="home-image-cara"  src="./images/bg-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img class="home-image-cara" src="./images/bg-2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img class="home-image-cara"  src="./images/bg-3.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
          <main>
            <div class="react-body">
              <h1>IBIKORWA DUKORA NA GAHUNDA</h1>
              <div class="activity">
                <div class="activity-grid">
                  <h3>IBIKORWA BY’IVUGABUTUMWA</h3>
                  <ul id="evangelism-activity">
                    <li>Gahunda zo guterana za buri cyumweru</li>
                    <li>Buri gihembwe tugira amateraniro y’ivugabutumwa (ivuna) </li>
                    <li>Amasengesho no kwiyiriza ubusa ku isabato ya mbere ya buri kwezi</li>
                    <li>Indi mishanga y’ivugabutumwa</li>
                  </ul>
                </div>
                <div class="activity-grid">
                  <h3>GAHUNDA Z’AMATERANIRO</h3>
                  <div>
                    <h4>Zoom</h4>
                    <p>Amateraniro ya buri cyumweru apanze mu buryo bukurikira:</p>
                    <ul>
                      <li>Ku wa mbere w’isabato: 19h30-20h30</li>
                      <li>Ku wa kane w’isabato: 19h30-20h30</li>
                      <li>Gutangira Isabato: 17h30-19h15</li>
                      <li>Ku Isabato: 7h30-12h00 and 16h00-17h30.</li>
                    </ul>
                  </div>
                  
                </div>
              </div>
              <div class="special-programs">
                <h3>IZINDI GAHUNDA ZIHARIYE</h3>
                <div class="content">
                  <h4>Telegram platform</h4>
                  <p> Buri munsi saa kumi n’imwe n’igice za mu gitondo hariho gahunda yo kwiga umwuka w’ubuhanuzi kuri rubuga rwa Telegram</p>
                </div>
                <div class="content">
                  <h4>Youtube, Facebook and Twitter</h4>
                  <p>Izindi gahunda zinyuzwa kuri Youtube, Facebook na Twitter. </p>
                </div>	
              </div>
            </div>
          </main>
@endsection