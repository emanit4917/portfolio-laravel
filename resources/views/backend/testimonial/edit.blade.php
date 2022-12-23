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
                    <form action="{{route('testmonial.updated',$test_show->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title Name</label>
                             <input type="text" name="title_name" value="{{$test_show->title_name}}" class="form-control @error('title_name') is-invalid @enderror"  placeholder="Write your title_name here">
                             @error('title_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title Description</label>
                             <input type="text"  name="desc" value="{{$test_show->desc}}" class="form-control @error('desc') is-invalid @enderror" placeholder="Description here">
                             @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title Grate</label>
                             <input type="text"  name="title_grate" value="{{$test_show->title_grate}}" class="form-control @error('title_grate') is-invalid @enderror" placeholder="Input title_grate Icon">
                             @error('title_grate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Photo Thumbnail</label>
                             <input type="file"  name="photo_thum" value="{{$test_show->photo_thum}}" class="form-control @error('photo') is-invalid @enderror" placeholder="Input button name">
                             @error('photo_thum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="exampleFormControlInput1" class="form-label">Thum old Photo</label> 
                                <img src="{{asset($test_show->photo_thum)}}" width="130px"class="my-3" height="130px" alt="">
                        </div>
                        
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Photo</label>
                             <input type="file"  name="photo" value="{{$test_show->title_name}}" class="form-control @error('photo') is-invalid @enderror" placeholder="Input button name">
                             @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="exampleFormControlInput1" class="form-label">Old Photo</label> 
                            <img src="{{asset($test_show->photo)}}" width="356px"class="my-3" height="450px" alt="">
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