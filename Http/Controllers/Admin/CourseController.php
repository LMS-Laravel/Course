<?php

namespace modules\Course\Http\Controllers\Admin;

use Pingpong\Modules\Routing\Controller;

class CourseController extends Controller
{
    public function index()
    {
        return view('course::index');
    }
}
