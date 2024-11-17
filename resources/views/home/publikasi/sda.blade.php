@extends('layout.app')
@section('content')

<h3 class="text-center mt-4">{{ $post->title }}</h3>
<hr>
@if ($post->file == null)
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <h1>NO DATA PDF</h1>
    </div>
@else
    <embed type="application/pdf" src="{{asset('storage/' . $post->file)}}" width="100%" height="600"></embed>

@endif

@endsection
