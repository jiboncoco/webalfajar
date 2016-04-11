<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    
    public function login_staff()
    {
    	session_start();
        $akses_type     = $_POST['akses_type'];
        $akses_username = $_POST['akses_username'];
        $akses_password = $_POST['akses_password'];
        
        
        $akses_typee = \DB::table('akses_type')->where('akses_type_name', 'like', $akses_type)->count();
        // if(isset($akses_typee)){
        if ($akses_typee == 1) {
            
            //     $akses_typee2 = \DB::table('akses')
            //      ->join('akses_type', function ($join) {
            //          $join->on('akses.akses_type', '=', 'akses_type.akses_type_name');
            //      })
            //      ->count();
            // if(isset($akses_typee2)){
            
            $akses_statuss = \DB::table('akses')->join('akses_type', function($join)
            {
                $join->on('akses.akses_type', '=', 'akses_type.akses_type_name', 'AND', 'akses_type.akses_type_status', '=', 'true');
            })->count();
            if (isset($akses_statuss)) { //done
                
                $akses_codee = \DB::table('akses')->join('akses_log', function($join)
                {
                    $join->on('akses.akses_type', '=', 'akses_log.akses_log_name', 'AND', 'akses.akses_code', '=', 'akses_log.akses_log_code');
                })->count();
                if (isset($akses_codee)) {
                    
                    $cekdatevalid = \DB::table('akses')->join('akses_log', function($join)
                    {
                        $join->on('akses.akses_id', '=', 'akses_log.akses_log_id');
                    })->get();
                    if ($cekdatevalid) {
                        
                        $akses_status_dataa = \DB::table('akses')->join('akses_type', function($join)
                        {
                            $join->on('akses.akses_type', '=', 'akses_type.akses_type_name', 'AND', 'akses.akses_status_data', '=', 'active');
                        })->count();
                        
                        if (isset($akses_status_dataa)) {
                            
                            $akses_uname = \DB::table('akses')->where('akses_username', 'like', $akses_username)->count();
                            if ($akses_uname == 1) {
                                $akses_pwd = \DB::table('akses')->where('akses_password', 'like', $akses_password)->count();
                                if ($akses_pwd == 1) {
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
            				return redirect('login');
                        }
                    } else {
                    	$_SESSION['error_msg'] = "Access Code Has been Expired";
            			return redirect('login');
                    }
                } else {
                	$_SESSION['error_msg'] = "Access Code Not Registered, Please Register First";
            		return redirect('login');
                }
            } else {
            	$_SESSION['error_msg'] = "Access Type hasbeen Disable";
            	return redirect('login');
            }
            // }
            // else{
            //     echo "Account not have Access Type";
            // }
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