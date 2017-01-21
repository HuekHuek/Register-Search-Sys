$(document).ready(function() {
	pattern = new RegExp(/[~`!#$%\^&*+=\-\[\]\\';/{}|\\":<>\?]/);
	validation1();
	// validation3();

	$("form").submit(function() {
		if($('.p_input').hasClass('error')) {
			alert('Terdapat input yang salah! Sila periksa.');
			return false;
		}
	})
});

validation1 = function() {
	var p_nama = $('#nama');
	var p_kp = $('#kp');
	var p_umur = $('#umur');
	var p_ala = $('#alamat');
	var p_bdr = $('#bandar');
	var p_psk = $('#poskod');
	var p_ubat = $('#senarai_ubat');
	var p_sej = $('#sejarah');
	var h_kasut = $('#Kasut');
	var h_jam = $('#Jam_Tangan');
	var h_baju = $('#Baju');
	var h_seluar = $('#Seluar');
	var h_lain = $('#lain');
	var s_nama = $('#saksi_nama');
	var s_kp = $('#saksi_kp');
	var s_tel = $('#saksi_tel');

	p_nama.focus();	// Focus on name input
	/*Validation 1*/
	p_nama.blur(function() {
		var nama = p_nama.val();
		if(!nama || pattern.test(nama)) {
			p_nama.addClass('error');
			p_nama.siblings('.err_msg').css('display', 'block');
		} else {
			p_nama.removeClass('error');
			p_nama.addClass('pass');
			p_nama.siblings('.err_msg').css('display', 'none');
		}
	})
	p_kp.blur(function() {
		var kp = p_kp.val();
		if(!kp || pattern.test(kp) || !isNumeric(kp) || kp.length != 12) {
			p_kp.addClass('error');
			p_kp.siblings('.err_msg').css('display', 'block');
		} else {
			p_kp.removeClass('error');
			p_kp.addClass('pass');
			p_kp.siblings('.err_msg').css('display', 'none');
		}
	})
	p_umur.blur(function() {
		var umur = p_umur.val();
		if(!umur || pattern.test(umur) || !isNumeric(umur)) {
			p_umur.addClass('error');
			p_umur.siblings('.err_msg').css('display', 'block');
		} else {
			p_umur.removeClass('error');
			p_umur.addClass('pass');
			p_umur.siblings('.err_msg').css('display', 'none');
		}
	})
	p_ala.blur(function() {
		var ala = p_ala.val();
		if(!ala || pattern.test(ala)) {
			p_ala.addClass('error');
			p_ala.siblings('.err_msg').css('display', 'block');
		} else {
			p_ala.removeClass('error');
			p_ala.addClass('pass');
			p_ala.siblings('.err_msg').css('display', 'none');
		}
	})
	p_bdr.blur(function() {
		var bdr = p_bdr.val();
		if(!bdr || pattern.test(bdr)) {
			p_bdr.addClass('error');
			p_bdr.siblings('.err_msg').css('display', 'block');
		} else {
			p_bdr.removeClass('error');
			p_bdr.addClass('pass');
			p_bdr.siblings('.err_msg').css('display', 'none');
		}
	})
	p_psk.blur(function() {
		var psk = p_psk.val();
		if(!psk || pattern.test(psk) || !isNumeric(psk) || psk.length != 5) {
			p_psk.addClass('error');
			p_psk.siblings('.err_msg').css('display', 'block');
		} else {
			p_psk.removeClass('error');
			p_psk.addClass('pass');
			p_psk.siblings('.err_msg').css('display', 'none');
		}
	})
	p_ubat.blur(function() {
		var ubat = p_ubat.val();
		if(pattern.test(ubat)) {
			p_ubat.addClass('error');
			p_ubat.siblings('.err_msg').css('display', 'block');
		} else {
			p_ubat.removeClass('error');
			p_ubat.addClass('pass');
			p_ubat.siblings('.err_msg').css('display', 'none');
		}
	})
	p_sej.blur(function() {
		var sej = p_sej.val();
		if(!sej || pattern.test(sej)) {
			p_sej.addClass('error');
			p_sej.siblings('.err_msg').css('display', 'block');
		} else {
			p_sej.removeClass('error');
			p_sej.addClass('pass');
			p_sej.siblings('.err_msg').css('display', 'none');
		}
	})

	h_kasut.blur(function() {
		var kasut = h_kasut.val();
		if(!kasut || pattern.test(kasut) || !isNumeric(kasut)) {
			h_kasut.addClass('error');
		} else {
			h_kasut.removeClass('error');
			h_kasut.addClass('pass');
		}
	})
	h_jam.blur(function() {
		var jam = h_jam.val();
		if(!jam || pattern.test(jam) || !isNumeric(jam)) {
			h_jam.addClass('error');
		} else {
			h_jam.removeClass('error');
			h_jam.addClass('pass');
		}
	})
	h_baju.blur(function() {
		var baju = h_baju.val();
		if(!baju || pattern.test(baju) || !isNumeric(baju)) {
			h_baju.addClass('error');
		} else {
			h_baju.removeClass('error');
			h_baju.addClass('pass');
		}
	})
	h_seluar.blur(function() {
		var seluar = h_seluar.val();
		if(!seluar || pattern.test(seluar) || !isNumeric(seluar)) {
			h_seluar.addClass('error');
		} else {
			h_seluar.removeClass('error');
			h_seluar.addClass('pass');
		}
	})
	h_lain.blur(function() {
		var lain = h_lain.val();
		if(!lain || pattern.test(lain) || !isNumeric(lain)) {
			h_lain.addClass('error');
		} else {
			h_lain.removeClass('error');
			h_lain.addClass('pass');
		}
	})
	s_nama.blur(function() {
		var nama = s_nama.val();
		if(!nama || pattern.test(nama)){
			s_nama.addClass('error');
		} else {
			s_nama.removeClass('error');
			s_nama.addClass('pass');
		}
	})
	s_kp.blur(function() {
		var kp = s_kp.val();
		if(!kp || pattern.test(kp) || !isNumeric(kp) || kp.length != 12) {
			s_kp.addClass('error');
		} else {
			s_kp.removeClass('error');
			s_kp.addClass('pass');
		}
	})
	s_tel.blur(function() {
		var tel = s_tel.val();
		if(!tel || pattern.test(tel) || !isNumeric(tel)) {
			s_tel.addClass('error');
		} else {
			s_tel.removeClass('error');
			s_tel.addClass('pass');
		}
	})

	$('.p_input').blur(function() {
		if(!$('.p_input').hasClass('error')) {
			$('.p_input').each(function(i, obj) {
				if(!$(obj).hasClass('pass')) {
					valid = false;
				} else {
					valid = true;
				}
			})
		} else {
			valid = false;
		}
	})
	/*Validation 1*/
}

//Check is Numeric input
isNumeric = function(val) {
	return !isNaN(parseFloat(val)) && isFinite(val);
}

// Blur event for ahli keluarga
valid_a_nama = function(obj) {
	var nama = obj.value;
	if(!nama || pattern.test(nama)) {
		$(obj).addClass('error');
	} else {
		$(obj).removeClass('error');
		$(obj).addClass('pass');
	}
}

valid_a_kp = function(obj) {
	var kp = obj.value;
	if(!kp || pattern.test(kp) || !isNumeric(kp) || kp.length != 12) {
		$(obj).addClass('error');
	} else {
		$(obj).removeClass('error');
		$(obj).addClass('pass');
	}
}

valid_a_umur = function(obj) {
	var umur = obj.value;
	if(!umur || pattern.test(umur) || !isNumeric(umur)) {
		$(obj).addClass('error');
	} else {
		$(obj).removeClass('error');
		$(obj).addClass('pass');
	}
}

valid_a_kerja = function(obj) {
	var kerja = obj.value;
	if(!kerja || pattern.test(kerja)) {
		$(obj).addClass('error');
	} else {
		$(obj).removeClass('error');
		$(obj).addClass('pass');
	}
}

valid_a_tel = function(obj) {
	var tel = obj.value;
	if(!tel || pattern.test(tel) || !isNumeric(tel)) {
		$(obj).addClass('error');
	} else {
		$(obj).removeClass('error');
		$(obj).addClass('pass');
	}
}

valid_a_ala = function(obj) {
	var ala = obj.value;
	if(!ala || pattern.test(ala)) {
		$(obj).addClass('error');
	} else {
		$(obj).removeClass('error');
		$(obj).addClass('pass');
	}
}

valid_a_bdr = function(obj) {
	var bdr = obj.value;
	if(!bdr || pattern.test(bdr)) {
		$(obj).addClass('error');
	} else {
		$(obj).removeClass('error');
		$(obj).addClass('pass');
	}
}

valid_a_psk = function(obj) {
	var psk = obj.value;
	if(!psk || pattern.test(psk) || !isNumeric(psk) || psk.length != 5) {
		$(obj).addClass('error');
	} else {
		$(obj).removeClass('error');
		$(obj).addClass('pass');
	}
}
// Blur event for ahli keluarga

// validation3 = function(){
// 	var pattern = new RegExp(/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
	
// 	$('.h_input').blur(function() {
// 		if(!$('.h_input').hasClass('error')) {
// 			$('.h_input').each(function(i, obj3) {
// 				if(!$(obj3).hasClass('pass')) {
// 					valid3 = false;
// 				} else {
// 					valid3 = true;
// 				}
// 			})
// 		} else {
// 			valid3 = false;
// 		}
// 	})
// }