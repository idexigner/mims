<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Generic extends Model
{
    use HasFactory;
    protected $table = 'generic';
    protected $primaryKey = 'generic_id';
    public $timestamps = true;
    const CREATED_AT = 'generic_created_at';
    const UPDATED_AT = 'generic_updated_at';

    protected $fillable = [
        'generic_name',
        'generic_classification',
        'generic_safety_remark',
        'generic_indication',
        'generic_indication_tags',
        'generic_dosage_administration',
        'generic_contraindication_precaution',
        'generic_composition',
        'generic_pharmacology',
        'generic_interaction',
        'generic_side_effect',
        'generic_overdose_effect',
        'generic_storage_condition',
        'generic_pregnancy_lactation',
        'generic_is_active',
        'generic_is_deleted',
        'generic_created_by',
        'generic_created_at',
        'generic_updated_by',
        'generic_updated_at'
    ];

    protected static function booted()
    {

        static::creating(function ($model) {
            $model->generic_created_by = 1; //Auth::id();
            $model->generic_created_at = $model->freshTimestamp();
            
        });

        static::updating(function ($model) {
            $model->generic_updated_by = 1; //Auth::id();
            $model->generic_updated_at = $model->freshTimestamp();
        });
    }
}
