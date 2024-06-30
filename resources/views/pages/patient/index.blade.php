@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Patient Lists</h2>
  <div class="card-header">
  <h2 class="btn btn-info"><b><a class="text-dark" href="{{route('patients.create')}}">Create Patients </a></b></h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered text-dark text-center">
      <thead class="title">
        <tr>
          <th scope="col">SL No.</th>
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="col">Address</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Gender</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($patient as $key=>$item)
        <tr>
          <td scope="row">{{++$key}}</td>
          
          <td>{{$item->name}}</td>
          <td>{{$item->age}}</td>
          <td>{{$item->address}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->phone}}</td>
          <td>{{$item->gender == 1 ? 'Female' : ($item->gender == 2 ? 'Male' : 'Other') }}</td>
          <th class="text-center">
            <a href="{{route('patients.edit', $item->id)}}">
          <button class="btn btn-primary text-dark"><b>EDIT</b></button>
          <button class="btn btn-danger text-dark"><b>Delete</b></button>
            
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
 
 
@endsection