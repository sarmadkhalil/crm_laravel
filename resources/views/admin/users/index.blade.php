@extends('layouts.master')

@section('title')
  User Table
@endsection



@section('content')
<div class="row">
  @foreach($users as $user)
  <div class="col-md-4">
    <div class="card bg-dark text-white">
      <div class="card-header">
        <div class="card-title">
          <div class="row">
            <div class="col-5">
              <img src="/images/profile.jpg" style="overflow:hidden; height:120px; width:120px; border-radius:50%;">
            </div>
            <div class="col-7 mt-5">
              <h5>{{ $user->name }}</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <tr>
            <td class="font-weight-bold">Department</td>
            <td>IT</td>
          </tr>
          <tr>
            <td class="font-weight-bold">Role</td>
            <td>Web developer</td>
          </tr>
          <tr>
            <td class="font-weight-bold">Position</td>
            <td>Team Lead</td>
          </tr>
          <tr>
            <td class="font-weight-bold">Extension</td>
            <td>174</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  @endforeach
</div>
<!-- <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title"> <h4>User Table<a href="/new-user" class="btn btn-primary btn-sm btn-outline-primary pull-right">New User</a></h4></div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Name
              </th>
              <th>
                Usertype
              </th>
              <th>
                Email
              </th>
              <th class="text-right">
                Action
              </th>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>
                  {{ $user->name }}
                </td>
                <td>
                  {{ $user->usertype }}
                </td>
                <td>
                  {{ $user->email }}
                </td>
                <td class="text-right">
                  <a href="/users/{{ $user->id }}" class="btn btn-primary btn-sm">View</a>
                  <a class="btn btn-sm btn-warning" href="users/{{$user->id}}/edit">Edit</a>
                  <button type="button" class="btn btn-sm btn-danger" name="button">Delete</button>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> -->
@endsection
