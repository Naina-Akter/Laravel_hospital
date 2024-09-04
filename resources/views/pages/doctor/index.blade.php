@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Doctor Lists</h2>
  <div class="card-header">
    
    <h2 class="btn btn-info"><b> <a class="text-dark" href="{{route('doctors.create')}}">Create Doctor </a> </b></h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered text-dark text-center">
      <thead>
        <tr>
          <th scope="col">SL No.</th>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Qualification</th>
          <th scope="col">Fee</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>        
          <th scope="col">Designation</th>
          <th scope="col">Department</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($doctor as $key=>$item)
        <tr>
          <td scope="row">{{++$key}}</td>
          <td><img src="{{asset('')}}assets/images/uploads/{{$item->img}}" width="50px" style="border-radius: 5px" alt="" srcset=""></td>
          <td>{{$item->name}}</td>
          <td>{{$item->qualification}}</td>
          <td>{{$item->fee}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->phone}}</td>
          <td>{{$item->designation}}</td>
          <td>{{$item->dept->name}}</td>
          <th class="text-center">
            <a href="{{route('doctors.edit', $item->id)}}">
          <button class="btn btn-primary text-dark"><b>EDIT</b></button>
          <form action="{{route('doctors.destroy',$item->id)}}" method="post" class='d-inline'>
            @csrf
            @method('DELETE')
          <button type='submit' class="btn btn-danger text-dark" onclick="return(confirm('Are You Sure to Delete?'))" ><b>Delete</b></button>   
          </form>     
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
      <div class="px-5  mb-3">
           {{$doctor->links('pagination::bootstrap-5')}}
      </div>
</div>
 
 
@endsection