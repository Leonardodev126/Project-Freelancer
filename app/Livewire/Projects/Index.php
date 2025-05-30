<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use App\Models\Project;

use App\Http\Controllers\ProjectsController;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index');
    }

    // #[Computed()]
    public function projects()
    {
        return Project::query()->inRandomOrder()->get();
    }

}
