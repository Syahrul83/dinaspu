@extends('layout.app')
@section('content')

<link rel="stylesheet" href="/assets/gf/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/gf/css/jquery-ui.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="/assets/gf/css/custom.css">
<script src="/assets/gf/js/jquery-3.6.0.min.js"></script>
<script src="/assets/gf/js/jquery-ui.js"></script>
<script src="/assets/gf/js/bootstrap.min.js"></script>
<script src="/assets/gf/js/script.js"></script>

<div class="container py-3" id="page-container">
    <h3 class="text-center mt-4 mt-2 mb-2">Galery Foto</h3>
    <hr>
    <div class="col-12">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-4 gx-4 gy-4">
            @foreach ($posts as $post)
            <div class="col img-item">
                <div class="card rounded-0">
                    <div class="img-container">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Image" class="img-top bg-dark bg-gradient img-thumb" data-bs-toggle="modal" data-bs-target="#imageViewerModal" data-title="{{ $post->title }}" data-description="Keterangan Foto">
                    </div>
                    <h6 class="text-center mt-1">{{ $post->title }}</h6>
                    <p class="text-center">Keterangan Foto</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Image Viewer Modal -->
<div class="modal fade" id="imageViewerModal" tabindex="-1" aria-labelledby="imageViewerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered rounded-0">
        <div class="modal-content rounded-0">
            <div class="modal-header py-1">
                <h5 class="modal-title" id="imageViewerModalLabel">Viewer</h5>
                <button type="button" style="font-size: .65em;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rounded-0">
                <div id="img-viewer-container" class="d-flex">
                    <div class="h-100 d-flex align-items-center position-absolute control-prev-container">
                        <div class="control-prev" onclick="showPrevImage()"></div>
                    </div>
                    <img src="" alt="Viewer" id="img-viewer" class="bg-dark bg-gradient">
                    <div class="h-100 d-flex align-items-center position-absolute control-next-container">
                        <div class="control-next" onclick="showNextImage()"></div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h6 id="modal-title">Judul Foto</h6>
                <p id="modal-description">Keterangan Foto</p>
            </div>
        </div>
    </div>
</div>



<script>
    let currentIndex = 0;
    let imgItems = [];

    document.addEventListener('DOMContentLoaded', function() {
        imgItems = document.querySelectorAll('.img-thumb');

        imgItems.forEach((item, index) => {
            item.addEventListener('click', function() {
                currentIndex = index;
                updateModalContent();
            });
        });

        const imageViewerModal = new bootstrap.Modal(document.getElementById('imageViewerModal'));
        imageViewerModal._element.addEventListener('show.bs.modal', function(event) {
            updateModalContent();
        });

        imageViewerModal._element.addEventListener('hidden.bs.modal', function() {
            // Optional: Reset modal content when closed
            document.getElementById('img-viewer').src = '';
            document.getElementById('modal-title').textContent = '';
            document.getElementById('modal-description').textContent = '';
        });
    });

    function updateModalContent() {
        const imgSrc = imgItems[currentIndex].getAttribute('src');
        const imgTitle = imgItems[currentIndex].getAttribute('data-title');
        const imgDescription = imgItems[currentIndex].getAttribute('data-description');

        const modalImg = document.getElementById('img-viewer');
        const modalTitle = document.getElementById('modal-title');
        const modalDescription = document.getElementById('modal-description');

        modalImg.setAttribute('src', imgSrc);
        modalTitle.textContent = imgTitle;
        modalDescription.textContent = imgDescription;
    }

    function showNextImage() {
        currentIndex = (currentIndex + 1) % imgItems.length;
        updateModalContent();
    }

    function showPrevImage() {
        currentIndex = (currentIndex - 1 + imgItems.length) % imgItems.length;
        updateModalContent();
    }

</script>



@endsection
