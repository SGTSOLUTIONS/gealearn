{{-- resources/views/learning/course.blade.php --}}
@extends('layouts.app')
@section('title', ($lesson->title ?? 'Course') . ' | ' . $course->title . ' | GeoLearn')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/w3learn.css') }}">
@endpush

@section('content')
@php
    $currIndex = $lesson ? $flatLessons->search(fn ($l) => $l->id === $lesson->id) : false;
    $prev = ($currIndex !== false && $currIndex > 0) ? $flatLessons[$currIndex - 1] : null;
    $next = ($currIndex !== false) ? ($flatLessons[$currIndex + 1] ?? null) : null;
    $percent = $totalLessons > 0 ? round(($lessonIndex / $totalLessons) * 100) : 0;
@endphp

<div class="w3">

    @include('learning.topnav', ['navCourses' => $navCourses, 'activeSlug' => $course->slug])

    <div class="w3-shell">

        {{-- ==================== SIDEBAR ==================== --}}
        <aside class="w3-sidebar">
            <a href="{{ route('learning.index') }}" class="all-link">&larr; All courses</a>
            <h3 class="side-title">{{ $course->title }}</h3>

            @foreach ($course->modules as $module)
                @php $isOpen = $lesson && $module->lessons->contains('id', $lesson->id); @endphp
                <details {{ ($isOpen || ($loop->first && !$lesson)) ? 'open' : '' }}>
                    <summary>{{ $module->title }}</summary>
                    @foreach ($module->lessons as $l)
                        <a href="{{ route('learning.lesson', ['course' => $course->slug, 'lesson' => $l->slug ?: $l->id]) }}"
                           class="lesson-item {{ $lesson && $lesson->id === $l->id ? 'active' : '' }}">
                            {{ $l->title }}
                        </a>
                    @endforeach
                </details>
            @endforeach
        </aside>

        {{-- ==================== MAIN ==================== --}}
        <main class="w3-main">
            @if($lesson)

                <div class="w3-pn">
                    @if($prev)
                        <a class="btn" href="{{ route('learning.lesson', ['course' => $course->slug, 'lesson' => $prev->slug ?: $prev->id]) }}">&#10094; Previous</a>
                    @endif
                    <span class="spacer"></span>
                    @if($next)
                        <a class="btn" href="{{ route('learning.lesson', ['course' => $course->slug, 'lesson' => $next->slug ?: $next->id]) }}">Next &#10095;</a>
                    @endif
                </div>

                <h1>{{ $lesson->title }}</h1>
                <div class="lesson-meta">Lesson {{ $lessonIndex }} of {{ $totalLessons }} &middot; {{ $course->title }}</div>

                <article class="w3-article">
                    @if($customView)
                        {{-- resources/views/learning/lessons/{slug}.blade.php --}}
                        @include($customView)
                    @else
                        {!! $lesson->content !!}
                    @endif
                </article>

                <div class="w3-pn bottom">
                    @if($prev)
                        <a class="btn" href="{{ route('learning.lesson', ['course' => $course->slug, 'lesson' => $prev->slug ?: $prev->id]) }}">&#10094; Previous</a>
                    @endif
                    <span class="spacer"></span>
                    @if($next)
                        <a class="btn" href="{{ route('learning.lesson', ['course' => $course->slug, 'lesson' => $next->slug ?: $next->id]) }}">Next &#10095;</a>
                    @endif
                </div>

            @else
                <div style="padding:60px 20px;text-align:center;color:#5f6368">
                    <h3>No lessons yet</h3>
                    <p>This course does not have any lessons added.</p>
                </div>
            @endif
        </main>

        {{-- ==================== RIGHT COLUMN ==================== --}}
        <aside class="w3-right">
            <div class="w3-card">
                <h4>Your progress</h4>
                <div class="w3-progress"><span style="width: {{ $percent }}%"></span></div>
                <small>Lesson {{ $lessonIndex }} of {{ $totalLessons }} ({{ $percent }}%)</small>
            </div>

            <div class="w3-card">
                <h4>Course info</h4>
                <div class="row"><span>Level</span><strong>{{ $course->level ?? '-' }}</strong></div>
                <div class="row"><span>Modules</span><strong>{{ $course->modules->count() }}</strong></div>
                <div class="row"><span>Lessons</span><strong>{{ $totalLessons }}</strong></div>
                <div class="row"><span>Price</span><strong>{{ $course->is_free ? 'FREE' : number_format($course->price, 2) . ' USD' }}</strong></div>
            </div>
        </aside>

    </div>
</div>

<script src="{{ asset('js/w3learn.js') }}"></script>
@endsection
