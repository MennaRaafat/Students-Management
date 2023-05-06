<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','age','IDno','track_id'];

    public function track(): BelongsTo{  
        return $this->belongsTo(Track::class);
      }
}

?>