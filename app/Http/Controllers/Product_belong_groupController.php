<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product_belong_group;
use App\Group;
use App\Product;
/**
* 
*/
class Product_belong_groupController extends Controller
{

	// Function qui récupere l'ensemble des groupes créent et stockés dans la BDD
	public function getProducts_belong_groups()
	{
		$productsgroups= DB::table('groups')
			-> get();

		return  view('/Products_belong_groups/products_belong_groups', ['productsgroups' =>$productsgroups]);

	}

	// Function qui renvoie la vue pour l'ajout/ modification d'un groupe, recuperation des données dans la BDD pour le noms des groupes ainsi que les produits.
	public function addnewProduct_belong_group()
	{
		$products=Product::all();
		$groups=Group::all();

		return view('/Products_belong_groups/add_products_belong_groups', ['products' =>$products], ['groups' =>$groups]);
	}

	// Function qui permet d'ajouter ou de modifié un groupe de produit en 2 temps, la suppression du groupe cible puis le réenregistrement de celui-ci dans la base.
	public function addProduct_belong_group(Request $request)
	{
		$deleted= DB::delete('delete from productsbelonggroups where group_id= '.$request ->group_id);
		
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

	// Function qui permet de récuperer un groupe avec tous les produits qui lui son attaché dans la base de donnée via l'ID du groupe.
	public function getUniqueProduct_belong_group($group_id)
	{

		$product_belong_group= DB::table('productsbelonggroups')
			 -> join('groups', 'productsbelonggroups.group_id', '=', 'groups.g_id')
			-> join('products', 'productsbelonggroups.produit_id', '=', 'products.id')
			-> where('group_id', $group_id)
			-> get();

	return view ('/Products_belong_groups/products_belong_groups_detail', ['product_belong_group'=> $product_belong_group]);

	}

	// Funtcion qui renvoie à la page pour modifié le group ciblé.
	public function updateProduct_belong_group($group_id)
	{

		$product_belong_group= DB::table('productsbelonggroups')
			 -> join('groups', 'productsbelonggroups.group_id', '=', 'groups.g_id')
			-> join('products', 'productsbelonggroups.produit_id', '=', 'products.id')
			-> where('group_id', $group_id)
			-> get();

		$products=Product::all();

	return view ('/Products_belong_groups/update_products_belong_groups', ['product_belong_group'=> $product_belong_group], ['products'=> $products]);

	}

}

 ?>