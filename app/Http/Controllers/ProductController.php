<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
/**
* 
*/
class ProductController extends Controller
{
	public function getProducts()
	{
		$products=Product::all();

		return view('/Products/products', ['products' =>$products] );

	}
	public function getUniqueProduct($id)
	{
		
		$product=Product::where('id',$id)->get();
		return view('/Products/product_detail', ['product' =>$product] );
	}
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
	public function addnewProduct()
	{
		return view('/Products/add_product');
	}
	public function addProduct(Request $request)
	{
		$product= new Product;
       $product->name= $request->name;
      $product->quantity= $request->quantity;
    	$product->price= $request->price;
		$product->save();
		return redirect('/products');
	}
	public function deleteProduct(Request $request, $id)
	{
				$product=Product::find($id);
				$product->delete();
				return redirect('/products');
	}
}

 ?>