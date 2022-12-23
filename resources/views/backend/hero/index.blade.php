@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-auto">
                <div class="card-header text-success">
                    <h6>Contact Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('hero.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title</label>
                             <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  placeholder="Write your logo_title here">
                             @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Skill Title</label>
                             <input type="text"  name="skill_title" class="form-control @error('skill_title') is-invalid @enderror" placeholder="Input logo_icon Icon">
                             @error('skill_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                             <input type="text"  name="short_desc" class="form-control @error('short_desc') is-invalid @enderror" placeholder="Input logo_icon Icon">
                             @error('short_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Photo</label>
                             <input type="file"  name="photo" class="form-control @error('photo') is-invalid @enderror" placeholder="Input logo_icon Icon">
                             @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Button</label>
                             <input type="text"  name="button" class="form-control @error('button') is-invalid @enderror" placeholder="Input button name">
                             @error('button')
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