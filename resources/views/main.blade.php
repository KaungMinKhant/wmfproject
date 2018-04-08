<!DOCTYPE html>
<html lang="en">
@extends('layouts.main')
@section('main')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="{{asset("images/001.jpg")}}" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/002.jpg")}}" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/003.jpg")}}" alt="Third slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/004.jpg")}}" alt="Fourth slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/005.jpg")}}" alt="Fifth slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/006.jpg")}}" alt="Sixth slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/007.jpg")}}" alt="Seventh slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/008.jpg")}}" alt="Eighth slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/009.jpg")}}" alt="Ninth slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/010.jpg")}}" alt="Tenth slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/011.jpg")}}" alt="Eleventh slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/012.jpg")}}" alt="Twelfth slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{asset("images/013.jpg")}}" alt="Thirteenth slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<div class="trend-video default-primary-color">
	<div class="col-md-12 text-primary-color yeon-sung head-size">
			Trending Videos of WWE
		</div>
</div>
<div class="embed-responsive embed-responsive-16by9">
	<iframe class="embed-responsive-item margin" src="https://www.youtube.com/embed/dsHj1aHWY2M?rel=0" allowfullscreen></iframe>
</div>
<div class="embed-responsive embed-responsive-16by9">
	<iframe class="embed-responsive-item margin" src="https://www.youtube.com/embed/_SK1ARkUcrc?rel=0" allowfullscreen></iframe>
</div>
<div class="embed-responsive embed-responsive-16by9">
	<iframe width="854" height="480" src="https://www.youtube.com/embed/4z4vCx_6xlg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>

@endsection
</html>