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

           .header{
               background-color: yellow;
               width: 100%;
               height: 400px;
               clip-path: polygon(0 0, 100% 0%, 100% 58%, 0% 100%);
               color: black;
               
               
            

           }
           .grande{
               text-transform: uppercase;
               font-weight: bold
           }

           .relativo{
              position: relative;
              left: 10%;
              top: 20%
           }
         
           .assoluto{
               border: 4px dotted yellow;
              
               top: 0px;
               left: 40%;
               z-index: 9999;
              
               position: absolute
              
               
           }
           .call{
               background-color: black;
               color: white;
               font-weight: bold;
               
             
              
           }
           .call:hover{
               background-color: yellow;
               color: black;
           }
           .verde{
               color: green
           }
           

.out {
     width: 455px;
     height: 200px;
    
     position: relative;
     overflow: hidden;
     
     
     
}

.in {
     width: 550px;
     height: 550px;
     
     position: absolute;
     left: 200px;
     border-radius: 50%;
     box-shadow: 0 0 0 500px yellow; /* this is the white background */
     position: absolute
}

.bottom .in {
     bottom: 0;
     left: 200px;
     
}
.ruotiamo{
    transform: rotate(180deg);

    z-index: 999
}
.relativo{
    
  position: relative
}

   
        
          
       
         
         
         
        </style>
    
    </head>
    <body>


        


        <div class="container-fluid">
            <div class="row">
                <div class=" header ">
                    <div class="col-6 relativo">
                    <p>ecco perchè dovresti scegliere </p><br>
                    <div class="flex">
                    <h1 class="grande">{{$city['name']}}</h1> <br>
                    
                    </div>
                    </div>
                  

                </div>
            </div>
            </div>
        </div>
        <!-- Navigation -->

    
          


          <div class="container mt-5">
              <div class="row">
                  <div class="col-12 col-md-6">
                <h2 class="mb-4">{{$city['name']}}</h2>
                <p class="lead mb-4">{{$city['descrizione']}}</p>
                <p class="mt-3 lead"><i class="fas fa-check verde"></i> biglietto aereo incluso</p>
                <p class="lead"><i class="fas fa-check verde"></i> assicurazione sanitaria inclusa</p>
                <p><i class="fas fa-check verde"></i>abbiamo ogni tipo di attività</p>
                <p> <i class="fas fa-check verde"></i>possibilità di pagare a rate</p>
                  </div>
                
                  <div class="col-12 col-md-6 relativo ">
                    <div class="out ruotiamo">
                        <div class="in ruotiamo">
                           
                        </div>
                   </div>
                   
                   <div class="out bottom ruotiamo">
                        <div class="in ruotiamo">
                   
                        </div>
                   </div>
                   <div class="card assoluto" style="width: 18rem;">
                    <img src="{{$city['url']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$city['name']}}</h5>
                      <p class="card-text"> prezzo:{{$city['partenza']}}</p>
                      <button class="call px-3 py-1 w-100"> acquista ora</button>
                
                    </div>
                  </div>
                  
                   
                  </div>
              </div>
          </div>
    </body>

               
                 
                  
              
                  </div>
              </div>
          </div>

    
                 



 
          <script src="https://kit.fontawesome.com/2858d9691e.js" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
