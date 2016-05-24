@extends('app_admin')

@section('content')


  <body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>FJ</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>AL</b> FAJAR</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          
          @include('menu')

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->

          @include('sidebar')
       
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        <div class="admin-seacrh" style="height:2px;">
            </div>
              <div style="width:95%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Feature</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_feature/update_feature') }}" enctype="multipart/form-data">

                  <div class="row"> 
                  <div  class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Feature To </label>
                      <select id="selecttype" name="feature_to" class="form-control not-res" >
                      <option value="YAYASAN">YAYASAN</option>
                      <option value="DKM">DKM</option>
                      <option value="SMA">SMA</option>
                      <option value="SMP">SMP</option>
                      <option value="SD">SD</option>
                      <option value="TK">TK</option>
                      </select>
                    </div>

                  <div  class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Feature For </label>
                      <select id="selecttype" name="feature_for" class="form-control not-res" >
                      <option value="ekstracurricular">ekstracurricular</option>
                      <option value="achievment">achievment</option>
                      <option value="partnerships">partnerships</option>
                      <option value="committee">committee</option>
                      <option value="alumni">alumni</option>
                      <option value="student">student</option>
                      <option value="headmaster">headmaster</option>
                      <option value="profile">profile</option>
                      <option value="pendidikan">pendidikan</option>
                      <option value="galery">galery</option>
                      <option value="fasilitas">fasilitas</option>
                      <option value="kurikulum">kurikulum</option>
                      <option value="visi-misi">visi-misi</option>
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                  <div  class="col-xs-8">
                  <label for="exampleInputPassword1">Content</label>
                  <textarea  class="form-control ckeditor" id="editor1" name="feature_text" placeholder="Content" class="materialize-textarea" rows="6" required/>
                    {{ $feature_edit->feature_text }}
                  </textarea>
                  <input type="hidden" name="id" value="{{ $feature_edit->id }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  </div>
                  <br>
                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Feature Status</label>
                      <select id="selecttype" name="feature_status" class="form-control not-res">
                        <option value="active">Active</option>
                        <option value="disable">Disable</option>                      
                      </select>
                    </div>
                  </div>

                  <br><br>
                  <div id="b-save"></div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              

<!--               <form method="POST" action="{{ url('manage_teacher/import_data_teacher') }}" enctype="multipart/form-data">
                
                <input type="file" name="import_file"/>
                <button type="submit">Import File</button>

              </form> -->

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Teacher Schedule</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>To</th>
                        <th>For</th>
                        <th>Text</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($feature as $feature)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $feature->feature_to}}</td>
                        <td>{{ $feature->feature_for}}</td>
                        <td>
                        <?php
                              $string = strip_tags($feature->feature_text);

                              if (strlen($string) > 150) {

                                  // truncate string
                                  $stringCut = substr($string, 0, 150);

                                  // make sure it ends in a word so assassinate doesn't become ass...
                                  $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                              }
                              echo $string;
                        ?>
                        </td>
                        <td>{{ $feature->feature_status}}</td>
                        <td>
                        <a href="{{ url('manage_feature/edit_feature/'.$feature->id)}}"><i class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_feature/delete_feature/'.$feature->id)}}"><i class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                 <!--  <a href="{{ url('manage_teacher/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_teacher/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_teacher/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a> -->
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
        </section>
      </div>
      
</div>
</body>

    <script type="text/javascript">
            $('.for_datatable').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true
            });
    $('.for_year').datetimepicker({ format: 'YYYY' });
    $('.for_time').datetimepicker({ format: 'HH:mm:ss' });
    </script>
@endsection
