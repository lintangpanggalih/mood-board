<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleApiController
{
    public function show($id)
    {
        return $article = Article::find($id);
        
    }
}
