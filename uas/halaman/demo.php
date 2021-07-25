
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Input Data Mahasiswa</h2>

            </div>

            <div class="body">

            <form method="POST">

                <label for="">Nama</label>
                          	
                <div class="form-group">
                    <div class="form-line">
                         <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda..." />
                    </div>
                </div> <br>

                <label for="">Nim</label>
                          	
                <div class="form-group">
                    <div class="form-line">
                         <input type="number" name="nim" class="form-control" placeholder="Masukkan Nim Anda" />
                    </div>
                </div> <br>

                <label for="">Fakultas</label>
                          	
                <div class="form-group">
                  	<div class="form-line">
                         <input type="text" name="fakultas" class="form-control" placeholder="Masukkan Fakultas Anda..." />
                    </div>
                </div> <br>

                <label for="">Jurusan</label>
                          	
                <div class="form-group">
                  	<div class="form-line">
                         <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Jurusan Anda..." />
                    </div>
                </div> <br>

                <label for="">Alamat</label>
                          	
                <div class="form-group">
                  	<div class="form-line">
                         <textarea style="width: 592px; height: 200px;" class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat Anda..."></textarea>
                    </div>
                </div><br>

                <div class="box-footer">
                	<button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
              	</div>

			</form>
		</div>
	</div>
  </div>
</div>

<?php

	if (isset($_POST['simpan'])) {
				
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$fakultas = $_POST['fakultas'];
		$jurusan = $_POST['jurusan'];		
		$alamat = $_POST['alamat'];

		$sql = $koneksi->query("insert into tb_mhs (nama, nim, fakultas, jurusan, alamat) values('$nama', '$nim', '$fakultas', '$jurusan', '$alamat')");

		if ($sql) {
			?>

				<script type="text/javascript">
					alert("Data Berhasil Disimpan");
				</script>

			<?php
		}
	}

?>