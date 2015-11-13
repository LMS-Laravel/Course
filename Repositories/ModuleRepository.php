<?php namespace Modules\Course\Repositories;


use App\BaseRepository;

class ModuleRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Module::class;
    }

}