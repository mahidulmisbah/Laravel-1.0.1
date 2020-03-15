@extends('welcome')
@section('welcome_msg')
  <span class="subheading">You can also inrease our volume by this page!</span>
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <br>
        <a href="{{route('addCategory')}}" class = "btn btn-danger">ADD CATEGORY</a>
        <a href="{{route('allCategory')}}" class = "btn btn-info" >ALL CATEGORY</a>
        <br>

        <form action="{{route('store.category')}}" method="post">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category Name</label>
              <input type="text" class="form-control" placeholder="Title" id="title" name = 'name' required>
            </div>
          </div>
          <br>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Address</label>
              <input type="text" name="adrress" class="form-control" placeholder="Address" required>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
