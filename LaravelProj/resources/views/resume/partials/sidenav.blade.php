<nav class="sideNav">
    <div class="slideButton">
        {{ $homepage ? 'About Me' : 'Navigation' }} &nbsp;&nbsp;&dtri;
    </div>
    <ul>
        @if(!$homepage)
            <li><a href="/">Home</a></li>
        @endif
        <li><a href="/overview">Quick Overview</a></li>
        <li><a href="/skills">Skills</a></li>
        <li><a href="/education">Education</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>