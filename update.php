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
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><li class="fa fa-edit"></li> Ubah Data Peserta</h3>
            </div>
            <!-- /.panel-header -->
            <!-- form start -->
            <form class="form-horizontal" action="php_code/action_t_client.php?action=update" method="POST">
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2">Id Client</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_disabled" placeholder="Id Client" disabled>
                    <input type="hidden" class="form-control" name="id_client">
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
                  <button type="submit" class="btn btn-warning"><li class="fa fa-edit"></li> Ubah</button>
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
        isset($id_client);
        if (array_key_exists("id_client",$_GET)) $id_client = $_GET['id_client'];
        $r = $c->select_where_id($id_client); 
        echo"
        var data = ".json_encode($r)."
        $('input[name=\"id_client\"]').val(data[0][0]);
        $('input[name=\"id_disabled\"]').val(data[0][0]);
        $('input[name=\"nama_per\"]').val(data[0][1]);
        $('input[name=\"npwp\"]').val(data[0][2]);
        $('input[name=\"alamat\"]').val(data[0][3]);
        $('input[name=\"no_telp\"]').val(data[0][4]);
        $('input[name=\"email\"]').val(data[0][5]);
        $('input[name=\"nama_pic\"]').val(data[0][6]);
        $('input[name=\"nama_dir\"]').val(data[0][7]);
        $('input[name=\"pem_bis\"]').val(data[0][8]);
        ";
      ?>   
      });
  </script>
</body>
</html>
