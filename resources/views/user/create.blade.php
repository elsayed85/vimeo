@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="avatar" id="">
                    <input type="submit" value="upload">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
