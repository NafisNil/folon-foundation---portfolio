@extends('backend.layout.master')
@section('title')
    Settings - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
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
                <h3 class="card-title">Settings</h3>

                @if ($settingCount < 1)
                <a href="{{route('setting.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                @endif




              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>1</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Address</th>


                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>





                    @if ($settingCount > 0)



                  <tr>
                    <td>1</td>
                    <td>{{@$setting->phone}}</td>
                    <td>{{@$setting->email}}</td>
                    <td> <img src="{{(!empty($setting->logo))?URL::to('storage/'.$setting->logo):URL::to('image/no_image.png')}}" alt="" style="max-height:150px"></td>
                    <td>{!!$setting->address!!}</td>



                   <td>


                      <a href="{{route('setting.edit',[$setting])}}" title="Edit"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>

                      @if ($settingCount > 0 )


                      <form action="{{route('setting.destroy',[$setting])}}" method="POST">
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
                    <th>1</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Address</th>
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
