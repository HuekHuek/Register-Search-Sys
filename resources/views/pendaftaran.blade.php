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
		<form class="form" id="form" role='form' method='post' action='masukData' autocomplete='off'>
			<div class="container formBG fill">
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
				<div class="step">
					<u><h1>Pendaftaran Penghuni</h1></u>
					<div class="panel panel-default">
						<div class="panel-body panel-container-r">
							<u><h2>Maklumat Penghuni</h2></u>
							<div class="form-space">
								<div class="row">
									<div class="col-md-5">	
										<label>Nama:</label>
										<input type="text" id="nama" class="form-control p_input" name="nama" size="30" maxlength="80" required>
										{{-- <span class="text-danger">{{ $errors->first('nama') }}</span> --}}
										<p class="text-danger err_msg">Kosong atau salah format</p>
									</div>
									<div class="col-md-4">
										<label>K/P Nombor:</label>
										<input type="text" id="kp" class="form-control p_input" name="kp" size="20" maxlength="12" required>
										{{-- <span class="text-danger">{{ $errors->first('kp') }}</span> --}}
										<p class="text-danger err_msg">Kosong atau nombor sahaja</p>
									</div>
									<div class="col-md-3">
										<label>Umur:</label>
										<input type="text" id="umur" class="form-control p_input" size="5" name="umur" maxlength="2" required>
										{{-- <span class="text-danger">{{ $errors->first('umur') }}</span> --}}
										<p class="text-danger err_msg">Kosong atau nombor sahaja</p>
									</div>
								</div>
							</div>
							
							<div class="form-space">
								<div class="row">
									<div class="col-md-5">
										<label>Bangsa:</label> 
										<select name="bangsa" id="bangsa" class="form-control" required>
											<option value="" disabled selected hidden>Sila Pilih</option>
											<option value="Melayu">Melayu</option>
											<option value="India">India</option>
											<option value="Cina">Cina</option>
											<option value="Lain-lain">Lain-lain</option>
										</select>
										{{-- <span class="text-danger">{{ $errors->first('bangsa') }}</span> --}}
									</div>
									<div class="col-md-4">
										<label>Agama:</label>
										<select name="agama" id="agama" class="form-control p_input" required>
											<option value="" disabled selected hidden>Sila Pilih</option>
											<option value="Islam">Islam</option>
											<option value="Kristian">Kristian</option>
											<option value="Buddha">Buddha</option>
											<option value="Lain-lain">Lain-lain</option>
										</select>
										{{-- <span class="text-danger">{{ $errors->first('agama') }}</span> --}}
									</div>
									<div class="col-md-3">
										<label>Jantina:</label>
										<select name="jantina" id="jantina" class="form-control" required>
											<option value="" disabled selected hidden>Sila Pilih</option>
											<option value="Lelaki">Lelaki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
										{{-- <span class="text-danger">{{ $errors->first('jantina') }}</span> --}}
									</div>
								</div>
							</div>
							
							<div class="form-space">
								<div class="row">
									<div class="col-md-5">
										<label>Taraf Perkahwinan:</label>
										<select name="taraf_p" id="taraf_p" class="form-control" required>
											<option value="" disabled selected hidden>Sila Pilih</option>
											<option value="Bujang">Bujang</option>
											<option value="Kahwin">Kahwin</option>
											<option value="Cerai">Cerai</option>
										</select>
										{{-- <span class="text-danger">{{ $errors->first('taraf_p') }}</span> --}}
									</div>
									<div class="col-md-7">
										<label>Peringkat Sekolah:</label>
										<select name="sek" id="sek" class="form-control" required>
											<option value="" disabled selected hidden>Sila Pilih</option>
											<option value="Sekolah Rendah">Sekolah Rendah</option>
											<option value="Sekolah Menengah">Sekolah Menengah</option>
											<option value="Pra-Universiti">Pra-Universiti</option>
											<option value="Universiti">Universiti</option>
										</select>
										{{-- <span class="text-danger">{{ $errors->first('sek') }}</span> --}}
									</div>
								</div>
							</div>

							<div class="form-space">
								<label>Alamat:</label>
								<input type="text" id="alamat" class="form-control p_input" name="alamat" required>
								<span class="text-danger err_msg">Kosong atau salah format</span>
								{{-- <span class="text-danger">{{ $errors->first('nama') }}</span>	 --}}
							</div>
							
							<div class="form-space">
								<div class="row">
									<div class="col-md-5">
										<label>Negeri:</label>
										<select name="negeri" id="negeri" class="form-control" required>
											<option value="" disabled selected hidden>Sila Pilih</option>
											<option value="Johor">Johor</option>
											<option value="Kedah">Kedah</option>
											<option value="Kelantan">Kelantan</option>
											<option value="Melaka">Melaka</option>
											<option value="Negeri Sembilan">Negeri Sembilan</option>
											<option value="Pahang">Pahang</option>
											<option value="Perak">Perak</option>
											<option value="Perlis">Perlis</option>
											<option value="Pulau Pinang">Pulau Pinang</option>
											<option value="Sabah">Sabah</option>
											<option value="Sarawak">Sarawak</option>
											<option value="Selangor">Selangor</option>
											<option value="Terengganu">Terengganu</option>
											<option value="Kuala Lumpur">Kuala Lumpur</option>
											<option value="Labuan">Labuan</option>
											<option value="Putrajaya">Putrajaya</option>
										</select>
										<!-- <input type="text" id="negeri" class="form-control p_input" name="negeri"> -->
										{{-- <span class="text-danger">{{ $errors->first('negeri') }}</span> --}}
									</div>
									<div class="col-md-4">
										<label>Bandar:</label>
										<input type="text" id="bandar" class="form-control p_input" name="bandar" size="15" maxlength="20" required>
										<p class="text-danger err_msg">Kosong atau salah format</p>
										{{-- <span class="text-danger">{{ $errors->first('bandar') }}</span> --}}
									</div>
									<div class="col-md-3">
										<label>Poskod:</label>
										<input type="text" id="poskod" class="form-control p_input" name="poskod" size="5" maxlength="5" required>
										<p class="text-danger err_msg">Kosong atau nombor sahaja</p>
										{{-- <span class="text-danger">{{ $errors->first('poskod') }}</span> --}}
									</div>
								</div>
							</div>

							<div class="form-space">
								<div class="row">
									<div class="col-sm-2">
										<label>Penyakit dialami:</label>
									</div>
									<div class="col-sm-3">
										<label>Gangguan Jiwa</label>
										<input type="checkbox" name="penyakit[]" value="gangg_jiwa">
									</div>
									<div class="col-sm-3">
										<label>Darah Tinggi</label>
										<input type="checkbox" name="penyakit[]" value="darah_tinggi">
									</div>
									<div class="col-sm-3">
										<label>Kencing Manis</label>
										<input type="checkbox" name="penyakit[]" value="kencing_manis">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-offset-2 col-sm-3">
										<label>Barah</label>
										<input type="checkbox" name="penyakit[]" value="barah">
									</div>
									<div class="col-sm-3">
										<label>Lain-lain</label>
										<input type="checkbox" name="penyakit[]" value="lain-lain">
									</div>
								</div>
							</div>

							<div class="form-space">
								<label>Senarai Ubatan:</label>
								<input type="text" id="senarai_ubat" class="form-control p_input" name="senarai_ubat">
								<p class="text-danger err_msg">Kosong atau nombor sahaja</p>
							</div>

							<div class="form-space">
								<label>Sejarah Ringkas:</label>
								<textarea row="5" cols="100" id="sejarah" class="form-control p_input" name="sejarah" placeholder="Tulis di sini ..." required></textarea>
								<p class="text-danger err_msg">Kosong atau salah format</p>
							</div>
							{{-- <span class="text-danger">{{ $errors->first('sejarah') }}</span> --}}
						</div>
					</div>
				</div> <!-- Step -->

				<div class="step">
					<u><h1>Pendaftaran Penghuni</h1></u>
					<div id="block">
						<h2><span class="left"><u>Maklumat Ahli Keluarga Penghuni</u></span></h2>
						<div class="right">
							<button type="button" class="btn btn-primary" onclick="addInput()">&#x271A;</button>
							<button type="button" class="btn btn-danger" onclick="removeInput()">&#10006;</button>
						</div>
					</div>
					<table id="ahli_table">
						<tr id="multi_input">
							<td>
								<div class="panel panel-default panel-wizard col-lg-12">
									<div class="panel-container">
										<div class="form-space">
											<div class="row">
												<div class="col-md-4">
													<label>Nama:</label>
													<input type="text" id="ahli_nama" class="form-control a_input" name="ahli_nama[]" size="30" onblur="valid_a_nama(this)" required>
												</div>
												{{-- <span class="text-danger">{{ $errors->first('ahli_nama') }}</span> --}}
												<div class="col-md-4">
													<label>K/P Nombor:</label>
													<input type="text" id="ahli_kp" class="form-control a_input" name="ahli_kp[]" size="20" maxlength="12" onblur="valid_a_kp(this)" required>
												</div>
												{{-- <span class="text-danger">{{ $errors->first('ahli_kp') }}</span> --}}
												<div class="col-md-4">
													<label>Umur:</label>
													<input type="text" id="ahli_umur" class="form-control a_input" name="ahli_umur[]" size="5" maxlength="2" onblur="valid_a_umur(this)" required>
												</div>
												{{-- <span class="text-danger">{{ $errors->first('ahli_umur') }}</span> --}}
											</div>
										</div> <!-- First row-->
									
										<div class="form-space">
											<div class="row">
												<div class="col-md-4">
													<label>Bangsa:</label> 
													<select name="ahli_bangsa[]" class="form-control" required>
														<option value="" disabled selected hidden>Sila Pilih</option>
														<option value="Melayu">Melayu</option>
														<option value="India">India</option>
														<option value="Cina">Cina</option>
														<option value="Lain-lain">Lain-lain</option>
													</select>
												</div>
												{{-- <span class="text-danger">{{ $errors->first('ahli_bangsa') }}</span> --}}
												<div class="col-md-4">
													<label>Agama:</label> 
													<select name="ahli_agama[]" class="form-control" required>
														<option value="" disabled selected hidden>Sila Pilih</option>
														<option value="Islam">Islam</option>
														<option value="Kristian">Kristian</option>
														<option value="Buddha">Buddha</option>
														<option value="Lain-lain">Lain-lain</option>
													</select>
												</div>
												{{-- <span class="text-danger">{{ $errors->first('ahli_agama') }}</span> --}}
												<div class="col-md-4">
													<label>Jantina: </label>
													<select name="ahli_jantina[]" class="form-control" required>
														<option value="" disabled selected hidden>Sila Pilih</option>
														<option value="Lelaki">Lelaki</option>
														<option value="Perempuan">Perempuan</option>
													</select>
												</div>
												{{-- <span class="text-danger">{{ $errors->first('ahli_jantina') }}</span> --}}
											</div>
										</div> <!-- Second row -->

										<div class="form-space">
											<div class="row">
												<div class="col-md-4">
													<label>Hubungan:</label>
													<select id="ahli_hubungan" name="ahli_hubungan[]" class="form-control" required>
														<option value="" disabled selected hidden>Sila Pilih</option>
														<option value="Pasangan">Pasangan</option>
														<option value="Anak">Anak</option>
													</select>
													{{-- <span class="text-danger">{{ $errors->first('ahli_hubungan') }}</span> --}}
												</div>
												<div class="col-md-4">
													<label>Pekerjaan:</label>
													<input type="text" id="ahli_pekerjaan" class="form-control a_input" name="ahli_pekerjaan[]" maxlength="20" onblur="valid_a_kerja(this)" required>
													{{-- <span class="text-danger">{{ $errors->first('ahli_pekerjaan') }}</span> --}}
												</div>
												<div class="col-md-4">
													<label>Tel Nombor:</label>
													<input type="text" id="ahli_tel" class="form-control a_input" name="ahli_tel_nom[]" maxlength="12" onblur="valid_a_tel(this)" required>	
													{{-- <span class="text-danger">{{ $errors->first('ahli_tel_nom') }}</span>	 --}}
												</div>
											</div>
										</div>	<!-- Second Ops row -->

										<div class="form-space">
											<label>Alamat:</label>
											<input type="text" id="ahli_alamat" class="form-control a_input" name="ahli_alamat[]" maxlength="50" onblur="valid_a_ala(this)" required>
											{{-- <span class="text-danger">{{ $errors->first('ahli_alamat') }}</span> --}}
										</div> <!-- Third row -->

										<div class="form-space">
											<div class="row">
												<div class="col-md-6">
													<label>Negeri:</label>
													<select name="ahli_negeri[]" id="ahli_negeri" class="form-control" required>
														<option value="" disabled selected hidden>Sila Pilih</option>
														<option value="Johor">Johor</option>
														<option value="Kedah">Kedah</option>
														<option value="Kelantan">Kelantan</option>
														<option value="Melaka">Melaka</option>
														<option value="Negeri Sembilan">Negeri Sembilan</option>
														<option value="Pahang">Pahang</option>
														<option value="Perak">Perak</option>
														<option value="Perlis">Perlis</option>
														<option value="Pulau Pinang">Pulau Pinang</option>
														<option value="Sabah">Sabah</option>
														<option value="Sarawak">Sarawak</option>
														<option value="Selangor">Selangor</option>
														<option value="Terengganu">Terengganu</option>
														<option value="Kuala Lumpur">Kuala Lumpur</option>
														<option value="Labuan">Labuan</option>
														<option value="Putrajaya">Putrajaya</option>
													</select>
													<!-- <input type="text" id="ahli_negeri" class="form-control a_input" name="ahli_negeri[]" maxlength="20" onblur="valid_a_ngr(this)"> -->
													{{-- <span class="text-danger">{{ $errors->first('ahli_negeri') }}</span> --}}
												</div>
												<div class="col-md-6">
													<label>Bandar:</label> 
													<input type="text" id="ahli_bandar" class="form-control a_input" name="ahli_bandar[]" maxlength="15" onblur="valid_a_bdr(this)" required>
													{{-- <span class="text-danger">{{ $errors->first('ahli_bandar') }}</span> --}}
												</div>
												<div class="col-md-6">
													<div class="form-space">
														<label>Poskod:</label>
														<input type="text" id="ahli_poskod" class="form-control a_input" name="ahli_poskod[]" size="5" maxlength="5" onblur="valid_a_psk(this)" required>
													</div>
													{{-- <span class="text-danger">{{ $errors->first('ahli_poskod') }}</span> --}}
												</div>
											</div>
										</div> <!-- Fourth row -->
									</div>
								</div>
							</td>
						</tr>
					</table>
					<div class="push"></div>
				</div> <!-- Step -->

				<div class="step">
					<div class="word-right-btm">
						<u><h1>Maklumat Harta Penghuni</h1></u>
					</div>
					<div class="panel panel-default">
						<div class="panel-body panel-container-r">
							<u><h1>Barangan</h1></u>
							<div class="form-inline form-space">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="brg" name="barang[]" value="Kasut" readonly/>
									<input type="number" id="Kasut" class="h_input form-control" name="qty[]" maxlength="2">
								</div>
								{{-- <span class="text-danger">{{ $errors->first('qty') }}</span> --}}
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="brg" name="barang[]" value="Jam Tangan" readonly/>
									<input type="number" id="Jam_Tangan" class="h_input form-control" name="qty[]" maxlength="2">
								</div>
								{{-- <span class="text-danger">{{ $errors->first('qty') }}/</span> --}}
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="brg" name="barang[]" value="Baju" readonly/>
									<input type="number" id="Baju" class="h_input form-control" name="qty[]" maxlength="2">
								</div>
								{{-- <span class="text-danger">{{ $errors->first('qty') }}</span> --}}
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="brg" name="barang[]" value="Seluar" readonly/>
									<input type="number" id="Seluar" class="h_input form-control" name="qty[]" maxlength="2">
								</div>
								{{-- <span class="text-danger">{{ $errors->first('qty') }}</span> --}}
							</div>
						</div>
							</div> <!-- First row-->	
							<div class="form-inline form-space">
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" class="brg" name="barang[]" value="Lain-lain" readonly/>
											<input type="number" id="lain" class="form-control h_input" name="qty[]" maxlength="2">
										</div>
										{{-- <span class="text-danger">{{ $errors->first('qty') }}</span> --}}
									</div>
								</div> <!-- Third row -->
							</div>
						</div>
					</div>
					<hr>
					<div class="panel panel-default">
						<div class="panel-body panel-container-r">
							<u><h2>Saksi</h2></u>
							<div class="form-horizontal form-space">
								<div class="form-group">
									<label class="control-label-edit col-sm-1">Nama:</label>
									<div class="col-sm-10">
										<input type="text" id="saksi_nama" class="form-control h_input" name="saksi_nama" required>
									</div>
								</div>
								{{-- <span class="text-danger">{{ $errors->first('saksi_nama') }}</span> --}}
								<div class="form-group">
									<label class="control-label-edit col-sm-1">K/P Saksi:</label>
									<div class="col-sm-10">
										<input type="text" id="saksi_kp" class="form-control h_input" name="saksi_kp" maxlength="12" required>
									</div>
								</div>
								{{-- <span class="text-danger">{{ $errors->first('saksi_kp') }}</span> --}}
								<div class="form-group">
									<label class="control-label-edit col-sm-1">Saksi Tel:</label>
									<div class="col-sm-10">
										<input type="text" id="saksi_tel" class="form-control h_input" name="saksi_tel" maxlength="12" required>
									</div>
								</div>
								{{-- <span class="text-danger">{{ $errors->first('saksi_tel') }}</span> --}}
							</div> <!-- Fifth row -->
						</div>
					</div>
					<div class="push"></div>
				</div> <!-- Step -->

				<div class="step">
					<div class="word-clear-top">
						<h2>Kepada Semua ahli Keluarga,</h2>
						<h2>Tuan/Puan,</h2>
						<h2><label><u>SYARAT PERJANJIAN AHLI KELUARGA KEPADA PENGHUNI YANG TINGGAL DI PUSAT JAGAAN WARGA EMAS NUR EHSAN</u></label></h2>
						<h3>Dengan segala hormatnya perkara diatas adalah berkaitan.</h3>
					</div>
					<div class="agreement_box">
							<label><p>Dengan ini Pihak Pengurusan menetapkan bahawa penghuni hanya boleh tinggal selama 6 bulan saja sebagai pemulihan dan mengeratkan siratulrahim. Sekiranya masih memerlukan penjagaan lebih 6 bulan, ahli keluarga perlu ditemuramah semula sebab-sebab penghuni perlu menyambung tinggal lama di Nur Ehsan.</p></label>
					</div>
					<div class="word">
						<h3>Dengan ini saya <label class="agree_ahli_nama"></label> K/P <label class="agree_ahli_kp"></label> Hubungan dengan penghuni <label class="agree_ahli_hubungan"></label> bersetuju/tidak bersetuju dengan Kenyataan dan makluman di atas.</h3>
					</div>
					<div class="word-left-right">
						<p><input type="checkbox" name="setuju" id="setuju"> Saya setuju dengan Kenyataan dan makluman di atas.</p>
					</div>
					<div class="push"></div>
				</div><!-- Step -->

				<div class="step">
					<div class="word-clear-top">
						<h1><u>KRITERIA-KRITERIA SASARAN</u></h1>
						<h2>&#10003;<u> SASARAN PENGHUNI MENGIKUT KESESUAIAN 100 ORANG</u></h2>
					</div>
					<div class="agreement_box">
						<label>
							<p>1. Terdiri dari wargaemas dan golongan mereka yang terbiar, stabil berumur dari 18 tahun keatas dan tidak mempunyai tempat tinggal yang tetap dan tidak mempunyai keluarga.</p>
							<p>2. Sekiranya penghuni berkeluarga menempatkan ahli keluarga dikenakan bayaran bagi membiayai perbelanjaan penghuni dan sebahai satu jariah untuk penghuni-penghuni yang tiada berkeluarga.</p>
							<p>3. Setiap Penghuni bebas dari najis dadah dan perkara-perkara yang ditegah oleh agama dan Undang-undang.</p>
							<p>4. Bagi Warga emas yang stabil dan boleh berdikari.</p>
							<p>5. Penghuni hanya boleh tinggal sebgai pemulihan selama 6 bulan sahaja, jangkaan yang lebih 6 bulan perlu di pertimbangkan semula.</p>
							<p>6. Boleh berdikari dan sekiranya mereka dibawah rawatan ubatan, boleh mengambil ubat sendiri dan bebas untuk bergerak sendiri pergi rawatan susulan di hospital.</p>
							<p>7. Ahli keluarga digalakkan mengambil penghuni balik bercuti dihari-hari perayaan atau datang ke program-program yang diadakan oleh Pusat Jagaan.</p>
							<p>8. Ahli keluarga diwajibkan mengambil penghuni sekiranya berlaku sakit yang nazak dan meninggal.</p>
							<p>9. Penghuni stabil akan dilatih membuat aktiviti-aktiviti pemulihan mengikut kemampuan untuk mereka lebih berdikari.</p>
						</label>
					</div>
					<div class="word">
						<u><h2>SURAT PERJANJIAN PERSETUJUAN KEMASUKAN PENGHUNI</h2></u>
					</div>
					<div class="word">
						<h3>Saya bernama <label class="agree_ahli_nama"></label> K/P <label class="agree_ahli_kp"></label> bersetuju Dengan perjanjian kemasukan diatas dan memahaminya.</h3>
					</div>
					<div class="word-left-right">
						<p><input type="checkbox" name="setuju" id="setuju2"> Saya setuju dengan Kenyataan dan makluman di atas.</p>
					</div> 
				</div> <!-- Step -->

				<div class="step">
					<div class="word-clear-top">
						<u><h2>PER: MAKLUMAN AHLI KELUARGA KEPADA PENGHUNI YANG TINGGAL DI PUSAT JAGAAN WARGA EMAS NUR EHSAN</h2></u>
						<h3>Dengan segala hormatnya perkara diatas adalah berkaitan.</h3>
					</div>
					<div class="agreement_box">
						<label>
							<p>1. Pusat Jagaan ini ditubuhkan untuk memberi perlindungan tempat tinggal kepada warga emas dan sesiapa yang memerlukan, sama ada menumpang sementara atau menetap terus di Pusat ini. Walaupun begitu, bayaran akan dikenakan kepada mereka yang masih ada keluarga, atau ada saudara atau jiran atau penghuni sendiri yang mampu.</p>
							<p>2. Di maklumkan sekira keluarga mohon keluar sebelum sebulan, deposit dan yuran yang dibuat tidak dikembalikan dan dikira sebagai sumbangan penghuni di Nur Ehsan keluarga serta merta.</p>
						</label>
					</div>
					<div class="word">
						<h4>Kerjasama tuan/puan amat dialu-alukan, sekiranya ada apa-apa pertanyaan, sila berjumpa dengan ahli jawatankuasa Pusat Jagaan En Abdullah Ibrahim 07-2326415 / 016-7351910 .</h4>
					</div>
					<div class="word">
						<h3>Dengan ini saya bernama <label class="agree_ahli_nama"></label> K/P <label class="agree_ahli_kp"></label>. Hubungan dengan penghuni <label class="agree_ahli_hubungan"></label> bersetuju/tidak bersetuju dengan kenyataan dan makluman di atas.</h3>
					</div>
					<div class="word-left-right">
						<p><input type="checkbox" name="setuju" id="setuju3"> Saya setuju dengan Kenyataan dan makluman di atas.</p>
					</div>
					<div class="push"></div>
				</div> <!-- Step -->

				<div class="step">
					<div class="word-clear-top">
						<h2><label><u>BORANG TUNTUAN JENAZAH</u></label></h2>
					</div>
					<div class="word">
						<h3>Dimaklumkan bahawa ahli keluarga di minta bawa balik jenazah untuk menguruskan sendiri.</h3>
					</div>
					<div class="word">
						<h4>Dengan ini saya : <label class="agree_ahli_nama"></label></h4>
						<h4>Kad Pengenalan : <label class="agree_ahli_kp"></label></h4>
					</div>
					<div class="agreement_box">
						<label>
							<p>Bersetuju/Tidak bersetuju sekiranya berlaku kematian akan mengambil balik ahli keluarga saya untuk menguruskan jenazah.</p>
							<p>&#10035; Sekiranya ahli keluarga ingin Pusat Jagaan menguruskan pengembumian jenazah, bayaran akan dikenakan sekurang-kurangnya RM1500 (ringgit Malaysia Satu Ribu dan Lima Ratus sahaja). Tertakluk kepada caj yang dikenakan oleh ahli pengurusan jenazah.</p>
						</label>
					</div>
					<div class="word">
						<p><input type="checkbox" name="setuju" id="setuju4"> Saya setuju dengan Kenyataan dan makluman di atas.</p>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="push"></div>
				</div> <!-- Step -->
			</div> <!-- Container -->
			<!--Footer MultiForm Control Start-->
			<div class="container formBG stick_btm">
				<div class="btnContainer">
					<button type="button" class="action btn btn-primary btn-md left bck">Balik</button>
					<button type="button" class="action btn btn-primary btn-md right next">Sebelah</button>
					<button type="submit" name="submit" class="action btn btn-primary btn-md right submit">Hantar</button>
				</div>
				<div class="progress prog_border">
					<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
				</div>	
			</div>
			<!-- Footer MultiForm Control End-->
		</form> <!-- form -->
	</body>

	<footer>
		<script src="{{ asset('js/bootstrap.js') }}"></script>
		<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
		<script src="{{ asset('js/multiform.js') }}"></script>
	</footer>
</html>