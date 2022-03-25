@extends('layout')

@section('homePageMain')
    <main style="overflow-x: hidden;">
      <!-- Home Page carousel -->
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="home-image-cara"
              src="{{url('images/bg-1.jpg')}}"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              class="home-image-cara"
              src="{{url('images/bg-2.jpg')}}"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              class="home-image-cara"
              src="{{url('images/bg-3.jpeg')}}"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Main page!! -->
      <div class="row">
        <div class="col">
          <div class="twetter">
            <h3 style="margin-bottom: 40px; margin-left: 50px">
              <img src="./images/tweets.png" style="width: 30px" alt="" /> Kuri Twitter
            </h3>
            <div class="tweet-widgets">
              <a
                class="twitter-timeline"
                href="https://twitter.com/amateraniro?ref_src=twsrc%5Etfw"
                >Tweets by amateraniro</a
              >
              <script
                async
                src="https://platform.twitter.com/widgets.js"
                charset="utf-8"
              ></script>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="middle-components">
            <div class="nav-middle" style="    background-color: #192646;color: #fff;">
              <nav>
                <a href="/sermony">Ibyigisho</a>
                <a href="" style="color: #4f3f96;;">Amatangazo</a>
                <a href="./audio-page.html">Ibyigisho by'amajwi</a>
              </nav>
            </div>
            <hr />
            <div class="middle-content">
              <p style="padding: 30px;"> <strong>Imigisha n’Amahoro Imana itanga bibane nawe!</strong> </p>
              <p>
              “Dushimira Imana n’umutima wacu wose ko dufite umucyo w’agaciro wo gushyira abantu, kandi dushimishwa n’uko dufite ubutumwa bwo muri iki gihe ari bwo kuri ko muri iki gihe. Inkuru nziza yuko Kristo ari we gukiranuka kwacu yahumurije benshi n‘imitima myinshi, kandi Imana ibwira abantu bayo iti: “Mujye mbere.” UB1 285.2
              </p>
              <p>
              Ubutumwa bw’abamalayika batatu nibwo butumwa bwo kubwira abatuye isi. Turakwifuriza kubugirira inyota, kandi dushimiye Imana igushoboje kwitaba irarika. Ubu ni ubutumwa bugizwe n’imigabane itatu y’ingenzi:
                <ol>
                  <li>1.Ubutumwa bwo gutsindishirizwa n’ubuntu binyuze mu kwizera kuturarikira kwihana no Kwakira Yesu Kristo, we gukiranuka kwacu, maze gukiranuka kwe kugahinduka ukwacu bwite..</li> <br>
                  <li>Ubutumwa bw’ubuhanuzi buduhishurira isaha tugezemo, tukabasha kugenzura ibihe biduhamiriza ko kuza kwa Kristo kwegereje.</li> <br>
                  <li> 3.Ubutumwa bwo kwitungira amagara mazima butwigisha kubungabunga imibiri yacu nk’insengero za Mwuka Wera
                  </li>
                </ol>
                Turararikira buri wese kwita kuri ubu butumwa.Turingingira usoma ubu butumwa ngo Imana imwihishurire, kandi akomeze kuyoborwa na Mwuka Wera, we Mwigisha mukuru.

                  Ubuntu bw’Umwami Yesu bubane nawe! 
                  Maranatha!
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="youtube-widgets">
            <h3 style="margin-bottom: 40px">
              <img src="./images/youtube-videos.png" style="width: 30px" alt="" />
              Ibyigisho bya vuba (video)
            </h3>
            <div class="videos">
            <iframe width="560px" height="315px" src="https://www.youtube.com/embed/videoseries?list=PLZu7UNObH_vVXgvDscCsrGPo1NEPBDKaL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              
            </div>
          </div>

        </div>
      </div>
      <div class="ask-questions">
        <h1>BAZA IKIBAZO & IGITEKEREZO</h1>
        <form action="">
          <div class="ask-question-section">
            <div class="info-inner-section">
              <li class="ask-li">
                <label for="">Izina</label>
                <input type="text" name="First Name" id="" required />
              </li>
              <br />
              <li class="ask-li">
                <label for="">Irindi zina</label>
                <input type="text" name="Last Name" id="" required />
              </li>
              <br />
              <li class="ask-li">
                <label for="" >Telephone</label>
                <input type="number" name="Phone number" id="" required />
              </li>
              <br />
              <li class="ask-li">
                <label for="">Emeli</label>
                <input type="email" name="Email" id="" required />
              </li>
              <br />
            </div>
            <div class="textArea-inner-section">
              <h3>Ubutumwa cyangwa ikibazo</h3>
              <textarea name="" id="" cols="35" rows="8" required></textarea>
              <br />
              <button type="submit">Ohereza</button>
            </div>
          </div>
        </form>
      </div>
    </main>
    
    @endsection