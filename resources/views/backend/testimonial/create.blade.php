@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6>Logo Data View</h6>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">title_name</th>
                        <th scope="col">description</th>
                        <th scope="col">title_grate</th>
                        <th scope="col">photo_thum</th>
                        <th scope="col">photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($testmonial_id as $key => $test_row)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$test_row->title_name}}</td>
                        <td>{{$test_row->desc}}</td>
                        <td>{{$test_row->title_grate}}</td>
                        <td>{{$test_row->photo_thum}}</td>
                        <td>{{$test_row->photo}}</td>
                        <td>
                          
                            <a href="{{route('testmonial.edit', $test_row->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('testmonial.delete', $test_row->id)}}" class="btn btn-danger">Delete</a>
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