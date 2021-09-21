<?php

namespace App\Http\Livewire;

use App\Models\FAQ;
use Livewire\Component;
use Livewire\WithPagination;

class ShowFaq extends Component
{
    use WithPagination;
    
    public $search = '';

    public function render()
    {
        
        // Saarch Or All
        $faqs = new FAQ; 
        $columns = $faqs->getFillable(); $faqs = FAQ::query()->whereLike($columns, $this->search)->get();
        return view('livewire.show-faq', [
            'faqs' => $faqs,
        ]);

    }
}
