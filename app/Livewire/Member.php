<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Members;

class Member extends Component
{
    public $members;
    public $showEditModal = false;
    public $selectedMember;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;
    public $membership_start_date;
    public $membership_end_date;
    public $membership_type;

    public function mount()
    {
        $this->members = Members::all();
    }

    public function render()
    {
        return view('livewire.members');
    }

    public function editMember($memberId)
    {
        $this->selectedMember = Members::findOrFail($memberId);
        $this->name = $this->selectedMember->name;
        $this->email = $this->selectedMember->email;
        $this->password = '';
        $this->phone = $this->selectedMember->phone;
        $this->address = $this->selectedMember->address;
        $this->membership_start_date = $this->selectedMember->membership_start_date;
        $this->membership_end_date = $this->selectedMember->membership_end_date;
        $this->membership_type = $this->selectedMember->membership_type;

        $this->showEditModal = true;
    }

    public function updateMember()
    {
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members,email,' . $this->selectedMember->id,
            'password' => 'nullable',
            'phone' => 'nullable',
            'address' => 'nullable',
            'membership_start_date' => 'required|date',
            'membership_end_date' => 'nullable|date',
            'membership_type' => 'required',
        ]);

        $this->selectedMember->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password ? bcrypt($this->password) : $this->selectedMember->password,
            'phone' => $this->phone,
            'address' => $this->address,
            'membership_start_date' => $this->membership_start_date,
            'membership_end_date' => $this->membership_end_date,
            'membership_type' => $this->membership_type,
        ]);

        $this->showEditModal = false;
        $this->members = Members::all();
    }

    public function closeEditModal()
    {
        $this->showEditModal = false;
    }

    public function deleteMember($memberId)
    {
        $member = Members::findOrFail($memberId);
        $member->delete();
        $this->members = Members::all();
    }
}
