@extends('app')
@section('content')
<html>
  <head>
    <title>Document</title>
     <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-3">
      <div class="row justify-content-center" >
        <div class="col-md-9" >
          <div style="text-align:right" >
            <a href="{{ route('categories.create') }}" > <button type="submit" class="btn btn-info text-light" style="padding: 7px 20px;">New Category</button></a>
          </div>
          @if(session('message'))
          <div style="color: red;">{{session('message')}}</div>
            @endif
            <table  class="table table-striped  my-3 shadow p-3 mb-5 bg-body-tertiary rounded">
              <thead class=" text-light">
                <tr class="table-dark">
                  <td >No.</td>
                  <td >Name</td>
                  <td>Description</td>
                  <td >Timestamp</td>
                  <td >Action</td>
                </tr>
              </thead>
              <tbody>
                @forelse($categories as $key => $category)
                <tr>
                  <td>{{ $categories->firstItem() + $key }}.</td>
                  <td>{{ $category->name }} </td>
                  <td>{{ $category->description }} </td>
                  <td>{{ $category->created_at->format('F, d, Y')}}</td>
                  
                  <td>
                    <a href="{{ route('categories.edit', $category) }}" >
                      <button type="submit" class="btn btn-success " style="padding: 6px 22px;">Edit</button> </a>
                      <form action="{{ route('categories.delete', $category) }}" method="post" style="padding-top: 10px;">
                        @csrf 
                        <button type="submit" class="btn btn-danger">Delete</button>    
                      </form>                            
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="5">No data found in table</td>
                </tr>
                @endforelse
              </tbody>
           </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection     







