@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-auto">
                <div class="card-header text-success">
                    <h6>Global Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('global.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Global Title</label>
                             <input type="text" name="global_title" class="form-control  @error('global_title') is-invalid @enderror" placeholder="global_title here">
                             @error('global_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Global Description</label>
                             <input type="text" name="global_desc" class="form-control  @error('global_desc') is-invalid @enderror" placeholder="global_desc here">
                             @error('global_desc')
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