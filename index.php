

<?php

session_start()

?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


  <?php include 'link.php'?>

`
    <title>Corana update</title>
    <style>

      .nav-style{
        margin-bottom:100px;
      }
      .nav-link:hover{
       background:#16a085;
       color:#fff;
      
      }
 .navbar{
   margin-bottom:50px;
 }
      .nav-link{
     
     border-radius:5px;
      font-weight:bold;
        color:#16a085;
        padding:0 10px;
      }
      .navbar-toggler-icon{
        color:black;
      }
      button{
        outline:none;
        border:none;
      }

      #globalval{
        width:400px;
      }
      table td{
        background:#95a5a6;
        color:black;
        font-weight:bold;
        border:1px solid black;
      }
      table th{
        background:#16a085;
        color:#fff;
       
        
        font-weight:bold;
       
      }
      table td:hover{
        background:#bdc3c7!important;

      }
      .contact{
       
        background: linear-gradient(
45deg
,#efefef 25%,rgba(239,239,239,0) 25%,rgba(239,239,239,0) 75%,#efefef 75%,#efefef),linear-gradient(
45deg
,#efefef 25%,rgba(239,239,239,0) 25%,rgba(239,239,239,0) 75%,#efefef 75%,#efefef);
padding-bottom:0;

   
      }
      .symptoms{
        background: linear-gradient(
45deg
,#efefef 25%,rgba(239,239,239,0) 25%,rgba(239,239,239,0) 75%,#efefef 75%,#efefef),linear-gradient(
45deg
,#efefef 25%,rgba(239,239,239,0) 25%,rgba(239,239,239,0) 75%,#efefef 75%,#efefef);

      }
      .main-header{
        background:linear-gradient(
145deg
,#efefef 25%,rgba(239,239,239,0) 25%,rgba(239,239,239,0) 75%,#efefef 75%,#efefef);
      }
     
     .symptoms img{

      width:200px;
      height:200px;
     }
  
  @media only screen and (max-width:992px) {
    .symptoms{
      background:none;
    }
  }
 
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg  sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand ps-5" href="#home">Covid-19<span class="text-danger">Tracker</span></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-2x fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto pe-5  mb-2 mb-lg-0  ">
        <li class="nav-item">
          <a class="nav-link  active text-center" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center about pe-3 " href="#about">About</a>
        </li>
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link text-center home " href="#global">CoronaLive</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-center " href="#symptoms">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center " href="#Prevention">Prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center " href="#contact">Contact</a>
        </li>
       
       
      </ul>
     
    </div>
  </div>
</nav>

<!-- header section -->
<section class="main-header" id="home">

<div class="main_header">
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
<div class="leftside">

<img src="https://lh3.googleusercontent.com/proxy/HAiSftGYEJmrNnoUtSfMzWVKNPSw_CudAKRVDB3cEG8-nwliR9OkjIhYSY-Yp18FI_U6mz2yzQo3cALCCt3WMd3_2iZyHFM" width=300 height=400  alt="people">
</div>
</div>
<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
<div class="rightside">
<h1>Let's Stay Safe & Fight Togther Against Cor <span class="gocorona"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Coronavirus_cartoon.svg/1200px-Coronavirus_cartoon.svg.png" width=90 height=90 alt="corona"</span> na Virus</h1>

</div>
</div>

</div>
</div>

</div>
</section>

<!-- corona update global---------- -->
<section class="corona_update" id="global">
<div class="container">
<h1 class="text-uppercase text-center text-warning">Global update of corona virus</h1>
  <div class="row">
<div class="col-lg-10 col-10 col-10 offset-lg-4 offset-sm-1 offset-md-1 offset-0">
<div class="mb-3">
</div class="table-responsive">
<table id="globalval">

   
  <tbody id="globalval"></tbody>
</table>
</div>
  </div>


</div>

</section>

<!-- ------------corona update section--------------- -->

<section class="corona_update" id="world">
<div class="container">
<div class="row">
  <div class="col-lg-10 col-12 offset-lg-1 offset-0">
  <div class="mb-3">
<h1 class="text-uppercase text-center text-warning">covid-19 LIve updates OF The World</h1>
</div class="table-responsive">
<table id="tbval">
    <tr>
      <th>Country</th>
      <th>TotalConfirmed</th>
      <th>TotalRecoverd</th>
      <th>TotalDeaths</th>
      <th>NewConfirmed</th>
      <th>NewRecovered</th>
      <th>NewDeaths</th>
    </tr>
  <tbody id="tabody"></tbody>
</table>
  </div>
</div>

</div>

</section>

<!-- about section------------------ -->

<section class="about" id="about">
<div class="container">
<h1 class="text-center">About Covid-19</h1>
<div class="row">
<div class="col-lg-5  col-12 order-lg-1 order-2 ">

<img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/3D_medical_animation_corona_virus.jpg" class="img-fluid" width=500 height=350 alt="corona">
</div>

<div class="col-lg-7  col-12 order-lg-2 order-1 ">
  <div class="covid">
  <h2>What is Covid-19(Corona-Virous)</h2>
<p>COVID-19 is the disease caused by the new coronavirus that was first identified in December 2019.
COVID-19 symptoms include cough, fever or chills, shortness of breath or difficulty breathing, muscle or body aches, sore throat, new loss of taste or smell, diarrhea, headache, new fatigue, nausea or vomiting and congestion or runny nose. COVID-19 can be severe, and some cases have caused death.</p>
<p>The new coronavirus can be spread from person to person. It is diagnosed with a laboratory test.</p>
<p>There is no coronavirus vaccine yet. Prevention involves frequent hand-washing, coughing into the bend of your elbow, staying home when you are sick and wearing a cloth face covering if you can't practice physical distancing.</p>
  </div>

</div>
</div>
</div>

</section>


<!-- symptoms section----------- -->
<section class="symptoms text-center" id="symptoms">
  <div class="container">

  <h1>CoronaVirous Symptoms</h1>
  <div class="container">

  <div class="row">
    <div class="col-lg-3 col-md-4 col-12">
      <figure >
      <img src="https://cdn4.iconfinder.com/data/icons/coronavirus-64/42/Artboard_15-512.png" width=200 height=200 class="img-fluid" alt="">
     
      </figure>
      <figurecaption>Fever</figurecaption>
    </div>
    <div class="col-lg-3 col-md-4 col-12">
      <figure >
      <img src="https://thumbs.dreamstime.com/b/sad-cute-little-kid-girl-sneeze-flu-182899073.jpg" width=200 height=200 class="img-fluid" alt="">
     
      </figure>
      <figurecaption>Cough</figurecaption>
    </div>
    <div class="col-lg-3 col-md-4 col-12">
      <figure >
      <img src="https://cdn4.vectorstock.com/i/thumb-large/33/23/persistent-cough-icon-cartoon-style-vector-24253323.jpg" width=200 height=200 class="img-fluid" alt="">
     
      </figure>
      <figurecaption>Dry cough</figurecaption>
    </div>
    
  </div>
  <div class="row pt-5 offset-lg-4 offset-md-0">
   
    <div class="col-lg-3 col-md-4 col-12">
      <figure >
      <img src="https://t4.ftcdn.net/jpg/02/82/12/99/360_F_282129985_4pPu8qWD4C5eSeQNdrPVQAT4df9ZPGeJ.jpg" width=300 height=300 class="img-fluid ps-5" alt="">
     
      </figure>
      <figurecaption>Headache</figurecaption>
    </div>
    <div class="col-lg-3 col-md-4 col-12">
      <figure >
      <img src="https://st1.thehealthsite.com/wp-content/uploads/2015/06/sore-throat.jpg?impolicy=Medium_Resize&w=1200&h=800" width=300 height=300 class="img-fluid" alt="">
     
      </figure>
      <figurecaption>Sore throat</figurecaption>
    </div>
    <div class="col-lg-3 col-md-4 col-12 pe-5">
      <figure >
      <img src="https://thumbs.dreamstime.com/b/shortness-breath-woman-shortness-breath-woman-illustration-100711853.jpg" width=300 height=300 class="img-fluid" alt="">
     
      </figure>
      <figurecaption>Shortness and breath </figurecaption>
    </div>
  </div>
  </div>
  </div>



</section>
<!-- Prevention section----------- -->
<section class="Prevention text-center" id="Prevention">
  <div class="container">

  <h1>Steps Prevation Against CoronaVirus</h1>
  <div class="container">

  <div class="row pt-5">
    <div class="col-lg-4  col-12">
      <div class="row">
      <div class="col-lg-4  col-12 pe-0">
      <figure class="text-center">
        <img src="https://www.freeiconspng.com/uploads/iconathon-hand-wash-icon--style-simple-black-8.png" class="img-fluid" alt="symptoms">
        
      </figure>
        </div>
        <div class="col-lg-8  col-12 ps-0 pt-5">

            <p>Wash your hands regulary for 20 seconds,with soap and water or alcohol-based hand rub</p>
         </div>
      </div>
     
    </div>
    <div class="col-lg-4  col-12">
      <div class="row">
      <div class="col-lg-4  col-12 pe-0">
      <figure class="text-center">
        <img src="https://media.istockphoto.com/vectors/person-wearing-medical-mask-cover-the-mouth-and-nose-to-prevent-and-vector-id1217121615?k=6&m=1217121615&s=170667a&w=0&h=OMu8M3obmee0brxb6rL0CWW20bm9Ju27Z6gUAPYZ6rE=" class="img-fluid" alt="symptoms">
        
      </figure>
        </div>
        <div class="col-lg-8  col-12 ps-0 pt-5">

            <p>Cover your nose and mouth with a disposoble tissue or fiexed eibow when you cough or sneeze</p>
         </div>
      </div>
     
    </div>
    <div class="col-lg-4  col-12">
      <div class="row">
      <div class="col-lg-4  col-12 pe-0">
      <figure class="text-center">
        <img src="https://thumbs.dreamstime.com/b/modern-middle-aged-couple-flat-vector-illustration-marrieds-wedded-pair-husband-wife-relationship-family-walk-love-tenderness-166192154.jpg" class="img-fluid" alt="symptoms">
        
      </figure>
        </div>
        <div class="col-lg-8  col-12 ps-0 pt-5">

            <p>Avoid close contact (1 meter or 3 meter) with people who are unwell</p>
         </div>
      </div>
     
    </div>
  </div>
  <div class="row pt-5">
    <div class="col-lg-4  col-12">
      <div class="row">
      <div class="col-lg-4  col-12 pe-0">
      <figure class="text-center">
        <img src="https://cdn1.vectorstock.com/i/1000x1000/65/35/stay-at-home-to-stop-covid19-signal-vector-30576535.jpg" class="img-fluid" alt="symptoms">
        
      </figure>
        </div>
        <div class="col-lg-8  col-12 ps-0 pt-5">

            <p>Stay home and self-isolote from others in the household if you feel unwell</p>
         </div>
      </div>
     
    </div>
    <div class="col-lg-4  col-12">
      <div class="row">
      <div class="col-lg-4 col-12 pe-0">
      <figure class="text-center">
        <img src="https://thumbs.dreamstime.com/b/tv-news-coronavirus-breaking-world-hand-drawn-stickman-cartoon-doodle-sketch-vector-graphic-illustration-175751305.jpg" class="img-fluid" alt="symptoms">
        
      </figure>
        </div>
        <div class="col-lg-8  col-12 ps-0 pt-5">

            <p>Stay informed by watching news & follow the recommended proctices</p>
         </div>
      </div>
     
    </div>
    <div class="col-lg-4  col-12">
      <div class="row">
      <div class="col-lg-4  col-12 pe-0">
      <figure class="text-center">
        <img src="https://thumbs.dreamstime.com/b/sick-cute-boy-fever-wrapped-warm-blanket-thermometer-mouth-feel-bad-white-background-flu-symptoms-173392981.jpg" class="img-fluid" alt="symptoms">
        
      </figure>
        </div>
        <div class="col-lg-8  col-12 ps-0 pt-5">

            <p>If you have cough and difficulty breathing seek medical care early</p>
         </div>
      </div>
     
    </div>
  </div>
  </div>
  </div>



</section>
<!-- contact section------------------ -->

<section class="contact" id="contact">
  <h1>Contact US</h1>
            <div class="container">
                <div class="row">
                  <div class="col-lg-7  col-12">
                  <form method="POST" action="insert.php" class="register-form" id="register-form" enctype="multipart/form-data">
                  <h2>If you are facing problem...Just contact us</h2>
                        
                        <div class="form-group">
                            
                            <input type="text" name="username" id="name" placeholder=" Enter Your full Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder=" Enter Your Email" required/>
                        </div>
                      
                        <div class="form-group">
                    
                            <input type="text" name="phone"  placeholder="Enter your phone" required/>
                        </div>
                        <div class="form-group">
                         
                            <input type="text" name="address"  placeholder="Enter your address" required/>
                        </div>
                        <div class="form-group">
                         
                           <select name="symptoms"class="form-control " required >
                           <option required>Select your Symptoms</option>
                           <option value="cough" required>cough</option>
                           <option value="fever" required>fever</option>
                           <option value="dry cough" required>dry cough</option>
                           <option value="tiredness" required>tiredness</option>
                           <option value="aches and pains" required>aches and pains</option>
                           <option value="headache" required>headache</option>
                           </select>
                        </div>
                        
                        <div class="form-group">
                        <textarea class="form-control" rows="5" id="comment" name="message" placeholder="write your message" required></textarea>

                        </div>
                    
                        <div class="form-group form-button">
                            <input type="submit" name="submit" id="signup" class="form-submit" value="Send Meggage"/>
                        </div>
                        

                    </form>
                    </div>
                    <div class="col-lg-5  col-12">

                    <img src="https://yakespertamina.com/wp-content/uploads/2019/11/yakes-icon-5.png" width=400 height=400 class="anima" alt="">
                    </div>
                  </div>
                </div>
                    </div>
                   
               
           
            </div>
        </section>

        <!-- footer section -->
        <section class="footer">
        <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Ashulia,Daffodil International University</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>01907925559</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>shanto35-303@diu.edu.bd</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5 text-center">
                <div class="row text-center">
                    <div class="col-xl-12 col-lg-12 col-12 mb-50">
                        <div class="footer-widget">
                            
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                   
            </div>
        </div>
        <div class="scrolltop float-right">
              <i class=" fa-3x fa fa-arrow-up" onclick="topfunction()" id="scrollbtn"></i>

            </div>
    </footer>
        </section>

        <script>

mybutton=document.getElementById("scrollbtn");
     window.onscroll=function(){
       scrollfunction();
     }

     function scrollfunction(){
       if(document.body.scrollTop>160 || document.documentElement.scrollTop>160){
         mybutton.style.display="block";
       }else{
         mybutton.style.display="none";
       }
     }

     function topfunction(){
       document.body.scrollTop=0;
       document.documentElement.scrollTop=0;
     }


$.ajax({

url:"https://api.covid19api.com/summary",
type:"GET",
datatype:"JSON",
success:function(data){
  // console.log(data.Global.NewConfirmed );



  $.each(data.Global,function(key,value){
$("#globalval").append("<tr><td>"+key+"</td><td>"+value+"</td></tr>");
                    

  });


  $.each(data.Countries,function(key,value){
$("#tabody").append("<tr>"+
                    "<td>"+ value.Country +"</td>"+
                    "<td>"+ value.NewConfirmed +"</td>"+
                    "<td>"+ value.TotalRecovered +"</td>"+
                    "<td>"+ value.TotalDeaths +"</td>"+
                    "<td>"+ value.TotalConfirmed +"</td>"+
                    "<td>"+ value.NewRecovered +"</td>"+
                    "<td>"+ value.NewDeaths +"</td>"+
                    "</tr>"
                    );

  });
}

});

        </script>
  </body>
</html>
   

 
