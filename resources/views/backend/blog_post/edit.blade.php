@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-auto">
                <div class="card-header text-success">
                    <h6>About Blog Post Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('blog.updated', $blog_id->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title</label>
                             <input type="text" name="title" value="{{$blog_id->title}}" class="form-control  @error('title') is-invalid @enderror" placeholder="Hello title here">
                             @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                         </div>
                        
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Description</label>
                             <input type="text" name="desc" value="{{$blog_id->desc}}" class="form-control  @error('desc') is-invalid @enderror" placeholder="description here">
                             @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Read more</label>
                             <input type="text" name="read" value="{{$blog_id->read}}" class="form-control  @error('read') is-invalid @enderror" placeholder="read more here">
                             @error('read')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Post Date</label>
                             <input type="date" name="post_date" value="{{$blog_id->post_date}}" class="form-control  @error('post_date') is-invalid @enderror" placeholder="post_date">
                             @error('post_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Parenting</label>
                             <input type="text" name="parenting" value="{{$blog_id->parenting}}" class="form-control  @error('parenting') is-invalid @enderror" placeholder="Parenting">
                             @error('parenting')
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