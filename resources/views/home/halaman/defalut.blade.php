@extends('layout.app')
@section('content')

<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-12 appear-animation animated fadeInLeftShorter appear-animation-visible"
            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase "> {!! $post->title !!} </div>
                <br>
                @if (isset($post->image))
                    <div class="d-flex justify-content-center">
                        <a href="{{ asset('storage/' . $post->image) }}" rel="prettyPhoto">
                            <!-- <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" style="max-width: 800px;"> -->
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                        </a>
                    </div>
                    <br>
                @endif
                {!! $post->body !!}

            </div>
        </div>
    </div>
</div>

@endsection
