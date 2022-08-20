@extends('./layouts/main')

@section('container')
  <h1>Home</h1>
  <ul>
    <li><a href="/measurements"> Medidas Cadastradas</a></li>
    <li><a href="/measurements/new">Nova Medida</a></li>
  </ul>
@endsection
