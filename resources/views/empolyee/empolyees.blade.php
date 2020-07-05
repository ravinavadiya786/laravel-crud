@extends('layout.navbar')
@section('title', 'Empolyees')
@section('content')
<div class="container mt-4">
    <a href="{{ route('empolyee.create') }}" class="btn btn-lg  btn-outline-success">Add Empolyee</a>
    <div class="d-flex justify-content-end">
    {{ $empolyees->links() }}

    </div>
    <div class="row mt-4">
        @foreach($empolyees as $empolyee)
        <div class="col-lg-4 col-md-4 col-sm-4 col-4 @if($loop->index >= 3) pt-3 @endif ">
            <div class="card rounded-0">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{ $empolyee->name }}</h5>
                    <h6 class="card-title ">Company Name: <span class="ml-2">{{ $empolyee->company->name }}</span></h6>
                    <p class="card-text"><span class="text-secondary">Address:</span> {{ $empolyee->address }}</p>
                    <p class="card-text"><span class="text-secondary">Email:</span> {{ $empolyee->email }}</p>
                    <p class="card-text"><span class="text-secondary">Salary:</span> {{ $empolyee->salary }}</p>
                    <a href="{{ route('empolyee.edit',$empolyee->id) }}" class="card-link">Edit</a>
                    <form action="{{ route('empolyee.destroy',$empolyee->id) }}" method="POST" class="d-inline ml-2">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="card-link text-danger border-0 bg-transparent">Delete</button>
                    </form>
                    
                </div>
            </div>
        </div>
        @endforeach

    </div>

   


</div>
@endsection