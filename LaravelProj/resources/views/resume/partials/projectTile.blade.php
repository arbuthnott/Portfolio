<div class="tileSpacer">
<article class="projectTile">
    <a class="linkOnly" href="/projects/{{ $project->alias }}">
        <h4>{{ $project->name }}</h4>
        <img src="/images/projects/{{ $project->alias }}.png" alt="{{ $project->name }} image" />
    </a>
    
    <ul>
        @if($project->github_link != null)
            <li>
                <strong>Github:</strong>
                <a target="_blank" href="{{ $project->github_link }}">{{ substr($project->github_link, strpos($project->github_link, '://') + 3) }}</a>
            </li>
        @endif
        
        @if($project->other_link != null)
            <li>
                <strong>External Link:</strong>
                <a target="_blank" href="{{ $project->other_link }}">{{ substr($project->other_link, strpos($project->other_link, '://') + 3) }}</a>
            </li>
        @endif
        
        @if($project->completion_date != null)
            <li>
                <strong>Completed On:</strong>
                {{ $project->completion_date }}
            </li>
        @endif
    </ul>
</article>
</div>