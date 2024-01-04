<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Siswa | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <?php
  include "conn.php";
  $query = "SELECT * FROM siswa_data";
  $exe = mysqli_query($conn, $query);
  ?>
  <?php
  include "conn.php";
  $count = "SELECT COUNT(gender) as total_gender FROM siswa_data";
  $result = mysqli_query($conn, $count);
  $row = $result->fetch_assoc();
  $totalGender = $row['total_gender'];

  $count = "SELECT COUNT(gender) as pria FROM siswa_data where gender = 0";
  $result = mysqli_query($conn, $count);
  $row = $result->fetch_assoc();
  $jumlahLaki = $row['pria'];

  $count = "SELECT COUNT(gender) as wanita FROM siswa_data where gender = 1";
  $result = mysqli_query($conn, $count);
  $row = $result->fetch_assoc();
  $jumlahWanita = $row['wanita'];
  ?>
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="starter.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>D</b>S</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Data</b> Siswa</span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/avatar.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Achmad Cahyo</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/avatar.png" class="img-circle" alt="User Image">

                  <p>

                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/avatar.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Achmad Cahyo</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu menu-open" data-widget="tree">
          <li class="header">MENU</li>
          <li class="active">
            <a href="starter.php">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus"></i>
              <span>Tambah Siswa</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.html"><i class="fa fa-dashboard"></i> Menu</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-red">
              <span class="info-box-icon"><i class="fa fa-male"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">SISWA LAKI-LAKI</span>
                <span class="info-box-number">
                  <?= $jumlahLaki ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-blue">
              <span class="info-box-icon">
                <i class="fa fa-male"></i>
                <i class="fa fa-female"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">TOTAL SISWA</span>
                <span class="info-box-number">
                  <?= $totalGender ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
              <span class="info-box-icon"><i class="fa fa-female"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">SISWA PEREMPUAN</span>
                <span class="info-box-number">
                  <?= $jumlahWanita ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="box box-success">
              <div class="box-header">
                <button type="button" class="btn btn-success pull-right" data-toggle="modal"
                  data-target="#modal-default"><i class="fa fa-plus"></i> Tambah Siswa</button>
                <h2><i class="fa fa-graduation-cap"></i>Tabel Siswa</h2>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($data = mysqli_fetch_array($exe)) {
                      ?>
                      <tr>
                        <td>
                          <?= $data['nis'] ?>
                        </td>
                        <td>
                          <?= $data['nama'] ?>
                        </td>
                        <td>
                          <?= $data['ttl'] ?>
                        </td>
                        <td>
                          <?= $data['gender'] ? 'Perempuan' : 'Laki-laki'; ?>
                        </td>
                        <td>
                          <?= $data['alamat'] ?>
                        </td>
                        <td>
                          <a href="form_edit.php?siswaid=<?= $data['id'] ?>" class="btn btn-aqua bg-aqua"><i
                              class="fa fa-pencil" name="edit"></i></a>

                          <a href="siswa/hapus_siswa.php?id=<?= $data['id'] ?>" class="btn btn-red bg-red"
                            onclick="alert('Hapus Data Ini?')"><i class="fa fa-close"></i></a>

                        </td>
                      </tr>
                      <?php
                    }
                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Data Siswa</h4>
                  </div>
                  <form class="form-horizontal" method="POST" action="siswa/tambah_siswa.php">
                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">NIS</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="nis" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Nama</label>

                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="nama" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Tanggal Lahir</label>

                        <div class="col-sm-7">
                          <input type="date" class="form-control" name="ttl" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Jenis Kelamin</label>

                        <div class="col-sm-7">
                          <select name="gender" class="form-control">
                            <option value="" disabled selected>Pilih Di Bawah Ini</option>
                            <option value="0">Laki-Laki</option>
                            <option value="1">Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Alamat</label>

                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="alamat" required>
                        </div>
                      </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-dark pull-left" data-dismiss="modal">Close</button>
                      <input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.18
      </div>
      <strong>Copyright &copy; 2024-2025 <a href="https://adminlte.io">Achmad Cahyo Widodo</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- Sparkline -->
  <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap  -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS -->
  <script src="bower_components/chart.js/Chart.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</body>

</html>