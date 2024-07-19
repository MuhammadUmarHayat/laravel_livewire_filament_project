<?php

namespace App\Livewire;

use Livewire\Component;

class ShowContactPage extends Component
{
    public $name='';
    public $email='';
    public $message='';
    protected $rules=[
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required'
    ];
public function submit()
{
$this->validate();
$mailData=[
'subject'=>'You have received a new Contact email',
'name'=>$this->name,
'email'=>$this->email,
'message'=>$this->message,
];
Mail::to('hafizmohemmedumar@gmail.com')->send(new ContactEmail($mailData));
session()->flash('success','Thanks for contacting , we will get back to you soon');
$this->redirect('/contact');
}

    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
