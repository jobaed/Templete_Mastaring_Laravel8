@extends('frontend.layouts.app')

@section('title',$title)

@push('style')

    
@endpush

@section('content')
    @include('frontend.pages.home.section.slider')
    @include('frontend.include.search')
    @include('frontend.pages.home.section.featured-propartis')
    @include('frontend.include.action-area')
    @include('frontend.pages.home.section.testemonial')
    @include('frontend.pages.home.section.editor')
@endsection

@push('script')


    
@endpush