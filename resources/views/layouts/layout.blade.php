@extends('layouts.index')
@section('content')
    <div data-scroll-index="0" style="width:100%;">
        <!--header start-->
        @include('partials.header')
        <!--header end-->
        <!--slider start-->
        @include('partials.slider')
        <!--slider end-->
    </div>

    <!--about section start-->
    {{-- @include('partials.about') --}}
    <!--about section end-->

    <!--services start-->
    {{-- @include('partials.services') --}}
    <!--services end-->

    <!-- Message form start -->
    @include('partials.message_form')
    <!-- Message form end -->

    <div data-scroll-index="4" style="width:100%;">
        <!--team start-->
        {{-- @include('partials.team') --}}
        <!--team end-->

        <!--gallery start-->
        {{-- @include('partials.gallery') --}}
        <!--gallery end-->

        <!--counter section start-->
        @include('partials.counter')
        <!--counter section end-->

    </div>

    <!--pricing section start-->
    {{-- @include('partials.pricing') --}}
    <!--pricing section end-->

    <!--blog start-->
    {{-- @include('partials.blog') --}}
    <!--blog end-->

    <!--client section start-->
    {{-- @include('partials.client') --}}
    <!--client section end-->

    <!--contact start-->
    {{--  @include('partials.contact')  --}}
    <!--contact end-->



@endsection
