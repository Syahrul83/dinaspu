@extends('layout.app')
@section('content')

<br>
<div class="card">
    <div class="card-side bg-color-primary text-3 text-uppercase "> {{ $post->title }}</div>
    <div class="col-12 col-lg-12">
        <hr> <!-- Post Content -->
        {!! $post->body  !!}

        <div class="toggle toggle-primary toggle-lg" data-plugin-toggle="">
            <section class="toggle"> <a class="toggle-title appear-animation animated maskUp appear-animation-visible"
                    data-appear-animation="maskUp" data-appear-animation-delay="300"
                    style="animation-delay: 300ms;">Daftar Komunitas Masyarakat Peduli Sungai (KMPS)</a>
                <div class="toggle-content">
                    @php
                        $value = \App\Models\kmps::orderBy('id', 'desc')->get();
                    @endphp
                    <p class="mx-2"> Sampai dengan saat ini Komunitas Masyarakat Peduli Sungai (KMPS) yang telah
                        terbentuk sebanyak {{ $value->count() }} KMPS dengan rincian sebagai berikut:. </p>
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama KMPS</th>
                                <th>Tahun Pendirian</th>
                                <th>Nomor Akta Notaris</th>
                                <th>Wilayah Operasional</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">

                            @foreach ($value as $item)
                                <tr>
                                    <td>1</td>
                                    <td>{{$item->nama_kmps}}</td>
                                    <td>{{$item->tahun_pendirian}}</td>
                                    <td>{{$item->nomor_akte_notaris}}</td>
                                    <td>{{$item->wilayah_operasi}}</td>
                                    <td>
                                        <div class="btn-group gap-2" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-{{$item->id}}"><i class="fas fa-eye"></i>
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </section>
            <!-- Modal -->
            @foreach ($value as $item)

                <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <bton type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">

                                <iframe src="{{asset('storage/' . $item->file)}}" width="100%" height="100%"
                                    style="width:100%; height:500px;" frameborder="0"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
</div>

@endsection
