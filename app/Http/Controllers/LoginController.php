<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{ 

    public function login_staff()
    {
    	$akses_type = $_POST['akses_type'];
    	$akses_username = $_POST['akses_username'];
    	$akses_password = $_POST['akses_password'];


    	$akses_typee = \DB::table('akses')
			->where('akses_type', 'like', $akses_type)
			->count();
			echo $akses_typee;

		if(isset($akses_typee)){

	    	$akses_typee2 = \DB::table('akses')
		        ->join('akses_type', function ($join) {
		            $join->on('akses.akses_type', '=', 'akses_type.akses_type_name');
		        })
		        ->count();
	    if(isset($akses_typee2)){

	    	$akses_statuss = \DB::table('akses')
		        ->join('akses_type', function ($join) {
		            $join->on('akses.akses_type', '=', 'akses_type.akses_type_name', 'AND', 'akses_type.akses_type_status','=','true');
		        })
		        ->count();
		    if (isset($akses_statuss)) { //done

			    	$akses_codee = \DB::table('akses')
				        ->join('akses_log', function ($join) {
				            $join->on('akses.akses_type', '=', 'akses_log.akses_log_name','AND','akses.akses_code', '=', 'akses_log.akses_log_code');
				        })
				        ->count();
				    if(isset($akses_codee)){

				    	$cekdatevalid = \DB::table('akses')
                          ->join('akses_log', function ($join) {
                              $join->on('akses.akses_id', '=', 'akses_log.akses_log_id');
                          })
                          ->get();
                         if ($cekdatevalid) {
					    	
					    	$akses_status_dataa = \DB::table('akses')
						        ->join('akses_type', function ($join) {
						            $join->on('akses.akses_type', '=', 'akses_type.akses_type_name', 'AND', 'akses.akses_status_data','=','active');
						        })
						        ->count();

						    if(isset($akses_status_dataa)){

									$akses_uname = \DB::table('akses')
									        ->where('akses_username', 'like', $akses_username)
									        ->count();
						    		if ($akses_uname==1) {
						    			$akses_pwd = \DB::table('akses')
									        ->where('akses_password', 'like',$akses_password)
									        ->count();
						    		if ($akses_pwd==1) {
						    			 return redirect('admin');
									}else{
										echo "Password you’ve entered doesn’t match any account";
									}
								}else{
									echo "Username you’ve entered doesn’t match any account";
								}
						    }
					    	else{
								echo "Account has been Disable";
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
    			echo "Access Type hasbeen Disable";
    		}
		}
		else{
			echo "Account not have Access Type";
		}
	}
	else{
			echo "Account not have Access Type";
}
}

	public function logout()
	{
		session_start();
		session_destroy();
		return redirect('login');
	}

}