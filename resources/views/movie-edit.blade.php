@extends('layouts.app')

@section('content')

<form action="{{route('movies.update',$movie -> id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="title">Title:</label>
  <input type="text" name="title" value="{{$movie -> title}}">
  </div>
  <div class="form-group">
    <label for="year">year:</label>
    <input type="text" name="year" value="{{$movie -> year }}">
  </div>
  <div class="form-group">
    <label for="overview">overview:</label>
    <input type="text" name="overview" value="{{$movie -> overview}}">
  </div>
  <button type="submit" name="button"> UPDATE ME</button>
</form>


<p>al click su salva andrà sulla rotta movies.store ovvero si attiverà la funzione store presente nel controller</p>

@endsection