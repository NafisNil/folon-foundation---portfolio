
@include('backend.sessionMsg')
<div class="card-body">


    <div class="form-group row">
        <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
        <div class="col-md-6">

        <img id="showImage" src="{{(!empty($edit->logo))?URL::to('storage/'.$edit->logo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
      </div>
    </div>
      <div class="form-group">
        <label for="exampleInputFile">Logo <span style="color:red" >*</span></label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="logo" class="custom-file-input"  id="image">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>

        </div>
      </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Title <span style="color:red" >*</span></label>

    <input type="text" class="form-control" name="title" value="{!!old('title',@$edit->title)!!}">

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Link <span style="color:red" >*</span></label>

    <input type="url" class="form-control" name="link" value="{!!old('link',@$edit->link)!!}">

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Description <span style="color:red" >*</span></label>

    <textarea name="desc" id="" cols="30" rows="10" class="form-control">{!!old('description',@$edit->description)!!}</textarea>

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Location <span style="color:red" >*</span></label>

    <textarea name="address" id="" cols="30" rows="10" class="form-control">{!!old('address',@$edit->address)!!}</textarea>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Date <span style="color:red" >*</span></label>

    <input type="date" class="form-control" name="date" value="{!!old('date',@$edit->date)!!}">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Time <span style="color:red" >*</span></label>

    <input type="time" class="form-control" name="time" value="{!!old('time',@$edit->time)!!}">

  </div>


</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>



<script>

    CKEDITOR.replace( 'desc' );
    CKEDITOR.replace( 'address' );

</script>




