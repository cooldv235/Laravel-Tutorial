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
						<h2>Edit Article</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
                            <form method="POST" action="/articles/{{ $article->id }}">
                                @csrf
                                @method('PUT')
                                
                                <div class="6u 12u$(xsmall)">
                                    <label for="title">Title: </label>
                                    <input type="text" name="title" id="name" value="{{ $article->title }}" placeholder="Name" />

                                    @error('title')
                                        <p><strong>{{ $errors->first('title') }}</strong></p>
                                    @enderror
                                </div><br>

                                <div class="6u 12u$(xsmall)">
                                    <label for="excerpt">Excerpt: </label>
                                    <textarea name="excerpt" id="message" placeholder="Excerpt of your article" rows="3">{{ $article->excerpt }}</textarea>

                                    @error('excerpt')
                                        <p><strong>{{ $errors->first('excerpt') }}</strong></p>
                                    @enderror
                                </div>

                                <div class="6u 12u$(xsmall)">
                                    <label for="body">Body: </label>
                                    <textarea name="body" id="message" placeholder="Body of your article" rows="6">{{ $article->body }}</textarea>

                                    @error('body')
                                        <p><strong>{{ $errors->first('body') }}</strong></p>
                                    @enderror
                                </div><br>

                                <div class="12u$">
                                    <input type="submit" value="Update" />
                                </div>
                            </form>


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

