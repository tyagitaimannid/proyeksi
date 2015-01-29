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
              <li><a href="jadwal/index">Jadwal Praktikum</a></li>
              <li><a href="pengganti/index">Jadwal Pengganti</a></li>
             
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url()?>index.php/login/logout">Logout</a></li>
                         
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

<div class="container">
<div class="row">
  <div class="col-md-12">
     <table class="table table-striped">
      <thead>
        <tr>
          <th style="text-align:center;">No</th>
          <th style="text-align:center;">Sesi</th>
          <th style="text-align:center;">Tanggal</th>
          <th style="text-align:center;">Dosen</th>
          <th style="text-align:center;">Kode MK</th>
          <th style="text-align:center;">Mata Kuliah</th>
          <th style="text-align:center;">SKS</th>
          <th style="text-align:center;">Kelas</th>
          <th style="text-align:center;">Ruang</th>
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
             <td><?php echo $row ['tanggal'];?></td>
             <td><?php echo $row ['nama_dosen'];?></td>
             <td><?php echo $row ['kode_mk'];?></td>
             <td><?php echo $row ['nama_matkul'];?></td>
             <td><?php echo $row ['sks'];?></td>
             <td><?php echo $row ['nama_kelas'];?></td>
             <td><?php echo $row ['nama_ruang'];?></td>
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