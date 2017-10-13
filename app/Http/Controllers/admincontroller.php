<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/**
* 
*/
class admincontroller extends Controller
{
// public function Getindex()
// 	{
// 			//dd($_COOKIE['COOKIE']);
		
// 		if (!empty($_COOKIE['XSRF-TOKEN']) && !empty($_COOKIE['COOKIE'])) {
// 			$clients=DB::select(
// 				'SELECT * FROM cms_users 
// 				INNER JOIN clients 
// 				ON cms_users.id=clients.Commercial 
// 				WHERE cms_users.email = "'.$_COOKIE["COOKIE"].'"');
			
// 		return view('clients');
// 		//, ['clients' =>$clients]);
// 		} else
// 		return redirect('/');
// 	}
	
// }	
	public function getEnfants()
	{
			//dd($_COOKIE['COOKIE']);
		
		if (!empty($_COOKIE['XSRF-TOKEN'])) {
			;
				//dd($clients);	
		return view('admin/enfants');
		//, ['clients' =>$clients]);
		} else
		return redirect('/');
	}
	
}

 ?>
