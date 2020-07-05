@extends('layout.navbar')
@section('title', 'Companies')
@section('content')
<style>
.list li {
    margin-bottom: 7px;
    font-weight: normal;
    font-size: 14px;
}

.label {
    font-family: "Rubik", sans-serif;
    color: #000000;
    font-size: 16px;
    font-weight: 500;
}
</style>
<div class="container mt-4">
    <a href="{{ route('Company.create') }}" class="genric-btn info-border circle arrow">Add Companies<i class="ml-2 fas fa-plus"></i></a>

    <div class="row mt-4">
        @foreach($companies as $company)
        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
            <div class="blog_right_sidebar bg-white">
                <aside class="single_sidebar_widget author_widget">
                    <img class="author_img rounded-circle w-75"
                        src="storage/{{ $company->image_url }}" alt="">
                        <h4>{{ $company->name }}</h4>
                        <div class="d-flex d-flex justify-content-between mt-3">
                            <span class="label">Website :</span>
                            <a class="link" href="www.colorlib.com" target="_blank"><u>{{ $company->website }}</u></a>
                        </div>
                        <div class="d-flex d-flex justify-content-between">
                            <span class="label">Total Empolyee :</span>
                            <span>{{ $company->empolyee()->count() }}</span>
                        </div>
                        <div class="d-flex d-flex justify-content-between">
                            <span class="label">Email :</span>
                            <span>{{ $company->email }}</span>
                        </div>
                        <div class="d-flex d-flex justify-content-between">
                            <span class="label">Address:</span>
                            <span>{{ $company->address }}</span>
                        </div>

                        <div class="br"></div>
                        <a href="company/{{ $company->id }}/edit" class="card-link">Edit</a>
                        <form action="{{ route('Company.destroy',$company->id) }}" method="POST" class="d-inline ml-2">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="card-link text-danger border-0 bg-transparent">Delete</button>
                        </form>
                       
                </aside>

            </div>
        </div>
        @endforeach
    </div>


</div>
@endsection