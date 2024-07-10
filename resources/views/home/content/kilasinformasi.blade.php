<div class="home-intro bg-warning text-dark mb-0 d-none d-sm-block" id="home-intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <p class="mb-0 text-dark">Kilas Informasi</p>
            </div>
            <div class="col-lg-10">
                <div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-style-1 mb-0 owl-loaded owl-drag owl-carousel-init"
                    data-plugin-options="{&#39;items&#39;: 1, &#39;margin&#39;: 100, &#39;loop&#39;: true, &#39;nav&#39;: true, &#39;dots&#39;: false, &#39;stagePadding&#39;: 100, &#39;autoplay&#39;: true, &#39;autoplayTimeout&#39;: 5000}"
                    style="height: auto">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="
              transform: translate3d(-3637px, 0px, 0px);
              transition: all 0.25s ease 0s;
              width: 10203px;
              padding-left: 100px;
              padding-right: 100px;
            ">
                            @foreach ($flash as $post)
                                <div class="owl-item cloned" style="width: 809.33px; margin-right: 100px">
                                    <div class="">
                                        <a href="{{ route('selengkapBerita', $post->id) }}">
                                            <p class="text-3 mb-0 text-dark ml-0">
                                                {{ $post->title }}
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev"></button><button type="button"
                            role="presentation" class="owl-next"></button>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </div>
</div>