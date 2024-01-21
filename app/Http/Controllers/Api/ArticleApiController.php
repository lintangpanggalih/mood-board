<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleApiController
{
    public function show($id)
    {
        return $data['article'] = Article::find($id);

        return view('apps.articles.article', $data);
    }
}
