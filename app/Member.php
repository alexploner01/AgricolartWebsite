<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public static function getMemberInformation() {
        
        $members = \DB::table("Member")->get();
        
        return $members;
        
    }
}
