<?php
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;
 
class General_helper {
    public static function getMenu() {

  		$GLOBALS['user_group_id'] = 1;

    	$getMenu = DB::table('user_menus')
    		->select('user_menus.id', 'user_menus.parent_id', 'user_menus.url', 'user_menus.name','user_menus.icon_menu')
            ->leftJoin('user_rules', 'user_menus.id', '=', 'user_rules.menu_id')
            ->where('user_rules.group_id',$GLOBALS['user_group_id'])
            ->where('user_menus.show_in_menu',1)
            ->get()->toArray();


         //return $getMenu;
            return General_helper::sortMenu($getMenu);
    }

	public static function sortMenu($raw, $parent_id = 0){
	  	$return = array();
		  	foreach($raw as $key => $val)
		  	{
			    $proceed = FALSE;
			     // var_dump($raw[$key]->parent_id,$parent_id);
			     // die;
			    if($raw[$key]->parent_id == $parent_id)
			    {
			      $return[$key] = $raw[$key];
			      $proceed = TRUE;

			    }
			    if($proceed){ 
			    	$return[$key]->child = General_helper::sortMenu($raw, $raw[$key]->id);
			    }
		  	}
	  	return $return;
		}
	}