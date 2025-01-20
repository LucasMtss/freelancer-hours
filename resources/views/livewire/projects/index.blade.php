<div class="flex flex-wrap gap-2 justify-center">
    @foreach($projects as $project)
        <a href="{{ route('projects.show', $project) }}">

            <x-projects.simple-card :$project />
        </a>
    @endforeach
</div>
