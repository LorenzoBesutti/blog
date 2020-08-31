<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<style>
.header{
    background:linear-gradient(
         rgba(0, 0, 0, 0.5), 
         rgba(0, 0, 0, 0.5)
       ), url('/party_header.jpg');
    background-size: cover;
    width: 100%;
    height: 800px;
    text-align: center;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center
    
    
}
.upper{
    text-transform: uppercase
}
.a{
    color: yellow
}
.a:hover{
    color: white;
    border-bottom: 1px solid white;
    text-decoration: none
}
.giallo{
  background-color: yellow;
  color: black;
  text-transform: uppercase;
  font-weight: bold
}
.giallo:hover{
  background-color: transparent;
  color: white
}
.bianco{
    color: white
}

.freccia{
    border: 3px solid white;
    background-color: transparent
}
html{
    scroll-behavior:smooth}
}
.grosso{
   font-weight: bolder
}
.daie{
    float: right;
    width: 200px;

}
.grigio{
    color: #cacaca
}


.autori{
    border: 4px solid black;
    width: 100%;
    height: 400px
}

.relativo{
    position: relative;
    top: -10px;
    left: 35%;
    width: 30%;
    height: 20px;
    background-color: yellow;
    text-align: center;
    font-weight: bold
}
.titolo{
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: underline
}
.circolare{
   
  width: 100px; 
  height: 100px;
  border-radius:999em;    
-moz-border-radius:999em;  
-webkit-border-radius:999em; 
  -o-border-radius: 999em;   

}
.flex{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center
}
.forza{
    width: 50%
}
.forza1{
    width: 50%;
    text-align: center
}
.footer{
    color: yellow
}
.footer:hover{
    color: white;

}
footer{
    text-transform: uppercase;
    color: #cacaca;
    background-color: black;
    height: 200px;
}




