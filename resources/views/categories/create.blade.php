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
            <a href="{{ route('categories.index') }}" > <button type="submit" class="btn btn-info text-light" >Category List</button></a>
          </div>
          <div class=" my-3 shadow  mb-5 bg-body-tertiary rounded">
            <h3 class="card-header bg-dark text-center text-light">Create Category</h3>
            <div class="card-body">
              @if(session('mesage'))
              <div style="color: green;">{{ session('mesage') }}</div>
              @endif
              <form action="{{ route('categories.create') }}" method="post">
                @csrf
                <div style="margin-bottom: 1em;">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter category" class="form-control">
                 @error('name')
                 <div style="color: red;">{{ $message }}</div>
                  @enderror
                </div>
                <div style="margin-bottom: 1em;">
                <label for="name" class="form-label">Description</label>
                <textarea type="text" name="description" id="description" placeholder="Enter description" 
                class="form-control"  rows="3"></textarea> 
                @error('description')
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

