@extends('layout.app')
@section('content')

<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-8">
            <section class="section section-height-3 bg-light border-0 m-0 appear-animation pt-4 pb-0" data-appear-animation="fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <div class="row">
                                <div class="col-12 d-flex flex-column align-items-start">
                                    <h2 class="font-weight-normal mb-3">
                                        <strong> {{ $post->title }} </strong>
                                    </h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row recent-posts appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                        <div class="col-12 d-flex flex-column align-items-start">
                            @if (isset($post->image))
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3" alt="{{$post->title}}">
                            @endif

                            {!! $post->body !!}

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-12 col-lg-4 mt-3 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
            <!-- Ibfografis -->

            <!-- Video -->
            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase ">Berita Terkini </div>

                <br>
                <div class="row">
                    <div class="col">

                        @foreach ($sidebar as $post )


                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    @if (isset($post->image))
                                    <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid rounded-start" alt="default">
                                    @else
                                    <img src="{{ asset('assets/default.jpg') }}" class="img-fluid rounded-start" alt="default" />
                                    @endif


                                </div>
                                <div class="col-md-8 p-2">
                                    <a href="{{ route('selengkapBerita', $post->id) }}" class="text-primary text-hover-quaternary">
                                        <h5>{{ $post->title }}</h5>
                                    </a>


                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>

                <br>
                <!-- Widget <div class="card"><div class="card-side bg-color-primary text-3 text-uppercase ">Informasi Kepegawaian</div><div class="card-body"><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_s2_dalam_negeri_bidang_kominfo' target='_blank' title='Beasiswa S2 Dalam Negeri Bidang Kominfo'>Beasiswa S2 Dalam Negeri Bidang Kominfo </a></br><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_stuned' target='_blank' title='Beasiswa StuNed'>Beasiswa StuNed </a></br><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_swedish_institute_scholarship_for_global_professionals' target='_blank' title='Beasiswa Swedish Institute Scholarship for Global Professionals'>Beasiswa Swedish Institute Scholarship for Global Professionals </a></br></div></div><br> -->
            </div>
        </div>
    </div>
    @endsection
