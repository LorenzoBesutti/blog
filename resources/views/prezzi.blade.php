<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


        <!-- Styles -->
       <style>
    .corsivo{
      font-style: oblique
    }
    .flex1{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
     
    }
    .flex{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
     

    }
    .upper{
      text-transform: uppercase
    }
    .bottone{
      color: white;
      text-transform: uppercase;
      background-color: black;
      font-weight: bold
    }
    .bottone:hover{
      color: black;
      text-transform: uppercase;
      background-color: yellow;
      font-weight: bold;
      text-decoration: none
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
.card:hover{
  border: 3px solid yellow
}
.yellow{
  background-color: yellow
}
.bordo{
  border: 2px solid black;
  display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
}

   
           
        </style>
    
    </head>
    <body>
        <!-- Navigation -->
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
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-12 flex1">
        <h1 class="text-center font-weight-bold">prezzi</h1>
        <div class="w-50">
        <p class="corsivo">Subscribe today and get access to a private newsletter and new content every week! We have multiple subscription types available to suit your needs.
        </div>

        </p>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12">
        <p class="lead text-center upper"> scegli dove vuoi andare</p>
      </div>
    </div>
  </div>
    
            <div class="content">
                <div class="title m-b-md">
                    <div class="container pt-3">
                        <div class="row  ">
                            @foreach ($cities as $city)
                                
                         
                            <div class="col-12 col-md-4 flex">
                                <div class="card bordo mb-5" style="width: 18rem;">
                                    <img src="{{$city['url']}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title text-center upper font-weight-bold">{{$city['name']}}</h5>
                                      <p class="card-text text-center"> prezzo:{{$city['partenza']}}</p>
                                      <a  href="{{route('city',['name'=>$city['name']])}}" class="w-100 bottone py-1 px-4">scopri di più</a>
                                    </div>
                                  </div>
                            </div>
                            @endforeach
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>