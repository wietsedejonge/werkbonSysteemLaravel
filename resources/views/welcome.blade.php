<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Werkbon Systeem</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    </head>
    <!-- Header include -->
    @include('includes.layouts.header')
  <br>
  <!-- Code die de data van de toegevoegde werkbonnen en deze in een card plaatst -->
    <div class="row">
    <div class="col s0.5"></div>   <div class="col s6"><label>Voeg een werkbon toe! &nbsp;&nbsp;</label>
    <a href="form" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">+</i></a></div>
    @foreach($werkbondata as $werkbom)
    
    

<div class="row">
<div class="col s12 m4"></div>
    <div class="col s12 m5.5">
      <div style="border-radius:10px;"class="card blue-grey darken-1">
        <div  class="card-content white-text">
          <h4><b>{{ $werkbom->name }}</b></h4>
          <h6>{{ $werkbom->description }}</h6>
          <hr>
          <b>Materialen:</b>
          <p>{{ $werkbom->material1 }}</p>
          <p>{{ $werkbom->material2 }}</p>
          <p>{{ $werkbom->material3 }}</p>
          <p>{{ $werkbom->material4 }}</p>
        </div>
        <div class="card-action">
        <a href=""><b>Begin datum:&nbsp;{{ $werkbom->startDate }}<b></a>
        </div>
      </div>
    </div>
  </div>
  @endforeach

</div>
</html>
