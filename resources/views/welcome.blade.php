<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Werkbon Systeem</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
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
      <a href="{{ route('show', $werkbom->id) }}">
      <div style="border-radius:10px;"class="card blue-grey darken-1">
      <span class="card-title">
        <div  class="card-content white-text">
        @if($werkbom->status == 'Niet Afgerond')
                <div class="chip red white-text">
                    <b>{{ $werkbom->status }}</b>
                </div>
                @else
                <div class="chip green white-text">
                    <b>{{ $werkbom->status }}</b>
                </div>                   
                @endif
          <h4><b><small><i class="bi bi-person-circle"></i></i></small>&nbsp;{{ $werkbom->name }}</b></h4>
          <hr>
          <h6><i class="bi bi-chat-left-text"></i>&nbsp;&nbsp;{{ $werkbom->description }}</h6>
        </div>
        <div class="card-action">
        <a href=""><i class="bi bi-alarm"></i>&nbsp;&nbsp;<b>Begin datum:&nbsp;{{ $werkbom->startDate }}<b></a><a href=""><i class="bi bi-alarm"></i>&nbsp;&nbsp;<b>Eind datum:&nbsp;{{ $werkbom->finishDate }}<b></a>
        </div>
      </div>
    </div>
  </div>
</a>
  @endforeach
  @include('includes.layouts.footer')
</div>
</html>
