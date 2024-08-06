
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
            <h1>Kullanıcı Bilgi  Detayı</h1>
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
                  <th>Kullanıcı Numarası</th>
                  <td>{{$users['id']}}</td>
                  </tr>
                  <tr>
                  <th>İsim Soyisim</th>
                  <td>{{$users['name']}}</td>
                  </tr>
                  <tr>
                  <th>email</th>
                  <td>{{$users['email']}}</td>
                  </tr>

                  <tr>
                  <th>Ülke</th>
                   <td>{{$users['country']}}</td>
                  </tr>
                  <tr>
                  <th>Üniversite</th>
                    <td>{{$users['university']}}</td>
                   </tr>
                  <tr>
                  <th>Mail onaylanma Tarihi</th>
                   <td>{{$users['email_verified_at']}}</td>
                  </tr>
                  <tr>
                  <th>Oluşturma Tarihi</th>
                     <td>{{$users['created_at']}}</td>
                     </tr>
                  <tr>
                  <th>En son bilgileri güncelleme Tarihi</th>
                   <td>{{$users['updated_at']}}</td>
                  </tr>

                  <tr>
                  <th>Role durumu</th>
                   <td>
                  @foreach($users->roles as $role)
                  <form method="post" action="{{route('updateuser',$users['id'])}}" >
                    @csrf
                      <select class="form-control" name="role_id">
                        <option selected>{{$role->name}}</option>
                        <option value="1"> Admin  </option>
                        <option value="2" >User</option>

                        </select>
                        <tr>
                        <th>Güncelle </th>
                     <td><input type="submit" class="btn-danger"  value="UPDATE"></td>
                        </tr>
                     </tr>
                     </form>
                  @endforeach
</td></tr>




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
