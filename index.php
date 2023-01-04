<?php
// config.php dosyasını dahil edin
include "config.php";
include "navbar.php";

// dashboard sayfasını gösterin


// MySQL bağlantısını kapatın
mysqli_close($conn);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<style>
    @charset "UTF-8";
/*---- NUMBER OF SLIDE CONFIGURATION ----*/
.wrapper {
  max-width: 60em;
  margin: 1em auto;
  position: relative;
}

input {
  display: none;
}

.inner {
  width: 500%;
  line-height: 0;
}

article {
  width: 20%;
  float: left;
  position: relative;
}
article img {
  width: 100%;
}

/*---- SET UP CONTROL ----*/
.slider-prev-next-control {
  height: 50px;
  position: absolute;
  top: 50%;
  width: 100%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
.slider-prev-next-control label {
  display: none;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #fff;
  opacity: 0.7;
}
.slider-prev-next-control label:hover {
  opacity: 1;
}

.slider-dot-control {
  position: absolute;
  width: 100%;
  bottom: 0;
  text-align: center;
}
.slider-dot-control label {
  cursor: pointer;
  border-radius: 5px;
  display: inline-block;
  width: 10px;
  height: 10px;
  background: #bbb;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}
.slider-dot-control label:hover {
  background: #ccc;

}

/* Info Box */
.info {
  position: absolute;
  font-style: italic;
  line-height: 20px;
  opacity: 0;
  color: #000;
  text-align: left;
  -webkit-transition: all 1000ms ease-out 600ms;
  -moz-transition: all 1000ms ease-out 600ms;
  transition: all 1000ms ease-out 600ms;
}
.info h3 {
  color: #fcfff4;
  margin: 0 0 5px;
  font-weight: normal;
  font-size: 1.5em;
  font-style: normal;
}
.info.top-left {
  top: 30px;
  left: 30px;
}
.info.top-right {
  top: 30px;
  right: 30px;
}
.info.bottom-left {
  bottom: 30px;
  left: 30px;
}
.info.bottom-right {
  bottom: 30px;
  right: 30px;
}

/* Slider Styling */
.slider-wrapper {
  width: 100%;
  overflow: hidden;
  border-radius: 5px;
  box-shadow: 1px 1px 4px #666;
  background: #fff;
  background: #fcfff4;
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-transition: all 500ms ease-out;
  -moz-transition: all 500ms ease-out;
  transition: all 500ms ease-out;
}
.slider-wrapper .inner {
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-transition: all 800ms cubic-bezier(0.77, 0, 0.175, 1);
  -moz-transition: all 800ms cubic-bezier(0.77, 0, 0.175, 1);
  transition: all 800ms cubic-bezier(0.77, 0, 0.175, 1);
}

/*---- SET POSITION FOR SLIDE ----*/
#slide1:checked ~ .slider-prev-next-control label:nth-child(5)::after, #slide5:checked ~ .slider-prev-next-control label:nth-child(4)::after, #slide4:checked ~ .slider-prev-next-control label:nth-child(3)::after, #slide3:checked ~ .slider-prev-next-control label:nth-child(2)::after, #slide2:checked ~ .slider-prev-next-control label:nth-child(1)::after, #slide5:checked ~ .slider-prev-next-control label:nth-child(1)::after, #slide4:checked ~ .slider-prev-next-control label:nth-child(5)::after, #slide3:checked ~ .slider-prev-next-control label:nth-child(4)::after, #slide2:checked ~ .slider-prev-next-control label:nth-child(3)::after, #slide1:checked ~ .slider-prev-next-control label:nth-child(2)::after {
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  margin: 0;
  line-height: 38px;
  font-size: 2em;
  display: block;
  color: #777;
}

#slide5:checked ~ .slider-prev-next-control label:nth-child(1)::after, #slide4:checked ~ .slider-prev-next-control label:nth-child(5)::after, #slide3:checked ~ .slider-prev-next-control label:nth-child(4)::after, #slide2:checked ~ .slider-prev-next-control label:nth-child(3)::after, #slide1:checked ~ .slider-prev-next-control label:nth-child(2)::after {
  content: "";
  padding-left: 15px;
}

