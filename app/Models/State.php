<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'area_code_id'];

    public function area_code(): BelongsTo
    {
        return $this->belongsTo(AreaCode::class);
    }

    public function consult(): BelongsTo
    {
        return $this->belongsTo(Consult::class);
    }
}
