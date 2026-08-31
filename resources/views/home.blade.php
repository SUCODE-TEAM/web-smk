@extends('layouts.app')

@section('content')
    <x-hero :profile="$schoolProfile ?? null" />
    <x-about :profile="$schoolProfile ?? null" />
    <x-majors :majors="$majors ?? []" />
    <x-stats :stats="$stats ?? []" />
    <x-news :news="$news ?? []" />
@endsection
