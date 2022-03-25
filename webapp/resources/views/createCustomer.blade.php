@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add User</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('createcustomer')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="customer_name" class="form-control" placeholder="Enter Customer Name" />
   </div>
   <div class="form-group">
    <input type="text" name="customer_address" class="form-control" placeholder="Enter Customer Address" />
   </div>
   <div class="form-group">
    <input type="text" name="customer_phonenumber" class="form-control" placeholder="Enter Customer Phone Number" />
   </div>
   <div class="form-group">
    <input type="text" name="customer_email" class="form-control" placeholder="Enter Customer Email" />
   </div>
   <div class="form-group">
    <input type="text" name="customer_username" class="form-control" placeholder="Enter Customer Username" />
   </div>
   <div class="form-group">
    <input type="text" name="customer_password" class="form-control" placeholder="Enter Customer Password" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection