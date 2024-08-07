@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Appointment Lists</h2>
  <div class="card-header">
    
     
  </div>
  <div class="card-body">
    <table class="table table-bordered text-dark text-center">
      <thead>
        <tr>
          <th scope="col">SL No.</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Date</th>
          <th scope="col">Department</th>        
          <th scope="col">Messages</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($appoint as $key=>$item)
        <tr>
          <td scope="row">{{++$key}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->phone}}</td>
          <td>{{$item->date}}</td>
          <td>{{$item->department->name}}</td>
          <td>{{substr($item->message,0,20).'...'}}</td>
          
          <th class="text-center">
            <a href="{{route('appointments.edit', $item->id)}}">
          <button class="btn btn-primary text-dark"><b>Approve</b></button>
          <form action="{{route('appointments.destroy', $item->id)}}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" onclick="return(confirm('Are you sure to Delete?'))" type="submit">Delete</button>
          </form>        
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
 
 
@endsection