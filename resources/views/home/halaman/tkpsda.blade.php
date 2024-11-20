<br>
@php
    $parts = explode('%', $post->body);
@endphp
<div class="card">
    <div class="card-side bg-color-primary text-3 text-uppercase ">TKPSDA WS MAHAKAM</div>
    <div class="col-12 col-lg-12">
        <hr> <!-- Post Content -->

        {!! $parts[0] !!}
        <div class="toggle toggle-primary toggle-lg" data-plugin-toggle="">
            <section class="toggle"> <a class="toggle-title appear-animation animated maskUp appear-animation-visible"
                    data-appear-animation="maskUp" data-appear-animation-delay="100"
                    style="animation-delay: 100ms;">Tugas Pokok dan Fungsi TKPSDA</a>
                <div class="toggle-content">
                    {!! $parts[1] !!}
                </div>
            </section>
            <section class="toggle"> <a class="toggle-title appear-animation animated maskUp appear-animation-visible"
                    data-appear-animation="maskUp" data-appear-animation-delay="300"
                    style="animation-delay: 300ms;">Keanggotaan TKPSDA WS Mahakam</a>
                <div class="toggle-content">
                    <section>
                        {!! $parts[3] !!}

                </div>
            </section>
            <section class="toggle"> <a class="toggle-title appear-animation animated maskUp appear-animation-visible"
                    data-appear-animation="maskUp" data-appear-animation-delay="400"
                    style="animation-delay: 400ms;">Sekretariat TKSPDA WS Mahakam</a>
                <div class="toggle-content">
                    <p> <b>Kantor</b> Sekretariat TKSPDA WS Mahakam </p>
                    <p>
                        TKPSDA WS Batanghari berkedudukan di Kota Samarinda, Provinsi Kalimantan IV Samarinda dengan
                        kantor Sekretariat beralamat di Jalan M.T. Haryono No. 36 Kota Samarinda Provinsi Kalimantan
                        Timur
                    </p>
                    <i class="fa fa-phone"></i> &nbsp; <span>: (0541) 2088390</span> <br>
                    <i class="fa fa-envelope"></i> &nbsp; <span> : tkpsda.wsmahakam2022@gmail.com</span> <br>
                    <i class="fa fa-globe"></i> &nbsp; <span>: https://www.tkpsdawsmahakam.site/</span>
                </div>
        </div>
    </div>
</div>
