<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public static function getFotosOfGalleryById(int $id = 1) {
        //date_default_timezone_set("Europe/Rome");
        //$marces = \DB::table('Timer')->whereRaw('yearMonthDay > curdate()')->first();
        //$marces = \DB::table('Timer')->join('Marce', 'marce.t_id', '=', 'timer.t_id')->join('Post', 'marce.p_id', '=', 'post.ennom')->where('timer.yearMonthDay', '>', date("Y/m/d"))->limit(3)->get();
        $fotosOfGallery = \DB::table('Gallery')->join('Gallery_Foto', 'gallery.g_id', '=', 'gallery_foto.g_id')->join('Foto', 'gallery_foto.f_id', '=', 'foto.f_id')->where('gallery.g_id', '=', $id)->get();
        return $fotosOfGallery;
    }

}
