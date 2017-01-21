<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Selamat Datang!</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    </head>

	<body class="regBody">
		<div class="container">
			<div class="head_container">
				<div class="row">
					<div class="col-md-offset-4">
						<form role="form" method="GET" action="pencarian" autocomplete="off">
							<div class="input-group right">
							    <input type="text" id="cari_nama" class="form-control" name="cari" placeholder="Nama yang dicari ...">
							    <span class="input-group-btn-edit">
							    <button type="submit" id="cari" class="btn btn-default">Go!</button>
						    	</span>
					    	</div>
				    	</form>
					</div>
				</div>
			</div>  <!-- Head container -->
		
			<div class="row">
				<div class="col-md-offset-4 col-md-8">
					<label>Jumlah Penghuni {{ $penghuni_daftar->total() }}.</label><br>
					<label>Muka Surat {{ $penghuni_daftar->currentPage() }} mempunyai {{ $penghuni_daftar->count() }} penghuni.</label>
				</div>
			</div>
			
			<?php use Illuminate\Support\Facades\Input; $umur = Input::has('umur_check') ? Input::get('umur_check') : []; $jantina = Input::has('jantina_check') ? Input::get('jantina_check') : [];?>

			<div class="row">										<!-- Checkbox Filter -->
				<aside class="col-md-4">
					<form role="form" id="check_filter" method="GET" action="filter" autocomplete="off">
						<div class="panel list">
							<div class="panel-heading">
								<h3 class="panel-title" data-toggle="collapse" data-target="#panel_jantina" aria-expanded="true">
									Jantina
								</h3>
							</div>
							<div class="panel-body collapse in" id="panel_jantina">
								<ul class="list-group">
								    <li class="list-group-item">
								   
								    	<div class="checkbox">
								    		<label>
								    			<input type="checkbox" class="filter" name="jantina_check[]" value="Lelaki" {{ in_array('Lelaki', $jantina) ? 'checked' : '' }} >
								    			Lelaki
								    		</label>
								    	</div>
								    </li>
								    <li class="list-group-item">
								    	<div class="checkbox">
								    		<label>
								    			<input type="checkbox" class="filter" name="jantina_check[]" value="Perempuan" {{ in_array('Perempuan', $jantina) ? 'checked' : '' }}>
								    			Perempuan
								    		</label>
								    	</div>
								    </li>
								</ul>
							</div> 
						</div> <!-- Jantina -->
						<div class="panel list">
							<div class="panel-heading">
								<h3 class="panel-title" data-toggle="collapse" data-target="#panel_umur" aria-expanded="true">
									Umur
								</h3>
							</div>
							<div class="panel-body collapse in" id="panel_umur">
								<ul class="list-group">
								    <li class="list-group-item">
								    	
								    	<div class="checkbox">
								    		<label>
								    			<input type="checkbox" class="filter" name="umur_check[]" value="18-30" {{ in_array('18-30', $umur) ? 'checked' : '' }}>
								    			18-30
								    		</label>
								    	</div>
								    </li>
								    <li class="list-group-item">
								    	<div class="checkbox">
								    		<label>
								    			<input type="checkbox" class="filter" name="umur_check[]" value="30-50" {{ in_array('30-50', $umur) ? 'checked' : '' }}>
								    			30-50
								    		</label>
								    	</div>
								    </li>
								    <li class="list-group-item">
								    	<div class="checkbox">
								    		<label>
								    			<input type="checkbox" class="filter" name="umur_check[]" value="50-70" {{ in_array('50-70', $umur) ? 'checked' : '' }}>
								    			50-70
								    		</label>
								    	</div>
								    </li>
								    <li class="list-group-item">
								    	<div class="checkbox">
								    		<label>
								    			<input type="checkbox" class="filter" name="umur_check[]" value="70++" {{ in_array('70++', $umur) ? 'checked' : '' }}>
								    			70 dan keatas
								    		</label>
								    	</div>
								    </li>
								</ul>
							</div>
						</div>  <!-- Umur -->
					</form>
				</aside>
				<!-- Pagination Settings -->

				<section id="result" class="col-md-8">
					<div id="target-page">			
						@foreach($penghuni_daftar as $value)
							<div class="panel panel-default">
								<div class="panel-container">
							  		<div class="place_info">
										<p>Nama: {{ $value->nama }}</p>
										<p>K/P Nom: {{ $value->kp }}</p>
										<p>Umur: {{ $value->umur }}</p>
										<p>Jantina: {{ $value->jantina }}</p>
									</div>
									<div class="place_btn">
										<a class="btn btn-primary details" value="{{ $value->penghuni_id }}" name="details" id="details" href="maklumat_penghuni/{{ $value->penghuni_id }}">Details</a>
										<a class="btn btn-danger edit" value="{{ $value->penghuni_id }}" id="edit" href="edit_penghuni/{{ $value->penghuni_id }}">Edit</a>
									</div>
								</div>
							</div>
						@endforeach
						{{ $penghuni_daftar->links() }}
					</div>
				</section>
			</div> 													<!-- Checkbox Filter -->
		</div> <!-- Container -->	
	</body>

	<footer>
		<script src="{{ asset('js/bootstrap.js') }}"></script>
		<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
		<script src="{{ asset('js/moment.min.js') }}"></script>
		<script src="{{ asset('js/multiform.js') }}"></script>
		<script src="{{ asset('js/search.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.filter').on('change', function() {
					$('#check_filter').submit();
					return false;
				});
			});
		</script>
	</footer>
</html>