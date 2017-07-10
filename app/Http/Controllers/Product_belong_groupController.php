<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product_belong_group;
use App\Group;
use App\Product;
/**
* 
*/
class Product_belong_groupController extends Controller
{
	public function getProducts_belong_groups()
	{
		$products_belong_groups=Product_belong_group::all();

		return view('/Products_belong_groups/products_belong_groups', ['products_belong_groups' =>$products_belong_groups] );

	}
	public function getUniqueProduct_belong_group($id)
	{
		
		$product_belong_group=Product_belong_group::where('id',$id)->get();
		return view('/Products_belong_groups/product_belong_group_detail', ['product_belong_group' =>$product_belong_group] );
	}
	public function updateProduct_belong_group(Request $request, $id)
	{
		$product_belong_group=Product_belong_group::find($id);

       $product_belong_group->group_id= $request->group_id;
      $product_belong_group->product_id= $request->product_id;
     $product_belong_group->created_at= $product_belong_group->created_at;
        $product_belong_group->save();
		return redirect('/products_belong_groups');
	}
	public function addnewProduct_belong_group()
	{
		$products=Product::all();
		$groups=Group::all();

		return view('/Products_belong_groups/add_products_belong_groups', ['products' =>$products], ['groups' =>$groups]);
	}
	public function addProduct_belong_group(Request $request)
	{
		$group_id= $request->group_id;
		$product_id= $request->produit_id;
		foreach ($product_id as $value) {
		$product_belong_group= new Product_belong_group;
     	$product_belong_group->group_id= $group_id;
     	$product_belong_group->produit_id= $value;		
		$product_belong_group->save();
			
		}
		return redirect('/products_belong_groups');
	}
	public function deleteProduct_belong_group(Request $request, $id)
	{
				$product_belong_group=Product_belong_group::find($id);
				$product_belong_group->delete();
				return redirect('/products_belong_groups');
	}
}

 ?>