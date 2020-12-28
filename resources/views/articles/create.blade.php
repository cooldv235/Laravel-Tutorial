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
						<h2>Create a New Article</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
                            <form method="POST" action="/articles">
                                @csrf
                                
                                <div class="6u 12u$(xsmall)">
                                    <label for="title">Title: </label>
                                    <input type="text" name="title" id="name" value="" placeholder="Name" />
                                </div><br>

                                <div class="6u 12u$(xsmall)">
                                    <label for="excerpt">Excerpt: </label>
                                    <textarea name="excerpt" id="message" placeholder="Excerpt of your article" rows="3"></textarea>
                                </div>

                                <div class="6u 12u$(xsmall)">
                                    <label for="body">Body: </label>
                                    <textarea name="body" id="message" placeholder="Body of your article" rows="6"></textarea>
                                </div><br>

                                <div class="12u$">
                                    <input type="submit" value="Create" />
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

