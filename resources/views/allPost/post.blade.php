    @extends('welcome')
    @section('welcome_msg')
      <span class="subheading">Please put your effort and help to know others!</span>
    @endsection
  @section('content')
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <br>
            <a href="{{route('addCategory')}}" class = "btn btn-danger">ADD CATEGORY</a>
            <a href="{{route('allCategory')}}" class = "btn btn-info" >ALL CATEGORY</a>
            <br>

            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Post Title</label>
                  <input type="text" class="form-control" placeholder="Title" id="title" required>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Post Category</label>
                  <select class="form-control" name="category-id">
                    <option>type1</option>
                    <option>type2</option>
                  </select>

                </div>
              </div>
                <br>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Post Image</label>
                  <input type="file" name="img" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Details</label>
                  <input type="text" name="dtl" class="form-control" placeholder="Details" required>
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
