
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
            <h1>Proje Detay</h1>
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
                  <form method="post" action="{{route('update',$orderdetay['id'])}}" >
                  @csrf
                  <tr>
                  <th>Proje Numarası</th>
                  <td>{{$orderdetay['id']}}</td>
                  </tr>
                  <tr>
                  <th>Proje İsmi</th>
                  <td>{{$orderdetay['project_name']}}</td>
                  </tr>
                  <tr>
                  <th>Kullanıcı Ad Soyad</th>
                  <td> {{$order[0]->uyeadsoyad}} </td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td> {{$order[0]->emaill}} </td>
                    </tr>

                  <tr>
                  <th>Gelen Metin Dosyası</th>
                  <td><a href="{{ route('downloadfile', $orderdetay->file) }} ">DOWNLOAD FİLE <i class="fa fa-download" aria-hidden="true"></i></a></td>
                   </tr>
                    <tr>
                    <th>Kelime Sayısı</th>
                     <td><input type="text" id="lname" name="number_of_words" value="{{$orderdetay['number_of_words']}}"> </td>
                     </tr>
                <tr>
                    <th>Toplam Tutar</th>
                     <td><input type="text" id="lname" name="total_cost" value="{{$orderdetay['total_cost']}}"></td>
                    </tr>
                  <tr>
                  <th>Ödeme Durumu</th>
                   <td>
                   <select class="form-control" name="payment_status">
                    <option selected>{{$orderdetay['payment_status']}}</option>
                    <option> - </option>
                    <option> ödeme bekleniyor </option>
                    <option>ödendi</option>

                    </select>
                   </td>
                  </tr>
                  <tr>
                  <th>Proje Gönderme Durumu</th>
                    <td>
                    <select class="form-control" name="status">
                    <option selected>{{$orderdetay['status']}}</option>
                    <option> - </option>
                    <option> Düzenleniyor</option>
                    <option>Tamamlandı</option>
                    <option>iptal edildi</option>

                    </select>



                    </td>
                   </tr>
                   <th>Güncelle</th>
                     <td><input type="submit" class="btn-danger"  value="Güncelle"></td>
                     </tr>
                     </form>
                   <tr>
                  <th>Kullanıcı Yorumu</th>
                     <td>{{$orderdetay['comment']}}</td>
                     </tr>
                  <tr>

                  <tr>
                  <th>Oluşturma Tarihi</th>
                     <td>{{$orderdetay['created_at']}}</td>
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
