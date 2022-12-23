@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6>About Blog Post View</h6>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">title</th>
                        <th scope="col">desc</th>
                        <th scope="col">read</th>
                        <th scope="col">post_date</th>
                        <th scope="col">parenting</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($blog_data as $key => $blog)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$blog->title}}</td>  
                        <td>{{$blog->desc}}</td>  
                        <td>{{$blog->read}}</td>  
                        <td>{{$blog->post_date}}</td>  
                        <td>{{$blog->parenting}}</td>  
                         <td>
                            <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('blog.delete', $blog->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_script')
@if(session('del'))
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