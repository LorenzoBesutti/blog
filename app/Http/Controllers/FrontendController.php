<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactReceived;
use Illuminate\Support\Facades\Mail;


class FrontendController extends Controller
{
    public function home(){
        $links=[
            ['nome'=>'prezzi','uri'=>'/prezzi'],
            ['nome'=>'chi siamo','uri'=>'/chi siamo'],
           
            
          
     
    
        ];
        return view('welcome',['links'=>$links]);
    }
    public function prezzi(){
        $links=[
            ['nome'=>'home','uri'=>'/home'],
            ['nome'=>'chi siamo','uri'=>'/chi siamo'],
            
        ];
        $cities=[
            ['name'=>'parigi','paese'=>'francia','partenza'=>'550€','url'=>'/paris.jpg'],
            ['name'=>'barcellona','paese'=>'spagna','partenza'=> '800€','url'=>'/barca.jpg'],
            ['name'=>'bankok','paese'=>'thailandia','partenza'=>'1200€','url'=>'/thai.jpg'],
        ];
        return view('prezzi',['links'=>$links,'cities'=>$cities]);
    }
    public function city($name){
        $cities=[
            ['name'=>'parigi','paese'=>'francia','partenza'=>'$1500','url'=>'/paris.jpg','descrizione'=>" Parigi è da sempre considerata la città più romantica ed elegante ."],
            ['name'=>'barcellona','paese'=>'spagna','partenza'=> '$999','url'=>'/barca.jpg','descrizione'=>'E’ una meta indiscussa del turismo nostrano. Ogni periodo dell’anno è giusto per fare una capatina a Barça. '],
            ['name'=>'bankok','paese'=>'thailandia','partenza'=>'$2900','url'=>'/thai.jpg','descrizione'=>' Hai bisogno di una vacanza di totale relax in una destinazione tropicale senza spendere una follia?  Se la risposta è si allora la Thailandia è ciò di cui hai bisogno.'],
        ];
        $links=[
            ['nome'=>'home','uri'=>'/home'],
            ['nome'=>'prezzi','uri'=>'/prezzi'],
            ['nome'=>'chi siamo','uri'=>'/chi siamo'],
            
        ];
        foreach ($cities as $city ) {
            if ($city['name']==$name) {
                $selectedCity=$city;
            }
        }
        return view('city',['city'=>$selectedCity,'links'=>$links]);
    }
    public function NewYork(){
        $links=[
            ['nome'=>'home','uri'=>'/home'],
            ['nome'=>'prezzi','uri'=>'/prezzi'],
            ['nome'=>'chi siamo','uri'=>'/chi siamo'],
            
        ];
        return view('NewYork',['links'=>$links]);
    }
    public function music(){
        $links=[
            ['nome'=>'home','uri'=>'/home'],
            ['nome'=>'prezzi','uri'=>'/prezzi'],
            ['nome'=>'chi siamo','uri'=>'/chi siamo'],
            
        ];
        return view('music',['links'=>$links]);
    }
    public function chisiamo(){
        $links=[
            ['nome'=>'home','uri'=>'/home'],
            ['nome'=>'prezzi','uri'=>'/prezzi'],
            
        ];
        return view('chi siamo',['links'=>$links]);
    }
   public function contacts(){
       return  view('contacts');
   }
public function submit(Request $request){
    $email=$request->input('email');

    
    $contact=compact('email');
 
    Mail::to($email)->send(new ContactReceived($contact));

    return redirect(route('thank-you'));
}
public function thankyou(){
    return view('thank-you');
}
  
}
