<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marce extends Model {

    public static function getNext3Events() {
        $marces = \DB::table('Timer')->join('Marce', 'marce.t_id', '=', 'timer.t_id')->join('Post', 'marce.p_id', '=', 'post.ennom')->where('timer.yearMonthDay', '>', date("Y/m/d"))->limit(3)->get();
        return $marces;
    }
    
    public static function getEventById($id) {
        $marce = \DB::table('Timer')->join('Marce', 'marce.t_id', '=', 'timer.t_id')->join('Post', 'marce.p_id', '=', 'post.ennom')->where('marce.m_id', '=', $id)->get();
        return $marce;
    }

}
