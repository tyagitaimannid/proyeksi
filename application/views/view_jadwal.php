<!DOCTYPE html>
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand navbar-brand-centered">SI Jadwal</div>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url()?>index.php/jadwal">Jadwal Praktikum</a></li>
              <li><a href="<?php echo base_url()?>index.php/pengganti">Jadwal Pengganti</a></li>
             
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url()?>index.php/login/logout">Logout</a></li>
                         
            </ul>
            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    <div class="container">
      <button type="button-right" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
         <span class="glyphicon glyphicon-plus" aria-hidden="true"> Tambah </span> 
      </button>
    </div>

<div class="container">
<div class="row">
  <div class="col-md-12">
     <table class="table table-striped">
      <thead>
        <tr>
          <th style="text-align:center;">No</th>
          <th style="text-align:center;">Sesi</th>
          <th style="text-align:center;">Hari</th>
          <th style="text-align:center;">Dosen</th>
          <th style="text-align:center;">Kode MK</th>
          <th style="text-align:center;">Mata Kuliah</th>
          <th style="text-align:center;">SKS</th>
          <th style="text-align:center;">Kelas</th>
          <th style="text-align:center;">Ruang</th>
          <th style="text-align:center;">Status</th>
          <th style="text-align:center;">Pilihan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
          foreach($query as $row)
          {
            ?>
            <tr>
             <td><?php echo $no++;?></td>
             <td><?php echo $row ['sesi'];?></td>
             <td><?php echo $row ['hari'];?></td>
             <td><?php echo $row ['nama_dosen'];?></td>
             <td><?php echo $row ['kode_mk'];?></td>
             <td><?php echo $row ['nama_matkul'];?></td>
             <td><?php echo $row ['sks'];?></td>
             <td><?php echo $row ['nama_kelas'];?></td>
             <td><?php echo $row ['nama_ruang'];?></td>
             <td>
                <a><button class="btn btn-success btn-xs" type="button" data-toggle="modal" data-target="#jadwalModal"><i class="glyphicon glyphicon-ok"></i></button></a>
                &nbsp;
                <a><button class="btn btn-xs btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i></button></a>
                </button>
              </td>
              <td>
                <a><button class="btn btn-success btn-xs" type="button"><i class="glyphicon glyphicon-pencil"></i></button></a>
                &nbsp;
                <a><button class="btn btn-xs btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button></a>
                </button>
              </td>
            </tr>
            <?php
          }
            ?>
      </tbody>
    </table>
</div>
</div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form method="post" action="<?php echo base_url('index.php/jadwal/insert'); ?>">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
      </div>

      <div class="modal-body">
        <form method="post" action="<?php echo base_url('index.php/jadwal/insert'); ?>">
        <div class="row">
            <div class="col-md-12">
        <div class="form-group">
          <input type="text" class="form-control" id="sesi" placeholder="Sesi">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="hari" placeholder="Hari">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="dosen" placeholder="Nama Dosen">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="kode_mk" placeholder="Kode MK">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="matkul" placeholder="Mata Kuliah">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="sks" placeholder="SKS">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="kelas" placeholder="Kelas">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="ruang" placeholder="Ruang">
        </div>


      </div>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning">Batal</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal Jadwal Pengganti-->
<div class="modal fade" id="jadwalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Jadwal Pengganti</h4>
      </div>
      <div class="modal-body">
        <div class="row">

          <div class="col-md-6"></div>
            <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" id="tanggal" placeholder="Tanggal">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="sesi" placeholder="Sesi">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="ruang" placeholder="Ruang">
        </div>
      </div>

      </div>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning">Batal</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>