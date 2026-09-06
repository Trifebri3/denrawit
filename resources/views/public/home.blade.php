@extends('layouts.public')

@section('title', 'DEN RAWIT - Orkestrator Inovasi Ekosistem Pertanian Cabai Regeneratif Berkelanjutan')

@section('content')
    <div class="bg-noise">
        @include('public.sections.hero')
        @include('public.sections.news_slider')
        @include('public.sections.what_if')
        @include('public.sections.story')
        @include('public.sections.4p_framework')
        @include('public.sections.programs')
        @include('public.sections.field_notes')
        @include('public.sections.activity')
        @include('public.sections.calendar')
        @include('public.sections.impact_map')
        @include('public.sections.impact')
        @include('public.sections.ecosystem')
        @include('public.sections.people')
        @include('public.sections.chili_story')
        @include('public.sections.media')
        @include('public.sections.partners')
        @include('public.sections.about')
        @include('public.sections.join_us')
    </div>
@endsection
