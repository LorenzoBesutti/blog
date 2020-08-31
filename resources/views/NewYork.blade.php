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
<style>
.header{
    background:linear-gradient(
         rgba(0, 0, 0, 0.5), 
         rgba(0, 0, 0, 0.5)
       ), url('/newyork_header.jpg');
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
    float: left;
    width: 200px;

}
.bianco{
    color: white
}
.grigio{
    color: #cacaca
}
.contenuto{
    width: 90%;
    height: 300px;
    background:url('/new.jpg');
    background-size: cover
}
.contenuto1{
    width: 90%;
    height: 300px;
    background:url('/new1.jpg');
    background-size: cover
}
.contenuto2{
    width: 90%;
    height: 300px;
    background:url('/new2.jpg');
    background-size: cover
}
.contenuto3{
    width: 90%;
    height: 300px;
    background:url('/new3.jpg');
    background-size: cover
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
                       <h1> cosa sapere prima di andare a New York</h1><br>
                       <p class="upper">by <a  class="a" href="" > heric watson,nany perez</a> on april 20</p><br><br><br><br><br><br><br><br><br><br><br><br>
                       <a href="#inizio" class="p-3 freccia"><i class="fas fa-chevron-down bianco"></i></a>
                        
                      </div>
                  </div>
              </div>
          </div>
         
         <div class="container">
             <div class="row  mx-3">
                 <div class="col-12-w-100 col-md-12-mx-5-px-5 ">
                  
                   <a name='inizio'><i class="fas fa-arrow-down bianco"></i></a>
                   <div class="mt-5 pt-5 ">
                       <p class="lead"><strong class="h5">New York </strong> a state in the Northeastern and Mid-Atlantic regions of the United States.<strong class="h5"> New York </strong> the 27th-most extensive, the fourth-most populous, and the seventh-most densely populated of the 50 United States. <strong class="h5">New York</strong> is bordered by New Jersey and Pennsylvania to the south and Connecticut, Massachusetts, and Vermont to the east. The state has a maritime border with Rhode Island east of Long Island, as well as an international border with the Canadian provinces of Quebec to the north and Ontario to the west and north.<strong class="h5"> The state of New York </strong> often referred to as<strong class="h5"> New York State </strong> the State of New York to distinguish it from <strong class="h5">New York City</strong>, the state's most populous city and its economic hub.<br><br>
                         <div class="daie h4 p-2 my-2 mr-4">
                        “When I’m in New York, I just want to walk down the street and feel this thing, like I’m in a movie.”
                       <br> <span class="grigio h6">― Ryan Adams</span>
                         </div></p>
  
                        <p class="lead">With a Census-estimated population of nearly 8.5 million in 2014, <strong class="h5">New York City </strong> the most populous city in the United States. The city is the nucleus of the premier gateway for legal immigration to the United States — <strong class="h5">the New York City </strong> Area, one of the most populous urban agglomerations in the world. <strong class="h5">New York City </strong> also known for being the location of Ellis Island, the largest historical gateway for immigration in the history of the United States. A global power city, New York City exerts a significant impact upon commerce, finance, media, art, fashion, research, technology, education, and entertainment. The home of the United Nations Headquarters, New York City is an important center for international diplomacy and has been described as the cultural and financial capital of the world, as well as the world's most economically powerful city.
                        
                       <strong class="h5"> New York City </strong> makes up over 40 percent of the population of New York State. Two-thirds of the state's population lives in the New York City Metropolitan Area, and nearly 40% live on Long Island. Both the state and<strong class="h5"> New York City </strong> named for the 17th century Duke of York, future King James II of England. The next four most populous cities in the state are Buffalo, Rochester, Yonkers, and Syracuse, while the state capital is Albany.</p>
                   </div>

                   </div>
                 </div>
             </div>
         </div>
         <div class="container mt-5">
             <div class="row">
                 <div class="col-6 text-center">
                     <h3 class="font-weight-bold"> image gallery</h3>
                 </div>
             </div>
         </div>
         <div class="container">
             <div class="row">
                 <div class="col-6 contenuto " data-aos="zoom-in" >
                     

                 </div>
                 <div class="col-6 contenuto1" data-aos="zoom-in">
                  

                 </div>
                 <div class="col-6 contenuto2" data-aos="zoom-in">
               

                 </div>
                 <div class="col-6 contenuto3" data-aos="zoom-in">
                 

                 </div>
             </div>
         </div>
         <div class="container  mt-5 pt-5">
            <div class="row  mx-3">
                <div class="col-12-w-100 col-md-12-mx-5-px-5 ">
                 
                  <a name='inizio'></a>
                  <div class="mt-5 pt-5 ">
                  
                    <p class="lead"> The earliest Europeans in New York were French colonists and Jesuit missionaries who arrived southward from settlements at Montreal for trade and proselytizing. New York had been inhabited by various tribes of Algonquian and Iroquoian-speaking Native Americans for several hundred years by the time Dutch settlers moved into the region in the early 17th century. In 1609, the region was first claimed by Henry Hudson for the Dutch, who built Fort Nassau in 1614 at the confluence of the Hudson and Mohawk rivers, where the present-day capital of Albany later developed. The Dutch soon also settled New Amsterdam and parts of the Hudson Valley, establishing the colony of New Netherland based on trade and profitmaking, a multicultural community from its earliest days and a center of trade and immigration. The British annexed the colony from the Dutch in 1664. The borders of the British colony, the Province of New York, were quite similar to those of the present-day state.</p>
 
                       
                  </div>

                  </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 assoluto">
                        <div class="autori">
                            <div class="relativo px-3">
                           <p>written by</p>
                            </div>


                            <div class="row mt-5 flex">
                              <img class="circolare" src="/john.jpg">
                              <h4 class="titolo">john watsonn</h4>
                              <div class="forza">
                              <p>Eric is a web designer, speaker, and author. He is the Creative Director of Awesome Design studio, co-founder of magazine Camera and a coffee junkie.</p>
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
    </body>
</html>
    </body>