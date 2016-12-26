<style type="text/css">
	table{
		font-family: sans-serif;
	}
	.pt-i{
		font-size: 20px;
		color: red;
		text-align: left;
		margin-top: 10px;
	}
	td{
		width: 30px;
		
	}
	tr{
		border-bottom: 1px solid #eee;
	}
	th{
		width: 200px;
		margin: 0;
	}
	.th-title{
		border-bottom: 3px solid #333;
		font-size: 27px;
		text-align: center;
		font-weight: bold;
	}
</style>

<table>
	<tr>
		<th style="width: 10%;border-bottom: 3px solid #333;"><img src="{{ url('logo/logoalfajar.jpg') }}"></th>
		<th style="font-size: 25px;width: 85%;" class="th-title">PERGURUAN ISLAM AL-FAJAR<br>
		<span style="font-size: 20px;">Y A Y A S A N   D A R U L   F A J A R</span><br>
		<span style="font-size: 16px;">Jl. Swatantra V No. 1 - Vila Nusa Indah Raya, Jatiasih, Telp. (021) 82401310, 82400634, 8271139, Fax (021) 8271138</span><br>
		<span style="font-size: 18px;">KOTA BEKASI - JAWA BARAT</span><br>
		</th>
	</tr>
</table><br><br>
<table>
	<tr>
		<th style="font-size: 17px;padding-left: 105px;padding-right: 105px;">FORMULIR PENDAFTARAN CALON PESERTA DIDIK BARU</th>
	</tr>
