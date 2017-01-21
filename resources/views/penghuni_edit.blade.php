<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pengubahan Penghuni</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    </head>

	<body class="regBody">
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		    	<strong>Whoops!</strong> There were some problems with your input.
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form class="form" id="form" role='form' method='post' action='../update_penghuni/{{ $penghuni->penghuni_id }}' autocomplete='off'>
			<div id="tab_option" class="container formBG">
				<h1><label>Info Penghuni</label></h1>
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><a href="#info_penghuni" role="tab" data-toggle="tab">Penghuni</a></li>
					<li role="presentation"><a href="#info_keluarga" role="tab" data-toggle="tab">Ahli Keluarga</a></li>
					<li role="presentation"><a href="#info_harta" role="tab" data-toggle="tab">Barang</a></li>
				</ul>
				
				<div class="tab-content clearfix fontfix">
					<div class="tab-pane active" id="info_penghuni">
							<div class="step">
								<div class="form-space">
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label>Nama:</label>
												<input type="text" id="nama" class="form-control p_input" name="nama" size="30" maxlength="80" value="{{ $penghuni->nama }}" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>K/P Nombor:</label>
												<input type="text" id="kp" class="form-control p_input" name="kp" size="20" maxlength="12" value="{{ $penghuni->kp }}" required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Umur:</label>
												<input type="text" id="umur" class="form-control p_input" size="5" name="umur" maxlength="2" value="{{ $penghuni->umur }}" required>
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-space">
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label>Bangsa:</label>
												<select name="bangsa" id="bangsa" class="form-control" required>
													<option value="Melayu" {{ ($penghuni->bangsa == 'Melayu') ? 'selected' : '' }}>Melayu</option>
													<option value="India" {{ ($penghuni->bangsa == 'India') ? 'selected' : '' }}>India</option>
													<option value="Cina" {{ ($penghuni->bangsa == 'Cina') ? 'selected' : '' }}>Cina</option>
													<option value="Lain-lain" {{ ($penghuni->bangsa == 'Lain-lain') ? 'selected' : '' }}>Lain-lain</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Agama:</label>
												<select name="agama" id="agama" class="form-control p_input" required>
													<option value="Islam" {{ ($penghuni->agama == 'Melayu') ? 'selected' : '' }}>Islam</option>
													<option value="Kristian" {{ ($penghuni->agama == 'Kristian') ? 'selected' : '' }}>Kristian</option>
													<option value="Buddha" {{ ($penghuni->agama == 'Buddha') ? 'selected' : '' }}>Buddha</option>
													<option value="Lain-lain" {{ ($penghuni->agama == 'Lain-lain') ? 'selected' : '' }}>Lain-lain</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Jantina: </label>
												<div class="radio" required>
													<label><input type="radio" name="jantina" id="jantina" value="Lelaki" {{ ($penghuni->jantina == 'Lelaki') ? 'checked' : '' }}> Lelaki</label>
													<label><input type="radio" name="jantina" id="jantina" value="Perempuan" {{ ($penghuni->jantina == 'Perempuan') ? 'checked' : '' }}> Perempuan</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-space">
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label>Taraf Perkahwinan:</label>
												<select name="taraf_p" id="taraf_p" class="form-control" required>
													<option value="Bujang" {{ ($penghuni->taraf_kahwin == 'Bujang') ? 'selected' : '' }}>Bujang</option>
													<option value="Kahwin" {{ ($penghuni->taraf_kahwin == 'Kahwin') ? 'selected' : '' }}>Kahwin</option>
													<option value="Cerai" {{ ($penghuni->taraf_kahwin == 'Cerai') ? 'selected' : '' }}>Cerai</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Peringkat Sekolah:</label>
												<select name="sek" id="sek" class="form-control" required>
													<option value="Sekolah Rendah" {{ ($penghuni->peringkat_sek == 'Sekolah Rendah') ? 'selected' : '' }}>Sekolah Rendah</option>
													<option value="Sekolah Menengah" {{ ($penghuni->peringkat_sek == 'Sekolah Menengah') ? 'selected' : '' }}>Sekolah Menengah</option>
													<option value="Pra-Universiti" {{ ($penghuni->peringkat_sek == 'Pra-Universiti') ? 'selected' : '' }}>Pra-Universiti</option>
													<option value="Universiti" {{ ($penghuni->peringkat_sek == 'Universiti') ? 'selected' : '' }}>Universiti</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-space">
									<label class="control-label-edit col-sm-1">Alamat:</label>
									<input type="text" id="alamat" class="form-control p_input" name="alamat" value='{{ $penghuni->alamat }}' required>
								</div>
								
								<div class="form-space">
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label>Negeri:</label>
												<select name="negeri" id="negeri" class="form-control" required>
													<option value="Johor" {{ ($penghuni->negeri == 'Johor') ? 'selected' : '' }}>Johor</option>
													<option value="Kedah" {{ ($penghuni->negeri == 'Kedah') ? 'selected' : '' }}>Kedah</option>
													<option value="Kelantan" {{ ($penghuni->negeri == 'Kelantan') ? 'selected' : '' }}>Kelantan</option>
													<option value="Melaka" {{ ($penghuni->negeri == 'Melaka') ? 'selected' : '' }}>Melaka</option>
													<option value="Negeri Sembilan" {{ ($penghuni->negeri == 'Negeri Sembilan') ? 'selected' : '' }}>Negeri Sembilan</option>
													<option value="Pahang" {{ ($penghuni->negeri == 'Pahang') ? 'selected' : '' }}>Pahang</option>
													<option value="Perak" {{ ($penghuni->negeri == 'Perak') ? 'selected' : '' }}>Perak</option>
													<option value="Perlis" {{ ($penghuni->negeri == 'Perlis') ? 'selected' : '' }}>Perlis</option>
													<option value="Pulau Pinang" {{ ($penghuni->negeri == 'Pulau Pinang') ? 'selected' : '' }}>Pulau Pinang</option>
													<option value="Sabah" {{ ($penghuni->negeri == 'Sabah') ? 'selected' : '' }}>Sabah</option>
													<option value="Sarawak" {{ ($penghuni->negeri == 'Sarawak') ? 'selected' : '' }}>Sarawak</option>
													<option value="Selangor" {{ ($penghuni->negeri == 'Selangor') ? 'selected' : '' }}>Selangor</option>
													<option value="Terengganu" {{ ($penghuni->negeri == 'Terengganu') ? 'selected' : '' }}>Terengganu</option>
													<option value="Kuala Lumpur" {{ ($penghuni->negeri == 'Kuala Lumpur') ? 'selected' : '' }}>Kuala Lumpur</option>
													<option value="Labuan" {{ ($penghuni->negeri == 'Labuan') ? 'selected' : '' }}>Labuan</option>
													<option value="Putrajaya" {{ ($penghuni->negeri == 'Putrajaya') ? 'selected' : '' }}>Putrajaya</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Bandar:</label>
												<input type="text" id="bandar" class="form-control p_input" name="bandar" size="15" maxlength="20" value='{{ $penghuni->bandar }}' required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Poskod:</label>
												<input type="text" id="poskod" class="form-control p_input" name="poskod" size="5" maxlength="5" value='{{ $penghuni->poskod }}' required>
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-space">
									<div class="row">
										<div class="col-sm-2">
											<div class="form-group">
												<label>Penyakit dialami:</label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label>Gangguan Jiwa</label>
												<input type="checkbox" name="penyakit[]" value="gangg_jiwa" {{ (strpos($penghuni->penyakit, 'gangg_jiwa') !== false) ? 'checked' : '' }}>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label>Darah Tinggi</label>
												<input type="checkbox" name="penyakit[]" value="darah_tinggi" {{ (strpos($penghuni->penyakit, 'darah_tinggi') !== false) ? 'checked' : '' }}>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label>Kencing Manis</label>
												<input type="checkbox" name="penyakit[]" value="kencing_manis" {{ (strpos($penghuni->penyakit, 'kencing_manis') !== false) ? 'checked' : '' }}>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-offset-2 col-sm-3">
											<div class="form-group">
												<label>Barah</label>
												<input type="checkbox" name="penyakit[]" value="barah" {{ (strpos($penghuni->penyakit, 'barah') !== false) ? 'checked' : '' }}>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label>Lain-lain</label>
												<input type="checkbox" name="penyakit[]" value="lain-lain" {{ (strpos($penghuni->penyakit, 'lain-lain') !== false) ? 'checked' : '' }}>
											</div>
										</div>
									</div>
								</div>

								<div class="form-space">
									<label>Senarai Ubatan:</label>
									<input type="text" id="senarai_ubat" class="form-control p_input" name="senarai_ubat" value='{{ $penghuni->ubat }}'>
								</div>
								<div class="form-space">
									<label>Sejarah Ringkas:</label>
									<textarea row="5" cols="100" id="sejarah" class="form-control p_input" name="sejarah" placeholder="Tulis di sini ..." required>{{ $penghuni->sejarah }}</textarea>
								</div>

						        <div class="form-group">
					            	<label>Tarikh meningal:</label>
					                <div class='input-group date' id='datetimepicker1'>
					                    <input type='text' id="tarikhMeninggal" class="form-control" name="tarikhMeninggal" value="{{ $penghuni->tarikhMeninggal }}" onkeydown="return false"/>
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
					            </div>							   
							</div> <!-- Step -->
					</div>
					
					<div class="tab-pane" id="info_keluarga">								<!-- Ahli Keluarga -->
						@foreach($keluargas as $bil => $keluarga)
						<div>
							<h2>Ahli keluarga {{ $bil+1 }}</h2>
						</div>
						<div class="panel panel-default panel-wizard col-lg-12">
							<div class="panel-container">
								<div class="form-space">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Nama:</label>
												<input type="text" id="ahli_nama" class="form-control p_input" name="ahli_nama[]" size="30" onblur="valid_a_nama(this)" value='{{ $keluarga->ahli_nama }}' required>
											</div>
										</div>
										<div class="col-md-4">
											<label>K/P Nombor:</label>
											<input type="text" id="ahli_kp" class="form-control p_input" name="ahli_kp[]" size="20" maxlength="12" onblur="valid_a_kp(this)" value='{{ $keluarga->ahli_kp }}' required>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Umur:</label>
												<input type="text" id="ahli_umur" class="form-control p_input" name="ahli_umur[]" size="5" maxlength="2" onblur="valid_a_umur(this)" value='{{ $keluarga->ahli_umur }}' required>
											</div>
										</div>
									</div>
								</div> <!-- First row-->
							
								<div class="form-space">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Bangsa:</label>
												<select name="ahli_bangsa[]" class="form-control" required>
													<option value="Melayu" {{ ($keluarga->ahli_bangsa == 'Melayu') ? 'selected' : '' }}>Melayu</option>
													<option value="India" {{ ($keluarga->ahli_bangsa == 'India') ? 'selected' : '' }}>India</option>
													<option value="Cina" {{ ($keluarga->ahli_bangsa == 'Cina') ? 'selected' : '' }}>Cina</option>
													<option value="Lain-lain" {{ ($keluarga->ahli_bangsa == 'Lain-lain') ? 'selected' : '' }}>Lain-lain</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Agama:</label>
												<select name="ahli_agama[]" class="form-control" required>
													<option value="Islam" {{ ($keluarga->ahli_agama == 'Melayu') ? 'selected' : '' }}>Islam</option>
													<option value="Kristian" {{ ($keluarga->ahli_agama == 'Kristian') ? 'selected' : '' }}>Kristian</option>
													<option value="Buddha" {{ ($keluarga->ahli_agama == 'Buddha') ? 'selected' : '' }}>Buddha</option>
													<option value="Lain-lain" {{ ($keluarga->ahli_agama == 'Lain-lain') ? 'selected' : '' }}>Lain-lain</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Jantina: </label>
												<select name="ahli_jantina[]" class="form-control" required>
													<option value="Lelaki" {{ ($keluarga->ahli_jantina == 'Lelaki') ? 'selected' : '' }}>Lelaki</option>
													<option value="Perempuan" {{ ($keluarga->ahli_jantina == 'Perempuan') ? 'selected' : '' }}>Perempuan</option>
												</select>
											</div>
										</div>
									</div>
								</div> <!-- Second row -->

								<div class="form-space">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Hubungan:</label>
												<select id="ahli_hubungan" name="ahli_hubungan[]" class="form-control" required>
													<option value="Pasangan" {{ ($keluarga->ahli_hubungan == 'Pasangan') ? 'selected' : '' }}>Pasangan</option>
													<option value="Anak" {{ ($keluarga->ahli_hubungan == 'Anak') ? 'selected' : '' }}>Anak</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Pekerjaan:</label>
												<input type="text" id="ahli_pekerjaan" class="form-control p_input" name="ahli_pekerjaan[]" maxlength="20" onblur="valid_a_kerja(this)" value='{{ $keluarga->ahli_kerja }}' required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Tel Nombor:</label>
												<input type="text" id="ahli_tel" class="form-control p_input" name="ahli_tel_nom[]" maxlength="12" onblur="valid_a_tel(this)" value='{{ $keluarga->ahli_tel }}' required>
											</div>		
										</div>
									</div>
								</div>	<!-- Second Ops row -->

								<div class="form-space">
										<label class="control-label-edit col-sm-1">Alamat:</label>
										<input type="text" id="ahli_alamat" class="form-control p_input" name="ahli_alamat[]" maxlength="50" onblur="valid_a_ala(this)" value='{{ $keluarga->ahli_alamat }}' required>
								</div>

								<div class="form-space">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Negeri:</label>
												<select name="ahli_negeri[]" id="ahli_negeri" class="form-control" required>
													<option value="Johor" {{ ($keluarga->ahli_negeri == 'Johor') ? 'selected' : '' }}>Johor</option>
													<option value="Kedah" {{ ($keluarga->ahli_negeri == 'Kedah') ? 'selected' : '' }}>Kedah</option>
													<option value="Kelantan" {{ ($keluarga->ahli_negeri == 'Kelantan') ? 'selected' : '' }}>Kelantan</option>
													<option value="Melaka" {{ ($keluarga->ahli_negeri == 'Melaka') ? 'selected' : '' }}>Melaka</option>
													<option value="Negeri Sembilan" {{ ($keluarga->ahli_negeri == 'Negeri Sembilan') ? 'selected' : '' }}>Negeri Sembilan</option>
													<option value="Pahang" {{ ($keluarga->ahli_negeri == 'Pahang') ? 'selected' : '' }}>Pahang</option>
													<option value="Perak" {{ ($keluarga->ahli_negeri == 'Perak') ? 'selected' : '' }}>Perak</option>
													<option value="Perlis" {{ ($keluarga->ahli_negeri == 'Perlis') ? 'selected' : '' }}>Perlis</option>
													<option value="Pulau Pinang" {{ ($keluarga->ahli_negeri == 'Pulau Pinang') ? 'selected' : '' }}>Pulau Pinang</option>
													<option value="Sabah" {{ ($keluarga->ahli_negeri == 'Sabah') ? 'selected' : '' }}>Sabah</option>
													<option value="Sarawak" {{ ($keluarga->ahli_negeri == 'Sarawak') ? 'selected' : '' }}>Sarawak</option>
													<option value="Selangor" {{ ($keluarga->ahli_negeri == 'Selangor') ? 'selected' : '' }}>Selangor</option>
													<option value="Terengganu" {{ ($keluarga->ahli_negeri == 'Terengganu') ? 'selected' : '' }}>Terengganu</option>
													<option value="Kuala Lumpur" {{ ($keluarga->ahli_negeri == 'Kuala Lumpur') ? 'selected' : '' }}>Kuala Lumpur</option>
													<option value="Labuan" {{ ($keluarga->ahli_negeri == 'Labuan') ? 'selected' : '' }}>Labuan</option>
													<option value="Putrajaya" {{ ($keluarga->ahli_negeri == 'Putrajaya') ? 'selected' : '' }}>Putrajaya</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Bandar:</label>
												<input type="text" id="ahli_bandar" class="form-control p_input" name="ahli_bandar[]" maxlength="15" onblur="valid_a_bdr(this)" value='{{ $keluarga->ahli_bandar }}' required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Poskod:</label>
												<input type="text" id="ahli_poskod" class="form-control p_input" name="ahli_poskod[]" size="5" maxlength="5" onblur="valid_a_psk(this)" value='{{ $keluarga->ahli_poskod }}' required>
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
										<input type="text" class="brg" name="barang[]" value='{{ $harta->barang }}' readonly/>
										<input type="number" id="Kasut" class="p_input form-control" name="qty[]" maxlength="2" value='{{ $harta->qty }}'>
									</div><hr>
								</div>
								@endforeach
							</div>
						</div> <!-- First row-->	
						<div class="push"></div>
					</div>
				</div>

				<div class="btnContainer">
					<input type='hidden' name='_method' value='patch'>
					<input type='hidden' name='_token' value='{{ csrf_token() }}'></input>
					<button type="submit" id="update" class="btn btn-primary btn-md right">Kemas Kini</button>
				</div>	
			</div>
		</form>
	</body>

	<footer>
		<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.js') }}"></script>
		<script src="{{ asset('js/moment.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
		<script src="{{ asset('js/edit_validation.js') }}"></script>
		<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
	</footer>
</html>