@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Department Lists</h2>
  <div class="card-header">
    <h2 class="btn btn-info"><b><a class="text-dark" href="{{route('departments.create')}}">Create Department </a></b></h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered text-dark text-center">
      <thead>
        <tr>
          <th scope="col">SL No.</th>
          <th scope="col">Name</th>
          <th scope="col">Status</th>
           
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dept as $key=>$item)
        <tr>
          <td scope="row">{{++$key}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->status== 0? 'Active' : 'Inactive'}}</td> 

          <th class="text-center">
          <a href="{{route('departments.edit', $item->id)}}">
          <button class="btn btn-primary text-dark"><b>EDIT</b></button>
           <form action="{{route('departments.destroy',$item->id)}}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type='submit' class="btn btn-danger text-dark" onclick="return(confirm('Are you sure to Delete?'))"><b>Delete</b></button>
           </form>            
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="pt-2 mb-3">
    {{$dept->links('pagination::bootstrap-5')}}
  </div>
</div>
 
 
@endsection