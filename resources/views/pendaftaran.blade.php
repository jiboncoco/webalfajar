<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Perguruan Islam Al – Fajar Bekasi | Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link id="callCss" rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('adminlte/dtpicker/css/bootstrap-datetimepicker.min.css') }}">
    <link id="callCss"rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />

</head>
<body style="background:#fff">

 


<div class="modal fade" id="myModalinfodaftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Registration Rules</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($rules_register as $info)
                   {!! $info->feature_text !!}
                   @endforeach
                </form>
            </div>
            <div class="modal-footer">
              <a href="#" data-toggle="modal" data-target="#myModaldaftartk"><button type="button" class="btn btn-success" data-dismiss="modal">Next</button></a>
            </div>
        </div>
    </div>
</div>
</div>


<!-- print -->
<div class="modal fade" id="myModalprint" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content-login">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Print Formulir</h4>
                    </div>
                    <div class="modal-body">
                    <div class="login-form">
                    <form action="{{ url('Print_Formulir_Pendaftaran') }}" method="POST">
                    {{ csrf_field() }}
                    <input style="height:40px;border:1px solid #ccc;margin-bottom:10px" class="login-input" name="dt_codereg_code" id="log-inp" placeholder="Code Reg" required></input>
                    <select style="height:40px;" name="dt_codereg_type" class="form-control" id="sg">
                    <option value="">Grade</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    </select>
                    
                    <div id="cb-log" class="checkbox">
                    
                    </div>
                    <button class="login-button" type="submit">Print</button>
                </form>
            </div>
        </div>
            <div class="modal-footer">
                <button style="border:none" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a data-toggle="modal" data-target="#myModalcheckcode" href="#">
                <button style="border:none" type="button" class="btn btn-success" data-dismiss="modal">Forget the code?</button>
                </a>
            </div>
            </div>
            </div>
        </div>

<!-- info -->
<div class="modal fade" id="myModalinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content-login">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Information</h4>
                    </div>
                    <div class="modal-body">
                    <div style="text-align: center;" class="login-form">
                    Kode yang anda dapatkan setelah usai registrasi harus anda simpan baik-baik. Karena kode tersebut akan dipergunakan untuk <span style="font-weight: bold">print formulir</span> yang telah anda isi secara online. 
            </div>
        </div>
            <div class="modal-footer">
                <button style="border:none" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a data-toggle="modal" data-target="#myModalcheckcode" href="#">
                <button style="border:none" type="button" class="btn btn-success" data-dismiss="modal">Forget the code?</button>
                </a>
            </div>
            </div>
            </div>
        </div>

<div class="modal fade" id="myModalcheckcode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content-login">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Check Code Registration</h4>
                    </div>
                    <div class="modal-body">
                    <div class="login-form">
                    <form action="{{ url('search_codereg') }}" method="POST">
                    {{ csrf_field() }}
                    <input style="height:40px;border:1px solid #ccc;margin-bottom:10px" class="login-input" name="dt_reg_nama" id="log-inp" placeholder="Student Name" required></input>
                    <input style="height:40px;border:1px solid #ccc;margin-bottom:10px" class="login-input" name="dt_reg_ibu_nama" id="log-inp" placeholder="Mother Name" required></input>
                    <select style="height:40px;" name="dt_reg_unit" class="form-control" id="sg">
                    <option value="">Grade</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    </select>
                    
                    <div id="cb-log" class="checkbox">
                    
                    </div>
                    <button class="login-button" type="submit">Check</button>
                </form>
            </div>
        </div>
            <div class="modal-footer">
                <button style="border:none" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a data-toggle="modal" data-target="#myModalprint" href="#">
                <button style="border:none" type="button" class="btn btn-success" data-dismiss="modal">Print Formulir</button>
                </a>
            </div>
            </div>
            </div>
        </div>

<!-- daftar all -->

