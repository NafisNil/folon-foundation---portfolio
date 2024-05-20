@extends('backend.layout.master')
@section('title')
    about Us - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>about Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">about Us</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row offset-1">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">about Us</h3>


                <a href="{{route('aboutus.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>



              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>About</th>
                    <th>Mission</th>
                    <th>Vision</th>
                    <th>Photo</th>

                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>






                    @if ($aboutusCount > 0)



                  <tr>
                    <td>1</td>
                    <td>{!!$aboutus->about!!}</td>
                    <td>{!!$aboutus->mission!!}</td>
                    <td>{!!$aboutus->vision!!}</td>
                    <td> <img src="{{(!empty($aboutus->logo))?URL::to('storage/'.$aboutus->logo):URL::to('image/no_image.png')}}" alt="" style="max-height:150px"></td>




                   <td>

                      <a href="{{route('aboutus.edit',[$aboutus->id])}}" title="Edit"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>



                      @if ($aboutusCount > 0 )

                      <form action="{{route('aboutus.destroy',[$aboutus])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></button>
                      </form>
                      @endif


                    </td>

                  </tr>

                 @endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>About</th>
                    <th>Mission</th>
                    <th>Vision</th>
                    <th>Photo</th>
                    <th>Action</th>

                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
