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
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>


        <!-- Styles -->
       <style>
.curioso{
  border-left: 6px solid yellow;
  color: white
}
.corsivo{
 font-style: oblique ;
 color: white
}

.masthead {
  height: 100vh;
  min-height: 500px;
  background:linear-gradient(
         rgba(0, 0, 0, 0.7), 
         rgba(0, 0, 0, 0.7)
       ), url('/strada.jpg');
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
.button{
  background-color: transparent;
  color:white ;
}
.bottone{
  background-color: transparent;
  color:white ;
  border: 1px solid white
}
.bottone:hover{
  background-color: yellow;
  color:black  !important;
  
}


.button:hover{
  background-color: yellow;
  color: black
}
.contenitore{
  background-color:yellow;
  
  width: 100%;
  height: 450px;
  clip-path: polygon(0 13%, 100% 0, 100% 100%, 0 89%);}
.checked{
  color:#03b5da
}
.p_auto{
  padding-left: 100px
}
hr{
width:60%;
height:2px;
background:linear-gradient(90deg,yellow,#03b5da,yellow)
}
.posizionati{
  width: 100%;
  background-position: cover;
  height: 426px;
  background:url(/newyork.jpg);
  background-size: cover
}
.posizionati1{
  width: 100%;
  background-position: cover;
  height: 426px;
  background: url(/party.jpg);
  background-size: cover
}
.contenuto{
  padding: 10%
}
.giallo{
  background-color: yellow;
  color: black
}
.giallo:hover{
  background-color: transparent;
  color: white
}
.testo{
  color: white
}
.a:hover{
  color: white;

  border-bottom: 1px solid yellow;
  text-decoration: none;
  
}

.contrario{
  color: yellow;
}
.contrario:hover{
  color: white;
  text-decoration: none
}
.cacà{
  color: #cacaca
}
.margine_costum{
  margin-top: 50px;
  background-color: transparent;
  color: white;
  border: 3px solid white
}
.margine_costum:hover{
  background-color: yellow;
  color: black
}
.margine_costum1{
  margin-top: 150px;
  background-color: transparent;
  color: white;
  border: 3px solid white
}
.margine_costum1:hover{
  background-color: yellow;
  color: black
}
.margine_costum2{
  margin-top:90px;
  background-color: transparent;
  color: white;
  border: 3px solid white
}
.margine_costum2:hover{
  background-color: yellow;
  color: black
}
.posizionati2{
  
  width: 100%;
  height: 600px;
  background: url(/londra1.jpg);
 
  background-size: cover;


}
.posizionati3{
  width: 100%;
  height: 426px;
  background: linear-gradient(
         rgba(0, 0, 0, 0.7), 
         rgba(0, 0, 0, 0.7)
       ), url(/montagne.jpg);
 background-size: cover

}
.posizionati4{
  width: 100%;
  height: 426px;
  background: linear-gradient(
         rgba(0, 0, 0, 0.7), 
         rgba(0, 0, 0, 0.7)
       ), url(/organizzazione.jpg);
   
 background-size: cover
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
        <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <div class="container">

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
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center curioso ">
          <h1 class="font-weight-light font-weight-bold mb-3 animate__animated animate__tada">curious</h1>
          <p class="lead corsivo mb-5">curious è un magazine online dedicato ai viaggi, lyfestyle, architettura, interior design, fashion e tecnologie</p>
          <a  href="{{'/contatti'}}" class=" p-2 px-3  bottone">subscribe</a>
        </div>
      </div>
    </div>
  </header>

  
    








            <div class="content">
                <div class="title m-b-md">
                 <div class="container-fluid mt-5 pt-5" 
                 data-aos="flip-left"
                 data-aos-easing="ease-out-cubic"
                 data-aos-duration="2000">
                   <div class="row">
                 <div class="contenitore p-5 p_auto">
                   <h3 class="text-center pt-5">perchè sceglierci?</h3>
               <div class="container mt-5">
                 <div class="row ml-5 pl-3">
                   <div class="col-12 col-md-4">
                    <p class="font-weight-bold h5"><i class="fas fa-check checked"></i>perchè siamo i migliori.</p>
                    <hr class="ml-5">
                   </div>
                   <div class="col-12 col-md-4">
                    <p class="font-weight-bold h5"><i class="fas fa-check checked"></i>siamo fieri del nostro lavoro</p>
                    <hr class="ml-5">
                   </div>
                   <div class="col-12 col-md-4">
                    <p class="font-weight-bold h5"><i class="fas fa-check checked"></i>soddisfatto o rimborsato</p>
                    <hr class="ml-5">
                     
                    
                   </div>
                 </div>
               </div>
            </div>
           </div>
        </div>
     </div>
 </div>
</div>


{{-- sezione immagini --}}


<div class="container-fluid mt-5 pt-5">
  <div class="row">
    <div class="col-12 col-md-6 mb-4">
      <div class="posizionati">
<div class="contenuto">
  
<button class="giallo font-weight-bold"> photography</button><br><br>
<a href="{{'/NewYork'}}" class="h1 font-weight-bold testo a"> cosa sapere prima di trasferirsi a new york</a><br><br>
<p class="cacà"> by <a href="" class="contrario">nancy parez</a> on April 18 </p> <a href="{{'/NewYork'}}" class=" margine_costum py-1 px-3">read more</a>


</div>
      </div>
    </div>
    <div class="col-12 col-md-6 mb-4">
      <div class="posizionati1">
        <div class="contenuto">
  
          <button class="giallo font-weight-bold"> music</button><br><br>
          <a href="{{'/music'}}" class="h1 font-weight-bold testo a"> 7 cose da sapere prima di andare ad un break festival</a><br><br>
          <p class="cacà"> by <a href="" class="contrario">eric watson</a> on May 17 </p> <a href="{{'/music'}}" class=" margine_costum py-1 px-3">read more</a>
          
          
          </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid ">
  <div class="row">
    <div class="col-12 mb-4">
      <div class="posizionati2">
<div class="contenuto">
  <button class="giallo font-weight-bold"> travel</button><button class="giallo font-weight-bold ml-2"> tips</button> <br><br>
          <a href="" class="h1 font-weight-bold testo a"> visitare londra per la prima volta</a><br><br>
          <p class="cacà"> by <a href="" class="contrario">eric watson,nancy perez</a> on Aprile 12 </p> <button class=" margine_costum1 py-1 px-3">read more</button>
</div>
      </div>
      
    </div>
  </div>
</div>

<div class="container-fluid  ">
  <div class="row">
    <div class="col-12 col-md-6 mb-4">
      <div class="posizionati3">
<div class="contenuto">
  
<button class="giallo font-weight-bold"> travel</button><br><br>
<a href="" class="h1 font-weight-bold testo a"> regole basi per la montagna</a><br><br>
<p class="cacà"> by <a href="" class="contrario">erik watson</a> on september 17 </p> <button class=" margine_costum2 py-1 px-3">read more</button>


</div>
      </div>
    </div>
    <div class="col-12 col-md-6 ">
      <div class="posizionati4">
        <div class="contenuto">
  
          <button class="giallo font-weight-bold"> getting started</button><br><br>
          <a href="" class="h1 font-weight-bold testo a"> organizza il tuo contenuto con i tag</a><br><br>
          <p class="cacà"> by <a href="" class="contrario">eric watson</a> on september 24 </p> <button class=" margine_costum py-1 px-3">read more</button>
          
          
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


        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/2858d9691e.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
    </body>
</html>
