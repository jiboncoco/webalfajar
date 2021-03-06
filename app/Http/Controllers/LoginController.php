<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
	
	public function login_staff(Request $request)
	{
		session_start();
		$akses_code     = $_POST['akses_code'];
		$akses_email = $_POST['akses_email'];
		$akses_password = $_POST['akses_password'];

				$akses_codee = \DB::table('akses_log')->where('akses_log_code', 'like', $akses_code)->count();
				
				if (!empty($akses_codee)) {

					$cekdatevalid = \DB::table('akses_log')->where('akses_log_code', 'like', $akses_code)->get();

					if ($cekdatevalid[0]->akses_log_datevalid == date('d')) {

						$akses_status_dataa = \DB::table('akses_type')->where([
							['akses_type.akses_type_name', 'like', 'staff'],
							['akses_type.akses_type_status', 'like', 'true']
							])->count();
						
						if (!empty($akses_status_dataa)) {
							
							$akses_uname = \DB::table('akses')->where('akses_email', 'like', $akses_email)->count();

							if (!empty($akses_uname)) {
								$akses_pwd = \DB::table('akses')->where('akses_password', 'like', $akses_password)->count();

								if (!empty($akses_pwd)) {

									$akses_typee = \DB::table('akses')->where([
										['akses_code', 'like', $akses_code], 
										['akses_email', 'like', $akses_email],
										['akses_password', 'like', $akses_password], 
										['akses_type', 'like', 'staff']
									])->count();
										if (!empty($akses_typee)) {

											$akses_statuss = \DB::table('akses')->where([
											['akses_code', 'like', $akses_code],
											['akses_type', 'like', 'staff'],
											['akses_email', 'like', $akses_email],
											['akses_password', 'like', $akses_password], 
											['akses_status_data', 'like', 'active']
											])->count();
											
										if (!empty($akses_statuss)) {
										$request->session()->put('akses_type', 'staff');
								
										$request->session()->put('akses_code', $akses_code);
										$request->session()->put('akses_email', $akses_email);
										$request->session()->put('logged_in', 1);
		
										$_SESSION['akses_type'] = 'staff';
										$_SESSION['logged_in'] = 1;
									return redirect('/');
								} else {
									$_SESSION['error_msg'] = "Account has been Disable";
									return redirect('login');
								}
							} else {
								$_SESSION['error_msg'] = "Account not have Access Type";
								return redirect('login');
							}
						} else {
							$_SESSION['error_msg'] = "Password you’ve entered doesn’t match any account";
							return redirect('login');
						}
					} else {
						$_SESSION['error_msg'] = "Email you’ve entered doesn’t match any account";
						return redirect('login');
					}
				} else {
					$_SESSION['error_msg'] = "Access Type has been Disable";
					return redirect('login');
				}
			} else {
				$_SESSION['error_msg'] = "Access Code Has been Expired";
				return redirect('login');
			}
		} else {
			$_SESSION['error_msg'] = "Access Code Not Registered";
			return redirect('login');
		}
	}

	public function login_teacher(Request $request)
	{
		session_start();
		$akses_code     = $_POST['akses_code'];
		$akses_email = $_POST['akses_email'];
		$akses_type = $_POST['akses_type'];
		$akses_password = $_POST['akses_password'];

				$akses_codee = \DB::table('dt_teacher')->where('dt_teacher_nip', 'like', $akses_code)->count();
				
				if (!empty($akses_codee)) {

					$akses_uname = \DB::table('akses')->where('akses_email', 'like', $akses_email)->count();

					if (!empty($akses_uname)) {

						$akses_pwd = \DB::table('akses')->where('akses_password', 'like', $akses_password)->count();

						if (!empty($akses_pwd)) {

							$akses_status_dataa = \DB::table('akses_type')->where([
							['akses_type.akses_type_name', 'like', $akses_type],
							['akses_type.akses_type_status', 'like', 'true']
							])->count(); 
						
							if (!empty($akses_status_dataa)) {

								$akses_typee = \DB::table('akses')->where([
								['akses_code', 'like', $akses_code], 
								['akses_email', 'like', $akses_email],
								['akses_password', 'like', $akses_password], 
								['akses_type', 'like', $akses_type]
								])->count(); 
								
								if (!empty($akses_typee)) {

									$akses_statuss_nip = \DB::table('dt_teacher')->where([
									['dt_teacher_nip', 'like', $akses_code],
									['dt_teacher_statuslog', 'like', 'active']
									])->count(); 
								
									if (!empty($akses_statuss_nip)) {

										$akses_statuss_person = \DB::table('akses')->where([
										['akses_code', 'like', $akses_code],
										['akses_type', 'like', $akses_type],
										['akses_email', 'like', $akses_email],
										['akses_password', 'like', $akses_password], 
										['akses_status_data', 'like', 'active']
										])->count();
											if (!empty($akses_statuss_person)) {

											$request->session()->put('akses_type', 'teacher');
									
											$request->session()->put('logged_in', 1);
											$request->session()->put('akses_code', $akses_code);
											$request->session()->put('akses_type', $akses_type);
											$request->session()->put('akses_email', $akses_email);
			
											$_SESSION['akses_type'] = $akses_type;
											$_SESSION['logged_in'] = 1;
											return redirect('/');
										
										} else {
											$_SESSION['error_msg'] = "Account has been Disable";
											return redirect('login');
										}

									} else {
										$_SESSION['error_msg'] = "Your NIP has been Disable";
										return redirect('login');
									}

								} else {
									$_SESSION['error_msg'] = "Account not have Access Type";
									return redirect('login');
								}

							} else {
								$_SESSION['error_msg'] = "Access Type has been Disable";
								return redirect('login');
							}

						} else {
							$_SESSION['error_msg'] = "Password you’ve entered doesn’t match any account";
							return redirect('login');
						}

					} else {
						$_SESSION['error_msg'] = "Email you’ve entered doesn’t any account";
						return redirect('login');
					}

				} else {
					$_SESSION['error_msg'] = "Account not have Access NIP";
					return redirect('login');
				}

	}

	public function login_parent(Request $request)
	{
		session_start();
		$akses_code     = $_POST['akses_code'];
		$akses_email = $_POST['akses_email'];
		$akses_password = $_POST['akses_password'];
		$dt_student_grade	= $_POST['dt_student_grade'];

				$akses_codee = \DB::table('dt_parent')->where('dt_parent_nisn', 'like', $akses_code)->count();
				
				if (!empty($akses_codee)) {

					$akses_uname = \DB::table('akses')->where('akses_email', 'like', $akses_email)->count();

					if (!empty($akses_uname)) {

						$akses_pwd = \DB::table('akses')->where('akses_password', 'like', $akses_password)->count();

						if (!empty($akses_pwd)) {

							$akses_status_dataa = \DB::table('akses_type')->where([
							['akses_type.akses_type_name', 'like', 'parent'],
							['akses_type.akses_type_status', 'like', 'true']
							])->count(); 

							if (!empty($akses_status_dataa)) {

								$akses_typee = \DB::table('akses')->where([
								['akses_email', 'like', $akses_email],
								['akses_password', 'like', $akses_password], 
								['akses_type', 'like', 'parent']
								])->count();

								if (!empty($akses_typee)) {

									$akses_statuss_nisn = \DB::table('dt_parent')->where([
									['dt_parent_nisn', 'like', $akses_code],
									['dt_parent_statuslog', 'like', 'active']
									])->count(); 

									if (!empty($akses_statuss_nisn)) {

										$akses_statuss_parent = \DB::table('akses')->where([
										['akses_type', 'like', 'parent'],
										['akses_email', 'like', $akses_email],
										['akses_password', 'like', $akses_password], 
										['akses_status_data', 'like', 'active']
										])->count();
									
										if (!empty($akses_statuss_parent)) {

											$akses_grade = \DB::table('dt_student')->where([
											['dt_student_nisn', 'like', $akses_code],
											['dt_student_grade', 'like', $dt_student_grade]
											])->count();

											if (!empty($akses_grade)) {

												$akses_statuss_student = \DB::table('dt_student')->where([
												['dt_student_nisn', 'like', $akses_code],
												['dt_student_grade', 'like', $dt_student_grade],
												['dt_student_statuslog', 'like', 'active']
												])->count();
												if (!empty($akses_statuss_student)) {
		
													$request->session()->put('akses_type', 'parent');
													$request->session()->put('logged_in', 1);
													$request->session()->put('akses_code', $akses_code);
													$request->session()->put('akses_email', $akses_email);
													$_SESSION['akses_type'] = 'parent';
													$_SESSION['logged_in'] = 1;
													return redirect('/');
												} else {
													$_SESSION['error_msg'] = "Account Student has been Disable";
													return redirect('login');
												}

											} else {
												$_SESSION['error_msg'] = "NISN or GRADE you’ve entered doesn’t match any Student";
												return redirect('login');
											}
										
										} else {
											$_SESSION['error_msg'] = "Account Parent has been Disable";
											return redirect('login');
										}
									
									} else {
										$_SESSION['error_msg'] = "Your NISN has been Disable";
										return redirect('login');
									}
								
								} else {
									$_SESSION['error_msg'] = "Account not have Access Type";
									return redirect('login');
								}
							
							} else {
								$_SESSION['error_msg'] = "Access Type has been Disable";
								return redirect('login');
							}
						
						} else {
							$_SESSION['error_msg'] = "Password you’ve entered doesn’t any account";
							return redirect('login');
						}
					
					} else {
						$_SESSION['error_msg'] = "Email you’ve entered doesn’t any account";
						return redirect('login');
					}
				
				} else {
					$_SESSION['error_msg'] = "Account not have Access NISN";
					return redirect('login');
				}
									
	}

	public function login_student(Request $request)
	{
		session_start();
		$akses_code     = $_POST['akses_code'];
		$akses_email = $_POST['akses_email'];
		$akses_password = $_POST['akses_password'];
		$dt_student_grade	= $_POST['dt_student_grade'];

				$akses_codee = \DB::table('dt_student')->where('dt_student_nisn', 'like', $akses_code)->count();
				
				if (!empty($akses_codee)) {

					$akses_uname = \DB::table('akses')->where('akses_email', 'like', $akses_email)->count();

					if (!empty($akses_uname)) {

						$akses_pwd = \DB::table('akses')->where('akses_password', 'like', $akses_password)->count();

						if (!empty($akses_pwd)) {

							$akses_status_dataa = \DB::table('akses_type')->where([
							['akses_type.akses_type_name', 'like', 'student'],
							['akses_type.akses_type_status', 'like', 'true']
							])->count(); 

							if (!empty($akses_status_dataa)) {

								$akses_typee = \DB::table('akses')->where([
								['akses_email', 'like', $akses_email],
								['akses_password', 'like', $akses_password], 
								['akses_type', 'like', 'student']
								])->count();

								if (!empty($akses_typee)) {

									$akses_statuss_nisn = \DB::table('dt_student')->where([
									['dt_student_nisn', 'like', $akses_code],
									['dt_student_statuslog', 'like', 'active']
									])->count(); 

									if (!empty($akses_statuss_nisn)) {

										$akses_statuss1 = \DB::table('akses')->where([
										['akses_type', 'like', 'student'],
										['akses_email', 'like', $akses_email],
										['akses_password', 'like', $akses_password], 
										['akses_status_data', 'like', 'active']
										])->count();
									
										if (!empty($akses_statuss1)) {

											$akses_grade = \DB::table('dt_student')->where([
											['dt_student_nisn', 'like', $akses_code],
											['dt_student_grade', 'like', $dt_student_grade]
											])->count();

											if (!empty($akses_grade)) {

												$akses_statuss2 = \DB::table('dt_student')->where([
												['dt_student_nisn', 'like', $akses_code],
												['dt_student_grade', 'like', $dt_student_grade],
												['dt_student_statuslog', 'like', 'active']
												])->count();
												if (!empty($akses_statuss2)) {

													$request->session()->put('akses_type', 'student');
													$request->session()->put('logged_in', 1);
													$request->session()->put('akses_code', $akses_code);
													$request->session()->put('akses_email', $akses_email);
													$request->session()->put('dt_student_grade', $dt_student_grade);
													$_SESSION['akses_type'] = 'student';
					
													$_SESSION['logged_in'] = 1;
													return redirect('/');
												} else {
													$_SESSION['error_msg'] = "Your Account has been Disable";
													return redirect('login');
												}

											} else {
												$_SESSION['error_msg'] = "NISN or GRADE you’ve entered doesn’t match any Student";
												return redirect('login');
											}
										
										} else {
											$_SESSION['error_msg'] = "Your Account has been Disable";
											return redirect('login');
										}
									
									} else {
										$_SESSION['error_msg'] = "Your NISN has been Disable";
										return redirect('login');
									}
								
								} else {
									$_SESSION['error_msg'] = "Account not have Access Type";
									return redirect('login');
								}
							
							} else {
								$_SESSION['error_msg'] = "Access Type has been Disable";
								return redirect('login');
							}
						
						} else {
							$_SESSION['error_msg'] = "Password you’ve entered doesn’t any account";
							return redirect('login');
						}
					
					} else {
						$_SESSION['error_msg'] = "Email you’ve entered doesn’t any account";
						return redirect('login');
					}
				
				} else {
					$_SESSION['error_msg'] = "Account not have Access NISN";
					return redirect('login');
				}
	}

	public function login_sadmin(Request $request)
	{
		session_start();
		$akses_email = $_POST['akses_email'];
		$akses_password = $_POST['akses_password'];
		$akses_type = $_POST['akses_type'];
		

		$akses_status_dataa = \DB::table('akses')->where([
		['akses.akses_email', '=', $akses_email],
		['akses.akses_password', '=', $akses_password],
		['akses.akses_type', '=', $akses_type]
		])->count(); 

			if (!empty($akses_status_dataa)) {

			$akses_uname = \DB::table('akses')->where('akses_email', 'like', $akses_email)->count();

				if (!empty($akses_uname)) {

				$akses_pwd = \DB::table('akses')->where('akses_password', 'like', $akses_password)->count();

					if (!empty($akses_pwd)) {
					$request->session()->put('akses_email', $akses_email);
					$request->session()->put('akses_type', $akses_type);
					$_SESSION['akses_type'] = $akses_type;
					$_SESSION['logged_in'] = 1;
					return redirect('manage');
					} else {
					$_SESSION['error_msg'] = "Username you’ve entered doesn’t any account";
					return redirect('alfajar/admin/sessionurl');
					}

			} else {
			$_SESSION['error_msg'] = "Email you’ve entered doesn’t any account";
			return redirect('alfajar/admin/sessionurl');
			}

		} else {
		$_SESSION['error_msg'] = "Account not have Access Type";
		return redirect('alfajar/admin/sessionurl');
		}
							
	}

	public function logout()
	{
		session_start();
		session_destroy();
		return redirect('/');
		exit;
	}
	
}