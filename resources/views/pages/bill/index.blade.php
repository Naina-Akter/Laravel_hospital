@extends('layouts.app')
@section('page')
 
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Bill Lists</h2>
  <div class="card-header">
    <h2 class="btn btn-info"><b><a href="{{route('addmissions.create')}}"> Create Addmission</a></b></h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered text-dark text-center">
      <thead>
        <tr>
          <th scope="col">SL No.</th>
          <th scope="col">Patient Name</th>          
          <th scope="col">Date</th>
          <th scope="col">Total Amout</th>
           
        </tr>
      </thead>
      <tbody>
        @foreach ($bill as $key=>$item)
        <tr>
          <td scope="row">{{++$key}}</td> 
          <td>{{$item->patient_name}}</td> 
          <td>{{$item->date}}</td>
          <td>{{$item->amount}}</td>
         
          <th class="text-center">
            <form action="{{route('addmited', $item->id)}}" method='post'>
             @csrf
           
             <button type='submit' class="btn btn-danger text-dark" @disabled($item->status==1)><b>addmited</b></button>
          </form>
            
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
 
 
@endsection

@endsection