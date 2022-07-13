<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

/**
 * Class NewsService.
 */
class NewsService
{
    public function getNews() {

        return DB::table('news')
            ->select('id', 'heading', 'description')
            ->paginate(5);

    }
}
