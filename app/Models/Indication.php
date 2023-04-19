<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    use HasFactory;
    protected $table = 'indication';
    protected $primaryKey = 'indication_id';
    public $timestamps = true;
    const CREATED_AT = 'indication_created_at';
    const UPDATED_AT = 'indication_updated_at';

    protected $fillable = [
        'indication_name',
        'indication_is_active',
        'indication_is_deleted',
        'indication_created_by',
        'indication_created_at',
        'indication_updated_by',
        'indication_updated_at'
    ];

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class, 'advertisement_indication_id');
    }

    protected static function booted()
    {

        static::creating(function ($model) {
            $model->indication_created_by = 1; //Auth::id();
            $model->indication_created_at = $model->freshTimestamp();
            
        });

        static::updating(function ($model) {
            $model->indication_updated_by = 1; //Auth::id();
            $model->indication_updated_at = $model->freshTimestamp();
        });
    }
}
