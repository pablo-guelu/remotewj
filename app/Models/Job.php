<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

use App\Models\Company;

class Job extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'days',
        'isremote',
        'description',
        'url',
        'hours',
        'category', 
        'region', 
        'company_id', 
        'type', 
        'timezone'];


    public function company() {
        return $this->belongsTo(Company::class, 'id');
    }

   

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['primaryKey'] = $this->id;

        // dd($array);

        return $array;
    }

}
