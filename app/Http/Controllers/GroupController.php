<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Group;
/**
* 
*/
class GroupController extends Controller
{
	public function getGroups()
	{
		$groups=Group::all();

		return view('/Groups/groups', ['groups' =>$groups] );

	}
	public function getUniqueGroup($id)
	{
		
		$group=Group::where('id',$id)->get();
		return view('/Groups/group_detail', ['group' =>$group] );
	}
	public function updateGroup(Request $request, $id)
	{
		$group=Group::find($id);

       $group->name= $request->name;
     $group->created_at= $group->created_at;
        $group->save();
		return redirect('/groups');
	}
	public function addnewGroup()
	{
		return view('/Groups/add_group');
	}
	public function addGroup(Request $request)
	{
		$group= new Group;
       $group->name= $request->name;		
		$group->save();
		return redirect('/groups');
	}
	public function deleteGroup(Request $request, $id)
	{
				$group=Group::find($id);
				$group->delete();
				return redirect('/groups');
	}
}

 ?>