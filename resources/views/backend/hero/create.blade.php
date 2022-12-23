@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6>Hero Data View</h6>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Title</th>
                        <th scope="col">Skill Title </th>
                        <th scope="col">Description </th>
                        <th scope="col">Photo </th>
                        <th scope="col">Button </th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($here_id as $key => $hero)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$hero->title}}</td>
                        <td>{{$hero->skill_title}}</td>
                        <td>{{$hero->short_desc}}</td>
                        <td>{{$hero->photo}}</td>
                        <td>{{$hero->button}}</td>
                        
                         <td>
                            <a href="{{route('hero.edit', $hero->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('hero.delete', $hero->id)}}" class="btn btn-danger">Delete</a>
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