#slide5:checked ~ .slider-prev-next-control label:nth-child(1), #slide4:checked ~ .slider-prev-next-control label:nth-child(5), #slide3:checked ~ .slider-prev-next-control label:nth-child(4), #slide2:checked ~ .slider-prev-next-control label:nth-child(3), #slide1:checked ~ .slider-prev-next-control label:nth-child(2) {
  display: block;
  float: right;
  margin-right: 5px;
}

#slide1:checked ~ .slider-prev-next-control label:nth-child(5), #slide5:checked ~ .slider-prev-next-control label:nth-child(4), #slide4:checked ~ .slider-prev-next-control label:nth-child(3), #slide3:checked ~ .slider-prev-next-control label:nth-child(2), #slide2:checked ~ .slider-prev-next-control label:nth-child(1) {
  display: block;
  float: left;
  margin-left: 5px;
}

#slide1:checked ~ .slider-prev-next-control label:nth-child(5)::after, #slide5:checked ~ .slider-prev-next-control label:nth-child(4)::after, #slide4:checked ~ .slider-prev-next-control label:nth-child(3)::after, #slide3:checked ~ .slider-prev-next-control label:nth-child(2)::after, #slide2:checked ~ .slider-prev-next-control label:nth-child(1)::after {
  content: "";
  padding-left: 8px;
}

#slide5:checked ~ .slider-dot-control label:nth-child(5), #slide4:checked ~ .slider-dot-control label:nth-child(4), #slide3:checked ~ .slider-dot-control label:nth-child(3), #slide2:checked ~ .slider-dot-control label:nth-child(2), #slide1:checked ~ .slider-dot-control label:nth-child(1) {
  background: #333;
}

#slide5:checked ~ .slider-wrapper article:nth-child(5) .info, #slide4:checked ~ .slider-wrapper article:nth-child(4) .info, #slide3:checked ~ .slider-wrapper article:nth-child(3) .info, #slide2:checked ~ .slider-wrapper article:nth-child(2) .info, #slide1:checked ~ .slider-wrapper article:nth-child(1) .info {
  opacity: 1;
}

#slide1:checked ~ .slider-wrapper .inner {
  margin-left: 0%;
}
#slide2:checked ~ .slider-wrapper .inner {
  margin-left: -100%;
}
#slide3:checked ~ .slider-wrapper .inner {
  margin-left: -200%;
}
#slide4:checked ~ .slider-wrapper .inner {
  margin-left: -300%;
}
#slide5:checked ~ .slider-wrapper .inner {
  margin-left: -400%;
}
/*---- TABLET ----*/
@media only screen and (max-width: 850px) and (min-width: 450px) {
  .slider-wrapper {
    border-radius: 0;
  }
}
/*---- MOBILE----*/
@media only screen and (max-width: 450px) {
  .slider-wrapper {
    border-radius: 0;
  }

  .slider-wrapper .info {
    opacity: 0;
  }
}
@media only screen and (min-width: 850px) {
  body {
    padding: 0 80px;
  }
}

/*----  Main Style  ----*/
#cards_landscape_wrap-2 {
    text-align: center;
    
  }
  #cards_landscape_wrap-2 .container {
    padding-top: 80px;
    padding-bottom: 100px;
  }
  #cards_landscape_wrap-2 a {
    text-decoration: none;
    outline: none;
  }
  #cards_landscape_wrap-2 .card-flyer {
    border-radius: 5px;
  }
  #cards_landscape_wrap-2 .card-flyer .image-box {
    background: #ffffff;
    overflow: hidden;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.5);
    border-radius: 5px;
  }
  #cards_landscape_wrap-2 .card-flyer .image-box img {
    -webkit-transition: all 0.9s ease;
    -moz-transition: all 0.9s ease;
    -o-transition: all 0.9s ease;
    -ms-transition: all 0.9s ease;
    width: 100%;
    height: 200px;
  }
  #cards_landscape_wrap-2 .card-flyer:hover .image-box img {
    opacity: 0.7;
    -webkit-transform: scale(1.15);
    -moz-transform: scale(1.15);
    -ms-transform: scale(1.15);
    -o-transform: scale(1.15);
    transform: scale(1.15);
  }
  #cards_landscape_wrap-2 .card-flyer .text-box {
    text-align: center;
  }
  #cards_landscape_wrap-2 .card-flyer .text-box .text-container {
    padding: 30px 18px;
  }
  #cards_landscape_wrap-2 .card-flyer {
    background: #ffffff;
    margin-top: 50px;
    -webkit-transition: all 0.2s ease-in;
    -moz-transition: all 0.2s ease-in;
    -ms-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.4);
  }
  #cards_landscape_wrap-2 .card-flyer:hover {
    background: #fff;
    box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.5);
    -webkit-transition: all 0.2s ease-in;
    -moz-transition: all 0.2s ease-in;
    -ms-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    margin-top: 50px;
  }
  #cards_landscape_wrap-2 .card-flyer .text-box p {
    margin-top: 10px;
    margin-bottom: 0px;
    padding-bottom: 0px;
    font-size: 14px;
    letter-spacing: 1px;
    color: #000000;
  }
  #cards_landscape_wrap-2 .card-flyer .text-box h6 {
    margin-top: 0px;
    margin-bottom: 4px;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    font-family: "Roboto Black", sans-serif;
    letter-spacing: 1px;
    color: #00acc1;
  }

  
