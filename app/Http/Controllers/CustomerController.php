<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
/**
* 
*/
class CustomerController extends Controller
{
	public function getCustomers()
	{
		$customers=Customer::all();

		return view('/Customers/customers', ['customers' =>$customers] );

	}
	public function getUniqueCustomer($id)
	{
		
		$customer=Customer::where('id',$id)->get();
		return view('/Customers/customer_detail', ['customer' =>$customer] );
	}
	public function updateCustomer(Request $request, $id)
	{
		$customer=Customer::find($id);

       $customer->first_name= $request->first_name;
      $customer->last_name= $request->last_name;
    $customer->email= $request->email;
     $customer->created_at= $customer->created_at;
        $customer->save();
		return redirect('/customers');
	}
	public function addnewCustomer()
	{
		return view('/Customers/add_customer');
	}
	public function addCustomer(Request $request)
	{
		$customer= new Customer;
       $customer->first_name= $request->first_name;
      $customer->last_name= $request->last_name;
    	$customer->email= $request->email;
		$customer->save();
		return redirect('/customers');
	}
	public function deleteCustomer(Request $request, $id)
	{
				$customer=Customer::find($id);
				$customer->delete();
				return redirect('/customers');
	}
}

 ?>