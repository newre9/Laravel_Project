
@extends('layouts.adminmaster')
@section('title','User view')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper" style="min-height: 1203.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mesaj Detay</h1>
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

                  <tbody>

                  <tr>
                  <th>Message Number</th>
                  <td>{{$messagesdetay['id']}}</td>
                  </tr>
                  <tr>
                  <th> Name</th>
                  <td>{{$messagesdetay['name']}}</td>
                  </tr>

                  <tr>
                  <th>E-Mail</th>
                     <td>{{$messagesdetay['email']}}</td>
                     </tr>
                  <tr>
                  <th>Subject</th>
                     <td>{{$messagesdetay['subject']}}</td>
                     </tr>
                     <tr>
                        <th>Message</th>
                           <td>{{$messagesdetay['message']}}</td>
                           </tr>
                  <tr>
                  <th>created_at</th>
                     <td>{{$messagesdetay['created_at']}}</td>
                     </tr>
                  <tr>
                  <th>updated_at</th>
                   <td>{{$messagesdetay['updated_at']}}</td>

                  </tr>


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
@endsection
