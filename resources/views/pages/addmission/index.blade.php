@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Addmission Lists</h2>
  <div class="card-header">
    <h2 class="btn btn-info"><b><a href="{{route('addmissions.create')}}"> Create Addmission</a></b></h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered text-dark text-center">
      <thead>
        <tr>
          <th scope="col">SL No.</th>
          <th scope="col">Patient Name</th>          
          <th scope="col">Seat</th>
          <th scope="col">Department</th>
          <th scope="col">Addmission Date</th>
          <th scope="col">Release Date</th>
          <th scope="col">Total Bill</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($addmission as $key=>$item)
        <tr>
          <td scope="row">{{++$key}}</td> 
          <td>{{$item->patient_name}}</td> 
          <td>{{$item->seat}}</td>
          <td>{{$item->department}}</td>
          <td>{{$item->addmission_date}}</td>
          <td>{{$item->release_date}}</td>
          <td>{{$item->total_bill}}</td>
          <th class="text-center">
            <a href="{{route('addmissions.edit', $item->id)}}">
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