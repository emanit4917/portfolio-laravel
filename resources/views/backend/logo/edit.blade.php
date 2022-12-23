@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-9">
            <div class="card m-auto">
                <div class="card-header text-success">
                    <h6>Contact Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('logo.updated', $logo_id->id)}}" method="POST">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Logo Title</label>
                             <input type="text" name="logo_title" value="{{$logo_id->logo_title}}" class="form-control @error('logo_title') is-invalid @enderror"  placeholder="Write your logo_title here">
                             @error('logo_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Logo Icons</label>
                             <input type="text"  name="logo_icon" value="{{$logo_id->logo_icon}}" class="form-control @error('logo_icon') is-invalid @enderror" placeholder="Input logo_icon Icon">
                             @error('logo_icon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Logo Updated</button>
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