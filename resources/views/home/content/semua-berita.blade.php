@extends('layout.app')
@section('content')
<section class="section section-height-3 bg-light border-0 m-0 appear-animation pt-4 pb-0"
    data-appear-animation="fadeIn">
    <div class="container">
        <div class="row">
            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="row">
                    <div class="col-6 d-flex flex-column align-items-start">
                        <h2 class="font-weight-normal text-6 mb-1"> <strong
                                class="font-weight-extra-bold">Semua</strong> Berita</h2>
                    </div>

                </div>
            </div>
        </div>
        <div class="row recent-posts appear-animation " data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="200">

            @foreach ($posts as $post)
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <article>
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('selengkapBerita', $post->id) }}" class="text-decoration-none">
                                            @if (isset($post->image))
                                                    <img src="{{ asset('storage/' . $post->image) }}"
                                                        class="img-landing hover-effect-2 mb-3" alt="{{$post->title}}" />
                                                </a>

                                            @else
                                                <img src="{{ asset('assets/default.jpg') }}" class="img-landing hover-effect-2 mb-3"
                                                    alt="default" />
                                            @endif
                                    </div>
                                    <h4 class="text-4 line-height-6">
                                        <a href="{{ route('selengkapBerita', $post->id) }}"
                                            class="text-primary text-hover-quaternary">{{$post->title}}</a>
                                    </h4>
                                </div>
                                <div class="row">
                                    <div class="col-auto pe-0">
                                        @php
                                            $date = $post->created_at->format('d');

                                        @endphp
                                        <div class="date">
                                            <span
                                                class="day font-weight-extra-bold border">{{  $post->created_at->format('d') }}</span>
                                            <span class="month text-2 text-uppercase">{{  $post->created_at->format('M') }}</span>
                                        </div>
                                    </div>
                                    <div class="col ps-1">
                                        @php
                                            $isi_berita = strip_tags($post->body) ?? null;
                                            $isi = substr($isi_berita, 0, 100);
                                            $isi = substr($isi_berita, 0, strrpos($isi, " "));
                                        @endphp
                                        <p class="pe-4 pb-0 mb-0">
                                            {!! $isi !!}
                                        </p>
                                        <a href="{{ route('selengkapBerita', $post->id) }}"
                                            class="read-more text-primary font-weight-semibold text-2 p-0 m-0 mb-3">selengkapnya
                                            <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>


            @endforeach



        </div>
        <br>
        {{ $posts->links() }}
    </div>
</section>
@endsection
