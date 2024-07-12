@extends('layout.app')
@section('content')
<link rel="stylesheet" href="/assets/mdb.min.css" />

<div class="container py-3" id="page-container">
    <h3 class="text-center mt-4 mt-2 mb-2">Galery Video</h3>
    <hr>
    <div class="container d-flex justify-content-center mt-5">
        <!-- Modal gallery  -->
        <section class="">
            <!-- Section: Images -->
            <section class="">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                @if (isset($post->image))
                                    <img src="{{ asset('storage/' . $post->image) }}" class="w-100" />
                                @else
                                    <img src="{{ asset('assets/default.jpg') }}" class="w-100" />
                                @endif
                                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1-{{ $post->id }}">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                </a>
                            </div>
                            <h4 class="text-center mt-2 mb-2">{{ $post->title }}</h4>
                            <p class="text-center">Keterangan Video</p>
                        </div>
                    @endforeach
                </div>
            </section>
            <!-- Section: Images -->

            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                @foreach ($posts as $post)
                    <div class="modal fade" id="exampleModal1-{{ $post->id }}" tabindex="-1"
                        aria-labelledby="exampleModal1Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="ratio ratio-16x9">
                                    <iframe id="video-{{ $post->id }}" src="https://www.youtube.com/embed/{{ $post->link }}"
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
                @endforeach
            </section>
            <!-- Section: Modals -->
        </section>
        <!-- Modal gallery -->
    </div>
    <br><br>
    {{ $posts->links() }}
</div>

<!-- MDB -->
<script type="text/javascript" src="/assets/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            modal.addEventListener('hidden.bs.modal', function (event) {
                const iframe = modal.querySelector('iframe');
                if (iframe) {
                    const src = iframe.getAttribute('src');
                    iframe.setAttribute('src', '');
                    iframe.setAttribute('src', src);
                }
            });
        });
    });
</script>

@endsection