</table><br>
@foreach ($get_data as $get)
<table>
	<tr>
		<th></th>
	</tr>
	 
	<tr>
		<td>Tahun Ajaran</td>
		<td>:</td>
		<td>{{ $get->dt_reg_th }}</td>
	
		<td>No. Pendaftaran</td>
		<td>:</td>
		<td>{{ $get->dt_reg_no }}</td>
	</tr>
	<tr>
		<td>Unit</td>
		<td>:</td>
		<td>{{ $get->dt_reg_unit }}</td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td>{{ $get->dt_reg_kelas }}</td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td>{{ $get->dt_reg_nama }}</td>
	</tr>
	<tr>
		<td>Nama Panggilan</td>
		<td>:</td>
		<td>{{ $get->dt_reg_nama_panggilan }}</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>:</td>
		<td>{{ $get->dt_reg_gender }}</td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td>{{ $get->dt_reg_nik }}</td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir</td>
		<td>:</td>
		<td>{{ $get->dt_reg_tempat_lahir }}, {{ $get->dt_reg_tgl_lahir }}</td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td>{{ $get->dt_reg_agama }}</td>
	</tr>
	<tr>
		<td>Anak ke</td>
		<td>:</td>
		<td>{{ $get->dt_reg_anak_ke }}</td>
	</tr>
	<tr>
		<td>Jumlah Saudara</td>
		<td>:</td>
		<td>{{ $get->dt_reg_jml_saudara }}</td>
	</tr>
	<tr>
		<td>Tinggi Badan</td>
		<td>:</td>
		<td>{{ $get->dt_reg_tb }} cm</td>
	</tr>
	<tr>
		<td>Berat Badan</td>
		<td>:</td>
		<td>{{ $get->dt_reg_bb }} kg</td>
	</tr>
	<tr>
		<td>Golongan Darah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_goldar }}</td>
	</tr>
	<tr>
		<td>Kebutuhan Khusus</td>
		<td>:</td>
		<td>{{ $get->dt_reg_abk }}, {{ $get->dt_reg_ket_abk }}</td>
	</tr>
	<tr>
		<td>Masuk sekolah ini sebagai</td>
		<td>:</td>
		<td>{{ $get->dt_reg_ket_masuk }}</td>
	</tr>
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td>{{ $get->dt_reg_nisn }}</td>
	</tr>
	<tr>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_asal_sekolah }}</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>{{ $get->dt_reg_alamat }}</td>
	</tr>
	<tr>
		<td>Alamat Dusun</td>
		<td>:</td>
		<td>{{ $get->dt_reg_alamat_dusun }}</td>
	</tr>
	<tr>
		<td>Alamat RT</td>
		<td>:</td>
		<td>{{ $get->dt_reg_alamat_rt }}</td>
	</tr>
	<tr>
		<td>Alamat RW</td>
		<td>:</td>
		<td>{{ $get->dt_reg_alamat_rw }}</td>
	</tr>
	<tr>
		<td>Alamat Kode Pos</td>
		<td>:</td>
		<td>{{ $get->dt_reg_alamat_kodepos }}</td>
	</tr>
	<tr>
		<td>Alamat Kelurahan</td>
		<td>:</td>
		<td>{{ $get->dt_reg_alamat_kel }}</td>
	</tr>
	<tr>
		<td>Alamat Kecamatan</td>
		<td>:</td>
		<td>{{ $get->dt_reg_alamat_kec }}</td>
	</tr>
	<tr>
		<td>Alamat Kabupaten</td>
		<td>:</td>
		<td>{{ $get->dt_reg_alamat_kab }}</td>
	</tr>
	<tr>
		<td>Alamat Provinsi</td>
		<td>:</td>
		<td>{{ $get->dt_reg_alamat_prov }}</td>
	</tr>
	<tr>
		<td>No. Telpon</td>
		<td>:</td>
		<td>{{ $get->dt_reg_telp }}</td>
	</tr>
	<tr>
		<td>No. Hp</td>
		<td>:</td>
		<td>{{ $get->dt_reg_hp }}</td>
	</tr>
	<tr>
		<td>Jenis tempat tinggal</td>
		<td>:</td>
		<td>{{ $get->dt_reg_jenis_tinggal }}</td>
	</tr>
	<tr>
		<td>Alat transportasi ke sekolah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_alat_transport }}</td>
	</tr>
	<tr>
		<td>Jarak tempat tinggal ke sekolah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_jarak_kesekolah }}</td>
	</tr>
	<tr>
		<td>Waktu tempuh ke sekolah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_waktu_tempuh }}</td>
	</tr>
	<tr>
		<td>Penerima KPS</td>
		<td>:</td>
		<td>{{ $get->dt_reg_kps }}</td>
	</tr>
	<tr>
		<td>No. KPS</td>
		<td>:</td>
		<td>{{ $get->dt_reg_no_kps }}</td>
	</tr>

	<tr>
		<td>Nama Lengkap Ayah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_bpk_nama }}</td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir Ayah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_bpk_tempat_lahir }}, {{ $get->dt_reg_bpk_tgl_lahir }}</td>
	</tr>
	<tr>
		<td>Agama Ayah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_bpk_agama }}</td>
	</tr>
	<tr>
		<td>Pekerjaan Ayah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_bpk_pekerjaan }}</td>
	</tr>
	<tr>
		<td>Pendidikan Ayah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_bpk_pendidikan }}</td>
	</tr>
	<tr>
		<td>Telpon/HP Ayah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_bpk_telp }}</td>
	</tr>
	<tr>
		<td>Email Ayah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_bpk_email }}</td>
	</tr>
	<tr>
		<td>Penghasilan Ayah</td>
		<td>:</td>
		<td>{{ $get->dt_reg_bpk_hasil }}</td>
	</tr>
	
	<tr>
		<td>Nama Lengkap Ibu</td>
		<td>:</td>
		<td>{{ $get->dt_reg_ibu_nama }}</td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir Ibu</td>
		<td>:</td>
		<td>{{ $get->dt_reg_ibu_tempat_lahir }}, {{ $get->dt_reg_ibu_tgl_lahir }}</td>
	</tr>
	<tr>
		<td>Agama Ibu</td>
		<td>:</td>
		<td>{{ $get->dt_reg_ibu_agama }}</td>
	</tr>
	<tr>
		<td>Pekerjaan Ibu</td>
		<td>:</td>
		<td>{{ $get->dt_reg_ibu_pekerjaan }}</td>
	</tr>
	<tr>
		<td>Pendidikan Ibu</td>
		<td>:</td>
		<td>{{ $get->dt_reg_ibu_pendidikan }}</td>
	</tr>
	<tr>
		<td>Telpon/HP Ibu</td>
		<td>:</td>
		<td>{{ $get->dt_reg_ibu_telp }}</td>
	</tr>
	<tr>
		<td>Email Ibu</td>
		<td>:</td>
		<td>{{ $get->dt_reg_ibu_email }}</td>
	</tr>
	<tr>
		<td>Penghasilan Ibu</td>
		<td>:</td>
		<td>{{ $get->dt_reg_ibu_hasil }}</td>
	</tr>

	<tr>
		<td>Nama Lengkap Wali</td>
		<td>:</td>
		<td>{{ $get->dt_reg_wali_nama }}</td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir Wali</td>
		<td>:</td>
		<td>{{ $get->dt_reg_wali_tempat_lahir }}, {{ $get->dt_reg_wali_tgl_lahir }}</td>
	</tr>
	<tr>
		<td>Agama Wali</td>
		<td>:</td>
		<td>{{ $get->dt_reg_wali_agama }}</td>
	</tr>
	<tr>
		<td>Pekerjaan Wali</td>
		<td>:</td>
		<td>{{ $get->dt_reg_wali_pekerjaan }}</td>
	</tr>
	<tr>
		<td>Pendidikan Wali</td>
		<td>:</td>
		<td>{{ $get->dt_reg_wali_pendidikan }}</td>
	</tr>
	<tr>
		<td>Telpon/HP Wali</td>
		<td>:</td>
		<td>{{ $get->dt_reg_wali_telp }}</td>
	</tr>
	<tr>
		<td>Email Wali</td>
		<td>:</td>
		<td>{{ $get->dt_reg_wali_email }}</td>
	</tr>
	<tr>
		<td>Penghasilan Wali</td>
		<td>:</td>
		<td>{{ $get->dt_reg_wali_hasil }}</td>
	</tr>
	<tr>
		<td>Pas Photo</td>
		<td>:</td>
		<td>
		<!-- <img src="{{ url('images/2016121419003458513462b7e7d.jpg') }}"> -->
		<!-- <img src="{{ url('pasfoto/'.$get->dt_reg_photo) }}"> -->
		<!-- <img src="{{ public_path('pasfoto')."/".$get->dt_reg_photo }}"> -->
		<!-- <img src="pasfoto/{{ $get->dt_reg_photo }}"> -->
		</td>
	</tr>
@endforeach	
</table>
<table>
	<tr>
		<th style="width: 30%;padding-bottom: 120px;">photo</th>
		<th style="padding-bottom: 120px;"><span style="margin-left: 270px;width: 65%;">Bekasi, ....................................</span></th>
	</tr>
		<tr>
		<th style="padding-bottom: 100px;">
		<span style="width: 50%;">Petugas Pendaftaran,</span>
		</th>
		<th style="padding-bottom: 100px;">
		<span style="margin-left:320px;width: 50%;">Orangtua/Wali,</span>
		</th>
		</tr>
		<tr>
		<th style="padding-bottom: 30px;">
		<span style="width: 50%;">......................................</span>
		</th>
		<th style="padding-bottom: 30px;">
		<span style="margin-left:320px;width: 50%;">......................................</span>
		</th>
		</tr>
</table>
<table>
	<tr>
			<th style="width: 100%;font-size: 14px;font-style: italic;"><span style="width: 100%;margin: 110px;">Catatan : Formulir ini harus diisi lengkap untuk keperluan Data Dapodik</span></th>
		</tr>
</table>

