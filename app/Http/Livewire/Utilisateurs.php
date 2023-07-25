<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{

    public $isBtnAddClicked = false;
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public function render()
    {
        //$users=User::all();
        return view(
            'livewire.utilisateurs.index',
            ["users" => User::paginate(5)]
        )
            ->extends("layouts.master")
            ->section("contenu");
    }

    public function gotoAddUser()
    {
        $this->isBtnAddClicked = true;
    }
}
