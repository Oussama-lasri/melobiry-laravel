<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\pieceMusical;
use Livewire\WithPagination;

class Musics extends Component
{

    use WithPagination;
    public $searshTerm = '';
    public $musics;

    public function render()
    {
        return view('livewire.musics', ['piecesMusicals' => pieceMusical::where('titreMusic', 'like', '%' . $this->searshTerm . '%')
            ->orwhere('writers', 'like', '%' . $this->searshTerm . '%')
            ->orWhereHas('artiste', function ($query) {
                $query->where('firstName', 'like', '%' . $this->searshTerm . '%');
            })
            ->get()]);
    }
}