<div class="modal fade" id="myModaldaftartk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><center>FORMULIR PENDAFTARAN ONLINE SISWA AL FAJAR BEKASI</center></h4>
            </div>
                <div class="modal-body-front">
                  <form enctype="multipart/form-data" action="{{ url('registration_student')}}" method="POST">
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 form-control-label">Tahun Pelajaran </label>
    <div class="col-sm-1">
    <div class='input-group date' id='datetimepicker1'>
      <input type='text' name="dt_reg_th1" class="form-control for_year" required/>
        <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    </div>
    <div style="font-size: 24px;text-align:center" class="col-sm-1">
    <p>/</p>
    </div>
    <div class="col-sm-1">
    <div class='input-group date' id='datetimepicker1'>
      <input type='text' name="dt_reg_th2" class="form-control for_year" required/>
        <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    </div>
  </div>

<input id="tyclass" type="hidden" name="type_class" value="tk"> 

<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 form-control-label">Unit Sekolah </label>
  <div class="col-sm-3">
  <select id="selecttypegrade" name="dt_student_grade" class="form-control not-res">
    @foreach($data_kelas as $grade)
    <option value="{{$grade->dt_kelas_type}}">{{$grade->dt_kelas_type}}</option>
    @endforeach
  </select>
</div>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
<div id="selecttypeclasstk" class="form-group row">    
  <label for="inputEmail3" class="col-sm-2 form-control-label">Kelompok/Kelas </label>
  <div class="col-sm-3"> 
  <select name="dt_student_kelas_tk" class="form-control not-res">
    @foreach($data_kelas_tk as $class_tk)
    <option value="{{$class_tk->dt_kelas_name}}">{{$class_tk->dt_kelas_name}}</option>
    @endforeach
  </select>
</div>
</div>
<div id="selecttypeclasssd" style="display:none" class="form-group row"> 
  <label for="inputEmail3" class="col-sm-2 form-control-label">Kelompok/Kelas </label>
    <div  class="col-sm-3">
    <select name="dt_student_kelas_sd" class="form-control not-res">
      @foreach($data_kelas_sd as $class_sd)
      <option value="{{$class_sd->dt_kelas_name}}">{{$class_sd->dt_kelas_name}}</option>
      @endforeach
    </select>
  </div>
</div>
<div id="selecttypeclasssmp" style="display:none" class="form-group row">    
  <label for="inputEmail3" class="col-sm-2 form-control-label">Kelompok/Kelas </label>
    <div  class="col-sm-3">
    <select name="dt_student_kelas_smp" class="form-control not-res">
      @foreach($data_kelas_smp as $class_smp)
      <option value="{{$class_smp->dt_kelas_name}}">{{$class_smp->dt_kelas_name}}</option>
      @endforeach
    </select>
  </div>
</div>
<div id="selecttypeclasssma" style="display:none" class="form-group row">                
  <label for="inputEmail3" class="col-sm-2 form-control-label">Kelompok/Kelas </label>
    <div  class="col-sm-3">
    <select name="dt_student_kelas_sma" class="form-control not-res">
      @foreach($data_kelas_sma as $class_sma)
      <option value="{{$class_sma->dt_kelas_name}}">{{$class_sma->dt_kelas_name}}</option>
      @endforeach
    </select>
  </div>
