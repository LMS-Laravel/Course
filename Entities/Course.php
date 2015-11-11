<?php

namespace modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\User;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Course extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $fillable = [];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to' => 'slug',
    ];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function teacher()
    {
        return $this->hasOne(User::class, 'id', 'teacher_id');
    }
}
