
@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Edit Patient</h2>
  <div class="card-header">  
   <h2 class="btn btn-info" ><b><a class=" text-dark" href="{{route('patients.index')}}">Patient List</a></b></h2>
  </div>

  <div class="card-body">
     <form action="{{route('patients.update', $patient->id)}}" method="post">
    @csrf
    @method('PUT')

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control"  value="{{old('name', $patient->name)}}" name="name" placeholder="Patient Name">
  </div>

  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" value="{{old('age',$patient->age)}}" name="age" placeholder="Patient Age">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" placeholder="Patient Address" >{{ old('address', $patient->address) }}</textarea>
  </div>

  <div class="form-group">
    <label for="age">Phone</label>
    <input type="number" class="form-control" value="{{old('phone' ,$patient->phone)}}" name="phone" placeholder="Patient phone">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" value="{{old('email' ,$patient->email)}}" name="email" placeholder="Patient Email">
  </div>

  
  <div class="form-group">
    <label for="status">Gender</label>
    <select name="gender" class="form-control">
    <option value="0" {{ old('gender', $patient->gender) == 0 ? 'selected' : '' }}>Male</option>
    <option value="1" {{ old('gender', $patient->gender) == 1 ? 'selected' : '' }}>Female</option>
    <option value="2" {{ old('gender', $patient->gender) == 2 ? 'selected' : '' }}>Other</option>
  </select>
  </div>
   
    <button type="submit" class="btn-lg btn btn-warning">Update Patient</button>

     </form>


  </div>
</div>
 
 
@endsection