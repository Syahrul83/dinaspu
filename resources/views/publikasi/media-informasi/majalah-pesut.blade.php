@extends('layout.app')
@section('content')

<h3 class="text-center mt-4s">Majalah Pesut</h3>
<hr>
<div class="container">
    <table class="table table-striped table-hover">
        <thead class="text-center table-primary">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Edisi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <th scope="row">1</th>
            <td>Majalah Pesut Edisi XII tahun 2023</td>
            <td>
                
                <div class="btn-group gap-2" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-eye"></i> Preview</button>
                </div>

            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Majalah Pesut Edisi XI tahun 2022</td>
            <td>
                
                <div class="btn-group gap-2" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-eye"></i> Preview</button>
                </div>

            </td>
          </tr>
        </tbody>
      </table>
    
</div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">

                <iframe src="./doc/majalah-FKM-UI_edisi-13.pdf" width="100%" height="100%"
                style="width:100%; height:500px;" frameborder="0"></iframe>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection