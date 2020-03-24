@extends('wines.layouts.layout');
@section('main-content')
    <div class="wrapper"> 
  <h1>Lista Vini</h1>
</div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Cantina</th>
      <th scope="col">Etichetta</th>
      <th scope="col">Anno</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Prezzo</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($wines as $wine)
      <tr>
      <th scope="row">{{$wine->id}}</th>
        <td>{{$wine->cantina}}</td>
        <td>{{$wine->etichetta}}</td>
        <td>{{$wine->anno}}</td>
        <td>{{$wine->descrizione}}</td>
        <td>{{$wine->prezzo}},€</td>
        <td>
          <form action="{{route('wines.destroy', $wine->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">DELETE</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
 
