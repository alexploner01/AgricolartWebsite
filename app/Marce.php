<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marce extends Model {

    public static function getNext3Events() {
        $marces = \DB::table('Timer')->join('Marce', 'Marce.t_id', '=', 'Timer.t_id')->join('Post', 'Marce.p_id', '=', 'Post.ennom')->where('Timer.yearMonthDay', '>', date("Y/m/d"))->limit(3)->get();
        return $marces;
    }
    
    public static function getEventById($id) {
        $marce = \DB::table('Timer')->join('Marce', 'Marce.t_id', '=', 'Timer.t_id')->join('Post', 'Marce.p_id', '=', 'Post.ennom')->where('Marce.m_id', '=', $id)->get();
        return $marce;
    }

}
