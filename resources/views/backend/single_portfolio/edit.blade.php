@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-auto">
                <div class="card-header text-success">
                    <h6>Single Portfolio Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('single.updated', $single_portfolio_id->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Single Portfolio Title</label>
                             <input type="text" name="title" value="{{$single_portfolio_id->title}}" class="form-control @error('title') is-invalid @enderror"  placeholder="Write your Sigle portfolio title here">
                             @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Sigle Portfolio Description</label>
                             <input type="text"  name="description" value="{{$single_portfolio_id->description}}" class="form-control @error('description') is-invalid @enderror" placeholder="Write Sigle Portfolio Description ">
                             @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Technology</label>
                             <input type="text"  name="technolgy" value="{{$single_portfolio_id->technolgy}}" class="form-control @error('technolgy') is-invalid @enderror" placeholder="write technolgy name ">
                             @error('technolgy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Categories</label>
                             <input type="text"  name="category" value="{{$single_portfolio_id->category}}" class="form-control @error('category') is-invalid @enderror" placeholder="write category name ">
                             @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Sigle Potfolio Photo</label>
                             <input type="file"  name="photo" value="{{$single_portfolio_id->photo}}" class="form-control @error('photo') is-invalid @enderror" placeholder="Sigle Potfolio Photo">
                             @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="exampleFormControlInput1" class="form-label">Old Photo</label> 
                            <img src="{{asset($single_portfolio_id->photo)}}" width="150px"class="my-3" height="110px" alt=""> 
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_script')
@if(session('status'))
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })

            Toast.fire({
            icon: 'success',
            title: '{{session('status')}}',
            })
        </script>
    @endif
@endsection