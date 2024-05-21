
@include('backend.sessionMsg')
<div class="card-body">




  <div class="form-group">
    <label for="exampleInputEmail1">Facebook <span style="color:red" >*</span></label>

    <input type="url" class="form-control" name="facebook" value="{!!old('facebook',@$edit->facebook)!!}">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Twitter <span style="color:red" >*</span></label>

    <input type="url" class="form-control" name="twitter" value="{!!old('twitter',@$edit->twitter)!!}">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Linkedin <span style="color:red" >*</span></label>

    <input type="url" class="form-control" name="linkedin" value="{!!old('linkedin',@$edit->linkedin)!!}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Youtube <span style="color:red" >*</span></label>

    <input type="url" class="form-control" name="youtube" value="{!!old('youtube',@$edit->youtube)!!}">
  </div>



</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>



