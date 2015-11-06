<?php namespace Modules\Course\Repositories;

use App\BaseRepository;

class CourseRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Course::class;
    }


}