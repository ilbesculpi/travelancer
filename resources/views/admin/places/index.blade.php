@extends('admin.layouts.default')

@section('title', 'Places')

@section('content')

<div class="content-wrapper">
	
	<section class="content-header">
		<h1>
			<i class="fa fa-map-marker"></i>
			Places
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?= route('admin:dashboard') ?>">
					<i class="fa fa-dashboard"></i>
					Dashboard
				</a>
			</li>
			<li class="active">
				<i class="fa fa-map-marker"></i>
				Places
			</li>
		</ol>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-sm-12">
				<a href="#" class="btn btn-app">
					<i class="fa fa-plus-circle"></i>
					Create a new Place
				</a>
			</div>
		</div>
		
		
		<div class="box">
			
			<div class="box-header with-border">
				
				<h3 class="box-title">Places</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
				</div>
			</div>
			
			<div class="box-body">
				<div class="row">
					<div class="col-sm-6">
						<a href="#">Menu #1</a>
					</div>
				</div>
			</div>
			
			<div class="box-footer">
				Footer
			</div>
			
		</div>

	</section>
	
</div>

@endsection