<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
/**
* 
*/
class CustomerController extends Controller
{

	// Function pour récuperer tous les clients de la base de donnée.
	public function getCustomers()
	{
		$customers=Customer::all();

		return view('/Customers/customers', ['customers' =>$customers] );

	}

	// Function pour récuperer un client via son Id.
	public function getUniqueCustomer($id)
	{
		
		$customer=Customer::where('id',$id)->get();
		return view('/Customers/customer_detail', ['customer' =>$customer] );
	}

	// Function pour mettre à jour un client par le biais de son Id.
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
	// Function qui envoie la page pour ajouter un noueaveau client
	public function addnewCustomer()
	{
		return view('/Customers/add_customer');
	}
	// function pour ajouter un nouveau client a la base de donnée.
	public function addCustomer(Request $request)
	{
		$customer= new Customer;
       $customer->first_name= $request->first_name;
      $customer->last_name= $request->last_name;
    	$customer->email= $request->email;
		$customer->save();
		return redirect('/customers');
	}

	// Function qui permet de supprimer un client de la base de donnée via son Id.
	public function deleteCustomer(Request $request, $id)
	{
				$customer=Customer::find($id);
				$customer->delete();
				return redirect('/customers');
	}
}

 ?>