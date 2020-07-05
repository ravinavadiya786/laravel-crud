@extends('layout.navbar')
@section('title', 'Add Companies')
@section('content')
<div class="container mt-4">
    <h3 class="title_color">Form Element</h3>
    <form class="mt-4" method="POST" action="/company" enctype="multipart/form-data">
        @csrf

        @include('company.form')

        <div class="d-flex justify-content-center w-50 mt-4">
            <button type="submit" class="btn btn-primary">Add Company</button>
        </div>
    </form>
</div>

@endsection
