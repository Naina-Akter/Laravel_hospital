@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Edit Seat</h2>
  <div class="card-header">  
   <h2 class="btn btn-info" ><b><a class=" text-dark" href="{{route('seats.index')}}">Seat Lists</a></b></h2>
  </div>

  <div class="card-body">
     <form action="{{route('seats.update', $seat->id)}}" method="post">
    @csrf
    @method('PUT')

  <div class="form-group">
    <label for="title">Seat Title</label>
    <input type="text" class="form-control" value="{{old('title', $seat->title)}}"  name="title" placeholder="Seat Title">
  </div>

  <div class="form-group">
    <label for="name">Cost</label>
    <input type="text" class="form-control" value="{{old('cost', $seat->cost)}}" name="cost" placeholder="Cost">
  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <select name="status" class="form-control">
    <option value="1" {{ old('status', $seat->status) == 1 ? 'selected' : '' }}>Available</option>
    <option value="0" {{ old('status', $seat->status) == 0 ? 'selected' : '' }}>Unavailable</option>
    </select>
  </div>
   
    <button type="submit" class="btn-lg btn btn-warning">Update Seat</button>

     </form>


  </div>
</div>
 
 
@endsection