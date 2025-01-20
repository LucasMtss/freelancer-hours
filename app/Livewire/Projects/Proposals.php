<?php

namespace App\Livewire\Projects;
use Livewire\Attributes\Computed;

use App\Models\Project;
use Livewire\Component;

class Proposals extends Component
{
    public Project $project;
    public function render()
    {
        return view('livewire.projects.proposals');
    }
    #[Computed()]
    public function lastProposalTime()
    {
        return $this->project->proposals()
            ->latest()->first()
            ->created_at->diffForHumans();
    }
}
