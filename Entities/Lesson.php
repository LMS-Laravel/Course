<?php

namespace modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\User;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Lesson extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $fillable = [];

    protected $sluggable = [
        'build_from' => 'title',
        'save_to' => 'slug',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getViewAttribute()
    {
        $status = $this::whereHas('students', function ($q) {
            $q->where('user_id', '=', \Auth::user()->id);
            $q->where('lesson_id', '=', $this->id);

        })->get();

        if ($status->isEmpty()) {
            return false;
        }

        return true;
    }
}