</div>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 form-control-label">Nama Lengkap </label>
    <div class="col-sm-4">
      <input name="dt_reg_nama" class="form-control" id="inputEmail3" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 form-control-label">Nama Panggilan </label>
    <div class="col-sm-4">
      <input name="dt_reg_nama_panggilan" class="form-control" id="inputEmail3" required/>
    </div>
  </div>


  <div class="form-group row">
  <label for="inputPassword3" class="col-sm-2 form-control-label">Jenis Kelamin </label>
  <div class="col-sm-3">
    <select name="dt_reg_gender" class="form-control" id="exampleSelect1">
      <option value="Laki-laki">Laki - laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 form-control-label">NIK </label>
    <div class="col-sm-4">
      <input type="number" name="dt_reg_nik" class="form-control" id="inputEmail3" required/>
    </div>
  </div>


  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Tempat Lahir </label>
    <div class="col-sm-3">
      <input name="dt_reg_tempat_lahir" class="form-control" id="inputPassword3" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Tanggal Lahir </label>
    <div class="col-sm-3">
    <div class='input-group date' id='datetimepicker1'>
        <input type='text' name="dt_reg_tgl_lahir" class="form-control not-res birth_date" />
        <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    </div>
  </div>

  <div class="form-group row">
  <label for="inputPassword3" class="col-sm-2 form-control-label">Agama </label>
  <div class="col-sm-3">
    <select name="dt_reg_agama" class="form-control" id="exampleSelect1">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katholik">Katholik</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
      <option value="Konghucu">Konghucu</option>
    </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Anak ke -</label>
    <div class="col-sm-1">
      <input type="number" name="dt_reg_anak_ke" class="form-control not-res" />
    </div>
    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-1 form-control-label">Jumlah Saudara</label>
    <div class="col-sm-1">
    <input type="number" name="dt_reg_jml_saudara" class="form-control not-res" />
  </div>
    <label for="exampleInputPassword1" style="text-align: center;" class="col-sm-1 form-control-label">Tinggi Badan (cm)</label>
    <div class="col-sm-1">
      <input type="number" name="dt_reg_tb" class="form-control not-res" />
    </div>
    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-1 form-control-label">Berat Badan (kg)</label>
    <div class="col-sm-1">
      <input type="number" name="dt_reg_bb" class="form-control not-res" />
    </div>
    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-1 form-control-label">Golongan Darah</label>
    <div class="col-sm-1">
      <select name="dt_reg_goldar" class="form-control" id="exampleSelect1">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O">O</option>
    </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Berkebutuhan Khusus</label>
    <div class="col-sm-1">
      <select name="dt_reg_abk" class="form-control" id="exampleSelect1">
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
    </div>
    <label for="exampleInputPassword1" style="text-align: center;" class="col-sm-1 form-control-label">Keterangan</label>
    <div class="col-sm-6">
      <input type="text" name="dt_reg_ket_abk" class="form-control not-res" />
    </div>
  </div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Keterangan Masuk</label>
    <div class="col-sm-2">
      <select name="dt_reg_ket_masuk" class="form-control" id="exampleSelect1">
      <option value="Siswa Baru">Siswa Baru</option>
      <option value="Pindahan">Pindahan</option>
    </select>
    </div>
    <label for="exampleInputPassword1" style="text-align: center;" class="col-sm-1 form-control-label">NISN</label>
    <div class="col-sm-4">
      <input type="number" name="dt_reg_nisn" class="form-control not-res" />
    </div>
  </div>


  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Asal Sekolah</label>
    <div class="col-sm-5">
      <input name="dt_reg_asal_sekolah" class="form-control" id="inputPassword3" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Alamat Tempat Tinggal </label>
    <div class="col-sm-8">
      <input name="dt_reg_alamat" class="form-control" id="inputPassword3" required/>
    </div>
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Dusun</label>
    <div class="col-sm-1">
      <input type="text" name="dt_reg_alamat_dusun" class="form-control not-res" />
    </div>
    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-1 form-control-label">RT</label>
    <div class="col-sm-1">
    <input type="number" name="dt_reg_alamat_rt" class="form-control not-res" />
  </div>
    <label for="exampleInputPassword1" style="text-align: center;" class="col-sm-1 form-control-label">RW</label>
    <div class="col-sm-1">
      <input type="number" name="dt_reg_alamat_rw" class="form-control not-res" />
    </div>
    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-1 form-control-label">Kode Pos</label>
    <div class="col-sm-1">
      <input type="number" name="dt_reg_alamat_kodepos" class="form-control not-res" />
    </div>
    </div>

    <div class="form-group row">
    <label for="exampleInputPassword" class="col-sm-2 form-control-label">Kelurahan</label>
    <div class="col-sm-1">
      <input type="text" name="dt_reg_alamat_kel" class="form-control not-res" />
    </div>
    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-1 form-control-label">Kecamatan</label>
    <div class="col-sm-1">
      <input type="text" name="dt_reg_alamat_kec" class="form-control not-res" />
    </div>
    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-1 form-control-label">Kabupaten</label>
    <div class="col-sm-1">
      <input type="text" name="dt_reg_alamat_kab" class="form-control not-res" />
    </div>
    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-1 form-control-label">Provinsi</label>
    <div class="col-sm-1">
      <input type="text" name="dt_reg_alamat_prov" class="form-control not-res" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">No. Telp </label>
    <div class="col-sm-3">
      <input name="dt_reg_telp" type="number" class="form-control" id="inputPassword3" />
    </div>
    <label for="inputPassword3" style="text-align: center;" class="col-sm-2 form-control-label">No. Hp </label>
    <div class="col-sm-3">
      <input name="dt_reg_hp" type="number" class="form-control" id="inputPassword3" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Jenis Tempat Tinggal</label>
    <div class="col-sm-2">
      <select name="dt_reg_jenis_tinggal" class="form-control" id="exampleSelect1">
      <option value="Bersama Orangtua">Bersama Orangtua</option>
      <option value="Wali">Wali</option>
      <option value="Kost">Kost</option>
      <option value="Asrama">Asrama</option>
      <option value="Panti Asuhan">Panti Asuhan</option>
      <option value="Lainnya">Lainnya</option>
    </select>
    </div>

    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-2 form-control-label">Alat Transportasi</label>
    <div class="col-sm-2">
      <select name="dt_reg_alat_transport" class="form-control" id="exampleSelect1">
      <option value="Jalan Kaki">Jalan Kaki</option>
      <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
      <option value="Kendaraan Umum">Kendaraan Umum</option>
      <option value="Jemputan Sekolah">Jemputan Sekolah</option>
      <option value="Kereta Api">Kereta Api</option>
      <option value="Ojek">Ojek</option>
      <option value="Lainnya">Lainnya</option>
    </select>
    </div>
    </div>

    <div class="form-group row">

    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Jarak ke Sekolah (km)</label>
    <div class="col-sm-1">
      <input type="number" name="dt_reg_jarak_kesekolah" class="form-control not-res" />
    </div>

    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-2 form-control-label">Waktu Tempuh (menit)</label>
    <div class="col-sm-1">
    <input type="number" name="dt_reg_waktu_tempuh" class="form-control not-res" />
    </div>
  </div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Penerima KPS</label>
    <div class="col-sm-1">
      <select name="dt_reg_kps" class="form-control" id="exampleSelect1">
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
    </div>
    <label for="exampleInputPassword1" style="text-align: center;" class="col-sm-2 form-control-label">No KPS</label>
    <div class="col-sm-4">
      <input type="number" name="dt_reg_no_kps" class="form-control not-res" />
    </div>
  </div>


  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Nama Ayah </label>
    <div class="col-sm-3">
      <input name="dt_reg_bpk_nama" class="form-control" id="inputPassword3" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Tempat Lahir Ayah</label>
    <div class="col-sm-3">
      <input name="dt_reg_bpk_tempat_lahir" class="form-control" id="inputPassword3" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Tanggal Lahir Ayah</label>
    <div class="col-sm-3">
    <div class='input-group date' id='datetimepicker1'>
        <input type='text' name="dt_reg_bpk_tgl_lahir" class="form-control not-res birth_date" />
        <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    </div>
  </div>

  <div class="form-group row">
  <label for="inputPassword3" class="col-sm-2 form-control-label">Agama Ayah</label>
  <div class="col-sm-3">
    <select name="dt_reg_bpk_agama" class="form-control" id="exampleSelect1">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katholik">Katholik</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
      <option value="Konghucu">Konghucu</option>
    </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Pekerjaan Ayah</label>
    <div class="col-sm-2">
      <select name="dt_reg_bpk_pekerjaan" class="form-control" id="exampleSelect1">
      <option value="Tidak bekerja">Tidak bekerja</option>
      <option value="Nelayan">Nelayan</option>
      <option value="Petani">Petani</option>
      <option value="Peternak">Peternak</option>
      <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
      <option value="Karyawan Swasta">Karyawan Swasta</option>
      <option value="Pedagang Kecil">Pedagang Kecil</option>
      <option value="Pedagang Besar">Pedagang Besar</option>
      <option value="Wiraswasta">Wiraswasta</option>
      <option value="Wirausaha">Wirausaha</option>
      <option value="Buruh">Buruh</option>
      <option value="Pensiunan">Pensiunan</option>
      <option value="Lainnya">Lainnya</option>
    </select>
    </div>

    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-2 form-control-label">Pendidikan Ayah</label>
    <div class="col-sm-2">
      <select name="dt_reg_bpk_pendidikan" class="form-control" id="exampleSelect1">
      <option value="Tidak Sekolah">Tidak Sekolah</option>
      <option value="Putus SD">Putus SD</option>
      <option value="SD Sederajat">SD Sederajat</option>
      <option value="SMP Sederajat">SMP Sederajat</option>
      <option value="SMA Sederajat">SMA Sederajat</option>
      <option value="D1">D1</option>
      <option value="D2">D2</option>
      <option value="D3">D3</option>
      <option value="D4/S1">D4/S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
      <option value="Lainnya">Lainnya</option>
    </select>
    </div>
    </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">No. Telp Ayah</label>
    <div class="col-sm-3">
      <input name="dt_reg_bpk_telp" type="number" class="form-control" id="inputPassword3" required/>
    </div>
    <label for="inputPassword3" style="text-align: center;" class="col-sm-2 form-control-label">Email Ayah</label>
    <div class="col-sm-3">
      <input name="dt_reg_bpk_email" type="email" class="form-control" id="inputPassword3" required/>
    </div>
    </div>

    <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Penghasilan Ayah</label>
    <div class="col-sm-2">
      <select name="dt_reg_bpk_hasil" class="form-control" id="exampleSelect1">
      <option value="Kurang dari Rp 2.000.000,-">Kurang dari Rp 2.000.000,-</option>
      <option value="Rp 2.000.000 - Rp 5.000.000,- ">Rp 2.000.000 - Rp 5.000.000,- </option>
      <option value="Lebih dari Rp 5.000.000,-">Lebih dari Rp 5.000.000,-</option>
    </select>
    </div>
    </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Nama Ibu </label>
    <div class="col-sm-3">
      <input name="dt_reg_ibu_nama" class="form-control" id="inputPassword3" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Tempat Lahir Ibu</label>
    <div class="col-sm-3">
      <input name="dt_reg_ibu_tempat_lahir" class="form-control" id="inputPassword3" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Tanggal Lahir Ibu</label>
    <div class="col-sm-3">
    <div class='input-group date' id='datetimepicker1'>
        <input type='text' name="dt_reg_ibu_tgl_lahir" class="form-control not-res birth_date" />
        <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    </div>
  </div>

  <div class="form-group row">
  <label for="inputPassword3" class="col-sm-2 form-control-label">Agama Ibu</label>
  <div class="col-sm-3">
    <select name="dt_reg_ibu_agama" class="form-control" id="exampleSelect1">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katholik">Katholik</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
      <option value="Konghucu">Konghucu</option>
    </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Pekerjaan Ibu</label>
    <div class="col-sm-2">
      <select name="dt_reg_ibu_pekerjaan" class="form-control" id="exampleSelect1">
      <option value="Tidak bekerja">Tidak bekerja</option>
      <option value="Nelayan">Nelayan</option>
      <option value="Petani">Petani</option>
      <option value="Peternak">Peternak</option>
      <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
      <option value="Karyawan Swasta">Karyawan Swasta</option>
      <option value="Pedagang Kecil">Pedagang Kecil</option>
      <option value="Pedagang Besar">Pedagang Besar</option>
      <option value="Wiraswasta">Wiraswasta</option>
      <option value="Wirausaha">Wirausaha</option>
      <option value="Buruh">Buruh</option>
      <option value="Pensiunan">Pensiunan</option>
      <option value="Lainnya">Lainnya</option>
    </select>
    </div>

    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-2 form-control-label">Pendidikan Ibu</label>
    <div class="col-sm-2">
      <select name="dt_reg_ibu_pendidikan" class="form-control" id="exampleSelect1">
      <option value="Tidak Sekolah">Tidak Sekolah</option>
      <option value="Putus SD">Putus SD</option>
      <option value="SD Sederajat">SD Sederajat</option>
      <option value="SMP Sederajat">SMP Sederajat</option>
      <option value="SMA Sederajat">SMA Sederajat</option>
      <option value="D1">D1</option>
      <option value="D2">D2</option>
      <option value="D3">D3</option>
      <option value="D4/S1">D4/S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
      <option value="Lainnya">Lainnya</option>
    </select>
    </div>
    </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">No. Telp Ibu</label>
    <div class="col-sm-3">
      <input name="dt_reg_ibu_telp" type="number" class="form-control" id="inputPassword3" required/>
    </div>
    <label for="inputPassword3" style="text-align: center;" class="col-sm-2 form-control-label">Email Ibu</label>
    <div class="col-sm-3">
      <input name="dt_reg_ibu_email" type="email" class="form-control" id="inputPassword3" required/>
    </div>
    </div>

    <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Penghasilan Ibu</label>
    <div class="col-sm-2">
      <select name="dt_reg_ibu_hasil" class="form-control" id="exampleSelect1">
      <option value="Kurang dari Rp 2.000.000,-">Kurang dari Rp 2.000.000,-</option>
      <option value="Rp 2.000.000 - Rp 5.000.000,- ">Rp 2.000.000 - Rp 5.000.000,- </option>
      <option value="Lebih dari Rp 5.000.000,-">Lebih dari Rp 5.000.000,-</option>
    </select>
    </div>
    </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Nama Wali </label>
    <div class="col-sm-3">
      <input name="dt_reg_wali_nama" class="form-control" id="inputPassword3" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Tempat Lahir Wali</label>
    <div class="col-sm-3">
      <input name="dt_reg_wali_tempat_lahir" class="form-control" id="inputPassword3" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Tanggal Lahir Wali</label>
    <div class="col-sm-3">
    <div class='input-group date' id='datetimepicker1'>
        <input type='text' name="dt_reg_wali_tgl_lahir" class="form-control not-res birth_date" />
        <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    </div>
  </div>

  <div class="form-group row">
  <label for="inputPassword3" class="col-sm-2 form-control-label">Agama Wali</label>
  <div class="col-sm-3">
    <select name="dt_reg_wali_agama" class="form-control" id="exampleSelect1">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katholik">Katholik</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
      <option value="Konghucu">Konghucu</option>
    </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Pekerjaan Wali</label>
    <div class="col-sm-2">
      <select name="dt_reg_wali_pekerjaan" class="form-control" id="exampleSelect1">
      <option value="Tidak bekerja">Tidak bekerja</option>
      <option value="Nelayan">Nelayan</option>
      <option value="Petani">Petani</option>
      <option value="Peternak">Peternak</option>
      <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
      <option value="Karyawan Swasta">Karyawan Swasta</option>
      <option value="Pedagang Kecil">Pedagang Kecil</option>
      <option value="Pedagang Besar">Pedagang Besar</option>
      <option value="Wiraswasta">Wiraswasta</option>
      <option value="Wirausaha">Wirausaha</option>
      <option value="Buruh">Buruh</option>
      <option value="Pensiunan">Pensiunan</option>
      <option value="Lainnya">Lainnya</option>
    </select>
    </div>

    <label style="text-align: center;" for="exampleInputPassword1" class="col-sm-2 form-control-label">Pendidikan Wali</label>
    <div class="col-sm-2">
      <select name="dt_reg_wali_pendidikan" class="form-control" id="exampleSelect1">
      <option value="Tidak Sekolah">Tidak Sekolah</option>
      <option value="Putus SD">Putus SD</option>
      <option value="SD Sederajat">SD Sederajat</option>
      <option value="SMP Sederajat">SMP Sederajat</option>
      <option value="SMA Sederajat">SMA Sederajat</option>
      <option value="D1">D1</option>
      <option value="D2">D2</option>
      <option value="D3">D3</option>
      <option value="D4/S1">D4/S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
      <option value="Lainnya">Lainnya</option>
    </select>
    </div>
    </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">No. Telp Wali</label>
    <div class="col-sm-3">
      <input name="dt_reg_wali_telp" type="number" class="form-control" id="inputPassword3" required/>
    </div>
    <label for="inputPassword3" style="text-align: center;" class="col-sm-2 form-control-label">Email wali</label>
    <div class="col-sm-3">
      <input name="dt_reg_wali_email" type="email" class="form-control" id="inputPassword3" required/>
    </div>
    </div>

    <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-2 form-control-label">Penghasilan Wali</label>
    <div class="col-sm-2">
      <select name="dt_reg_wali_hasil" class="form-control" id="exampleSelect1">
      <option value="Kurang dari Rp 2.000.000,-">Kurang dari Rp 2.000.000,-</option>
      <option value="Rp 2.000.000 - Rp 5.000.000,- ">Rp 2.000.000 - Rp 5.000.000,- </option>
      <option value="Lebih dari Rp 5.000.000,-">Lebih dari Rp 5.000.000,-</option>
    </select>
    </div>
    </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Pas Foto Siswa (3 x 4)</label>
    <div class="col-sm-3">
      <input name="dt_reg_photo" type="file" class="form-control" id="inputPassword3" required/>
    </div>
    </div>

            </div>
            <div class="modal-footer">
              <button type="submit" id="btndaftar" class="btn btn-default">Register</button>
              </form>
              <!-- <a href="{{url('registration/TK-PDF') }}" target="_blank"><button style="margin-left:20px;"  type="submit" id="btnprint" class="btn btn-default">Manual Print</button></a> -->
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- form tk end -->



