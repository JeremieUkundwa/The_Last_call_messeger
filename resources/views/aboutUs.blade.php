@extends('layout')

@section('about-us-css')
/* ================About-us============= */
.top-bottom-section {
    background: rgba(255, 255, 255, 0.6);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    margin-bottom: 20px;
    padding: 30px 10vw;
    width: 90vw;
    margin-left: 5vw;
  }
  .middle-section {
    background: rgba(255, 255, 255, 0.6);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    margin-bottom: 20px;
    width: 90vw;
    margin-left: 5vw;
    padding-top: 20px;
    padding-bottom: 20px;
  }
  .inner-section,
  .inner-section-bottom {
    background: rgba(255, 255, 255, 0.6);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    margin-bottom: 20px;
    width: 80vw;
    margin-left: 5vw;
    padding: 30px 2vw;
  }
  .inner-section {
    display: inline-block;
    width: 38vw;
    margin-left: 40px;
    /* height: 20vh; */
  }
  .inner-section h4 {
    font-family: Open Sans;
    font-style: normal;
    font-weight: bold;
    font-size: 20px;
    line-height: 20px;
    margin-bottom: 30px;
    text-align: center;
  
    color: #192646;
  }
  .inner-section-bottom h4 {
    font-family: Open Sans;
    font-style: normal;
    font-weight: bold;
    font-size: 20px;
    line-height: 20px;
    margin-bottom: 30px;
    text-align: left;
  
    color: #192646;
  }
  .righ-inner-section {
    float: right;
    height: 15.5vw;
    margin-right: 90px;
  }
  .left-inner-section {
    margin-left: 5vw;
  }
  .react-body h3 {
    text-align: center;
    font-family: Open Sans;
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 27px;
  
    color: #192646;
  }
  .react-body div .para-edit {
    text-align: center;
    font-family: Open Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 21px;
    text-align: center;
  
    color: #000000;
  }
  .middle-section #upper {
    margin-left: 30vw;
    width: 30vw;
  }
  .react-body h1 {
    text-align: center;
    padding-top: 20px;
    padding-bottom: 20px;
  }
  /* ================ Responsive ============ */
  @media (max-width: 574px){
      .middle-section #upper {
      margin-left: 5vw;
      width: 80vw;
  }
  .inner-section {
    
    width: 80vw;
  
}
.righ-inner-section {
    float:none;
    margin-left: 20px;
    height: 30vh;
 
}
  }

  /* ================ end About-us ============ */
@endsection


@section('about-us')
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
                <h1>ABOUT US</h1>
                <div class="top-bottom-section">
                    <h3>Who We are</h3>
                    <p class="para-edit" >We are lay men and women committed to spread the everlasting gospel of Jesus Christ as it is found in the Bible for preparing people to stand firm and strong in the Lord and getting ready for the imminent return of Jesus Christ. <br />
                        Members of The Last Call Messages are recognized to be individuals who are interested and blessed with the messages being live streamed on social Medias of the LCM.  Who are voluntarily lend their hands to support group’s activities, which are regularly taking place in every week.
                    </p>
                </div>
                <div class="middle-section">
                    <h3>Our Mission</h3>
                    <p id="upper"> Our Mission is to preach to the world the everlasting Gospel of Jesus Christ and Awakening people for His Soon Return.</p>
                    <div class="inner-section left-inner-section">
                        <h4>Matthew 28:18-20</h4>
                        <p class="para-edit" >
                            18 And Jesus came and spake unto them, saying, All power is given unto me in heaven and in earth. <br />
                            19 Go ye therefore, and teach all nations, baptizing them in the name of the Father, and of the Son, and of the Holy Ghost: <br />
                            20 Teaching them to observe all things whatsoever I have commanded you: and, lo, I am with you alway, even unto the end of the world. Amen.
                        </p>
                    </div>
                    <div class="inner-section righ-inner-section">
                        <h4>Acts of the Apostles 1:8</h4>
                        <p class="para-edit" >
                            8 But ye shall receive power, after that the Holy Ghost is come upon you: and ye shall be witnesses unto me both in Jerusalem, and in all Judaea, and in Samaria, and unto the uttermost part of the earth.
                        </p>
                    </div>
                    <div class="inner-section-bottom">
                        <h4>Revelations 14:6-12</h4>
                        <p class="para-edit" style="text-align:left">
                            6 And I saw another angel fly in the midst of heaven, having the everlasting gospel to preach unto them that dwell on the earth, and to every nation, and kindred, and tongue, and people, <br />
                            7 Saying with a loud voice, Fear God, and give glory to him; for the hour of his judgment is come: and worship him that made heaven, and earth, and the sea, and the fountains of waters. <br />
                            8 And there followed another angel, saying, Babylon is fallen, is fallen, that great city, because she made all nations drink of the wine of the wrath of her fornication. <br />
                            9 And the third angel followed them, saying with a loud voice, If any man worship the beast and his image, and receive his mark in his forehead, or in his hand, <br />
                            10 The same shall drink of the wine of the wrath of God, which is poured out without mixture into the cup of his indignation; and he shall be tormented with fire and brimstone in the presence of the holy angels, and in the presence of the Lamb: <br />
                            11 And the smoke of their torment ascendeth up for ever and ever: and they have no rest day nor night, who worship the beast and his image, and whosoever receiveth the mark of his name. <br />
                            12 Here is the patience of the saints: here are they that keep the commandments of God, and the faith of Jesus. <br />
                            We believe time is short, and it is almost time to go home.
                        </p>
                    </div>
                </div>
                <div class="top-bottom-section">
                    <h3>Our Vision</h3>
                    <p class="para-edit" >Restore God’s image in all believers.
                        To make a difference in the lives of people by impacting them, Spiritually, Socially, and Physically so that they may become Christians soldiers with genuine faith for the soon second coming of Jesus Christ. <br />
    
                        Provide platform space to people for unusable talents in God’s Vineyard, they learn of opportunities of how they can become involved in some lay ministry.
                    </p>
                </div>
            
            </div>

          </main>

@endsection