<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{

    public function good(int $id)
    {
        /** @var \App\Models\Good $good */
        $good = Good::query()->with('category')->find($id);
        return view('good', ['good' => $good]);
    }

    public function category(int $id)
    {
        /** @var \App\Models\Good $good */
        $goods = Good::query()
            ->with('category')
            ->where('category_id', '=', $id)
            ->get();

        return view('home',
            [
                'goods' => $goods,
            ]);
    }

}
