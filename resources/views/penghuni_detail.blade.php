<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pendaftaran Baru</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    </head>

	<body class="regBody">
		<div id="tab_option" class="container formBG">
			<h1><label>Info Penghuni</label></h1>
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#info_penghuni" role="tab" data-toggle="tab">Penghuni</a></li>
				<li role="presentation"><a href="#info_keluarga" role="tab" data-toggle="tab">Ahli Keluarga</a></li>
				<li role="presentation"><a href="#info_harta" role="tab" data-toggle="tab">Barang</a></li>
			</ul>
			
			<div class="tab-content clearfix fontfix penghuni_details">
				<div class="tab-pane active" id="info_penghuni">
						<div class="step">
							<div class="form-inline form-space">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label>Nama:</label>
											<span>{{ $penghuni->nama }}</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>K/P Nombor:</label>
											<span>{{ $penghuni->kp }}</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Umur:</label>
											<span>{{ $penghuni->umur }}</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="form-inline form-space">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label>Bangsa:</label> 
											<span>{{ $penghuni->bangsa }}</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Agama:</label> 
											<span>{{ $penghuni->agama }}</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Jantina: </label> 
											<span>{{ $penghuni->jantina }}</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="form-inline form-space">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label>Taraf Perkahwinan:</label>
											<span>{{ $penghuni->taraf_kahwin }}</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Peringkat Sekolah:</label>
											<span>{{ $penghuni->peringkat_sek }}</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="form-inline form-space">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label>Alamat: </label>
											<span>{{ $penghuni->alamat }}</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="form-inline form-space">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label>Negeri:</label>
											<span>{{ $penghuni->negeri }}</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Bandar:</label> 
											<span>{{ $penghuni->bandar }}</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Poskod:</label>
											<span>{{ $penghuni->poskod }}</span>
										</div>
									</div>
								</div>
							</div>

							<div class="form-inline form-space">
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label>Penyakit dialami:</label>
											<span>
											<?php
												if(empty($penghuni->penyakit)){
													echo "Tidak Berpenyakit";
												} else {
													echo $penghuni->penyakit;	
												}
											?>
											</span>
										</div>
									</div>
								</div>
							</div>
							@if(!empty($penghuni->penyakit))
							<div class="form-group form-space">
								<label>Senarai Ubatan:</label>
								<span>{{ $penghuni->ubat }}</span>
							</div>
							@endif
							<div class="form-group form-space">
								<label>Sejarah Ringkas:</label>
								<span>{{ $penghuni->sejarah }}</span>
							</div>
							<div class="form-group form-space">
								<label>Tarikh Masuk:</label>
								<span>{{ $penghuni->tarikhMasuk }}</span>
							</div>
						</div> <!-- Step -->
				</div>
				
				<div class="tab-pane" id="info_keluarga">								<!-- Ahli Keluarga -->
					@foreach($keluargas as $keluarga)
					<div class="panel panel-default panel-wizard panel-ahli col-lg-12">
						<div class="panel-container">
							<div class="form-inline form-space">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Nama:</label>
											<span>{{ $keluarga->ahli_nama }}</span>
										</div>
									</div>
									<div class="col-md-4">
										<label>K/P Nombor:</label>
										<span>{{ $keluarga->ahli_kp }}</span>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Umur:</label>
											<span>{{ $keluarga->ahli_umur }}</span>
										</div>
									</div>
								</div>
							</div> <!-- First row-->
						
							<div class="form-inline form-space">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Bangsa:</label> 
											<span>{{ $keluarga->ahli_bangsa }}</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Agama:</label> 
											<span>{{ $keluarga->ahli_agama }}</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Jantina: </label>
											<span>{{ $keluarga->ahli_jantina }}</span>
										</div>
									</div>
								</div>
							</div> <!-- Second row -->

							<div class="form-inline form-space">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Hubungan:</label>
											<span>{{ $keluarga->ahli_hubungan }}</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Pekerjaan:</label>
											<span>{{ $keluarga->ahli_kerja }}</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Tel Nombor:</label>
											<span>{{ $keluarga->ahli_tel }}</span>
										</div>		
									</div>
								</div>
							</div>	<!-- Second Ops row -->

							<div class="form-inline form-space">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label>Alamat: </label>
											<span>{{ $keluarga->ahli_alamat }}</span>
										</div>
									</div>
								</div>
							</div>	<!-- Third Row-->

							<div class="form-inline form-space">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Negeri:</label>
											<span>{{ $keluarga->ahli_negeri }}</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Bandar:</label> 
											<span>{{ $keluarga->ahli_bandar }}</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Poskod:</label>
											<span>{{ $keluarga->ahli_poskod }}</span>
										</div>
									</div>
								</div>
							</div> <!-- Fourth row -->
						</div>
					</div>
					@endforeach
					<div class="push"></div>
				</div>
				
				<div class="tab-pane" id="info_harta">
					<div class="form-inline form-space">
						<label><u><h2>Barangan</h2></u></label>
						<div class="row">
							@foreach($hartas as $harta)
							<div class="col-md-3">
								<div class="form-group">
									<label>{{ $harta->barang }} : </label>
									<span>{{ $harta->qty }}</span>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- First row-->

					<label><u><h2>Saksi</h2></u></label>
					<div class="form-group">
						<label class="control-label-edit">Nama:</label>
							<span>{{ $penghuni->saksi_nama }}</span>
					</div>
					<div class="form-group">
						<label class="control-label-edit">K/P Saksi:</label>			
							<span>{{ $penghuni->saksi_kp }}</span>		
					</div>
					<div class="form-group">
						<label class="control-label-edit">Saksi Tel:</label>
							<span>{{ $penghuni->saksi_tel }}</span>
					</div>		
				</div>
			</div>
			<div class="push"></div>
		</div>
	</body>

	<footer>
		<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.js') }}"></script>
		<script src="{{ asset('js/moment.min.js') }}"></script>
		<script src="{{ asset('js/multiform.js') }}"></script>
		<script src="{{ asset('js/search.js') }}"></script>
	</footer>
</html>