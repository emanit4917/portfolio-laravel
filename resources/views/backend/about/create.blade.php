@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6>Global Data View</h6>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">hello</th>
                        <th scope="col">title</th>
                        <th scope="col">desc</th>
                        <th scope="col">style_title</th>
                        <th scope="col">photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($about_dbs as $key => $rows)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$rows->hello}}</td>  
                        <td>{{$rows->title}}</td>  
                        <td>{{$rows->desc}}</td>  
                        <td>{{$rows->style_title}}</td>  
                        <td>{{$rows->photo}}</td>  
                         <td>
                            <a href="{{route('about.delete', $rows->id)}}" class="btn btn-danger">Delete</a>
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