<?php
$id_spp = $_GET['id_spp'];
include '../koneksi.php';
$sql = "SELECT*FROM spp WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>HALAMAN EDIT DATA SPP.</h5>
<a href="?url=spp" class="btn btn-secondary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-spp&id_spp=<?= $id_spp; ?>">
    <div class="form-group mb-2">
        <label>Tahun</label>
        <input value="<?= $data['tahun'] ?>" type="number" name="tahun" maxlength="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Bulan</label>
        <select name="bulan" class="form-control" required>
            <option value="">Pilih Bulan</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Nominal</label>
        <input value="<?= $data['nominal'] ?>" type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> RESET</button>
    </div>
</form>
