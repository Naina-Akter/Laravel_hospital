@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Add New Addmission</h2>
  <div class="card-header">  
   <h2 class="btn btn-info" ><b><a class=" text-dark" href="{{route('addmissions.index')}}">Addmission List</a></b></h2>
  </div>

  <div class="card-body">
     <form action="{{route('addmissions.store')}}" method="post">
    @csrf

  <div class="form-group">
    <label for="name">Patient Name</label>
    <input type="text" class="form-control"   name="patient_name" placeholder="Patient Name">
  </div>

  <div class="form-group">
    <label for="seat">Seat</label>
     <select name="seat" class="form-control">
      <option selected disabled>Select Your Seat</option>
      @foreach ($seat as $item)
      <option value="{{$item->title}}">{{$item->title}}</option>
      @endforeach
     </select>
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
    <label for="name">Addmission Date</label>
    <input type="date" class="form-control" id="seat" name="addmission_date" placeholder="Addmission Date">
  </div>

  <div class="form-group">
    <label for="name">Release Date</label>
    <input type="date" class="form-control" id="seat" name="release_date" placeholder="Release Date">
  </div>
  <div class="form-group">
    <label for="name">Total Bill</label>
    <input type="number" class="form-control" id="seat" name="total_bill" placeholder="Total Bill">
  </div>   
    <button type="submit" class="btn-lg btn btn-warning">Add New</button>

     </form>


  </div>
</div>
 
 
@endsection