<!-- modal dkm end -->

<div id="carouselSection" class="cntr">
</div>
<div id="headerSection">

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" id="nb-logo" href="#">
      <img class="navbar-brand" style="height:80px;width:80px;margin-top:-31px" src="img/all_icon/logo.png">
      Al - Fajar</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul style="margin-top:15px;" class="nav navbar-nav">
        <a class="a-li" href="{{url('/')}}"><li>Home</li></a>
        <a class="a-li" href="{{url('news')}}"><li>News</li></a>
        <a class="a-li" href="{{url('portal_tk')}}"><li>TK</li></a>
        <a class="a-li" href="{{url('portal_sd')}}"><li>SD</li></a>
        <a class="a-li" href="{{url('portal_smp')}}"><li>SMP</li></a>
        <a class="a-li" href="{{url('portal_smp')}}"><li>SMA</li></a>
        @if(isset($_SESSION['logged_in']))
        @if(isset($_SESSION['akses_type']))
          @if($_SESSION['akses_type'] == 'student' || $_SESSION['akses_type'] == 'parent')
        <a id="a-li" style="cursor:pointer" href="{{url('manage')}}"><li>Manage</li></a>
        <a class="a-li" href="{{url('logout')}}"><li>Logout</li></a>
          @else
        <a class="a-li" href="{{url('manage')}}"><li>Manage</li></a>
        <a class="a-li" href="{{url('logout')}}"><li>Logout</li></a>
          @endif
         @endif
         @else
        <a class="a-li" href="{{ url('login') }}"><li>Login</li></a>
        @endif

      </ul>
    </div>
  </div>
