<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;

class ShowPage extends Component
{
    public $pageid=null;
    public function mount($id)
    {
$this->pageid=$id;
    }
    public function render()
    {
        $page=Page::findOrFail($this->pageid);//where('id',$this->pageid)->first();
        
        return view('livewire.show-page',
    [
        'page'=>$page
    ]);
    }
}
