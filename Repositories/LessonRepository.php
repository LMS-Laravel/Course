<?php

namespace modules\Course\Repositories;

use App\BaseRepository;
use Modules\Course\Entities\Lesson;

class LessonRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return Lesson::class;
    }
}
