@extends('wines.layouts.layout');
@section('main-content')
<div class="card">
  <h2>Nuovo vino inserito</h2>
  <ul> 
    <li>ID:{{$wine->id}}</li>
   <li>Cantina:{{$wine->cantina}}</li>
    <li>Etichetta:{{$wine->etichetta}}</li>
    <li>Vitigno:{{$wine->vitigno}}</li>
    <li>Anno:{{$wine->anno}} </li>
     <li>Descrizione:{{$wine->descrizione}} </li>
     <li>Prezzo:{{$wine->prezzo}},€ </li>
  </ul>
 </div>     
@endsection