.kullanici h1{
    text-align: center;
    font-family: 'Bree Serif', serif;
}
.our-team {
    padding: 30px 0 40px;
    margin-bottom: 30px;
    background-color: #f7f5ec;
    text-align: center;
    overflow: hidden;
    position: relative;
  }
  
  .our-team .picture {
    display: inline-block;
    height: 130px;
    width: 130px;
    margin-bottom: 50px;
    z-index: 1;
    position: relative;
  }
  
  .our-team .picture::before {
    content: "";
    width: 100%;
    height: 0;
    border-radius: 50%;
    background-color: #1369ce;
    position: absolute;
    bottom: 135%;
    right: 0;
    left: 0;
    opacity: 0.9;
    transform: scale(3);
    transition: all 0.3s linear 0s;
  }
  
  .our-team:hover .picture::before {
    height: 100%;
  }
  
  .our-team .picture::after {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #1369ce;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
  }
  
  .our-team .picture img {
    width: 100%;
    height: auto;
    border-radius: 50%;
    transform: scale(1);
    transition: all 0.9s ease 0s;
  }
  
  .our-team:hover .picture img {
    box-shadow: 0 0 0 14px #f7f5ec;
    transform: scale(0.7);
  }
  
  .our-team .title {
    display: block;
    font-size: 15px;
    color: #4e5052;
    text-transform: capitalize;
  }
  
  .our-team .social {
    width: 100%;
    padding: 0;
    margin: 0;
    background-color: #1369ce;
    position: absolute;
    bottom: -100px;
    left: 0;
    transition: all 0.5s ease 0s;
  }
  
  .our-team:hover .social {
    bottom: 0;
  }
  
  .our-team .social li {
    display: inline-block;
  }
  
  .our-team .social li a {
    display: block;
    padding: 10px;
    font-size: 17px;
    color: white;
    transition: all 0.3s ease 0s;
    text-decoration: none;
  }
  
  .our-team .social li a:hover {
    color: #1369ce;
    background-color: #f7f5ec;
  }
  
