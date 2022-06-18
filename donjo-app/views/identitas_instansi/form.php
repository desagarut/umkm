<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Identitas
      <?= $desa; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= site_url('beranda'); ?>"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="<?= site_url('identitas_instansi'); ?>"></i> Identitas
        <?= $kecamatan; ?>
        </a></li>
      <li class="active">Ubah Identitas
        <?= $kecamatan; ?>
      </li>
    </ol>
  </section>
  <!-- /.content-header -->
  <section class="content" id="maincontent">
  <div class="row">
    <form id="mainform" action="<?= $form_action; ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" id="validasi">
    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-body box-profile"> <img class="img-responsive" src="<?= gambar_desa($main['logo']); ?>" alt="Logo"> <br />
          <p class="text-center text-bold">Logo
            <?= $kecamatan; ?>
          </p>
          <p class="text-muted text-center text-red">(Kosongkan, jika logo tidak berubah)</p>
          <br />
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" id="file_path">
            <input type="file" class="hidden" id="file" name="logo">
            <input type="hidden" name="old_logo" value="<?= $main['logo']; ?>">
            <span class="input-group-btn">
            <button type="button" class="btn btn-info btn-box" id="file_browser"><i class="fa fa-search"></i> Browse</button>
            </span> </div>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-md-12">
      <div class="box box-primary">
        <div class="box-body box-profile"> <a href="<?= site_url('identitas_instansi'); ?>" class="btn btn-info " title="Kembali Ke Data <?= $kecamatan; ?>"><i class='feather mr-2 icon-skip-back'></i> Kembali </a>
          <button type='reset' class='btn btn-danger'><i class='feather mr-2 icon-x'></i> Batal</button>
          <button type='submit' class='btn btn-success'><i class='feather mr-2 icon-check'></i> Simpan</button>
        </div>
        <div class="box-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="nama">Nama
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-9">
              <input id="nama_kecamatan" name="nama_kecamatan" class="form-control input-sm nama_terbatas required" maxlength="50" type="text" placeholder="Nama <?= $kecamatan; ?>" value="<?= $main["nama_kecamatan"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="kode_desa">Kode
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-2">
              <input id="kode_kecamatan" name="kode_kecamatan" class="form-control input-sm bilangan required" minlength="6" maxlength="6" type="text" placeholder="Kode <?= $kecamatan; ?>" value="<?= $main["kode_kecamatan"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"  for="kode_pos">Kode Pos
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-2">
              <input id="kode_pos" name="kode_pos" class="form-control input-sm number" minlength="5" maxlength="5" type="text" placeholder="Kode Pos <?= $kecamatan; ?>" value="<?= $main["kode_pos"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"  for="nama_camat">Nama
              <?= ucwords($this->setting->sebutan_camat); ?>
            </label>
            <div class="col-sm-9">
              <input id="nama_camat" name="nama_camat" class="form-control input-sm nama required" maxlength="50" type="text" placeholder="nama <?= ucwords($this->setting->sebutan_camat); ?>" value="<?= $main["nama_camat"] ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"  for="nip_kepala_desa">NIP Kepala
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-9">
              <input id="nip_camat" name="nip_camat" class="form-control input-sm nomor_sk" maxlength="50" type="text" placeholder="NIP <?= ucwords($this->setting->sebutan_camat); ?>" value="<?= $main["nip_camat"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"  for="alamat_kantor">Alamat Kantor
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-9">
              <textarea id="alamat_kantor_kecamatan" name="alamat_kantor_kecamatan" class="form-control input-sm alamat required" maxlength="100" placeholder="Alamat Kantor <?= $kecamatan; ?>" rows="3" style="resize:none;"><?= $main["alamat_kantor_kecamatan"]; ?>
