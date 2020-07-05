@extends('layout.navbar')
@section('title', 'Edit Companies')
@section('content')
<div class="container mt-4">
    <h3 class="title_color">Form Element</h3>
    <form class="mt-4" method="POST" action="/company/{{ $company->id }}">
        @csrf
        @method('put')
        <!-- <input type="hidden" name="_method" value="PUT"> -->
        @include('company.form')

        <div class="d-flex justify-content-center w-50 mt-4">
            <button type="submit" class="btn btn-primary font-weight-bold">Update Info</button>
        </div>
    </form>
</div>
@endsection