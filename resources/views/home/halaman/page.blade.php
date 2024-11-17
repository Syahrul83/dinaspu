@extends('layout.app')
@section('content')

<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-12 appear-animation animated fadeInLeftShorter appear-animation-visible"
            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">

            @if ($post->id == 1)
                @include('home.halaman.visi')
            @elseif ($post->id == 3)
                @include('home.halaman.struktur')
            @elseif ($post->id == 29)
                @include('home.halaman.kmps')
            @else
                @include('home.halaman.defalut')
            @endif

        </div>
    </div>
</div>

@endsection