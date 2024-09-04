@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Add Department</h2>
  <div class="card-header">  
   <h2 class="btn btn-info" ><b><a class=" text-dark" href="{{route('doctors.index')}}">Department Lists</a></b></h2>
  </div>

  <div class="card-body">
     <form action="{{route('departments.store')}}" method="post">
    @csrf

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Department">
  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <select name="status" class="form-control">
      <option selected disabled>Select One</option>
      <option value="0">Active</option>
      <option value="1">inactive</option>
    </select>
  </div>
   
    <button type="submit" class="btn-lg btn btn-warning">Add New</button>

     </form>


  </div>
</div>
 
 
@endsection