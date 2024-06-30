@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Add New Patient</h2>
  <div class="card-header">  
   <h2 class="btn btn-info" ><b><a class=" text-dark" href="{{route('patients.index')}}">Add New Patient</a></b></h2>
  </div>

  <div class="card-body">
     <form action="{{route('patients.store')}}" method="post">
    @csrf

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control"   name="name" placeholder="Patient Name">
  </div>

  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" id="age" name="age" placeholder="Patient Age">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" id="address"  placeholder="Patient Address" ></textarea>
  </div>

  <div class="form-group">
    <label for="age">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="Patient phone">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Patient Email">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Patient password">
  </div>

  <div class="form-group">
    <label for="status">Gender</label>
    <select name="gender" class="form-control">
      <option selected disabled>Select One</option>
      <option value="2">Male</option>
      <option value="1">Female</option>
      <option value="0">Other</option>
    </select>
  </div>
   
    <button type="submit" class="btn-lg btn btn-warning">Add New Patient</button>

     </form>


  </div>
</div>
 
 
@endsection