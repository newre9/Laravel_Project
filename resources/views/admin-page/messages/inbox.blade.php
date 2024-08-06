@extends('layouts.adminmaster')
@section('title','Messages')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


	  <div class="content-wrapper" style="min-height: 1203.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mesajlar </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">


            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Mesaj Numarası</th>
					 <th>İsim</th>
                    <th>Email</th>
                    <th>Konu</th>


                    <th>Durum</th>

                    <th>Detay		</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($messages as $messages)
                  <tr>
                  <td>{{$messages->id}}</td>
                  <td>{{$messages->name}}</td>
                  <td>{{$messages->email}}</td>
                  <td>{{$messages->subject}}</td>
                  <td>Status</td>


                    <td><a class="btn btn-primary btn-sm" href="{{route('messagesview',$messages->id)}}">
                              <i class="fas fa-folder">
                              </i>
                              Details
                          </a>

                          <form action="{{route('deletemessage',$messages->id)}}" method="POST">
                            @csrf
						  <button type="submit" class="btn btn-danger btn-sm" >
                              <i class="fas fa-trash">
                              </i>
                              Delete
</button>
                          </form>
					</td>
                  </tr>
                  @endforeach
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</body>
@endsection
