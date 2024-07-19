<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Url;

class ShowBlog extends Component
{
#[Url]
   public $categorySlug=null;
   
    public function render()
    {
         $page=8;
        $categories=Category::all();
      if(!empty($this->categorySlug))
      {
        $category=Category::where('slug',$this->categorySlug)->first();

        if(empty($category))
        {

abort(404);
        }
        $articles=Article::orderBy('created_at','DESC')
        ->where('category_id',$category->id)
        ->where('status',1)->paginate($page);

      }
      else{
        $articles=Article::orderBy('created_at','DESC')->paginate($page);
      }
      $latestarticles=Article::orderBy('created_at','DESC')
      ->get()
      ->take(3);
       

        return view('livewire.show-blog',
        [
            'articles' => $articles,
            'categories'=>$categories,
            'latestarticles'=>$latestarticles

        ]
    );
    }
}
