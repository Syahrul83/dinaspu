@extends('layout.app')
@section('content')

<link rel="stylesheet" href="assets/gf/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/gf/css/jquery-ui.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="assets/gf/css/custom.css">
<script src="assets/gf/js/jquery-3.6.0.min.js"></script>
<script src="assets/gf/js/jquery-ui.js"></script>
<script src="assets/gf/js/bootstrap.min.js"></script>
<script src="assets/gf/js/script.js"></script>

<div class="container py-3" id="page-container">
    <h3 class="text-center mt-4 mt-2 mb-2">Galery Foto</h3>
    <hr>
    <div class="col-12">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-4 gx-4 gy-4">
            <div class="col img-item">
                <div class="card rounded-0">
                    <div class="img-container">
                        <img src="assets/gf/images/1.jpg" alt="Image" class="img-top bg-dark bg-gradient img-thumb">
                    </div>
                </div>
            </div>
            <div class="col img-item">
                <div class="card rounded-0">
                    <div class="img-container">
                        <img src="assets/gf/images/2.jpg" alt="Image" class="img-top bg-dark bg-gradient img-thumb">
                    </div>
                </div>
            </div>
            <div class="col img-item">
                <div class="card rounded-0">
                    <div class="img-container">
                        <img src="assets/gf/images/3.jpg" alt="Image" class="img-top bg-dark bg-gradient img-thumb">
                    </div>
                </div>
            </div>
            <div class="col img-item">
                <div class="card rounded-0">
                    <div class="img-container">
                        <img src="assets/gf/images/4.jpg" alt="Image" class="img-top bg-dark bg-gradient img-thumb">
                    </div>
                </div>
            </div>
            <div class="col img-item">
                <div class="card rounded-0">
                    <div class="img-container">
                        <img src="assets/gf/images/5.jpg" alt="Image" class="img-top bg-dark bg-gradient img-thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="imageViewerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="imageViewerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered rounded-0">
        <div class="modal-content rounded-0">
            <div class="modal-header py-1">
                <h5 class="modal-title" id="imageViewerModalLabel">Viewer</h5>
                <button type="button" style="font-size: .65em;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rounded-0">
                <div id="img-viewer-container" class="d-flex">
                    <div class="h-100 d-flex align-items-center position-absolute control-prev-container">
                        <div class="control-prev"></div>
                    </div>
                    <img src="" alt="Viewer" id="img-viewer" class="bg-dark bg-gradient">
                    <div class="h-100 d-flex align-items-center position-absolute control-next-container">
                        <div class="control-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection