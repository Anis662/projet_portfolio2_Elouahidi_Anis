@extends('templates.structure')

@section('content')
<main id="main">
    @include('header.header')
    @include('about.about')
    @include('fact.fact')
    @include('skill.skill')
    @include('portfolio.portfolio')
    @include('contact.contact')

</main>
@endsection