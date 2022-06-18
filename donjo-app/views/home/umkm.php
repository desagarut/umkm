            <div class='col-md-4'>
				<div class="box box-warning box-solid">
					<div class="box-header bg-aqua with-border">
						<h3 class="box-title">Potensi UMKM</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
					</div>
					<div class="box-body text-center">
                        <p>
                            Data Potensi Usaha Kecil Menengah <?= ucwords($this->setting->sebutan_desa . " " . $desa['nama_desa']); ?>
                        </p>
                        <a href="<?=site_url('toko_warga')?>"><img src="<?= base_url("assets/files/logo/toko.png" ) ?>" class="img-fluid responsive" width="70px" height="70px" alt=""></a>
                        <a href="<?=site_url('tawa')?>"><img src="<?= base_url("assets/files/logo/transport.png" ) ?>" class="img-fluid responsive" width="70px" height="70px" alt=""></a>
                        <a href="<?=site_url('tukang')?>"><img src="<?= base_url("assets/files/logo/tukang.png" ) ?>" class="img-fluid responsive" width="70px" height="70px" alt=""></a>
                        <a href="<?=site_url('wisata')?>"><img src="<?= base_url("assets/files/logo/wisata.png" ) ?>" class="img-fluid responsive" width="70px" height="70px" alt=""></a>
                        <div class="box-footer text-center">
                        <p>
                            <strong style="color:blueviolet">"Tinggal Di Desa, Rezeki Kota, Bisnis Mendunia"<br/></strong>
                            <a class="pull-right">~Ridwan Kamil~</a>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
