<div>
    @foreach($this->projects() as $project) <!-- Chamando o método projects() -->
        <li>
            <a href="{{ route('projects.show', $project) }}">
                {{ $project->id }} . {{ $project->title }}
            </a>
        </li>
    @endforeach
</div>
