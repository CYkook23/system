@extends('app')
@section('content')
<html>
    <head>
        <title>Document</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <main class="login-form">
            <div class="container my-3">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div style="text-align:right" >
                        <a href="{{ route('products.index') }}" > <button type="submit" class="btn btn-info text-light" style="padding: 6px 20px;">Product List</button></a>
                    </div>
                    <div class=" my-3 shadow  mb-5 bg-body-tertiary rounded">
                        <h3 class="card-header bg-dark text-center text-light">Create Product</h3>
                        <div class="card-body">
                            @if(session('message'))
                            <div style="color: green;">{{ session('message') }}</div>
                            @endif 
                            <form action="{{ route('products.create')}}" method="post">
                                @csrf 
                                <div style="margin-bottom: 1em;">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter product" value="{{ old('name')}}" class="form-control">
                                    @error('name')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror 
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" name="price" id="price" placeholder="Enter price" value="{{ old('price')}}" class="form-control">
                                    @error('price')
                                        <div >{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select name="category_id" id="category_id" class="form-select">
                                        <option value="">Select</option>
                                        @foreach($categories as $category)
                                           <option 
                                           @if ($category->id == (int)old('category_id'))
                                            selected
                                            @endif
                                            value="{{ $category->id }}">{{ $category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
@endsection  

