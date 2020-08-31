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
.header{
    width: 100%;
    height: 400px;
    background:linear-gradient(
         rgba(0, 0, 0, 0.5), 
         rgba(0, 0, 0, 0.5)
       ),url('/land.jpg');
       background-size: cover;
       display: flex;
       flex-direction: column;
       align-items: center;
       justify-content: center
  

}
.bianco{
    color: white
}
.flex{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center
}
.flex1{
    flex-direction: column;
    align-items: center;
    justify-content: center
}
.grigio{
    color: #cacaca
}
.font{
    font-size: 30px
}




</style>


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="">Start Bootstrap</a>
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
                  <div class="col-12 header">
<h1 class="font-weight-bold bianco" >About</h1>
                  </div>
              </div>
          </div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 flex">
            <p class="lead w-50">
                <strong>Loreno Besutti </strong> a Senior Art Director from Vilnius, Lithuania. After graduating from The College of Visual Arts with a degree in Communication Design, he worked for three small graphic design shops where he honed his design style and sensibility.

                His work has been recognized by Communication Arts, Print, How, ID, IdN, AIGA, Effie, Archive, Graphis, AdFed and Rockport. Graphic Design USA named him a person to watch in 2015. 
            </p>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 flex1 ml-5 pl-3">
            <p class="lead font-weight-bold w-75 font">The world always seems brighter when you’ve just made something that wasn’t there before.<br><p class="grigio"> Nail Gaiman</p></p>
        </div>
    </div>
</div>


           
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 flex">
                        <p class="lead w-50">
                            As a hobby, Lorenzo Besutti authors the most influential design blog in the Lithuania with over 100,000 page views a month. He lives in Vilnius with his beautiful wife, two boys and one girl.

                            Thank You for reading!
                        </p>
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