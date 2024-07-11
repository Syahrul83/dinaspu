<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-12 appear-animation animated fadeInLeftShorter appear-animation-visible"
            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
            @php
                $parts = explode('%', $post->body);
            @endphp

            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase "> Visi </div>
                <br>

                {!! $parts[0] !!}


            </div>
            <br>

            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase ">Misi</div>
                <br>
                {!! $parts[1] !!}
            </div>
            <br>


        </div>
    </div>
</div>
