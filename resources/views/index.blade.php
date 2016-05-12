@extends('layout.app')

@section('content')

@include('components.navbar')

	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">ซื้อ-ขายที่ดิน Online</h3>
							<h1 class="white typed">Buy-Sell Property Online.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">ค้นหา</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">ค้นหาข้อมูลที่ดิน</h4>
							<h4 class="white heading small-pt">&nbsp;</h4>
							<a href="#" class="btn btn-white-fill expand">Search</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">เข้าสู่ระบบ</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">เข้าสู่ระบบ</h4>
							<h4 class="white heading small-pt">&nbsp;</h4>
							<a href="#" class="btn btn-white-fill expand" data-toggle="modal" data-target="#modal_login">Login</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">สมัครสมาชิก</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">ลงทะเบียนสมัครสมาชิก</h4>
							<h4 class="white heading small-pt">&nbsp;</h4>
							<a href="#" class="btn btn-white-fill expand" data-toggle="modal" data-target="#modal_register">Register</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>บันทึกข้อมูล</h2>
				<h4 class="light muted">เพิ่ม แก้ไข ดู ข้อมูล</h4>
			</div>
			<div class="row services">
				<div class="col-md-4" >
					<div class="service" id='div_btn_add'>
						<div class="icon-holder">
							<img src="img/icons/heart-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">เพิ่มข้อมูล</h4>
						<p class="description">...</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service" id='div_btn_edit'>
						<div class="icon-holder">
							<img src="img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">แก้ไขข้อมูล</h4>
						<p class="description">...</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service" id='div_btn_view'>
						<div class="icon-holder">
							<img src="img/icons/weight-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">ดูข้อมูล</h4>
						<p class="description">...</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">ความรู้</h2>
				<h4 class="light muted">แหล่งข้อมูลความรู้</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								&nbsp;
							</div>
						</div>
						<div class="title">
							<h4>&nbsp;</h4>
							<h5 class="muted regular">&nbsp;</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								&nbsp;
							</div>
						</div>
						<div class="title">
							<h4>&nbsp;</h4>
							<h5 class="muted regular">&nbsp;</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								&nbsp;
							</div>
						</div>
						<div class="title">
							<h4>&nbsp;</h4>
							<h5 class="muted regular">&nbsp;</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">ข่าวสาร</h2>
				<h4 class="light white">ข่าวสารล่าสุด</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">News</h4>
							<h4 class="white regular light">&nbsp;</h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">&nbsp;</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>1</li>
								<li>2</li>
								<li>3</li>
								<li>4</li>
								<li>5</li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
@include('components.modal')	

@endsection
@section('body-end')
<script type="text/javascript">

$(function() {
    $('#div_btn_add').on('click', function(e) {  
        window.location = './additem';
    });
	 $('#div_btn_edit').on('click', function(e) {  
        window.location = './additem';
    });
	var hash = window.location.hash;
	if (hash.substring(1) == 'login') {
		 $('#modal_login').modal();
	}
	@if (old('iaction') == 'login' )
    	$('#modal_login').modal();
    @endif
    @if (old('iaction') == 'register' )
    	$('#modal_register').modal();
    @endif
   
});
	
</script>
@endsection
