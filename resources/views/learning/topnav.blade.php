{{-- resources/views/learning/topnav.blade.php --}}
{{-- Needs: $navCourses (collection), optional $activeSlug --}}
<nav class="w3-topnav">
    <a href="{{ route('learning.index') }}" class="{{ empty($activeSlug) ? 'active' : '' }}">All</a>
    @foreach ($navCourses as $c)
        <a href="{{ route('learning.course', $c->slug) }}"
           class="{{ ($activeSlug ?? null) === $c->slug ? 'active' : '' }}">{{ $c->title }}</a>
    @endforeach
</nav>
