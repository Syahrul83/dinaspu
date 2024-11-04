<footer id="footer">
    <div class="container">
        <div class="footer-ribbon"> <span>Informasi</span> </div>
        <div class="row pt-5 mt-4 mb-0">
            <div class="col-md-6 mb-4 mb-lg-0"> <a href="#" class="logo">
                    <!-- <img alt="SDA" src="img/logo-footer.png" class="opacity-7 bottom-4" height="32">-->
                    <h1><strong>Balai Wilayah Sungai <br> Kalimantan IV Samarinda</strong></h1>
                </a> <!-- <p style="color: #fff">Alamat:</p>--> <span style="color: #fff"> Kantor BWS Kalimantan IV
                    Samarinda <br>JL. MT. Haryono No. 36, Kota Samarinda, Kalimantan Timur -
                    Indonesia - 75123 </span>
            </div>
            <div class="col-md-2 mb-4 mb-lg-0">
                <a href='https://www.free-counters.org/'></a>
                <script type='text/javascript'
                    src='https://www.freevisitorcounters.com/auth.php?id=3d85f09c90f15841ee12e189f2fe276d6d1f3bd9'></script>
                <script type="text/javascript"
                    src="https://www.freevisitorcounters.com/en/home/counter/1206167/t/0"></script>
            </div>
            <div class="col-md-4">
                <h5 class="text-4 mb-3">CONTACT US</h5>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list list-icons list-icons-lg">
                            <li class="mb-1"><i class="fas fa-phone text-white"></i>
                                <p class="m-0 text-white">{{$kontak->no_hp}}</p>
                            </li>
                            <li class="mb-1"><i class="far fa-envelope text-white"></i>
                                <p class="m-0 text-white"> {{$kontak->email}}</p>
                            </li>
                        </ul>
                        <h5 class="text-4 mt-1">Social Media</h5>
                        <div class="col mb-5"> <a href="{{$kontak->sda_tv}}" target="_blank"> <img
                                    src="/assets/sdatv1.png"
                                    style="height:28px;width:65px;margin-top: -14px;padding-right: 10px;"
                                    alt="SDA TV"></a> <a href="{{ $kontak->twitter }}"
                                style="color:#fff;padding-right: 10px;" target="_blank"> <i
                                    class="fab fa-2x fa-twitter-square"></i>&nbsp;</a> <a
                                href="{{ $kontak->instagram }}" style="color:#fff;padding-right:10px;" target="_blank">
                                <i class="fab fa-2x fa-instagram"></i>&nbsp;</a> <a href="{{ $kontak->youtube }}"
                                style="color:#fff;" target="_blank"> <i
                                    class="fab fa-2x fa-youtube-square"></i>&nbsp;</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row ">
        <p class="mt-0 m-4 mb-1 text-color-grey">Bendungan Sei Gong</p>
    </div> -->
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row">
                <div class="col d-flex align-items-center justify-content-center ">
                    <p class="text-white text-center">Hak Cipta ©2024 Balai Wilayah Sungai Kalimantan IV Samarinda
                        Direktorat Jenderal Sumber Daya Air
                        Kementerian Pekerjaan Umum dan Perumahan Rakyat Republik Indonesia,. All Rights
                        Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>