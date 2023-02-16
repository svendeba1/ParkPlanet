@extends('layouts.theme')

@section('content')

<h1>Verhuurder</h1>
@auth
<h3>Vul de gegevens in van uw parkeerplaats om een zoekertje te plaatsen</h3>
<br>
<br>
<!-- De form die users moeten invullen om een zoekertje te plaatsen -->
<form method="post" action="/owners" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
        <label for="">Adres:</label>
        <input type="text" class="form-control" name="street">
    </div>
    <div class="form-group">
        <label for="">Stad:</label>
        <input type="text" class="form-control" name="city">
    </div>
    <div class="form-group">
        <label for="">State:</label>
        <input type="text" class="form-control" name="state">
    </div>
    <div class="form-group">
        <label for="">Rijksregisternummer:</label>
        <input type="text" class="form-control" name="rrn">
    </div>
    <div class="form-group">
        <label for="">Prijs:</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label for="">Foto:</label>
        <input type="file" class="form-control" name="picture">
    </div>
    <div class="form-group">
        <label for="">Begindatum:</label>
        <input type="datetime-local" class="form-control" name="startdate">
    </div>
    <div class="form-group">
        <label for="">Einddatum:</label>
        <input type="datetime-local" class="form-control" name="enddate">
    </div>
    <input type="submit" value="Maak zoekertje">
</form>
@endauth
@guest
Log in om een zoekertje te kunnen plaatsen <br>
<div class="blue-button">
<a href="/login">Login</a>
</div>
@endguest
@endsection