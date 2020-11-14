<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultiTextGetter extends Model
{
    public static function getMultiTextById($id) {
        
        $multiText = \DB::table("Multitext")->where('t_id', '=', $id)->get();
        return $multiText[0];
        
    }
    
    public static function getMultiTextByName($name) {
        
        $multiText = \DB::table("Multitext")->where('name', 'like', $name)->get();
        return $multiText[0];
        
    }
}
