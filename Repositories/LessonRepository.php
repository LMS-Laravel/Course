<?php namespace Modules\Course\Repositories;


use App\BaseRepository;

class LessonRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Lesson::class;
    }

}