<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MST_SALES extends Model
{
    protected $table = 'MST_SALES';


    public function Detail(){
        return $this->hasMany('\App\MST_SALES_DETAILS','sales_id');
    }

    public function scopeUser($query,$id){
        if(!empty($id)){
            $query = $query->where('user_id',$id);
        }
        return $query;
    }
}
