@extends('layout.app')
@section('content')

<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-12 appear-animation animated fadeInLeftShorter appear-animation-visible"
            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase "> Lokasi Kantor</div>
                <br>

                {!! $kontak->gmap !!}
            </div>
        </div>
    </div>
</div>

@endsection
