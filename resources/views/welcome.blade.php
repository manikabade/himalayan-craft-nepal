
@extends('frontend.layout.master')
@section('content')
<!-- HOME -->
@include('frontend.layout.slider')
{{-- Step To take   Appointment --}}
@include('frontend.layout.information')
</div>
</div>
<!-- ABOUT -->
@include('frontend.layout.about')

<!-- VIDEO -->
@include('frontend.layout.video')
<!-- PICTURE -->
@include('frontend.layout.picture')
<!-- TEAM -->
@include('frontend.layout.item')

<!-- NEWS -->
@include('frontend.layout.news')

<!-- Order -->
@include('frontend.layout.order')
@include('frontend.layout.feedback')

@endsection
