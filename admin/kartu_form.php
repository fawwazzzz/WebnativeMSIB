<?php
error_reporting(0);
    $objek_produk = new Kartu();
    $data_produk = $objek_produk->Kartu();
    $idEdit = $_REQUEST['idedit'];
    $p = !empty($idEdit) ? $objek_produk->getKartu($idEdit) : array();
?>

<form action="controller/kartu_controller.php" method="POST">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <input id="kode" name="kode" type="text" class="form-control" value="<?= $p['kode'] ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control" value="<?= $p['nama'] ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Diskon</label> 
        <div class="col-8">
          <input id="diskon" name="diskon" type="text" class="form-control" value="<?= $p['diskon'] ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Iuran</label> 
        <div class="col-8">
          <input id="iuran" name="iuran" type="text" class="form-control" value="<?= $p['iuran'] ?>" >
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <?php
          if(empty($idEdit)) {
          ?>
          <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
          <?php
          }
          else {
          ?>
          <button name="proses" type="submit" value="ubah" class="btn btn-primary" >Update</button>
          <input type="hidden" name="idx" value="<?= $idEdit ?>" >
          <?php
          }
          ?>
          <button name="proses" type="submit" class="btn btn-primary" >Cancel</button>
        </div>
      </div>
    </form>
    