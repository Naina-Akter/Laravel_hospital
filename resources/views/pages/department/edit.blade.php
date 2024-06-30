@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Edit Department</h2>
  <div class="card-header">
  <h2 class="btn btn-info" ><b><a class=" text-dark" href="{{route('doctors.index')}}">Department Lists</a></b></h2>
  </div>

  <div class="card-body">
  <form action="{{route('departments.update', $dept->id)}}" method="post">
    @csrf
    @method('PUT')

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control"  name="name" value="{{old('name', $dept->name)}}">
  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <select name="status" class="form-control">
      <option selected>{{old('status', $dept->status==1 ? 'active' : 'inactive')}}</option>
      <option value="1">Active</option>
      <option value="0">inactive</option>
    </select>
  </div>
   
    <button type="submit" class="btn-lg btn btn-warning">Update</button>

     </form>

     


  </div>
</div>
 
 
@endsection