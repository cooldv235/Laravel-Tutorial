@extends('layout')

@section('content')    

		<!-- Header -->
        @include('partials/header')

		<!-- Nav -->
        @include('partials/nav')

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>{{ $article->title}}</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<h4>{{ $article->excerpt}}</h4>
                            </header>
                        
                            <p align="center" style="color:darkslategrey">{{ $article->body}}</p>
                            


						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/jquery.scrollex.min.js"></script>
        <script src="/assets/js/skel.min.js"></script>
        <script src="/assets/js/util.js"></script>
        <script src="/assets/js/main.js"></script>

@endsection

