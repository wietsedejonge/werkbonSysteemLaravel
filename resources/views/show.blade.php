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
    
    

<div class="row">
<div class="col s12 m4"></div>
    <div class="col s12 m5.5">
      <a href="show">
      <div style="border-radius:10px;"class="card blue-grey darken-1">
      <span class="card-title">
        <div  class="card-content white-text">
          <h4><b>{{ $werkbom->name }}</b></h4>
          @if($werkbom->status == 'Niet Afgerond')
                <div class="chip red white-text">
                    <b>{{ $werkbom->status }}</b>
                </div>
                @else
                <div class="chip green white-text">
                    <b>{{ $werkbom->status }}</b>
                </div>                   
                @endif
          <h6>{{ $werkbom->description }}</h6>
          <hr>
          <b>Materialen:</b>
          <p>{{ $werkbom->material1 }}</p>
          <p>{{ $werkbom->material2 }}</p>
          <p>{{ $werkbom->material3 }}</p>
          <p>{{ $werkbom->material4 }}</p>
        </div>
        <img src="{{ URL::to('/') }}/images/{{ $werkbom->image }}" width="150px">
        @if($werkbom->status == 'Niet Afgerond')
        <form action="{{ route('status') }}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{ $werkbom->id }}">
         &nbsp; <button class="btn">
            Afronden
          </button>
        </form>                 
        @endif
        <div class="card-action">
        <a href=""><b>Begin datum:&nbsp;{{ $werkbom->startDate }}<b></a><a href=""><b>Eind datum:&nbsp;{{ $werkbom->finishDate }}<b></a>
        </div>
      </div>
    </div>
  </div>
</a>
  @include('includes.layouts.footer')
</div>
</html>
