@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-auto">
                <div class="card-header text-success">
                    <h6>Testmonial Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('testmonial.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title Name</label>
                             <input type="text" name="title_name" class="form-control @error('title_name') is-invalid @enderror"  placeholder="Write your title_name here">
                             @error('title_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title Description</label>
                             <input type="text"  name="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="Description here">
                             @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title Grate</label>
                             <input type="text"  name="title_grate" class="form-control @error('title_grate') is-invalid @enderror" placeholder="Input title_grate Icon">
                             @error('title_grate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Photo Thumbnail</label>
                             <input type="file"  name="photo_thum" class="form-control @error('photo') is-invalid @enderror" placeholder="Input button name">
                             @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Photo</label>
                             <input type="file"  name="photo" class="form-control @error('photo') is-invalid @enderror" placeholder="Input button name">
                             @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
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