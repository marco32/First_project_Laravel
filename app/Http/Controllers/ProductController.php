<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

/**
* 
*/
class ProductController extends Controller
{

	// Function qui récupere tous les produits de la base de donnée.
	public function getProducts()
	{
		$products=Product::all();

		return view('/Products/products', ['products' =>$products] );

	}

	// Function qui récupere un produit de la base via son ID.
	public function getUniqueProduct($id)
	{
		
		$product=Product::where('id',$id)->get();
		return view('/Products/product_detail', ['product' =>$product] );
	}

	// FUnction qui permet la mise à jour du produit via son ID.
	public function updateProduct(Request $request, $id)
	{
		$product=Product::find($id);

       $product->name= $request->name;
      $product->quantity= $request->quantity;
    $product->price= $request->price;
    	$product->created_at= $product->created_at;
        $product->save();
		return redirect('/products');
	}

	// Renvoie la vue pour ajouter un nouveau produit.
	public function addnewProduct()
	{
		return view('/Products/add_product');
	}

	// Function qui permet l'ajout d'un nouveau produit dans la base.
	public function addProduct(Request $request)
	{
		$product= new Product;
       $product->name= $request->name;
      $product->quantity= $request->quantity;
    	$product->price= $request->price;
		$product->save();
		return redirect('/products');
	}

	// Function qui permet la suppression d'un produit via son ID ainsi que son rattachement au groupe de produit.
	public function deleteProduct(Request $request, $id)
	{
				$product=Product::find($id);
				$product->delete();
	
		$deleted= DB::delete('delete from productsbelonggroups where produit_id= '.$request ->id);

				return redirect('/products');
	}
}

 ?>