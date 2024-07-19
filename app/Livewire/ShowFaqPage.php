<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Faq;

class ShowFaqPage extends Component
{
    public function render()
    {
        $faqs=Faq::where('status',1)->orderBy('question','ASC')->get();
        if(empty($faqs))
        {

abort(404);
        }
        return view('livewire.show-faq-page',
    [
        'faqs'=>$faqs
    ]);

    }
}
