{{-- resources/views/learning/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Tutorials | GeoLearn')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/w3learn.css') }}">
@endpush

@section('content')
<div class="w3">

    @include('learning.topnav', ['navCourses' => $courses, 'activeSlug' => null])

    <div class="w3-hero">
        <h1>GIS Tutorials</h1>
        <p>Choose a course and learn GIS step by step.</p>
    </div>

    <div class="w3-index">
        <h2>Explore courses</h2>

        @if($courses->isEmpty())
            <p style="padding:40px;text-align:center;color:#5f6368">No courses available yet.</p>
        @else
            <div class="w3-grid">
                @foreach ($courses as $course)
                    <div class="w3-course">
                        <h3>{{ $course->title }}</h3>

                        <div class="tags">
                            @if($course->level)
                                <span class="tag">{{ $course->level }}</span>
                            @endif
                            <span class="tag">
                                {{ $course->is_free ? 'FREE' : number_format($course->price, 2) . ' USD' }}
                            </span>
                        </div>

                        <p>{{ \Illuminate\Support\Str::limit($course->description, 160) }}</p>

                        <div class="count">{{ $course->modules_count }} modules</div>

                        <a href="{{ route('learning.course', $course->slug) }}" class="go">Start Learning &raquo;</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
