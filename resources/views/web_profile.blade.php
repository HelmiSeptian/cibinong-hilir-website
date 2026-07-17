@extends('layouts.app')

@section('title', 'Selamat Datang di Website Desa Cibinong Hilir - Desa Sukamaju')

@section('content')
    @include('sections.hero')
    @include('sections.service')
    @include('sections.portofolio')
    @include('sections.about')
    @include('sections.team')
    @include('sections.clients')
    @include('sections.contact')
@endsection

@section('modals')
    @include('sections.portfolio-modals')
@endsection