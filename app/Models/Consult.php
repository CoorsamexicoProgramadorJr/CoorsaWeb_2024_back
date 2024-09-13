<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Consult extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'message', 'area_code_id', 'service_id', 'state_id'];

    public function area_code(): BelongsTo
    {
        return $this->belongsTo(AreaCode::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
