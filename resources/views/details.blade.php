@extends('layouts.theme')

@section('content')

<!-- Gegevens over zoekertje weer te geven -->
<!-- @auth laat de gegevne szien als user is ingelogd -->
@auth
@foreach($owners as $owner)
<div>Prijs: {{ $owner->price }}</div>
<div>Locatie: {{ $owner->street }} {{$owner->city}}</div>
<div>beschikbaar van: {{ $owner->startdate }}</div>
<div>Tot: {{ $owner->enddate }}</div>
<div class="blue-button">
<a href="/mollie-payment">Betaal</a>
</div>
@endforeach
@endauth
<!-- @guest laat de user eeninlogknop zien als hij niet is ingelogd -->
@guest
Log in om een zoekertje te kunnen reserveren <br>
<div class="blue-button">
<a href="/login">Login</a>
</div>
@endguest

@endsection