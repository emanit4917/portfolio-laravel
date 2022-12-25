@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6>Single Portfolio Information View</h6>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Portfolio Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Technology</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Potfolio Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($portfolio_data as $key => $row)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$row->title}}</td>  
                        <td>{{$row->description}}</td>  
                        <td>{{$row->technolgy}}</td>  
                        <td>{{$row->category}}</td>  
                        <td>
                            <img src="{{asset($row->photo)}}" width="150" height="110" alt="">    
                        </td>  
                         <td>
                            <a href="{{route('single_port.edit', $row->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('single_port.delete', $row->id)}}" class="btn btn-danger">Delete</a>
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