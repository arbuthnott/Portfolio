<a class="linkOnly" href="/education/{{ $course->alias }}">
<article class="courseTile">
    <h4>{{ $course->name }}</h4>
    <ul>
        <li>
            <strong>Code:</strong>
            {{ $course->code }}
        </li>
        <li>
            <strong>Topics:</strong>
            {{ $course->topic_list }}
        </li>
    </ul>
</article>
</a>