</nav>
    </div>

<!--Header Ends================================================ -->

<div class="title-pendaftaran">
  Penerimaan Peserta Didik Baru Online
</div>
<!-- <img src="{{ url('images/2016121419003458513462b7e7d.jpg') }}"> -->

<?php
                    
                    if(isset($_SESSION['error_msg']))
                    {
                    echo "<div class='alert alert-warning'>
                      <strong>".$_SESSION['error_msg']."</strong>
                    </div>";
                    unset($_SESSION['error_msg']);
                    }
                    ?>
@if (session('status'))
            <div style="font-size: 25px;" class="alert alert-success">
                {{ session('status') }} And here your registration code <span style="font-size: 30px;font-weight: bold;">{{ session('code') }}</span>
                <a data-toggle="modal" data-target="#myModalinfo" href="#">
                <button style="border:none;margin-top:-5px;margin-left:10px;padding: 10px;background-color: #d22626;" type="button" class="btn btn-success" data-dismiss="modal">Click Here</button>
                </a>
            </div>
        @endif

<div class="full-pendaftaran">

  <div id="pendaftarantk"></div>
  <a data-toggle="modal" data-target="#myModalinfodaftar" href="#">
  <div style="background:#4FC2F8" class="box-pendaftaran" >
    <div class="img-pendaftaran">
      <img class="img-daftar" src="{{ url('img/img_home/daftaronline.jpg') }}">
    </div>
    <div class="titlebox">
      
    </div>
    <div class="titlefullboxtk">
      Pendaftaran Online
    </div>
  </div>
  </a>

  <a data-toggle="modal" data-target="#myModalprint" href="#">
  <div id="pendaftaransd" style="background:#E6E6E6" class="box-pendaftaran">
    <div class="img-pendaftaran">
      <img class="img-daftar" src="{{ url('img/img_home/print.jpg') }}">
    </div>
    <div class="titlebox">
    </div>
    <div class="titlefullboxsd">
      Print Formulir
    </div>
  </div>
  </a>


