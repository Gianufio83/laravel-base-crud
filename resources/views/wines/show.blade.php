@extends('wines.layouts.layout');
@section('main-content')
<div class="card">
  <h2>Nuovo vino inserito</h2>
  <ul> 
    <li class="text-primary">ID:{{$wine->id}}</li>
   <li class="text-primary">Cantina:{{$wine->cantina}}</li>
    <li class="text-primary" >Etichetta:{{$wine->etichetta}}</li>
    <li class="text-primary">Vitigno:{{$wine->vitigno}}</li>
    <li class="text-primary">Anno:{{$wine->anno}} </li>
     <li class="text-primary" >Descrizione:{{$wine->descrizione}} </li>
     <li class="text-primary" >Prezzo:{{$wine->prezzo}},€ </li>
  </ul>
 </div>     
@endsection