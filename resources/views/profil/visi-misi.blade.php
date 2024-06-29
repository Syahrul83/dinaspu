@extends('layout.app')
@section('content')
@php
    $value = \App\Models\Post::where(['id' => '2'])->first();
@endphp
<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-12 appear-animation animated fadeInLeftShorter appear-animation-visible"
            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase "> Visi </div>
                <br>

                Isi Visi

            </div> <br> <!-- Widget -->
            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase ">Misi</div>
                <br>
                isi Misi
            </div><br>
            <!-- Widget <div class="card"><div class="card-side bg-color-primary text-3 text-uppercase ">Informasi Kepegawaian</div><div class="card-body"><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_s2_dalam_negeri_bidang_kominfo' target='_blank' title='Beasiswa S2 Dalam Negeri Bidang Kominfo'>Beasiswa S2 Dalam Negeri Bidang Kominfo </a></br><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_stuned' target='_blank' title='Beasiswa StuNed'>Beasiswa StuNed </a></br><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_swedish_institute_scholarship_for_global_professionals' target='_blank' title='Beasiswa Swedish Institute Scholarship for Global Professionals'>Beasiswa Swedish Institute Scholarship for Global Professionals </a></br></div></div><br> -->

            <div style="text-align: center;">
                <img src="{{ asset('storage/' . $value->image) }}" class="img-responsive" style="max-width: 50%;">
            </div>
            <br> <br>
            {!! $value->body !!}

        </div>
    </div>
</div>

@endsection
