<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;

    /**Restablacer las paginas para que busque desde la primera */
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'LIKE','%'.$this->search .'%')
                        ->orWhere('email', 'LIKE','%'.$this->search .'%')
                        ->paginate();
        return view('livewire.admin.user-index', compact('users'));
    }
}
