
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
    <label for="exampleInputEmail1">About <span style="color:red" >*</span></label>

    <textarea name="about" id="" cols="30" rows="10" class="form-control">{!!old('about',@$edit->about)!!}</textarea>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Mission <span style="color:red" >*</span></label>

    <textarea name="mission" id="" cols="30" rows="10" class="form-control">{!!old('mission',@$edit->mission)!!}</textarea>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Vision <span style="color:red" >*</span></label>

    <textarea name="vision" id="" cols="30" rows="10" class="form-control">{!!old('vision',@$edit->vision)!!}</textarea>

  </div>





</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>



<script>

    CKEDITOR.replace( 'vision' );
    CKEDITOR.replace( 'mission' );
    CKEDITOR.replace( 'about' );

</script>


