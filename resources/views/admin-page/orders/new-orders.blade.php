
@extends('layouts.adminmaster')
@section('title','Orders')
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
            <h1>Proje Listesi</h1>
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
                    <th>Proje Numarası</th>
                    <th>Proje İsmi</th>
                    <th>Kullanıcı Adı</th>
                    <th>E-mail</th>
                    <th>Oluşturma Tarihi	</th>

                    <th>Ödeme Durumu</th>
                    <th>Proje Gönderme Durumu</th>
                    <th>Detay</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($newor as $orders)
                  <tr>
                  <td>{{$orders->id}}</td>
                    <td>{{$orders->project_name}}</td>
                    <td>{{$orders->uyeadsoyad}}</td>
                    <td>{{$orders->emaill}}</td>
                    <td>{{$orders->created_at}}</td>

                    <td>{{$orders->payment_status}}</td>
                    <td>{{$orders->status}}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{route('orderview',$orders->id)}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>


					</td>
                  </tr>


           @endforeach
                  </tbody>
                  <tfoot>
                  <tr>

                  </tr>
                  </tfoot>
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
