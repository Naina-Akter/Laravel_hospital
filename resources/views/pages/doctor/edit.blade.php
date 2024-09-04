@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Edit Doctor</h2>
  <div class="card-header">
    <h2 class=" btn btn-info"><b><a class=" text-dark" href="{{route('doctors.index')}}">Doctor List</a>  </b></h2>
  </div>
  <div class="card-body">
    <form action="{{route('doctors.update', $doctor->id)}}" method="post" enctype="multipart/form-data">
        @csrf 

        @method('put')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" value="{{old('name', $doctor->name)}}" name="name" placeholder="Doctor's Name">
  </div>
  <div class="form-group">
    <label for="qualification">Qualification</label>
    <input type="text" class="form-control" value="{{old('qualification',$doctor->qualification)}}" name="qualification" placeholder="Doctor's Qualification">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="{{old('email', $doctor->email)}}" name="email" placeholder="Doctor's email">
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" value="{{old('phone',$doctor->phone)}}" name="phone" placeholder="Doctor's Phone">
  </div>

  <div class="form-group">
    <label for="fee">Fee</label>
    <input type="number" class="form-control" value="{{old('fee', $doctor->fee)}}" name="fee" placeholder="Doctor's Fee">
  </div>

  <div class="form-group">
    <label for="designation">Designation</label>
    <input type="text" class="form-control" value="{{old('designation',$doctor->designation)}}" name="designation" placeholder="Doctor's Designation">
  </div>

  <div class="form-group">
    <label for="department">Department</label>
     <select name="department" class="form-control">
     <option selected>{{ old('department', $doctor->dept->name) }}</option>
      @foreach ($dept as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
     </select>
  </div>
 
  
  <div class="form-group">
    <label for="img">Img</label>
    <input type="file" class="form-control" id="img" name="img" placeholder="file">
  </div>

  <button type="submit" class="btn-lg btn btn-warning">Update</button>
    </form>


  </div>

  
</div>
 
 
@endsection