@extends('layout.app')
@section('content')

<h3 class="text-center mt-4">Publikasi Hidrologi</h3>
<div class="nav-align-top">
    <ul class="nav nav-pills mb-3 gap-4 justify-content-center" role="tablist">
      <li class="nav-item">
        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#curah hujan" aria-controls="curah hujan" aria-selected="true">Publikasi Curah Hujan</button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#tma" aria-controls="tma" aria-selected="false">Publikasi TMA</button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#iklim" aria-controls="iklim" aria-selected="false">Publikasi Iklim</button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#ka" aria-controls="ka" aria-selected="false">Pulikasi Kualitas Air</button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#debit" aria-controls="debit" aria-selected="false">Publikasi Debit</button>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade show active" id="curah hujan" role="tabpanel">
        <div class="container">
            <table class="table table-striped table-hover ">
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
      </div>
      <div class="tab-pane fade" id="tma" role="tabpanel">
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
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fas fa-eye"></i> Preview</button>
                        </div>
        
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Majalah Pesut Edisi XI tahun 2022</td>
                    <td>
                        
                        <div class="btn-group gap-2" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fas fa-eye"></i> Preview</button>
                        </div>
        
                    </td>
                  </tr>
                </tbody>
              </table>
            
        </div>
        
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      </div>
      <div class="tab-pane fade" id="iklim" role="tabpanel">
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
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="fas fa-eye"></i> Preview</button>
                        </div>
        
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Majalah Pesut Edisi XI tahun 2022</td>
                    <td>
                        
                        <div class="btn-group gap-2" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="fas fa-eye"></i> Preview</button>
                        </div>
        
                    </td>
                  </tr>
                </tbody>
              </table>
            
        </div>
        
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      </div>
      <div class="tab-pane fade" id="ka" role="tabpanel">
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
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fas fa-eye"></i> Preview</button>
                        </div>
        
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Majalah Pesut Edisi XI tahun 2022</td>
                    <td>
                        
                        <div class="btn-group gap-2" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fas fa-eye"></i> Preview</button>
                        </div>
        
                    </td>
                  </tr>
                </tbody>
              </table>
            
        </div>
        
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      </div>
      <div class="tab-pane fade" id="debit" role="tabpanel">
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
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal4"><i class="fas fa-eye"></i> Preview</button>
                        </div>
        
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Majalah Pesut Edisi XI tahun 2022</td>
                    <td>
                        
                        <div class="btn-group gap-2" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal4"><i class="fas fa-eye"></i> Preview</button>
                        </div>
        
                    </td>
                  </tr>
                </tbody>
              </table>
            
        </div>
        
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      </div>
    </div>
  </div>


@endsection