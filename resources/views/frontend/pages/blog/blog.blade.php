@extends('frontend.layouts.app')

@section('title',$title)

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Post Area Start ##### -->
    @include('frontend.pages.blog.section.post')
    <!-- ##### Post Area End ##### -->
    
@endsection