@extends ('layout')

@section('content')    

        <!-- Header -->
        @include('partials/header')

		<!-- Nav -->
        @include('partials/nav')

		<!-- Banner -->
        @include('partials/banner')
		
        <!-- One -->
        @include('partials/section_one')

        <!-- Two -->
        @include('partials/section_two')
        
        <!-- Three -->
        @include('partials/section_three')

        <!-- Footer -->
        @include('partials/footer')

@endsection