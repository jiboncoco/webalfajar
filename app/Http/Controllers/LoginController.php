<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
	
	public function login_staff()
	{
		session_start();
		$akses_code     = $_POST['akses_code'];
		$akses_username = $_POST['akses_username'];
		$akses_password = $_POST['akses_password'];
		
		$akses_typee = \DB::table('akses')->join('akses_type', function($join)
		{
			$join->on('akses.akses_type', '=', 'akses_type.akses_type_name');
		})->count();
		
		if (!empty($akses_typee)) {
			
			$akses_statuss = \DB::table('akses_type')->where('akses_type_status', '=', 'true')->count();
			
			if (!empty($akses_statuss)) { //done
				
				$akses_codee = \DB::table('akses_log')->where('akses_log_code', 'like', $akses_code)->count();
				
				// if ($akses_codee == 1) {
				if (!empty($akses_codee)) {
					
					$cekdatevalid = \DB::table('akses')->join('akses_log', function($join)
					{
						$join->on('akses.akses_id', '=', 'akses_log.akses_log_id');
					})->get();
					$tanggal      = \DateTime::createFromFormat('Y-m-d H:i:s', $cekdatevalid[0]->akses_log_timestamp)->format('d');
					echo $tanggal;
					
					if (!empty($cekdatevalid)) {
						
						$akses_status_dataa = \DB::table('akses')->where('akses_code', 'like', $akses_code, 'AND', 'akses.akses_status_data', '=', 'active')->count();
						
						if (!empty($akses_status_dataa)) {
							
							$akses_uname = \DB::table('akses')->where('akses_username', 'like', $akses_username)->count();
							// if ($akses_uname == 1) {
							echo $akses_uname;
							if (!empty($akses_uname)) {
								$akses_pwd = \DB::table('akses')->where('akses_password', 'like', $akses_password)->count();
								// if ($akses_pwd == 1) {
								if (!empty($akses_pwd)) {
									return redirect('admin');
								} else {
									$_SESSION['error_msg'] = "Password you’ve entered doesn’t match any account";
									return redirect('login');
								}
							} else {
								$_SESSION['error_msg'] = "Username you’ve entered doesn’t match any account";
								return redirect('login');
							}
						} else {
							$_SESSION['error_msg'] = "Account has been Disable";
							// return redirect('login');
						}
					} else {
						$_SESSION['error_msg'] = "Access Code Has been Expired";
						return redirect('login');
					}
				} else {
					$_SESSION['error_msg'] = "Access Code Not Registered";
					return redirect('login');
				}
			} else {
				$_SESSION['error_msg'] = "Access Type hasbeen Disable";
				return redirect('login');
			}
		} else {
			$_SESSION['error_msg'] = "Account not have Access Type";
			return redirect('login');
		}
	}
	public function logout()
	{
		session_start();
		session_destroy();
		return redirect('login');
	}
	
}