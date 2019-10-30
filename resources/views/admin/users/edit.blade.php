@extends('layouts.master')


@section('title')
  Edit User
@endsection



@section('content')
  <div class="row">
    <div class="col-md-8">
      <div class="card card-chart text-white" style="background-color: rgba(0, 0, 0, 0.2);">
        <div class="card-header bg-dark">
          <h4 class="card-title" style=" padding-bottom: 25px;">Edit {{ $users->name }} <a href="/users" class="btn btn-sm btn-primary pull-right">Back</a> </h4>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group text-white">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Example select</label>
              <select class="form-control text-white" id="exampleFormControlSelect1">
                <option class="text-white">1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Example multiple select</label>
              <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-outline-primary">Submit</button>
          </form>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-chart text-white" style="background-color: rgba(0, 0, 0, 0.2);">
        <img class="card-img-top" src="/images/profile.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title mt-0">{{$users->name}}, 22</h4>
          <h4 class="card-category">Web developer, {{$users->usertype}}</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('scripts')

@endsection
