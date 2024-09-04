@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Seat Lists</h2>
  <div class="card-header ">
    <h2 class="btn btn-info"><b><a class="text-dark" href="{{route('seats.create')}}">Create Seat</a></b></h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered text-dark text-center">
      <thead>
        <tr>
          <th scope="col">SL No.</th>
          <th scope="col">Seat -Title</th>
           
          <th scope="col">Cost</th>
          <th scope="col">Status</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($seat as $key=>$item)
        <tr>
          <td scope="row">{{++$key}}</td> 
          <td>{{$item->title}}</td>
           
          <td>{{$item->cost}}</td>
          <td>{{$item->status == 0 ? 'Available' : 'Booked'}}</td>
          <th class="text-center">
         <form action="{{route('seat_book',$item->id)}}" method="post">
              @csrf
          <button type="submit" class="btn btn-danger text-dark" @disabled($item->status==1)><b>Booked</b></button>
           </form>
            
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="mb-4 pt-3">
    {{$seat->links('pagination::bootstrap-5')}}
  </div>
</div>
 
 
@endsection