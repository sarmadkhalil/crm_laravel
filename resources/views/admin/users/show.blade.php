@extends('layouts.master')

@section('title')
  {{$users->name}}
@endsection



@section('content')
  <div class="row">
    <div class="col-md-7">
      <div class="card card-chart bg-dark text-white">
        <div class="card-body">
          <h1>{{$users->name}}</h1>
          <p>I am web developer. Love Photography and hiking. This place can be used as description</p>

          <hr>

          <div class="row">
            <div class="col-md-6" style="padding-right:20px; border-right: 1px solid #ccc;">
              <h4>Job Information</h4>
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
            <div class="col-md-6">
              <h4>General Information</h4>
              <table class="table">
                <tr>
                  <td class="font-weight-bold">Date of Birth</td>
                  <td>14 July 1997</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Email</td>
                  <td>{{ $users->email }}</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Address</td>
                  <td>South City Plaza, Seri K., Malaysia</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Phone</td>
                  <td>+0182813427</td>
                </tr>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card">
        <img class="card-img-top" src="/images/profile.jpg">
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <div class="card card-chart card card-chart bg-dark text-white">
        <div class="card-header">
          <h4 class="card-title">Tasks Completed</h4>
          <table class="table">
            <thead>
              <th>
                Name
              </th>
              <th>
                Description
              </th>
              <th>
                Due Date
              </th>
              <th>
                Finish Date
              </th>
            </thead>
            <tbody>
              <tr>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
