<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;

class ShowTeamPage extends Component
{
    public function render()
    {//show all members

        //return view('livewire.show-team-page');


        $members=Member::orderBy('name','ASC')->where('status',1)->get();
        return view('livewire.show-team-page',
        [
            'members' => $members
        ]
    );
    }
}
