<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CRUD no Modals</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body style="margin: 50px auto;">
	<section class="container">
		<div class="row">
			<div class="col-xs-12">
          <!-- Horizontal Form -->
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><li class="fa fa-plus"> Tambah Data Peserta</h3>
            </div>
            <!-- /.panel-header -->
            <!-- form start -->
            <form class="form-horizontal" action="php_code/action_t_client.php?action=add" method="POST">
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2">Id Client</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_client" placeholder="Id" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Nama Perusahaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_per" placeholder="Nama Perusahaan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">NPWP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="npwp" placeholder="NPWP">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">No Telpon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_telp" placeholder="No Telpon">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Nama PIC</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_pic" placeholder="Nama PIC">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Nama Direktur</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_dir" placeholder="Nama Direktur">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Pembawa Bisnis</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pem_bis" placeholder="Pembawa Bisnis">
                  </div>
                </div>
                <div class="btn-group pull-right">
                    <button type="submit" class="btn btn-success"><li class="fa fa-save"> Simpan</button>
                    <button type="button" onclick="history.go(-1); return false;" class="btn btn-default"><li class="fa fa-close"></li> Batal</button>
                </div>
              </div>
              <!-- /.panel-body -->
            </form>
          </div>
          <!-- /.panel -->
			</div><!--/.col (right) -->
		</div> <!-- /.row -->
	</section><!-- /.container -->
  <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script> <!-- lib js untuk ajax -->
  <script type="text/javascript">
      $(document).ready(function(){
      <?php
        require_once('php_code/queryCode.php');
        $c = new Connection;
        $id_client = $c->select_last_id();
        echo"
        $('input[name=\"id_client\"]').val(\"".$id_client."\");
        ";
      ?>      
      });
  </script>
</body>
</html>
