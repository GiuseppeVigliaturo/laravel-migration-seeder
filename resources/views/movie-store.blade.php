@extends('layouts.app')

@section('content')

<form action="{{route('movies.store')}}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
    <label for="title">Title:</label>
  <input type="text" name="title" value="">
  </div>
  <div class="form-group">
    <label for="year">year:</label>
    <input type="text" name="year" value="">
  </div>
  <div class="form-group">
    <label for="overview">overviw:</label>
    <input type="text" name="overview" value="">
  </div>
  <button type="submit" name="button"> SAVE ME</button>
</form>


<p>al click su salva andrà sulla rotta movies.store ovvero si attiverà la funzione store presente nel controller</p>

@endsection