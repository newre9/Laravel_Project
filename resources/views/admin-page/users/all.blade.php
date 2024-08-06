@extends('layouts.adminmaster')
@section('title','All Admin')
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
            <h1>Bütün Kullanıcılar</h1>
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
                    <th>ID</th>
                    <th>İsim Soyisim</th>
          <th>Email</th>
          <th>Role</th>
          <th>Ülke</th>
          <th>Universite</th>
          <th>Mail onaylanma Tarihi</th>
          <th>Oluşturma Tarihi</th>
          <th>Güncelleme Tarihi</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($users as $user)
                  <tr>
                  <td>{{$user['id']}}</td>
                  <td>{{$user['name']}}</td>
                  <td>{{$user['email']}}</td>
                  <td>
                  @foreach($user->roles as $role)
                      {{$role->name}}-
                  @endforeach
</td>
              <td>{{$user['country']}}</td>
                    <td>{{$user['university']}}</td>
                    <td>{{$user['email_verified_at']}}</td>
                    <td>{{$user['created_at']}}</td>
                    <td>{{$user['updated_at']}}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{route('viewuser',$user->id)}}">
                              <i class="fas fa-folder">
                              </i>
                              Details
                          </a>


                          <form action="{{route('deleteuser',$user->id)}}" method="POST">
                            @csrf
						  <button type="submit" class="btn btn-warning btn-sm" >
                              <i class="fas fa-trash">
                              </i>
                              Delete
</button>
                          </form>
					</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>	</th>
                    <th>	</th>
                    <th>	</th>
                    <th>	</th>
                    <th>	</th>
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
