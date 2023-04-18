<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    protected $table = 'advertisement';
    protected $primaryKey = 'advertisement_id';
    public $timestamps = true;
    const CREATED_AT = 'advertisement_created_at';
    const UPDATED_AT = 'advertisement_updated_at';

    protected $fillable = [
        'advertisement_name',
        'advertisement_is_active',
        'advertisement_is_deleted',
        'advertisement_created_by',
        'advertisement_created_at',
        'advertisement_updated_by',
        'advertisement_updated_at'
    ];

    public function brands()
    {
        return $this->hasMany(Brand::class, 'brand_advertisement_id');
    }

    protected static function booted()
    {

        static::creating(function ($model) {
            $model->advertisement_created_by = 1; //Auth::id();
            $model->advertisement_created_at = $model->freshTimestamp();
            
        });

        static::updating(function ($model) {
            $model->advertisement_updated_by = 1; //Auth::id();
            $model->advertisement_updated_at = $model->freshTimestamp();
        });
    }
}
