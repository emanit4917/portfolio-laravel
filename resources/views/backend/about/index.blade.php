@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-auto">
                <div class="card-header text-success">
                    <h6>About Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Hello Title</label>
                             <input type="text" name="hello" class="form-control  @error('hello') is-invalid @enderror" placeholder="Hello title here">
                             @error('hello')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title</label>
                             <input type="text" name="title" class="form-control  @error('global_desc') is-invalid @enderror" placeholder="global_desc here">
                             @error('global_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Description</label>
                             <input type="text" name="desc" class="form-control  @error('desc') is-invalid @enderror" placeholder="description here">
                             @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Style Title</label>
                             <input type="text" name="style_title" class="form-control  @error('style_title') is-invalid @enderror" placeholder="Style title name">
                             @error('style_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Photo</label>
                             <input type="file" name="photo" class="form-control  @error('photo') is-invalid @enderror" placeholder="photo">
                             @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
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
@if(session('success'))
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
            title: '{{session('success')}}',
            })
        </script>
    @endif
@endsection