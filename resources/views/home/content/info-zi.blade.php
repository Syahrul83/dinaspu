<div class="container pt-3 mb-0">
    <div class="row">
        <div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">
            <h2 class="font-weight-normal text-6 mb-0">
                <strong class="font-weight-extra-bold">Informasi Seputar</strong> &NonBreakingSpace;
                <strong class="font-weight-extra-bold">Zona Integritas</strong>
            </h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="owl-carousel owl-theme mb-0 pt-0"
                data-plugin-options="{&#39;responsive&#39;: {&#39;0&#39;: {&#39;items&#39;: 1}, &#39;476&#39;: {&#39;items&#39;: 1}, &#39;768&#39;: {&#39;items&#39;: 5}, &#39;992&#39;: {&#39;items&#39;: 6}, &#39;1200&#39;: {&#39;items&#39;: 6}}, &#39;autoplay&#39;: true, &#39;autoplayTimeout&#39;: 3000, &#39;dots&#39;: false}">
                @foreach ($zona as $post)
                                <div class="m-4 text-center">
                                    <article>
                                        <div class="row">
                                            <div class="col">
                                                <a href="{{ route('selengkapBerita', $post->id) }}">
                                                    <h4>{{$post->title}}</h4>
                                                </a>
                                            </div>
                                            @php
                                                $isi_berita = strip_tags($post->body) ?? null;
                                                $isi = substr($isi_berita, 0, 300);
                                                $isi = substr($isi_berita, 0, strrpos($isi, " "));
                                            @endphp
                                            <div class="row">
                                                <p class="text-justify"> {!! $isi !!}</p>
                                            </div>
                                            <div class="row">
                                                <a href="{{ route('selengkapBerita', $post->id) }}"
                                                    class="btn btn-info">Selengkapanya</a>
                                            </div>
                                    </article>
                                </div>

                @endforeach





            </div>
        </div>
    </div>
</div>
<hr />
<div class="container">
    <div class="row">
        <div class="col"></div>
    </div>
</div>