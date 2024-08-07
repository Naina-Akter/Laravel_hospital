@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Edit Addmission</h2>
  <div class="card-header">  
   <h2 class="btn btn-info" ><b><a class=" text-dark" href="{{route('addmissions.index')}}">Addmission List</a></b></h2>
  </div>

  <div class="card-body">
     <form action="{{route('addmissions.update', $addmission->id)}}" method="post">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="name">Patient Name</label>
    <input type="text" class="form-control" value="{{old('patient_name', $addmission->patient_name)}}"  name="patient_name" placeholder="Patient Name">
  </div>

   

  <div class="form-group">
  <label for="addmission_date">Admission Date</label>
  <input type="date" class="form-control" id="addmission_date" name="addmission_date" value="{{ old('addmission_date', $addmission->addmission_date) }}" placeholder="Admission Date">
</div>

<div class="form-group">
    <label for="department">Department</label>
     <select name="department" class="form-control">
     <!-- <option selected>{{ old('department', $addmission->department) }}</option> -->
      @foreach ($dept as $item)
      <option value="{{$item->name}}" @selected ($item->name == $addmission->department) > {{$item->name}}</option>
      @endforeach
     </select>
  </div>

  <div class="form-group">
    <label for="name">Release Date</label>
    <input type="date" class="form-control" id="seat" name="release_date" placeholder="Release Date">
  </div>
  <div class="form-group">
    <label for="total_bill">Total Bill</label>
    <input type="number" class="form-control" value="{{old('total_bill', $addmission->total_bill)}}" name="total_bill">
  </div> 
    <button type="submit" class="btn-lg btn btn-warning">Add New</button>

     </form>


  </div>
</div>
 
 
@endsection