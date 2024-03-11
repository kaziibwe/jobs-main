<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title','tags','company','location','email','website','description'];
 // to aviod what is mass filter we can create the model in thej providers/ appserviceprovider  model::ungaurd();
    // for filtering the search function
    
    public function scopeFilter($query,  array $filters) {
        if($filters['tag'] ?? false) {
              $query->where('tags','like', '%' .request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title','like', '%' .request('search') . '%')
                  ->orWhere('description','like', '%' .request('search') . '%')
                  ->orWhere('tags','like', '%' .request('search') . '%')
                  ->orWhere('location','like', '%' .request('search') . '%');
      }

      

    }
    // relationship to user
    public function user(){
        return $this->belongsTo(user::class, 'user_id');
    }
}
