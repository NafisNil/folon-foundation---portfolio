@extends('backend.layout.master')
@section('title')
    Counter - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Counter</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Counter</li>
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
                <h3 class="card-title">Counter</h3>


                <a href="{{route('counter.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>



              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Count</th>


                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>






                  @foreach ($counter as $item)





                  <tr>
                    <td>1</td>
                    <td>{!!$item->name!!}</td>
                    <td>{!!$item->icon!!} <i class="fa-brands fa-threads"></i></td>
                    <td>{!!$item->count!!}</td>



                   <td>

                      <a href="{{route('counter.edit',[$item])}}" title="Edit"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>





                      <form action="{{route('counter.destroy',[$item])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></button>
                      </form>



                    </td>

                  </tr>

                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Count</th>
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
