<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Group;
/**
* 
*/
class GroupController extends Controller
{

	// Function qui récupere tous les groupes de la base de donnée.
	public function getGroups()
	{
		$groups=Group::all();

		return view('/Groups/groups', ['groups' =>$groups] );

	}

	// Function qui récupere un groupe via son ID. 
	public function getUniqueGroup($g_id)
	{
		
		$group=Group::where('g_id',$g_id)->get();
		return view('/Groups/group_detail', ['group' =>$group] );
	}

	// Function qui permet de mettre à jour un group via son ID.
	public function updateGroup(Request $request, $g_id)
	{
		$group=Group::where('g_id', $g_id);

        $group->update(['g_name'=> $request->g_name]);
		return redirect('/groups');
	}

	// Function qui renvoie la vue pour ajouter un groupe.
	public function addnewGroup()
	{
		return view('/Groups/add_group');
	}

	// Funtcion qui permet d'ajouter un groupe à la base de donnée.
	public function addGroup(Request $request)
	{
		$group= new Group;
       $group->g_name= $request->g_name;		
		$group->save();
		return redirect('/groups');
	}

	// Function qui permet de supprimer un groupe dans la base de donnée via son ID ainsi que son rattachement au groupe de produit.
	public function deleteGroup(Request $request, $g_id)
	{
				$group=Group::where('g_id',$g_id);
				$group->delete();

				$deleted= DB::delete('delete from productsbelonggroups where group_id= '.$g_id);

				return redirect('/groups');
	}
}

 ?>