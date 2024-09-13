<?php

namespace App\Models;

use App\Http\Controllers\StateController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AreaCode extends Model
{
    use HasFactory;

    protected $fillable = ['code'];

    public function state(): BelongsTo
    {
        return $this->belongsTo(StateController::class);
    }

    public function consults(): HasMany
    {
        return $this->hasMany(Consult::class);
    }
}
