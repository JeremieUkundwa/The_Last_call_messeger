@extends('layout')

@section('contactUs-css')
.contactUs-card {
  margin-left: 10vw;
}
.evangilist-card {
  margin-top: 20px;
  margin-bottom: 20px;
  width: 40vw;
  margin-left: 10vw;
  background-color: #fff;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 0px 0px 10px 10px;
  display: inline-block;
}
.evangilist-card h2 {
  text-align: center;
  /* border: 1px solid black; */
  border-radius: 10px;
  padding: 10px;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.evangilist-card li {
  list-style: none;
  margin-bottom: 30px;
}
.evangilist-card label {
  width: 130px;
}

.evangilist-card input{
  width: 360px;
  height: 46px;
  background: rgba(255, 255, 255, 0.6);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
}
.evangilist-card textarea{
    background: rgba(255, 255, 255, 0.6);
    box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
    border-radius: 10px;
    width: 360px;
    margin-left: 8.5vw;
}

.contact-side-content{
    margin-top: 20vh;
    margin-right: 10vw;
    float: right;
    width: 360px;
    padding: 30px;
    font-size: 16px;
    background-color: #fff;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 10px
}
.contact-side-content a{
    text-decoration: none;
    color: black;
}

.card-body button{
    border-radius: 10px;
    font-family: "Open Sans";
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 25px;
    background-color: #141313;
    text-align: center;
    color: #fff;
    margin-left: 8vw;
    width: 220px;
    height: 44px;
    margin-top: 10px;
}
@media (max-width: 574px) {
    .evangilist-card {
        margin-top: 20px;
        margin-bottom: 20px;
        width: 90vw;
        margin-left: 3vw;
        background-color: #fff;
        box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
        border-radius: 0px 0px 10px 10px;
        display: inline-block;
    }
    .evangilist-card input {
        width: 80vw;
    }
    .evangilist-card textarea {
        width: 80vw;
        margin-left: 0.5vw;
    }

    .contact-side-content {
      margin-top: 7vh;
        float: none;
        margin-bottom: 30px;
        width: 340px;
        margin-left: 17px;
        width: 340px;
    }
}
@endsection

@section('contact-section')
<main>
        <div class="contactUs-card">
          <div class="evangilist-card">
            <h2>Contact Us about anything</h2>
            <div class="card-body">
              <form action="">
                <li>
                  <label for="">Your Name *</label>
                  <input type="text" name="name" required />
                </li>
                <li>
                  <label for="">Phone Number</label>
                  <input type="number" name="phone Number"/>
                </li>
                <li>
                  <label for="">Email *</label>
                  <input type="email" name="Email" required />
                </li>
                <li>
                  <label for="">Your Message *</label> <br>
                  <textarea name="message" id="" cols="30" rows="10" required></textarea>
                </li>
                <button type="submit">Send Message</button>
              </form>
            </div>
          </div>
          <div class="contact-side-content">
            <p>The Last Call Messengers</p>
            <a href=""><i class="fa fa-map-marker"></i> The Last Call Messenger</a>
            <p> <br> <i class="fa fa-phone"></i> +250 782799851 </p>
            <a href=""><i class="fa fa-envelope"></i> theLastCallMessenger@info.com</a>
          </div>
        </div>
      </main>
@endsection