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
        // 'role_is_active',
        // 'role_is_deleted',
        // 'role_created_by',
        // 'role_updated_by',
    ];

    protected static function booted()
    {

        static::creating(function ($model) {
            // $model->generic_created_by = Auth::id();
            // $model->generic_created_at = $model->freshTimestamp();
            
        });

        static::updating(function ($model) {
            // $model->generic_updated_by = Auth::id();
            // $model->generic_updated_at = $model->freshTimestamp();
        });
    }
}
