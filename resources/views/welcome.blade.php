<!-- estende il pezzo "layouts/app" ovvero la nostra maschera di layout, e ne estende l'interno con un content qui sotto -->
@extends('layouts.app')

@section('content')

<section class="hero-section">

</section>

<section class="content-section">
    <div class="container">
        <ul class="grid">
          @foreach ($cards as $card)
          <li class="carta">
            {{-- <div class="comic-image"> --}}
                <img src="{{ $card['thumb'] }}" alt="">
            {{-- </div> --}}
            <h4 class="card-title">{{ $card['title'] }}</h4>
          </li>
          @endforeach
        </ul>
    </div>
</section>

@endsection

@section('content')

