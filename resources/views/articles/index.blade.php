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
						<p>Eleifend vitae urna</p>
						<h2>Generic Page Template</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>maecenas sapien feugiat ex purus</p>
								<h2>Lorem ipsum dolor</h2>
                            </header>
                            
                            @foreach($articles as $article)
                            <header>
									<h2><a href="/articles/{{$article->id}}">{{ $article->title }}</a></h2>
									<p>{{ $article->excerpt }}</p>
                            </header>
                            <p style="color:darkslategrey">{{ $article->body }}</p>
                            @endforeach


						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
        @include('partials/footer')

@endsection

