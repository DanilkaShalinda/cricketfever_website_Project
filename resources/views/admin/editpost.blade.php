<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit Product</title>
  </head>
  <body>


    <div class="modal-body col-12">
        <h1 class="text-center"> Edit Post details</h1>

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


            <form action="/updatepost" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="postid">Post Id</label>
              <input type="text" name="id" readonly value="{{$data['id']}}" class="form-control" placeholder="Post Id">
            </div>
            <div class="form-group">
              <label for="posttitle">Enter Post Title</label>
              <input type="text" value="{{$data['title']}}" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="postdescription">Enter Post Description</label>
              <div class="form-group">

              <textarea class="form-control" value="" name="description"  rows="4">{{$data['description']}}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="cover image">Attach cover Image</label>
              <div class="form-group">

              <input type="file" name="cover_image" value="{{$data['cover_image']}}" class="form-control" id="exampleFormControlInput1" placeholder="cover image">
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