</style>


    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Start Bootstrap</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    @foreach ($links as $link)
                        
                  
                  <li class="nav-item active">
                   
                          <span class="sr-only">(current)</span>
                        
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{$link['uri']}}">{{$link['nome']}}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </nav>

          <div class="container-fluid mt-5 pt-2">
              <div class="row">
                  <div class="col-12 ">
                      <div class="header">
                        <button class="giallo">photography</button><br><br>
                       <h1>  7 cose sapere prima di andare a un break festival</h1><br>
                       <p class="upper">by <a  class="a" href="" >nany perez</a> on april 18</p><br><br><br><br><br><br><br><br><br><br><br><br>
                       <a href="#inizio" class="p-3 freccia"><i class="fas fa-chevron-down bianco"></i></a>
                        
                      </div>
                  </div>
              </div>
          </div>
         
         <div class="container">
             <div class="row  mx-3">
                 <div class="col-12-w-100 col-md-12-mx-5-px-5 ">
                  
                   <a name='inizio'></a>
                   <div class="mt-5 pt-5 ">
                       <p class="lead"><strong class="h5">the fusion festival</strong>  is a music and arts festival with a countercultural character. It takes place at a former military airport called Müritz Airpark in Lärz, Mecklenburg-Vorpommern, in northeastern Germany. The festival name is often depicted in Cyrillic letters as Фузион, but pronounced like the English word fusion ['fjuʒən]. The annual festival was started by the Kulturkosmos organisation in 1997. It lasts four to six days, usually at the end of June. In 2015, the Fusion is scheduled to take place from June 25 - 28.
                         <div class="daie h4 p-2 my-2 mr-4">
                            “One good thing about music, when it hits you, you feel no pain.”
                       <br> <span class="grigio h6">― bob marley</span>
                         </div></p>
  
                        <p class="lead">Different musical styles are represented at the festival, but the line up is not released beforehand. Mostly electronic music is present, but there is no stylistic restriction for the various live music acts, and the festival attendees may bring their own instruments. The festival also holds its own film festival and features different scales of art installations. Attendees may bring their own art and appear in artistic costumes. Only vegetarian food is sold at the festival grounds.

                            The festival gears to create a Temporary Autonomous Zone and a transformational environment. Due to its avantgardistic attitude and the variety of art, the Fusion Festival has been described by organizers as a European Burning Man, although it is not an official regional Burn. It is also compared to the Glastonbury Festival.</p>
                   </div>

                   </div>
                 </div>
             </div>
         </div>
 <div class="container my-2">
     <div class="row">
         <img  class="w-100" src="/festival_2.jpg" alt="">
     </div>
 </div>






         <div class="container mt-5 mb-3">
             <div class="row">
                 <div class="col-6 text-center">
                     <h3 class="font-weight-bold h1"> concepts</h3>
                 </div>
             </div>
         </div>
         <div class="container ">
             <div class="row mx-3">
                
                <p class="lead">The Fusion Festival combines all styles of the underground electronic music scene and various other styles, sometimes depending on the attendees who choose to play their own music. It is described as a space people go to free their minds from their everyday lives, jobs, studies and other responsibilities. It is the result of the search for an alternative through music, to the system "people are forced to live in". People go to the Fusion to experience a different way of socializing and living, where experiencing one another freely, sharing love for music and art connects different scenes and minds. It is a clothing-optional event. Art installations include performance arts, static artworks, sculptures, art cars and various other forms.

                    Fusion Festival began in 1997 near the city of Lärz in north-eastern Germany, about 160 km from Berlin and 230 km from Hamburg.</p>
             </div>
         </div>
         <div class="container mt-5 mb-3 ">
            <div class="row">
                <div class="col-6 text-center">
                    <h3 class="font-weight-bold h1"> festival syte </h3>
                </div>
            </div>
        </div>
         <div class="container ">
            <div class="row  mx-3">
                <div class="col-12-w-100 col-md-12-mx-5-px-5 ">
                 
                  <a name='inizio'></a>
                  <div class=" ">
                  
                    <p class="lead"> The location is on the original grass-covered grounds of a disused military airfield (at 53°20′48.11″N 12°44′23.25″E for the 234-hectare area central field) about 4.5 km (2.25 miles) due north of the modern Rechlin-Lärz Airfield facility. The site was first acquired by the German Empire in 1916 as an aviation research and training ground, opening the facility for use by the Luftstreitkräfte in August 1918. After the establishment of the Luftwaffe in 1935, the field served as the Erprobungsstelle Rechlin central military aircraft test facility of the Third Reich through early 1945, and it was captured by the Soviet Red Army on May 2, 1945, for use by the VVS.

                        There are grass-covered concrete hangars (actual bunkers) from that time that were used for Soviet fighter aircraft (hence the Cyrillic transliteration of the festival name and various stages, as many Cyrillic inscriptions were still present on the site). The airfield was reopened for civilian use in 1994 and sold to the Müritz Airpark Group in 2010.</p>
 
                       
                  </div>

                  </div>
                </div>
            </div>
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-12 assoluto">
                        <div class="autori">
                            <div class="relativo px-3">
                           <p>written by</p>
                            </div>


                            <div class="row mt-5 flex">
                              <img class="circolare" src="/jane.jpg">
                              <h4 class="titolo">nancy  perez</h4>
                              <div class="forza">
                              <p>Nancy is a reporter at Wild Bird magazine, where she writes about technology / design companies and the people they impact.</p>
                              </div>
                              <div class="forza1 mt-4">
                                <i class="fab fa-linkedin"></i> <i class="fab fa-twitter"></i> <i class="fab fa-instagram-square"></i> <i class="fab fa-facebook-square"></i>
                              </div>
                              
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <footer>
              <div class="container mt-5">
                  <div class="row">
                      <div class="col-12 mt-5">
                        <p><a  class="footer" href=""> curious </a>2020</p>
                      </div>
                      <div class="col-12 mt-2">
                        <p>curious theme by  <a class="footer" href=""> lorenzo besutti</a> </p>
                      </div>
                  </div>
              </div>
              
            </footer>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/2858d9691e.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
    </body>