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
						<h2>Articles Page</h2>
						<div class="12u$">
                                <a class="button" href="/articles/create">NEW ARTICLE</a>
                        </div>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>make articles of your own</p>
								<h2>List of articles</h2>
                            </header>
                            
                            @foreach($articles as $article)
                            <header>
									<h2><a href="{{ $article->path() }}">{{ $article->title }}</a> <span><a href="/articles/{{ $article->id }}/edit" class="button small pull-right">Edit</a></span></h2>
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

