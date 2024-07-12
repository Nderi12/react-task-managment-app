<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tasks';
    protected $fillable = [
        'id',
        'project_id',
        'priority',
        'title',
        'description',
    ];
    protected $appends = [
        'created',
    ];

    /**
     * Each task belongs to a project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Format created_at date to human readible format
     *
     * @return void
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public function getCreatedAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
