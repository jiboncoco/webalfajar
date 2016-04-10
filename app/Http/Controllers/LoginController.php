<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');

		//akan menjalankan function apabila sudah login
		//apabila belum login, akan diarahkan ke halaman login
	}

	public function admin()
    {
        return view('admin');
    }

    public function login_staff()
    {

    	$DB_HOST="103.27.206.159";
		$DB_DATABASE="alfajar";
		$DB_USERNAME="alfajar";
		$DB_PASSWORD="sdsmpsmkalfajar321@@";

		mysql_connect("$DB_HOST", "$DB_USERNAME", "$DB_PASSWORD")or die("cannot connect"); 
		mysql_select_db("$DB_DATABASE")or die("cannot select DB");


    	function antiinjection($data){
		$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
		return $filter_sql;
		}
    	session_start();  		
		$akses_username= antiinjection($_POST['akses_username']); 	
		$akses_password=antiinjection($_POST['akses_password']);
		$akses_code=antiinjection($_POST['akses_code']); 

		//cek akses type
    	$query_akses_type=mysql_query ("select akses.akses_id, akses.akses_type from akses inner join akses_type on akses.akses_id = akses_type.akses_type_id AND akses.akses_type = akses_type.akses_type_name");
		$cek_akses_type=mysql_num_rows($query_akses_type);
		if($cek_akses_type==1){

			//cek akses status
			$query_akses_status=mysql_query ("select akses.akses_id from akses inner join akses_type on akses.akses_id = akses_type.akses_type_id AND akses_type.akses_type_status==true");
			$cek_akses_status=mysql_num_rows($query_akses_status);
			if($cek_akses_status==1){
				$hasil=mysql_fetch_array($query_akses_statusdata);
				$_SESSION['akses_id'] = $hasil['akses_id'];

				//cek akses code
				$query_username_password=("select *from akses where akses_code = $akses_code");
				$cek_username_code_1=mysql_num_rows($query_username_password);
				if($cek_username_code_1==1){
				$query=mysql_query ("select akses.akses_id, akses.akses_code from akses inner join akses_log on akses.akses_id = akses_log.akses_log_id AND akses.akses_code = akses_log.akses_log_code");
				$cek_akses_code=mysql_num_rows($query_akses_code);
				if($cek_akses_code==1){

					//cek akses datevalid
					$query_akses_datevalid=mysql_query ("select akses.akses_timestamp from akses inner join akses_log on akses.akses_timestamp date('d') = akses_log.akses_log_datevalid");
					$cek_akses_datevalid=mysql_num_rows($query_akses_datevalid);
					if($cek_akses_datevalid==1){

						//cek akses status data
						$query_akses_statusdata=("select *from akses where akses_status_data = active");
						$cek_akses_statusdata=mysql_num_rows($query_akses_statusdata);
						if($cek_akses_statusdata==1){
							$hasil=mysql_fetch_array($query_akses_statusdata);
							$_SESSION['akses_id'] = $hasil['akses_id'];
						}
						else{
							echo "Account has been Disable";
						}

							//cek username password
							$query_username_password=("select *from akses where akses_username = $akses_username AND akses_password = $akses_password");
							$cek_username_password=mysql_num_rows($query_username_password);
							if($cek_username_password==1){
								return view('admin');
							}
							else{
								echo "Username or Password you’ve entered doesn’t match any account";
							}
					}
					else{
						echo "Access Code Has been Expired";
					}
				}
				else{
					echo "Access Code Not Registered, Please Register First";
				}
    		}
				else{
					echo "Access Code entered doesn’t match any account";
				}
			}
    		else{
    			echo "Account not have Access Type";
    		}
		}
		else{
			echo "Access Type hasbeen Disable";
		}
}
}