@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Add New Seat</h2>
  <div class="card-header">  
   <h2 class="btn btn-info" ><b><a class=" text-dark" href="{{route('seats.index')}}">Seat Lists</a></b></h2>
  </div>

  <div class="card-body">
     <form action="{{route('seats.store')}}" method="post">
    @csrf

  <div class="form-group">
    <label for="name">Seat Title</label>
    <input type="text" class="form-control"   name="title" placeholder="Seat Title">
  </div>

  <div class="form-group">
    <label for="name">Cost</label>
    <input type="text" class="form-control" id="name" name="cost" placeholder="Cost">
  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <select name="status" class="form-control">
      <option selected disabled>Select One</option>
      <option value="1">Available</option>
      <option value="0">Unavailable</option>
    </select>
  </div>
   
    <button type="submit" class="btn-lg btn btn-warning">Add New</button>

     </form>


  </div>
</div>
 
 
@endsection