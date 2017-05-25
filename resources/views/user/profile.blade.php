@extends('layouts.app')

<style type="text/css">
  .profile-img{
    max-width: 150px;
    border: 5px solid #fff;
    border-radius: 100px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
  }

</style>

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-body text-center">
        <img class='profile-img' src="http://airninja.it/wp-content/uploads/2015/12/Ninja-2-512-2.png">
        <h1>{{$user->name}}</h1>
        <h5>{{$user->username}}</h5>
        <h5>{{$user->email}}</h5>
        <h5>{{$user->pob}},  {{$user->dob->format('l j F Y')}} ({{$user->dob->age}} years old) </h5>
        <h5>{{$user->jk}}</h5>
        <h5>{{$user->pol}}</h5>

        <button class="btn btn-success">Follow</button>

      </div>

    </div>

  </div>

</div>
@endsection
