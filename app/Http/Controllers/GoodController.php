<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{

    public function good(int $id)
    {
        $good = Good::query()->find($id);
        return view('good', ['good' => $good]);
    }

}
