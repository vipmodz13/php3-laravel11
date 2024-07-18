<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewCategory;
use Illuminate\Http\Request;


class NewController extends Controller
{
    public function topView() {

        $topView = News::orderBy('view', 'desc')->take(10)->get();
        return view('xemnhieu', ['topView' => $topView]);
    }

    public function tin($id) {
        // Tìm bản ghi News theo ID
        $tin = News::find($id);
    
        // Kiểm tra nếu không tìm thấy bản ghi
        if (!$tin) {
            return redirect()->back()->with('error', 'News not found');
        }
    
        return view('tin', ['new' => $tin]);
    }

    public function news() {
        $news = News::orderBy('view', 'desc')->get();
        return view('news', ['news' => $news]);

    }

    public function search(Request $rq) {

        $key = $rq->get('key');
        $category_id = $rq->get('category');

        $category = NewCategory::find($category_id);


        $news = News::where('title', 'like', '%'.$key.'%')
        ->where('new_category_id', $category_id)
        ->get();


        return view('news', ['news' => $news, 'key' => $key, 'category' => $category]);

    }

    public function newsOnCategory($category_id) {

        $category = NewCategory::find($category_id);
        $news = News::where('new_category_id', $category_id)->get();
        return view('news', ['news' => $news, 'category' => $category]);

    }
}
