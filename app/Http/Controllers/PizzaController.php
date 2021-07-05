<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{

    public function _construct(){

        $this->middleware('auth') ;
    }


    
    public function index(){

        $pizzas = Pizza::all();
      //  $pizzas = Pizza::orderBy('name','desc')->get();
       // $pizzas = Pizza::where('type','neptun')->get();
      //  $pizzas = Pizza::latest()->get();

return view('pizzas.index' ,[
    'pizzas' => $pizzas,

    /*
        $pizzas = [
            ['type'=>'margerita', 'base'=>'barchaaa 7arraa!!',  'price'=> 10 ] ,
            ['type'=>'thon', 'base'=>'a lot of garlicc!!',  'price'=> 15 ] ,
            ['type'=>'4 saison', 'base'=>'avec sauce blanche!!',  'price'=> 12 ]
     
         ];

       */  

]);
    
    }

   public function show($id){

   // $pizza = Pizza::find($id);
   $pizza = Pizza::findOrFail($id);



    return view('pizzas.show' ,['pizza' => $pizza] );
   }


   public function create(){

    return view('pizzas.create' );
   }

   public function store(){
   
    $pizza = new Pizza(); //instance of the model pizza

    $pizza->name = request('name'); // requestt('name ')= pour recuperer les données de formulaire! 
    $pizza->type = request('type');

    $pizza->base = request('base');

    $pizza->price = 0;
    $pizza->toppings = request('toppings');



    error_log($pizza); //logger dans le console 
    
    $pizza->save(); //save into the database 



    return redirect('/' )->with('mssg','Thanks for your Order');



     //   error_log(request('name')); //hedhom eli 7atithom fi wost l'attribut name fi wost viwes create bech n3aytelhom !
    //   error_log(request('type')); // name = type     fel view mta3 create
    //   error_log(request('base')); //name = base 


   
   }


   public function destroy($id){

    $pizza = Pizza::findOrFail($id);
    $pizza->delete();

    return redirect('/pizzas');
   }


}
