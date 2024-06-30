@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Edit Medicine</h2>
  <div class="card-header">  
   <h2 class="btn btn-info" ><b><a class=" text-dark" href="{{route('medicines.index')}}">Medicine Lists</a></b></h2>
  </div>

  <div class="card-body">
     <form action="{{route('medicines.update', $medicine->id)}}" method="post">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" value="{{old('name', $medicine->name)}}" name="name" placeholder="Medicine name">
  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <select name="status" class="form-control">
      <option selected>{{old('name', $medicine->status==1? 'Active' : 'Inactive')}}</option>
      <option value="1">Active</option>
      <option value="0">inactive</option>
    </select>
  </div>
   
    <button type="submit" class="btn-lg btn btn-warning">Add New</button>

     </form>


  </div>
</div>
 
 
@endsection

 