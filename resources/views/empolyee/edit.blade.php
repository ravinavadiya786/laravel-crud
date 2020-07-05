@extends('layout.navbar')
@section('title', 'Edit Empolyee')
@section('content')
<div class="container mt-4">
    <h3 class="title_color">Edit Empolyee</h3>
    <form class="mt-4" method="POST" action="/empolyee/{{ $empolyee->id }}">
        @csrf
        @method('PUT')
        @include('empolyee.form')

        <div class="d-flex justify-content-center w-50 mt-4">
            <button type="submit" class="btn btn-primary">Edit Empolyee</button>
        </div>
    </form>
</div>
@endsection