@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Create Doctor</h2>
  <div class="card-header">
    <h2 class=" btn btn-info"><b><a class=" text-dark" href="{{route('doctors.index')}}">Doctor List</a>  </b></h2>
  </div>
  <div class="card-body">
<form action="{{route('doctors.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Doctor's Name">
  </div>
  <div class="form-group">
    <label for="qualification">Qualification</label>
    <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Doctor's Qualification">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Doctor's email">
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Doctor's Phone">
  </div>

  <div class="form-group">
    <label for="fee">Fee</label>
    <input type="number" class="form-control" id="fee" name="fee" placeholder="Doctor's Fee">
  </div>

  <div class="form-group">
    <label for="designation">Designation</label>
    <input type="text" class="form-control" id="designation" name="designation" placeholder="Doctor's Designation">
  </div>

  <div class="form-group">
    <label for="department">Department</label>
     <select name="department" class="form-control">
      <option selected disabled>Select Your Department</option>
      @foreach ($dept as $item)
      <option value="{{$item->name}}">{{$item->name}}</option>
      @endforeach
     </select>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
  </div>
  
  <div class="form-group">
    <label for="img">Img</label>
    <input type="file" class="form-control" id="img" name="img" placeholder="file">
  </div>

  <button type="submit" class="btn-lg btn btn-warning">Add New</button>
</form>


  </div>

  
</div>
 
 
@endsection