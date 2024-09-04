@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Add Department</h2>
  <div class="card-header">  
   <h2 class="btn btn-info" ><b><a class=" text-dark" href="#">Seat</a></b></h2>
  </div>

  <div class="card-body">
      
  <form method="post" action="{{route('admission.admit')}}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="patient_name" value="" ><br>
                  <label for="Seat">Seat Title</label>
                  <select name="seat" class="form-control">
                    <option selected disabled>Select Seat</option>
                    @foreach ($seat as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-success m-auto d-block w-25">Submit</button>
              </div>
            </form>

  </div>
</div>
 
 
@endsection