<!-- isi -->
<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-12 appear-animation animated fadeInLeftShorter appear-animation-visible"
            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase "> {{ $post->title }} </div>
                <br>
                <div class="container-fluid">
                    @if (isset($post->image))
                        <a href="{{asset('storage/' . $post->image)}}" rel="prettyPhoto">
                            <img class="img-fluid" src="{{asset('storage/' . $post->image)}}" height="auto">
                        </a>
                        <br>
                    @endif
                    {!! $post->body  !!}
                </div>


            </div> <br> <!-- Widget -->
            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase ">Uraian Tugas dan Tanggung Jawab</div>
                <div class="col-12 col-lg-12">
                    <hr> <!-- Post Content -->
                    <div class="toggle toggle-primary toggle-lg" data-plugin-toggle="">
                        @foreach ($tugas as $post)
                            <section class="toggle"> <a
                                    class="toggle-title appear-animation animated maskUp appear-animation-visible"
                                    data-appear-animation="maskUp" data-appear-animation-delay="50"
                                    style="animation-delay: 50ms;">{{ $post->title }}</a>
                                <div class="toggle-content">
                                    {!! $post->body !!}
                                </div>
                            </section>
                        @endforeach
                    </div>
                </div>
            </div><br>
            <!-- Widget <div class="card"><div class="card-side bg-color-primary text-3 text-uppercase ">Informasi Kepegawaian</div><div class="card-body"><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_s2_dalam_negeri_bidang_kominfo' target='_blank' title='Beasiswa S2 Dalam Negeri Bidang Kominfo'>Beasiswa S2 Dalam Negeri Bidang Kominfo </a></br><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_stuned' target='_blank' title='Beasiswa StuNed'>Beasiswa StuNed </a></br><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_swedish_institute_scholarship_for_global_professionals' target='_blank' title='Beasiswa Swedish Institute Scholarship for Global Professionals'>Beasiswa Swedish Institute Scholarship for Global Professionals </a></br></div></div><br> -->
        </div>
    </div>
</div>
<!-- tutup isi -->