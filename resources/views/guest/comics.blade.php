@extends('guest.layouts.base')

@section('content')
<div class="container-main">
    <div class="title-img">CURRENT SERIES</div>
    <ul class="ul-card">
        @foreach ($comics as $card)
            <li class="card">
                <img class="img-card" src={{ $card['thumb'] }}>
                <h3 class="h3-card">{{ $card['series'] }}</h3>
            </li>
        @endforeach
    </ul>
   </div>
   <div class="container-button">
     <button>LOAD MORE</button>
   </div>
@endsection


