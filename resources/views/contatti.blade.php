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


.curioso{
  
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
.colore{
    background-color: transparent;
    color:#cacaca;
    border: 2px solid #cacaca ;
    text-align: left
    
}
.flex{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center
}
.button{
    background-color: yellow;
    color: black !important;
    text-transform: uppercase;
    font-weight: bold;
    text-align: center
}
.button:hover{
    

    background-color: black;
    color: white !important;
}
.padding{
    padding-right: 150px
}
.top{
    
    color: white;
    border: 2px solid white;
    text-transform: uppercase;
    font-weight: bold;
    background-color: transparent
 
}
.top:hover{
    background-color: yellow;
    color: black !important
}
.vediamo{
    position: relative;
    bottom: 150px;
}

</style>


    </head>
    <body>

        <header class="masthead">
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-12 text-center curioso ">
                    <a href="{{'/home'}}" class="  px-3 py-2 top vediamo">back to homepage</a>
                  <h1 class="font-weight-light font-weight-bold mb-3">subscribe to curious</h1>
                  <p class="lead corsivo ">Subscribe today and get access to a private newsletter and new content every week!</p>
                 
                    <form class="flex mt-5 " method="POST">
                      @csrf
                        <div class="form-group">
                         
                          <input name="email" type="email" placeholder="your email address" class="form-control colore padding" id="exampleInputEmail1" aria-describedby="emailHelp">
                          
                        </div>
                     
                        <button type="submit" class="button py-1 px-2 mb-3 ml-3">Subscribe</button>
                      </form>
                 
                </div>
              </div>
            </div>
          </header>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/2858d9691e.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
    </body>