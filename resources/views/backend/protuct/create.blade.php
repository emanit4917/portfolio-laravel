@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6>Product Data View</h6>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Pro_title</th>
                        <th scope="col">Digital</th>
                        <th scope="col">Brand_name</th>
                        <th scope="col">Pro_photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($product_view as $key => $rows)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$rows->pro_title}}</td>
                        <td>{{$rows->digital}}</td>
                        <td>{{$rows->brand_name}}</td>
                        <td>{{$rows->pro_photo}}</td>
                        <td>
                            <a href="{{route('product.edit', $rows->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('product.delete', $rows->id)}}" class="btn btn-danger">Delete</a>
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