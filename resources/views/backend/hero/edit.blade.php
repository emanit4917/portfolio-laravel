@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-auto">
                <div class="card-header text-success">
                    <h6>Hero Updated Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('hero.updated', $hero_show->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title</label>
                             <input type="text" name="title" value="{{$hero_show->title}}" class="form-control @error('title') is-invalid @enderror" placeholder="Write your logo_title here">
                             @error('title')
                                    <span class="invalid-feedback" role="alert">    
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Skill Title</label>
                             <input type="text"  name="skill_title" value="{{$hero_show->skill_title}}" class="form-control @error ('skill_title') is-invalid @enderror" placeholder="Input logo_icon Icon">
                             @error('skill_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                             <input type="text"  name="short_desc" value="{{$hero_show->short_desc}}" class="form-control @error('short_desc') is-invalid @enderror" placeholder="Input logo_icon Icon">
                             @error('short_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Photo</label>
                             <input type="file"  name="photo"  value="{{$hero_show->photo}}" class="form-control @error('photo') is-invalid @enderror" placeholder="Input logo_icon Icon">
                             @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="exampleFormControlInput1" class="form-label">Old Photo</label> 
                            <img src="{{asset($hero_show->photo)}}" width="130px"class="my-3" height="130px" alt="">      
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Button</label>
                             <input type="text"  name="button" value="{{$hero_show->button}}" class="form-control @error('button') is-invalid @enderror" placeholder="Input button name">
                             @error('button')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Updated</button>
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