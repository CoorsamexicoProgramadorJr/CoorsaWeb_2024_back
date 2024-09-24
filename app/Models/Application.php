<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'message', 'cv', 'vacancy_id', 'category_id', 'area_code_id'];

    public function vacancy(): BelongsTo
    {
        return $this->belongsTo(Vacancy::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function area_code(): BelongsTo
    {
        return $this->belongsTo(AreaCode::class);
    }
}
