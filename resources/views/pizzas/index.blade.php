

@extends('layouts.layout')
@section('content')
       

        
                <div class="wrapper pizza-index">
                 
                 <h1> Pizza Orders</h1>

                @foreach($pizzas as $pizza)
                  <div>
                 <div class = "pizza-item">
                  <img src = "/img/piz.jpg" alt="pizza  icon ">

               <h4> <a href="/pizzas/{{$pizza->id}}"> {{$pizza->name}} </a>  </h4>   
              
                 </div>
                  @endforeach
                
                
                </div>
                

                

                {{-- 

                    {{$loop->index}} {{$pizza['type']}} - {{$pizza['base']}} -  {{$pizza['price']}}
                 @if($loop->first)
                 <span> -first in the loop </span>
                 @endif
                 @if($loop->last)
                 <span> -last in the loop </span>
                 @endif
                 <p>{{$type}} - {{$base}} - {{$price}}</p> 

                @if($price > 10)
                <p> this pizza is expensive!</p>
                @elseif($price < 5)
                <p> this pizza is cheap!</p>
                @else
                <p> this pizza is normally priced!</p>
                @endif

                @unless($base =='barcha jben!!')
                <p> you dont have !</p>
                @endunless

                @php
                $name='abderrahim';
                echo($name);

                @endphp      

                @for($i = 0 ; $i < 5 ; $i++)
                <p> the value of i is {{$i}} </p>

                @endfor
                @for($i = 0 ; $i < count($pizzas) ; $i++)

                <p> {{$pizzas[$i]['type']}}</p>

                @endfor
                  --}}

                 



            </div>
        </div>

        @endsection

  