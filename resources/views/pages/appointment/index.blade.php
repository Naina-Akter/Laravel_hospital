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
          <th scope="col">Status</th>
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
          <td>{{$item->status == 0 ? 'Pending' : 'Approved'}}</td>
          
          <th class="text-center">
            <form action="{{route('approved', $item->id)}}" method="post">
              @csrf
              <button type="submit" class="btn btn-primary text-dark" @disabled(
              $item->status == 1)><b>Approve</b></button>
            </form>
          </th>
        </tr> 
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="pt-2 mb-3">
    {{$appoint->links('pagination::bootstrap-5')}}
  </div>
</div>
 
 
@endsection