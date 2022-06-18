<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style>
.table {
	font-size: 14px;
}
</style>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Identitas
    <?= $kecamatan; ?>
  </h1>
    <ol class="breadcrumb">
      <li><a href="<?= site_url('beranda'); ?>"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Identitas
      <?= $kecamatan; ?>
      <?= $nama_kecamatan; ?>
      </a></li>
  </ol>
</section>
<!-- /.col -->

<!-- /.content-header -->
  <section class="content" id="maincontent">
<!-- [ Main Content ] start -->
<div class="row">
  <div class="col-xl-12 col-md-12">
    <?php $this->load->view('identitas_instansi/peta.php');?>
      <div class="box box-info">
    <form id="mainform" name="mainform" action="" method="post">
      <div class="box-header">
        <div class="col-md-12">
          <div class="pull-right">
            <?php if ($this->CI->cek_hak_akses('h')): ?>
            <a href="<?= site_url('identitas_instansi/form'); ?>" class="btn btn-warning" title="Ubah Data" ><i class="fa fa-edit"></i> Ubah Data
            <?= $kecamatan; ?>
            </a> 
            <!--<a href="<?= site_url('identitas_instansi/maps/kantor'); ?>" class="btn btn-box bg-purple btn-sm "><i class='fa fa-map-marker'></i> Lokasi Kantor <?= $kecamatan; ?></a>--> 
            <a href="<?= site_url('identitas_instansi/maps/kantor'); ?>" class="btn btn-success " title="Ubah Lokasi Kantor"><i class="feather mr-2 icon-map-pin"></i> Lokasi Kantor
            <?= $kecamatan; ?>
            </a> 
            <!--<a href="<?= site_url('identitas_instansi/maps/wilayah'); ?>" class="btn btn-box btn-info btn-sm btn-sm "><i class='fa fa-map'></i> Peta Wilayah <?= $kecamatan; ?></a>--> 
            <a href="<?= site_url('identitas_instansi/maps/wilayah'); ?>" class="btn btn-primary" title="Ubah Wilayah Desa"><i class="feather mr-2 icon-map"></i> Wilayah
            <?= $kecamatan; ?>
            | Google </a> 
            <!--<a href="<?= site_url('identitas_instansi/maps_openstreet/wilayah'); ?>" class="btn btn-secondary" title="Ubah Wilayah Desa"><i class='feather mr-2 icon-map'></i> Wilayah Desa | OSM</a>-->
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="box-body table-border-style">
        <div class="table-responsive">
          <table class="table table-hover">
            <tbody>
              <tr>
                <th colspan="3" style="background-color:#606BFD; color:#fff"><strong> IDENTITAS
                  <?= strtoupper($kecamatan); ?>
                  </strong></th>
              </tr>
              <tr>
                <td width="300">Nama
                  <?= $kecamatan; ?></td>
                <td width="1">:</td>
                <td><?= $main['nama_kecamatan']; ?></td>
              </tr>
              <tr>
                <td>Kode
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= kode_wilayah($main['kode_kecamatan']); ?></td>
              </tr>
              <tr>
                <td>Kode Pos
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['kode_pos']; ?></td>
              </tr>
              <tr>
                <td>Nama
                  <?= ucwords($this->setting->sebutan_camat); ?></td>
                <td>:</td>
                <td><?= $main['nama_camat']; ?></td>
              </tr>
              <tr>
                <td>NIP
                  <?= ucwords($this->setting->sebutan_camat); ?></td>
                <td>:</td>
                <td><?= $main['nip_camat']; ?></td>
              </tr>
              <tr>
                <td>Alamat Kantor
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['alamat_kantor_kecamatan']; ?></td>
              </tr>
              <tr>
                <td>E-Mail
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['email_kecamatan']; ?></td>
              </tr>
              <tr>
                <td>Telepon
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['telepon_kecamatan']; ?></td>
              </tr>
              <tr>
                <td>Website
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['website_kecamatan']; ?></td>
              </tr>
              <tr>
                <th colspan="3" style="background-color:#606BFD; color:#fff"><strong>
                  <?= strtoupper($kabupaten); ?>
                  </strong></th>
              </tr>
              <tr>
                <td>Nama
                  <?= $kabupaten; ?></td>
                <td>:</td>
                <td><?= $main['nama_kabupaten']; ?></td>
              </tr>
              <tr>
                <td>Kode
                  <?= $kabupaten; ?></td>
                <td>:</td>
                <td><?= kode_wilayah($main['kode_kabupaten']); ?></td>
              </tr>
              <tr>
                <th colspan="3" style="background-color:#606BFD; color:#fff"><strong> PROVINSI</strong></th>
              </tr>
              <tr>
                <td>Nama Provinsi</td>
                <td>:</td>
                <td><?= $main['nama_propinsi']; ?></td>
              </tr>
              <tr>
                <td>Kode Provinsi</td>
                <td>:</td>
                <td><?= kode_wilayah($main['kode_propinsi']); ?></td>
              </tr>
              <tr>
                <th colspan="3" style="background-color:#606BFD; color:#fff"><strong> BATAS WILAYAH</strong></th>
              </tr>
              <tr>
                <td>Utara
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['batas_utara']; ?></td>
              </tr>
              <tr>
                <td>Selatan
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['batas_selatan']; ?></td>
              </tr>
              <tr>
                <td>Timur
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['batas_timur']; ?></td>
              </tr>
              <tr>
                <td>Barat
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['batas_barat']; ?></td>
              </tr>
              <tr>
                <td>Luas Wilayah
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['luas_wilayah']; ?>
                  Ha</td>
              </tr>
              <tr>
                <td>Koordinat Bujur (Lang)
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['lng']; ?></td>
              </tr>
              <tr>
                <td>Koordinat Lintang (lat)
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['lat']; ?></td>
              </tr>
              <!--<tr>
                    <td>Koordinat Wilayah 
                      <?= $kecamatan; ?></td>
                    <td>:</td>
                    <td><?= $main['path']; ?></td>
                  </tr>-->
              <tr>
                <td>Ketinggian Diatas Permukaan Laut</td>
                <td>:</td>
                <td><?= $main['mdpl']; ?>
                  mdpl</td>
              </tr>
              <tr>
                <td><?= $kecamatan; ?>
                  Terluar di Indonesia</td>
                <td>:</td>
                <td><?= $main['terluar_id']; ?></td>
              </tr>
              <tr>
                <td><?= $kecamatan; ?>
                  Terluar di Provinsi</td>
                <td>:</td>
                <td><?= $main['terluar_prov']; ?></td>
              </tr>
              <tr>
                <td><?= $kecamatan; ?>
                  Terluar di Kabupaten</td>
                <td>:</td>
                <td><?= $main['terluar_kab']; ?></td>
              </tr>
              <tr>
                <td><?= $kecamatan; ?>
                  Terluar di Kecamatan</td>
                <td>:</td>
                <td><?= $main['terluar_kec']; ?></td>
              </tr>
              <tr>
                <th colspan="3" style="background-color:#606BFD; color:#fff"><strong> PROFIL SINGKAT</strong></th>
              </tr>
              <tr>
                <td>Profil
                  <?= $kecamatan; ?></td>
                <td>:</td>
                <td><?= $main['profil_singkat']; ?></td>
              </tr>
              <tr>
                <td>Visi</td>
                <td>:</td>
                <td><?= $main['visi']; ?></td>
              </tr>
              <tr>
                <td>Misi </td>
                <td>:</td>
                <td><?= $main['misi']; ?></td>
              </tr>
              <tr>
                <td>Strategi</td>
                <td>:</td>
                <td><?= $main['strategi']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
    </form>
  </div>
</div>
</section>

