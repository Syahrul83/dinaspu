@extends('layout.app')
@section('content')

<h3 class="text-center mt-4">{{ $post->title }}</h3>
<hr>
<embed type="application/pdf" src="{{asset('storage/' . $post->file)}}" width="100%" height="600"></embed>

@endsection
