<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Members;
class AddMember extends Component
{   
    public $name = '';
    public $email = '';
    public $password = '';
    public $phone = '';
    public $address = '';
    public $membership_start_date = '';
    public $membership_end_date = '';
    public $membership_type = '';

    public function render()
    {
        return view('livewire.add-member');
    }

    public function store()
    {
        $validated =$this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members',
            'password' => 'required',
            'phone' => 'nullable',
            'address' => 'nullable',
            'membership_start_date' => 'required|date',
            'membership_end_date' => 'nullable|date',
            'membership_type' => 'required',
        ]);
        $validated['membership_end_date'] = $this->membership_end_date ?: null;
        
        Members::create($validated);
        $this->reset();
        return redirect()->route('members.index');
    }
}
