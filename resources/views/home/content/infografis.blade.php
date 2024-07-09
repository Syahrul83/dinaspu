<div class="card">
    <div class="card-side bg-color-primary text-3 text-uppercase "> Info Grafis </div>
    <br>

    <div class="row">
        <div class="owl-carousel owl-theme mb-0" data-plugin-options="{&#39;items&#39;: 1, &#39;autoHeight&#39;: true}">
            <!-- Single Blog Area -->

            @foreach ($infografis as $info)


                <div>
                    <div class="col">
                        <div class="testimonial testimonial-primary border-radius">
                            <a class="lightbox" href="{{'storage/' . $info->image}}"
                                data-plugin-options="{&#39;type&#39;:&#39;image&#39;}">
                                <img height="200px" src="{{'storage/' . $info->image}}" class="img-fluid border-radius"
                                    alt="Profil DI Premium yang Mendapatkan Layanan dari Pembangunan Bendungan Periode 2015-2025" />
                            </a>
                            <div class="testimonial-arrow-down"></div>
                            <div class="testimonial-author">
                                <p>
                                    <a href="{{$info->link}}"><strong>Profil
                                            DI Premium yang Mendapatkan Layanan
                                            dari Pembangunan Bendungan Periode
                                            2015-2025</strong></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->

            @endforeach

        </div>
    </div>

</div>