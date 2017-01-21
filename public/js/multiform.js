$(document).ready(function() {
	var current = 1;
	var agree_box = $("#setuju");
	var agree_box2 = $("#setuju2");
	var agree_box3 = $("#setuju3");
	var agree_box4 = $("#setuju4");
	table_frame = document.getElementById("ahli_table");
	pattern = new RegExp(/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
	valid2 = false;
	valid3 = false;
	agree2 = false;
	agree3 = false;
	agree4 = false;
	widget = $(".step");
	nextBtn = $(".next");
	backBtn = $(".bck");
	btnSubmit = $(".submit");
	
	widget.not(':eq(0)').hide();								// Initializing the first page of form
	hideButtons(current);
	setProgress(current);
	validation1();

	nextBtn.click(function() {
		if(current < widget.length) {
			if(valid && current == 1) {							// Check all information correct
				showPage(current);
				validation2();
				current++;
			}
			else if(valid2 && current == 2) {
				showPage(current);									// 2 then 3
				validation3();
				current++;
			}
			else if(current == 3 && valid3) {
				showLabel();
				showPage(current);
				if(agree_box.is(":checked")) {
					nextBtn.removeAttr('disabled');
					agree2 = true;
				} else if(agree_box.is(":not(:checked)")) {
					nextBtn.attr('disabled', 'disabled');
					agree2 = false;
				}
				current++;
			}
			else if(agree2 && current == 4) {
				showLabel();
				showPage(current);
				if(agree_box2.is(":checked")) {
					nextBtn.removeAttr('disabled');
					agree3 = true;
				} else if(agree_box2.is(":not(:checked)")) {
					nextBtn.attr('disabled', 'disabled');
					agree3 = false;
				}
				current++;
			}
			else if(agree3 && current == 5) {
				showLabel();
				showPage(current);
				if(agree_box3.is(":checked")) {
					nextBtn.removeAttr('disabled');
					agree4 = true;
				} else if(agree_box3.is(":not(:checked)")) {
					nextBtn.attr('disabled', 'disabled');
					agree4 = false;
				}
				current++;
			}
			else if(agree4 && current == 6) {
				showLabel();
				showPage(current);
				if(agree_box4.is(":checked")) {
					btnSubmit.removeAttr('disabled');						
				} else if(agree_box4.is(":not(:checked)")) {
					btnSubmit.attr('disabled', 'disabled');
				}
				current++;
			}
		}
		hideButtons(current);
	})

	backBtn.click(function() {
		if(current > 1){
			current = current - 2;
			if(current < widget.length) {
				widget.show();
				widget.not(':eq('+(current++)+')').hide();
				setProgress(current);
			}

			if(current <= 3) {
				nextBtn.removeAttr('disabled');
			}
			else if(current == 4) {
				if(agree_box.is(":checked")) {
					nextBtn.removeAttr('disabled');
					agree3 = true;
				} else if(agree_box.is(":not(:checked)")) {
					nextBtn.attr('disabled', 'disabled');
					agree3 = false;
				}
			}
			else if(current == 5) {
				if(agree_box2.is(":checked")) {
					nextBtn.removeAttr('disabled');
					agree4 = true;
				} else if(agree_box2.is(":not(:checked)")) {
					nextBtn.attr('disabled', 'disabled');
					agree4 = false;
				}
			}
			else if(current == 6) {
				if(agree_box3.is(":checked")) {
					nextBtn.removeAttr('disabled');
					agree4 = true;
				} else if(agree_box3.is(":not(:checked)")) {
					nextBtn.attr('disabled', 'disabled');
					agree4 = false;
				}
			}
		}
		hideButtons(current);
	})

	// Agree Box //
	agree_box.click(function() {
		if(agree_box.is(":not(:checked)")) {
			nextBtn.attr('disabled', 'disabled');
			agree2 = false;
		} else if(agree_box.is(':checked')){
			nextBtn.removeAttr('disabled');
			agree2 = true;
		}
	});
	agree_box2.click(function() {
		if(agree_box2.is(':checked')) {
			nextBtn.removeAttr('disabled');
			agree3 = true;
		} else if(agree_box2.is(":not(:checked)")) {
			nextBtn.attr('disabled', 'disabled');
			agree3 = true;
		}
	});
	agree_box3.click(function() {
		if(agree_box3.is(':checked')) {
			nextBtn.removeAttr('disabled');
			agree4 = true;
		} else if(agree_box3.is(":not(:checked)")) {
			nextBtn.attr('disabled', 'disabled');
			agree4 = false;
		}
	});
	agree_box4.click(function() {
		if(agree_box4.is(':checked')) {
			btnSubmit.removeAttr('disabled');
		} else if(agree_box4.is(":not(:checked)")) {
			btnSubmit.attr('disabled', 'disabled');
		}
	});
	// Agree Box //
	$(window).keydown(function(event) {					//Remove enter key function
		if(event.keyCode == 13){
			event.preventDefault();
			return false;
		}
	});
});

addInput = function() {
	var row_count = table_frame.rows.length;
	if(row_count < 3) {
		var row = table_frame.insertRow(0);
	    var cell1 = row.insertCell(0);
	    var add_table = document.getElementById("multi_input").innerHTML;
	    cell1.innerHTML = add_table;
	} else {
		alert('Maksimum Ahli Keluarga adalah 3.');	
	}
}

removeInput = function() {
	var row_count = table_frame.rows.length;
	if(row_count > 1) {
	    table_frame.deleteRow(0);
	} else {
		alert('Fungsi tidak boleh dijalankan.');	
	}
}

setProgress = function(currstep){
	var percent = parseFloat(100 / widget.length) * currstep;
	percent = percent.toFixed();
	$(".progress-bar").css("width",percent+"%").html(percent+"%");
}

hideButtons = function(currstep) {
	var limit = parseInt(widget.length);

	$(".action").hide();

	if(currstep < limit) nextBtn.show();
	if(currstep > 1) backBtn.show();
	if(currstep == limit) {
		nextBtn.hide();
		btnSubmit.show();
	}
}

showLabel = function() {
	$('.agree_ahli_nama').text($('#ahli_nama').val());
	$('.agree_ahli_kp').text($('#ahli_kp').val());
	$('.agree_ahli_hubungan').text($('#ahli_hubungan').val());
}

showPage = function(curr) {
	widget.show();
	widget.not(':eq('+(curr++)+')').hide();
	setProgress(curr);
}

validation1 = function() {
	var pattern = new RegExp(/[~`!#$%\^&*+=\-\[\]\\';/{}|\\":<>\?]/);
	var p_nama = $('#nama');
	var p_kp = $('#kp');
	var p_umur = $('#umur');
	var p_ala = $('#alamat');
	var p_bdr = $('#bandar');
	var p_psk = $('#poskod');
	var p_ubat = $('#senarai_ubat');
	var p_sej = $('#sejarah');

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

validation2 = function() {
	/*Validation 2*/
	$('.a_input').blur(function() {
		if(!$('.a_input').hasClass('error')) {
			$('.a_input').each(function(i, obj) {
				if(!$(obj).hasClass('pass')) {
					valid2 = false;
				} else {
					valid2 = true;
				}
			})
		} else {
			valid2 = false;
		}
	})
	/*Validation 2*/
}

validation3 = function(){
	var pattern = new RegExp(/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
	var h_kasut = $('#Kasut');
	var h_jam = $('#Jam_Tangan');
	var h_baju = $('#Baju');
	var h_seluar = $('#Seluar');
	var h_lain = $('#lain');
	var s_nama = $('#saksi_nama');
	var s_kp = $('#saksi_kp');
	var s_tel = $('#saksi_tel');

	h_kasut.focus();	
	
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
	$('.h_input').blur(function() {
		if(!$('.h_input').hasClass('error')) {
			$('.h_input').each(function(i, obj3) {
				if(!$(obj3).hasClass('pass')) {
					valid3 = false;
				} else {
					valid3 = true;
				}
			})
		} else {
			valid3 = false;
		}
	})
}