</style>
<div class="wrapper">
    <input checked type=radio name="slider" id="slide1" />
    <input type=radio name="slider" id="slide2" />
    <input type=radio name="slider" id="slide3" />
    <input type=radio name="slider" id="slide4" />
    <input type=radio name="slider" id="slide5" />
  
    <div class="slider-wrapper">
      <div class=inner>
        <article>
          <div class="info top-left">
            <h3>En Çok Okunan Kitaplar</h3></div>
          <img src="https://centerforfiction.org/uploads/dexter-palmer-1600x1067.jpg" />
        </article>
  
        <article>
          <div class="info bottom-right">
            <h3>Yeni Eklenenler</h3></div>
          <img src="https://assets.farmsanctuary.org/content/uploads/2020/07/27050828/shutterstock_732217162-1600x1067.jpg" />
        </article>
  
        <article>
          <div class="info bottom-left">
            <h3>Türkçe Romanlar</h3></div>
          <img src="https://guidetogreatergainesville.com/wp-content/uploads/2021/08/shutterstock_1702787302-1600x1067.jpg" />
        </article>
  
        <article>
          <div class="info top-right">
            <h3>En Güzel Çocuk Kitapları</h3></div>
          <img src="https://www.dayoutwiththekids.co.uk/hub/wp-content/uploads/2022/05/shutterstock_700223200_yyd4zo-1600x1067.jpg" />
        </article>
  
        <article>
          <div class="info bottom-left">
            <h3>Nubra Valley</h3></div>
          <img src="https://farm8.staticflickr.com/7356/27980899895_9b6c394fec_h_d.jpg" />
        </article>
      </div>
      <!-- .inner -->
    </div>
    <!-- .slider-wrapper -->
  
    <div class="slider-prev-next-control">
      <label for=slide1></label>
      <label for=slide2></label>
      <label for=slide3></label>
      <label for=slide4></label>
      <label for=slide5></label>
    </div>
    <!-- .slider-prev-next-control -->
  
    <div class="slider-dot-control">
      <label for=slide1></label>
      <label for=slide2></label>
      <label for=slide3></label>
      <label for=slide4></label>
      <label for=slide5></label>
    </div>
    <!-- .slider-dot-control -->
  </div>

    <!-- Topic Cards -->
    <div id="coksatanlar"></div>
    <div id="cards_landscape_wrap-2">
     <div class="container">
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                 <a href="">
                     <div class="card-flyer">
                         <div class="text-box">
                             <div class="image-box">
                                 <img src="https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg" alt="" />
                             </div>
                             <div class="text-container">
                                 <h6>Title 01</h6>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                             </div>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                 <a href="">
                     <div class="card-flyer">
                         <div class="text-box">
                             <div class="image-box">
                                 <img src="https://i.hizliresim.com/97zldpy.jfif" alt="" />
                             </div>
                             <div class="text-container">                                    
                                 <h6>Title 02</h6>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                             </div>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                 <a href="">
                     <div class="card-flyer">
                         <div class="text-box">
                             <div class="image-box">
                                 <img src="https://i.hizliresim.com/r520jxx.jfif" alt="" />
                             </div>

                             <div class="text-container">
                                 <h6>Title 03</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                             </div>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                 <a href="">
                     <div class="card-flyer">
                         <div class="text-box">
                             <div class="image-box">
                                 <img src="https://i.hizliresim.com/80t9mxn.jpg" alt="" />
                             </div>
                             <div class="text-container">
                                 <h6>Title 04</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                             </div>
                         </div>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </div>
<div class="kullanici" id="kullanici">
<h1>Kullanıcılar Ne Diyor</h1>
</div>
<div class="container">
<div class="row">
 <div class="col-12 col-sm-6 col-md-4 col-lg-3">
   <div class="our-team">
     <div class="picture">
       <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
     </div>
     <div class="team-content">
       <h3 class="name">Nazlı Çiçek</h3>
       <h4 class="title">“ Kitap Uygulaması Tam Bana Göre Kullanmaya Başladığımdan Beri Çok Memnununm”</h4>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
     
     </div>
    
   </div>
 </div>
     <div class="col-12 col-sm-6 col-md-4 col-lg-3">
   <div class="our-team">
     <div class="picture">
       <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
     </div>
     <div class="team-content">
       <h3 class="name">Bilal Akyıldızoğlu</h3>
       <h4 class="title">“ Mobil Uygulaması Bana Göre Kullanımı Çok Kolay Ve Kitap Takip Sistemi Süper ”</h4>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       
     </div>
    
   </div>
 </div>
     <div class="col-12 col-sm-6 col-md-4 col-lg-3">
   <div class="our-team">
     <div class="picture">
       <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
     </div>
     <div class="team-content">
       <h3 class="name">Zübeyir Yücel</h3>
       <h4 class="title">“ Tüm Kitaplarımı Buradan Alıyorum
         Kütüphaneye Gitmeden İstediğim Kitabın Olup Olmadığına Bakabiliyorum  ”</h4>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
     </div>
    
   </div>
 </div>
     <div class="col-12 col-sm-6 col-md-4 col-lg-3">
   <div class="our-team">
     <div class="picture">
       <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
     </div>
     <div class="team-content">
       <h3 class="name">Emre Şengül</h3>
       <h4 class="title">“ Kitap Uygulaması Tam Bana Göre, Tek kelimeyle muhteşem.”</h4><br><br>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px; fill:#ED8A19;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:25px;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
     </div>
    
   </div>
 </div>
</div>
</div>