</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"  for="email_kecamatan">E-Mail
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-9">
              <input id="email_kecamatan" name="email_kecamatan" class="form-control input-sm email" maxlength="50" type="text" placeholder="E-Mail <?= $kecamatan; ?>" value="<?= $main["email_kecamatan"] ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"  for="telepon">Telpon
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-9">
              <input id="telepon_kecamatan" name="telepon_kecamatan" class="form-control input-sm bilangan" type="text" maxlength="15" placeholder="Telpon <?= $kecamatan; ?>" value="<?= $main["telepon_kecamatan"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="website">Website
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-9">
              <input id="website_kecamatan" name="website_kecamatan" class="form-control input-sm url" maxlength="50" type="text" placeholder="Website <?= $kecamatan; ?>" value="<?= $main["website_kecamatan"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="nama_kabupaten">Nama
              <?= $kabupaten; ?>
            </label>
            <div class="col-sm-9">
              <input id="nama_kabupaten" name="nama_kabupaten" class="form-control input-sm nama_terbatas required" maxlength="50" type="text" placeholder="Nama <?= $kabupaten; ?>" value="<?= $main["nama_kabupaten"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="kode_kabupaten">Kode
              <?= $kabupaten; ?>
            </label>
            <div class="col-sm-2">
              <input id="kode_kabupaten" name="kode_kabupaten" class="form-control input-sm bilangan required" minlength="4" maxlength="4" type="text" placeholder="Kode <?= $kabupaten; ?>" value="<?= $main["kode_kabupaten"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="propinsi">Provinsi</label>
            <div class="col-sm-4">
              <select name="nama_propinsi" class="form-control select2 input-sm required" onchange="$('input[name=kode_propinsi]').val($(this).find(':selected').data('kode'));" style="width: 100%;">
                <option value="">Pilih Provinsi</option>
                <?php foreach ($list_provinsi as $data) : ?>
                <option value="<?= $data['nama']; ?>" data-kode="<?= $data['kode']; ?>" <?= selected(strtolower($main['nama_propinsi']), strtolower($data['nama'])); ?>>
                <?= $data['nama']; ?>
                </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="kode_propinsi">Kode Provinsi</label>
            <div class="col-sm-2">
              <input id="kode_propinsi" name="kode_propinsi" class="form-control input-sm bilangan required" minlength="2" maxlength="2" type="text" placeholder="Kode Provinsi" value="<?= $main["kode_propinsi"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="batas_utara">Batas Utara
              <?= $batas_utara; ?>
            </label>
            <div class="col-sm-9">
              <input id="batas_utara" name="batas_utara" class="form-control input-sm nama_terbatas required" maxlength="50" type="text" placeholder="Nama Utara" value="<?= $main["batas_utara"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="batas_selatan">Batas Selatan
              <?= $batas_selatan; ?>
            </label>
            <div class="col-sm-9">
              <input id="batas_selatan" name="batas_selatan" class="form-control input-sm nama_terbatas required" maxlength="50" type="text" placeholder="Nama Selatan" value="<?= $main["batas_selatan"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="batas_timur">Batas Timur
              <?= $batas_timur; ?>
            </label>
            <div class="col-sm-9">
              <input id="batas_timur" name="batas_timur" class="form-control input-sm nama_terbatas required" maxlength="50" type="text" placeholder="Nama Timur" value="<?= $main["batas_timur"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="batas_barat">Batas Barat
              <?= $batas_barat; ?>
            </label>
            <div class="col-sm-9">
              <input id="batas_barat" name="batas_barat" class="form-control input-sm nama_terbatas required" maxlength="50" type="text" placeholder="Nama Barat" value="<?= $main["batas_barat"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" or="batas_barat">Luas Wilayah </label>
            <div class="col-sm-9">
              <input id="luas_wilayah" name="luas_wilayah" class="form-control input-sm" maxlength="10" type="text" placeholder="" value="<?= $main["luas_wilayah"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="batas_barat">Ketinggian Diatas Permukaan Laut (mdpl)</label>
            <div class="col-sm-9">
              <input id="mdpl" name="mdpl" class="form-control input-sm" maxlength="50" type="text" placeholder="" value="<?= $main["mdpl"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="batas_barat">Terluar di Indonesia</label>
            <div class="col-sm-9">
              <input id="terluar_id" name="terluar_id" class="form-control input-sm" maxlength="50" type="text" placeholder="" value="<?= $main["terluar_id"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="batas_barat">Terluar di Provinsi</label>
            <div class="col-sm-9">
              <input id="terluar_prov" name="terluar_prov" class="form-control input-sm" maxlength="50" type="text" placeholder="" value="<?= $main["terluar_prov"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="batas_barat">Terluar di Kabupaten</label>
            <div class="col-sm-9">
              <input id="terluar_kab" name="terluar_kab" class="form-control input-sm" maxlength="50" type="text" placeholder="" value="<?= $main["terluar_kab"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="batas_barat">Terluar di Kecamatan</label>
            <div class="col-sm-9">
              <input id="terluar_kec" name="terluar_kec" class="form-control input-sm" maxlength="50" type="text" placeholder="" value="<?= $main["terluar_kec"]; ?>">
              </input>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="profil_singkat">Profil Singkat
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-9">
              <textarea id="profil_singkat" name="profil_singkat" class="form-control input-sm alamat" placeholder="Profil Singkat <?= $kecamatan; ?>" rows="3" style="resize:auto;"><?= $main["profil_singkat"]; ?>
</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="visi">Visi
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-9">
              <textarea id="visi" name="visi" class="form-control input-sm" placeholder="Visi <?= $kecamatan; ?>" rows="3" style="resize:auto;"><?= $main["visi"]; ?>
</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="misi">Misi
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-9">
              <textarea id="misi" name="misi" class="form-control input-sm" placeholder="Misi <?= $kecamatan; ?>" rows="3" style="resize:auto;"><?= $main["misi"]; ?>
</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="strategi">Strategi
              <?= $kecamatan; ?>
            </label>
            <div class="col-sm-9">
              <textarea id="strategi" name="strategi" class="form-control input-sm" placeholder="strategi <?= $kecamatan; ?>" rows="3" style="resize:auto;"><?= $main["strategi"]; ?>
</textarea>
            </div>
          </div>
        </div>
        <div class='box-footer text-right'>
          <button type='reset' class='btn btn-danger'><i class='feather mr-2 icon-x'></i> Batal</button>
          <button type='submit' class='btn btn-success'><i class='feather mr-2 icon-check'></i> Simpan</button>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>
</section>
</div>