</div>

<!-- footer -->
     <div class="footerSection container">

</div>
<div class="footer-wel">
    <div class="footer-content">
        <div class="footer-lable">
            <label><a class="footer-a1" href="#">Facebook</a></label>
            <label><a class="footer-a1" href="#">Twitter</a></label>
            <label><a class="footer-a1" href="#">Meet The Team</a></label>
        </div>
        <div class="footer-lable2">
            <label style="color : rgb(20, 210, 210)">© 2016 JICOS, All rights reserved. <a class="footer-a" href="#"> Achmad Fauzi </a> and <a <a class="footer-a" href=""> Rizda Annisa .</a> Perguruan Islam Al - Fajar <a class="footer-a" href=""> Contact , </a> and JICOS <a class="footer-a" href=""> About. </a>.</label>
        </div>
    </div>
</div>

<!-- Wrapper end -->


<a href="#" class="go-top" ><i class="glyphicon glyphicon-arrow-up"></i></a>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="js/jquery.easing-1.3.min.js"></script>
<script src="js/default.js"></script>
<script src="datepicker/js/bootstrap-datepicker.js"></script>
<script src="{{ url('adminlte/dtpicker/moment.js')}}"></script>
<script src="{{ url('adminlte/bootstrap/js/transition.js') }}"></script>
<script src="{{ url('adminlte/bootstrap/js/collapse.js') }}"></script>
<script src="{{ url('adminlte/dtpicker/js/bootstrap-datetimepicker.min.js')}}"></script>


