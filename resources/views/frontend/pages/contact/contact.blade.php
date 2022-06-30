@extends('frontend.layouts.app')

@section('title',$title)

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### from Area Start ##### -->
    @include('frontend.pages.contact.section.from')
    <!-- ##### from Area End ##### -->

    <!-- ##### map Area Start ##### -->
    @include('frontend.pages.contact.section.map')
    <!-- ##### map Area End ##### -->
      
    
@endsection

@push('script')
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="asset/frontend/js/map-active.js"></script>
@endpush