<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artistes extends Model
{
    use HasFactory;
    protected $table ='artistes';
    protected $fillable = ['firstName','lastName','image','city','country','dateOfBirth'];

    public function scopeFilter($query, array $filters)
    {
        // dd($filters['search']);
        if ($filters['search'] ?? false) {
            $query->where('firstName', 'like', '%' . request('search') . '%')
                ->orWhere('lastName', 'like', '%' . request('search') . '%')
                ->orWhere('city', 'like', '%' . request('search') . '%')
                ->orWhere('country', 'like', '%' . request('search') . '%');
        }
    }
    public function piecesMusicals(){
        return $this->hasMany(pieceMusical::class,'artiste_id','id');
    }

    
}
