@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            @foreach ($images as $image)
                {{ $image }}
            @endforeach
        </div>
    </div>
</div>
@endsection
