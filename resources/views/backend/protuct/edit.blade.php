@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-auto">
                <div class="card-header text-success">
                    <h6>Product Edit Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('product.updated', $product_show->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Product Title</label>
                             <input type="text" name="pro_title" value="{{$product_show->pro_title}}" class="form-control @error('pro_title') is-invalid @enderror"  placeholder="Write your pro_title here">
                             @error('pro_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Digital Brand</label>
                             <input type="text" name="digital" value="{{$product_show->digital}}" class="form-control @error('digital') is-invalid @enderror" placeholder="write digital ">
                             @error('digital')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Product brand Name</label>
                             <input type="text"  name="brand_name" value="{{$product_show->brand_name}}" class="form-control @error('brand_name') is-invalid @enderror" placeholder="write brand_name ">
                             @error('short_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Product Photo</label>
                             <input type="file"  name="pro_photo" value="{{$product_show->pro_photo}}" class="form-control @error('pro_photo') is-invalid @enderror" placeholder="Input pro_photo">
                             @error('pro_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="exampleFormControlInput1" class="form-label">Old Photo</label> 
                            <img src="{{asset($product_show->pro_photo)}}" width="230px"class="my-3" height="230px" alt=""> 
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