<script type="text/javascript">
  $('.datepicker').datepicker();
</script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#myCarousel').carousel({
        interval: 3000
      });
    });
  $('.for_year').datetimepicker({ format: 'YYYY' });
    $('.for_time').datetimepicker({ format: 'HH:mm:ss' });
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
        $('#selecttypegrade').change(function(){
        if($(this).val() == "TK"){
          $("#selecttypeclasstk").css("display","block");
          $('#selecttypeclasssd').hide();
          $("#tyclass").val("tk");
          $('#selecttypeclasssmp').hide();
          $('#selecttypeclasssma').hide();
        }
        else if($(this).val() == "SD"){
          $("#selecttypeclasstk").hide();
          $("#tyclass").val("sd");
          $('#selecttypeclasssd').css("display","block");
          $('#selecttypeclasssmp').hide();
          $('#selecttypeclasssma').hide();
        }
        else if($(this).val() == "SMP"){
          $("#selecttypeclasstk").hide();
          $("#tyclass").val("smp");
          $('#selecttypeclasssd').hide();
          $('#selecttypeclasssmp').css("display","block");
          $('#selecttypeclasssma').hide();
        }
        else if($(this).val() == "SMA"){
          $("#selecttypeclasstk").hide();
          $("#tyclass").val("sma");
          $('#selecttypeclasssd').hide();
          $('#selecttypeclasssmp').hide();
          $('#selecttypeclasssma').css("display","block");
        }
      });

</script>

</body>
</html>
