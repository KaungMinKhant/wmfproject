<!DOCTYPE html>
<html lang="en">
@extends('layouts.main')
@section('main')
<div class="contain">
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img class="img-fluid img-resize" src="{{asset("images/kmk.jpg")}}" alt="">
			</div>
			<div class="col-md-9 accent-color info-resize">
				<h2 class="yeon-sung text-primary-color"> This website is developed by Kaung Min Khant. I am an admin in the official facebook group of WMF. As I am studying Computer Science at Univesity of Yangon, I have created this website for my beloved WMF with the knowledges I know.</h2>
				<br>
				<h3 class="text-primary-color" >You can contact me via</h3>
				<br>
				<div class="container">
					<div class="row">
						<div class="col-md-3 ">
							<a href="https://www.facebook.com/kaung.minn.399">
								<i class="fa fa-facebook text-primary-color"></i>
							</a>
						</div>
						<div class="col-md-3">
							<a href="https://twitter.com/phenomenalkaung">
								<i class="fa fa-twitter text-primary-color"></i>
							</a>
						</div>
						<div class="col-md-3">
							<a href="https://www.instagram.com/kaungmin2k/?hl=en">
								<i class="fa fa-instagram text-primary-color"></i>
							</a>
						</div>
						<div class="col-md-3">
							<a href="https://github.com/KaungMinKhant">
								<i class="fa fa-github text-primary-color"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
</html>