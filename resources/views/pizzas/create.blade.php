

@extends('layouts.layout')
@section('content')
     <div class="wrapper create-pizza">

     <h1> Create a new Pizza</h1>
     
     <form action = "/pizzas" method="POST">
     @csrf 

     <label for="name">Your name:</label>
     <input type="text" id="name" name="name">
     <label for="type">Choose pizza type:</label>
     <select name="type" id="type">
     <option value="margarita">Margarita</option>
     <option value="hawaiin">hawaiin</option>
     <option value="4 saison">4 saison</option>
     
     </select>

     <label for="base">Choose pizza base:</label>
     <select name="base" id="base">
     <option value="cheesy crust">cheesy crust</option>
     <option value="Garlic Crust">Garlic Crust</option>
     <option value="Thin and Cryspy">Thin and Cryspy</option>
     <option value="Thick">Thick</option>
 
     </select>

     <fieldset>

     <label>Extra toppings:</label>
     <input type= "checkbox" , name="toppings[]" value="mushrooms">Mushrooms <br/>
     <input type= "checkbox" , name="toppings[]" value="peppers">Peppers <br/>
     <input type= "checkbox" , name="toppings[]" value="garlic">Garlic <br/>
     <input type= "checkbox" , name="toppings[]" value="olives">Olives <br/>


     </fieldset>

     <input type="submit" value="Order Pizza">

     
     
     
     
     
     </form>
     
     
     </div>

        @endsection

  