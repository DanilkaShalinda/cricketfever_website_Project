<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update post</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

      <div class="modal-body col-12 ">
        <h1 class="text-center"> Edit Series details</h1>
        @if(count($errors) > 0 )
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              Please Fill All Required Fields.!
          </div>
      @endif
      @if(session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          {{ session()->get('message') }}
      </div>
      @endif


          <form action="/updateseries" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="id">Series Id</label>
              <input type="text" name="id" readonly value="{{$data['id']}}" class="form-control" placeholder="Post Id">
            </div>
            <div class="form-group">
              <label for="posttitle">attach cover image</label>
              <input type="file" value="{{$data['cover_image']}}" name="cover_image" class="form-control" >
            </div>
            <div class="form-group">
              <label for="posttitle">Enter Series Title</label>
              <input type="text" value="{{$data['title']}}" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="postdescription">Enter Series Description</label>
              <div class="form-group">

              <textarea class="form-control" value="" name="description"  rows="4">{{$data['description']}}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="postdescription">Attach images</label>
              <input type="file" name="image_1" value="{{$data['image_1']}}" class="form-control" id="exampleFormControlInput1" placeholder="image_1">
              <input type="file" name="image_2" value="{{$data['image_2']}}" class="form-control" id="exampleFormControlInput1" placeholder="image_2">
              <input type="file" name="image_3" value="{{$data['image_3']}}" class="form-control" id="exampleFormControlInput1" placeholder="image_3">
              <input type="file" name="image_4" value="{{$data['image_4']}}" class="form-control" id="exampleFormControlInput1" placeholder="image_4">
              <input type="file" name="image_5" value="{{$data['image_5']}}" class="form-control" id="exampleFormControlInput1" placeholder="image_5">
              <input type="file" name="image_6" value="{{$data['image_6']}}" class="form-control" id="exampleFormControlInput1" placeholder="image_6">

            </div>
            <div class="">
              <div class="modal-footer">
                <a type="button" class="btn btn-secondary" onclick="javascript:window.close()">Close</a>
                <button type="submit" class="btn btn-primary">save changes</button>
              </div>

            </div>
          </form>

      </div>

</body>
</html>
