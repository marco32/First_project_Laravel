<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use App\Product;
/**
* 
*/
class AdminController extends Controller
{
	public function getIndex()
	{
			$customers=Customer::all();
			$products=Product::all();
		return view('/index', ['customers' =>$customers],  ['products'=>$products] );

	}
	
}

 ?>