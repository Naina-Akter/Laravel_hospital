@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Presceiption Lists</h2>
  <div class="card-header">
    <h2 class="btn btn-info"><b>Create Presceiption  </b></h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered text-dark text-center">
      <thead>
        <tr>
          <th scope="col">SL No.</th>
          <th scope="col">Doctor Name</th>
          <th scope="col">Patient Name</th>
          <th scope="col">Medicine</th>
          <th scope="col">Dose</th>
          <th scope="col">Day</th>
          <th scope="col">Date</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($presceiption as $key=>$item)
        <tr>
          <td scope="row">{{++$key}}</td>
          
          <td>{{$item->doctor}}</td>
          <td>{{$item->patient}}</td>
          <td>{{$item->medicine}}</td>
          <td>{{$item->dose}}</td>
          <td>{{$item->day}}</td>
          <td>{{$item->date}}</td>
          <th class="text-center">
          <button class="btn btn-primary text-dark"><b>EDIT</b></button>
          <button class="btn btn-danger text-dark"><b>Delete</b></button>
              <button class="btn btn-info text-dark"><b>Show</b></button>
            
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
 
 
@endsection