
@extends('layouts.app')

@section('title', $school['name'] . ' | Home')

@section('content')
    @include('components.header')
    @include('components.announcement')

    <main>
        @include('components.home.hero')
        @include('components.home.quick-links')
        @include('components.home.principal')
        @include('components.home.notices')
        @include('components.home.admissions')
    </main>

    @include('components.footer')
@endsection
