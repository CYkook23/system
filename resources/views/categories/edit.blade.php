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
            <a href="{{ route('categories.index') }}" > <button type="submit" class="btn btn-info text-light" >New Category</button></a>
          </div>
          <div class=" my-3 shadow  mb-5 bg-body-tertiary rounded">
            <h3 class="card-header bg-dark text-center text-light">Edit Category</h3>
            <div class="card-body">
              @if(session('message'))
              <div style="color: green;">{{ session('message') }}</div>
              @endif 
              <form action="{{ route('categories.edit', $category) }}" method="post">
                @csrf 
                <div style="margin-bottom: 1em;">
                  <label for="name"  class="form-label">Name</label>
                  <input type="text" name="name" id="name" placeholder="Enter category" value="{{ $category->name }}" class="form-control">
                  @error('name')
                  <div style="color: red; ">{{ $message }}</div>
                  @enderror 
                </div>
                <div style="margin-bottom: 1em;">
                  <label for="description"  class="form-label">Description</label>
                  <input type="text" name="description" id="description" placeholder="Enter description" 
                  value="{{ $category->description }}" class="form-control">      
                  @error('description')
                  <div style="color: red; ">{{ $message }}</div>
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