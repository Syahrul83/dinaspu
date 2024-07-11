@extends('layout.app')
@section('content')
<link rel="stylesheet" href="./assets/mdb.min.css" />

<h3 class="text-center mt-4 mt-2 mb-2">Galery Video</h3>
<hr>
<div class="container d-flex justify-content-center mt-5">
    <!-- Modal gallery -->
    <section class="">
        <!-- Section: Images -->
        <section class="">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-1.webp" class="w-100" />
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                    <h4 class="text-center mt-2 mb-2">Judul Video</h4>
                    <p class="text-center">Keterangan Video</p>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-2.webp" class="w-100" />
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                    <h4 class="text-center mt-2 mb-2">Judul Video</h4>
                    <p class="text-center">Keterangan Video</p>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-3.webp" class="w-100" />
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                    <h4 class="text-center">Judul Video</h4>
                    <p class="text-center">Keterangan Video</p>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-3.webp" class="w-100" />
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal4">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                    <h4 class="text-center mt-2 mb-2">Judul Video</h4>
                    <p class="text-center">Keterangan Video</p>
                </div>

            </div>
        </section>
        <!-- Section: Images -->


        <!-- Section: Modals -->
        <section class="">
            <!-- Modal 1 -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/A3PDXmYoF5U" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>

                        <div class="text-center py-3">
                            <button type="button" class="btn btn-primary" data-mdb-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 2 -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/wTcNtgA6gHs" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>

                        <div class="text-center py-3">
                            <button type="button" class="btn btn-primary" data-mdb-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 3 -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/vlDzYIIOYmM" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>

                        <div class="text-center py-3">
                            <button type="button" class="btn btn-primary" data-mdb-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 4 -->
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/vlDzYIIOYmM" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>

                        <div class="text-center py-3">
                            <button type="button" class="btn btn-primary" data-mdb-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Modals -->
    </section>
    <!-- Modal gallery -->
</div>
<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="/assets/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

@endsection
