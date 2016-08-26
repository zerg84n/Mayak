var t = 10000, o = 0, prft = 'xls', prot = 'fiz', cur_pic = '';
$(window).on('load resize',windowSize);
$(window).on('load resize',vkg);
$(document).ready(function() {
	var loc = document.location.href.split("/");
	if(loc[3] == 'catalogue') {
		if($.trim(loc[4]) == '') {
		    $('.indexcatselect .sel-select h5').text($('.indexcatselect .sel-option ul li h4').eq(6).attr('data-txt'));
		} else {
		    $('.indexcatselect .sel-option ul li h4').each(function(i) {
			    if($(this).attr('data-item') == loc[4]) $('.indexcatselect .sel-select h5').text($(this).attr('data-txt'));
			});
		}
	};
	$('.changelang a').each(function(i) {
	    if($(this).attr('data-lang') == $('#currentlang').val()) $(this).addClass('active');
	});
	if(loc[3] == 'articles' && loc[4] != 'article') {
	    if(typeof(loc[5]) !== "undefined") {
	        g = loc[5].split('=');
		    g2 = g[1].split('&');
		    if(decodeURI(loc[5]).charAt(decodeURI(loc[5]).length - 2) == '=') {
		    	$('.alphabet-sort div a').each(function(i) {
	                if($(this).text().toLowerCase() == decodeURI(loc[5]).charAt(decodeURI(loc[5]).length - 1).toLowerCase() && $(this).parent().attr('data-item') == g2[0]) $(this).addClass('active');
	            });
		    };
		};
	};
	if(loc[3] == 'articles') {
	    $('.alphabet-sort div a').click(function() {
	        ($(this).text().toLowerCase() == 'all' || $(this).text().toLowerCase() == 'все') ? url = '/articles/1/?cat=' + $(this).parent().attr('data-item').toLowerCase() : url = '/articles/1/?cat=' + $(this).parent().attr('data-item').toLowerCase() + '&symbol=' + $(this).text().toLowerCase();
	    	document.location.href = url;
	    	return false;
	    });
	};
	$('.other-pic .oth-pic-wrapper .oth-pic').click(function() {
	    var now = new Date();
		$('.other-pic .oth-pic-wrapper .oth-pic').removeClass('active');
		$(this).addClass('active');
	    $('.top-pic img',$(this).parent().parent().parent()).attr('src',$('img',$(this)).attr('data-original') + '?' + now.getMilliseconds());
	});
    $('.indexcatselect .sel-select').click(function() {
	    $('.sel-option',$(this).parent().parent()).slideUp(250);
		$('.sel-option',$(this).parent()).css('display') == 'none' ? $('.sel-option',$(this).parent()).slideDown(250) : $('.sel-option',$(this).parent()).slideUp(250);
	});
	$('.indexcatselect .sel-option ul li h4').click(function() {
	    $('.sel-select h5',$(this).parent().parent().parent().parent()).html($(this).attr('data-txt'));
	    $('.sel-option',$(this).parent().parent().parent().parent()).slideUp(250);
		($(this).attr('data-item') == 'all') ? link = '/catalogue/' : link = '/catalogue/' + $(this).attr('data-item') + '/';
		setTimeout(function() {document.location.href = link},250);
	});
    $('.rostovka .sel-select').click(function() {
	    $('.sel-option',$(this).parent().parent()).slideUp(250);
		$('.sel-option',$(this).parent()).css('display') == 'none' ? $('.sel-option',$(this).parent()).slideDown(250) : $('.sel-option',$(this).parent()).slideUp(250);
	});
	$('.rostovka .sel-option ul li h4').click(function() {
	    $('.sel-select h5',$(this).parent().parent().parent().parent()).html($(this).attr('data-txt'));
		$('#goodwidth').html($(this).attr('data-width'));
		$('#goodinfo').attr('data-rostovka',$(this).attr('data-rostovka')).attr('data-rostid',$(this).attr('data-rostid')).attr('data-width',$(this).attr('data-width')).attr('data-price',$(this).attr('data-price'));
		$('#goodprice').html(parseInt($('#goodinfo').attr('data-price'),10)*parseInt($('#goodinfo').attr('data-cnt'),10));
	    $('.sel-option',$(this).parent().parent().parent().parent()).slideUp(250);
	});
    $('.tcompany .sel-select').click(function() {
	    $('.sel-option',$(this).parent().parent()).slideUp(250);
		$('.sel-option',$(this).parent()).css('display') == 'none' ? $('.sel-option',$(this).parent()).slideDown(250) : $('.sel-option',$(this).parent()).slideUp(250);
	});
	$('.tcompany .sel-option ul li h4').click(function() {
	    $('.sel-select h5',$(this).parent().parent().parent().parent()).html($(this).text());
	    $('.sel-option',$(this).parent().parent().parent().parent()).slideUp(250);
		$('#tcc').val($(this).text());
	});
	$('#cntup').click(function() {
	    $('#goodinfo').attr('data-cnt',+$('#goodinfo').attr('data-cnt')+1);
		$('#gcnt').val($('#goodinfo').attr('data-cnt') + ' ' + $('#gcnt').attr('data-txt'));
		$('#goodprice').html(parseInt($('#goodinfo').attr('data-price'),10)*parseInt($('#goodinfo').attr('data-cnt'),10));
		return false;
	});
	$('#cntdown').click(function() {
	    if(+$('#goodinfo').attr('data-cnt') > 1) {
	        $('#goodinfo').attr('data-cnt',+$('#goodinfo').attr('data-cnt')-1);
		    $('#gcnt').val($('#goodinfo').attr('data-cnt') + ' ' + $('#gcnt').attr('data-txt'));
			$('#goodprice').html(parseInt($('#goodinfo').attr('data-price'),10)*parseInt($('#goodinfo').attr('data-cnt'),10));
		};
		return false;
	});
	$('#cubevol, #squarearea').change(function() {
	    $('#goodinfo').attr('data-price',parseInt($(this).attr('data-price'),10)*parseInt($(this).val(),10));
		$('#goodprice').html(parseInt($('#goodinfo').attr('data-price'),10)*parseInt($('#goodinfo').attr('data-cnt'),10));
	});
	if($('.ya-share2').length > 0) $('.ya-share2 .ya-share2__badge').css('height', '18px');
	$('.goodssmallblock h2, .goodssmallblock img').click(function() {document.location.href = $(this).parent().attr('data-item');});
    $('.npp-app-select .sel-select').click(function() {
	    $('.sel-option',$(this).parent().parent()).slideUp(250);
		$('.sel-option',$(this).parent()).css('display') == 'none' ? $('.sel-option',$(this).parent()).slideDown(250) : $('.sel-option',$(this).parent()).slideUp(250);
	});
	$('.npp-app-select .sel-option ul li h4').click(function() {
	    $('.sel-select h5',$(this).parent().parent().parent().parent()).html($(this).text());
	    $('.sel-option',$(this).parent().parent().parent().parent()).slideUp(250);
	    $.ajax({
		    type: 'POST',
			url: '/nppappchange/',
			data: 'npp=' + $(this).text(),
			success: function(data) {if(data == 'success') document.location.href = '/' + loc[3] + '/';}
		});
	});
	$('.changelang a').click(function() {
	    $.ajax({
		    type: 'POST',
			url: '/changelang/',
			data: 'lang=' + $(this).attr('data-lang'),
			success: function(data) {if(data == 'success') document.location.href = document.location.href;}
		});
		return false;
	});
	if(typeof($('.carousel-indicators')) !== "undefined") {setTimeout(function() {sliderAuto();},window.t);};
	if(typeof($('#modal-pool2')) !== "undefined") {$('#modal-pool2 .container .modal-poolcontent .w-body .other-ask h3').eq(window.o).css('display', 'none');};
	$('#fizprice').submit(function(event) {
	    event.preventDefault();
		$('.price-list a').each(function(i) {if($(this).attr('OnClick') == "price_type('" + window.prft + "');") $(this).click();});
		window.open('/getprice/' + window.prot + '/' + window.prft + '/','_blank');
		return false;
	});
	$('#optprice').submit(function(event) {
	    event.preventDefault();
		$('.price-list a').each(function(i) {if($(this).attr('OnClick') == "price_type('" + window.prft + "');") $(this).click();});
		window.open('/getprice/' + window.prot + '/' + window.prft + '/?fio=' + $('input[name=fio]',$(this)).val() + '&email=' + $('input[name=email]',$(this)).val(),'_blank');
		return false;
	});
	if(loc[4] == 'goods_cat2') {
	    $('#addtocartbutton').css('background-color', '#888fcc').prop('disabled',true);
		$('#gsize').keyup(function() {$.trim($(this).val()).length > 3 ? $('#addtocartbutton').css('background-color', '#555c99').prop('disabled',false) : $('#addtocartbutton').css('background-color', '#888fcc').prop('disabled',true);});
	};
	$('#addtocatform').submit(function(event) {
	    event.preventDefault();
		var params = {
		    id: +$('#goodid').val(),
            cat: loc[4],
            summ: +$('#goodprice').text(),
            cnt: +$('#gcnt').val().replace(/[^0-9]/gim, ''),
			price: 0,
			add: ''
        };
        params.price = params.summ/params.cnt;
		switch(params.cat) {
		    case('goods_cat1'):
			    params.add = $('#goodinfo').attr('data-rostid');
			    break;
		    case('goods_cat2'):
				params.add = $('#gsize').val();
			    break;
		    case('goods_cat3'):
			    params.add = $('#cubevol').val();
			    break;
		    case('goods_cat4'):
			    params.add = $('#squarearea').val();
			    break;
		    case('goods_cat5'):
			    break;
		    case('goods_cat6'):
			    break;
		}
		$.ajax({
		    type: 'POST',
			url: '/addtocart/',
			data: 'good=' + JSON.stringify(params),
			success: function(data) {
			    $('#added').css({'display': 'block', 'opacity': 1.0});
				$('#added').animate({'margin-top': '-128px', 'opacity': 0.0},1000);
				setTimeout(function() {$('#added').css({'margin-top': '-40px', 'display': 'none'});},1100);
			    $('#cartlink').css('opacity', 0.0);
			    $('#cartsumm').text(data);
				$('#cartlink').animate({'opacity' : 1.0},250);
			}
		});
	});
	$('.cartdelete').click(function() {
		var cartgood = $(this).attr('data-id');
		$.ajax({
		    type: 'POST',
			url: '/delfromcart/',
			data: 'cartgood=' + cartgood,
			success: function(data) {
			    $('#cartgood-' + cartgood).animate({'opacity': 0.0},250);
				setTimeout(function() {document.location.href = document.location.href;},250);
			}
		});
		return false;
	});
	$('#contactsform').submit(function(event) {
	    event.preventDefault();
		var params = $(this).serializeArray();
		$.ajax({
		    type: 'POST',
			url: '/contactsform/',
			data: params,
			success: function(data) {
			    if($.trim(data) == 'error') {
				    grecaptcha.reset();
					$('#added').css('color', '#AA0000').val($('#added').attr('data-error'));
				} else {
				    $('#added').css('color', '#00AA00').val($('#added').attr('data-success'));
					setTimeout(function() {document.location.href = document.location.href;},1500);
				}
			    $('#added').css({'display': 'block', 'opacity': 1.0});
				$('#added').animate({'margin-top': '-128px', 'opacity': 0.0},1000);
				setTimeout(function() {$('#added').css({'margin-top': '-40px', 'display': 'none'});},1100);
			}
		});
	});
});

function add_order_details() {
    var lg = $('.modal input[name=lang]').val();
    $('.modal:not(.nowhitebg) input').each(function(i) {
	    var v = '';
		if($(this).attr('name') == 'samovivoz') {
		    $(this).prop('checked') ? (lg == 'Русский' ? v = 'Самовывоз' : v = 'Pickup') : (lg == 'Русский' ? v = 'Транспортная компания' : v = 'Transport company');
		} else if($(this).attr('name') == 'transport' || $(this).attr('name') == 'address') {
		    $('.modal input[name=samovivoz]').prop('checked') ? v = '-' : v = $.trim($(this).val());
		} else {
		    $.trim($(this).val()) != '' ? v = $.trim($(this).val()) : v = '-';
		}
		if(typeof($('#details_' + $(this).attr('name'))) !== "undefined") $('#details_' + $(this).attr('name') + ' h3').eq(1).text(v);
	});
    return false;
}

function sendit(fm) {
    var params = [], ok = true, sv = false, m = false;
    $('.' + fm + ' input[type=text], .' + fm + ' input[type=checkbox]:checked, .' + fm + ' input[type=radio]:checked, .' + fm + ' input[type=hidden]').each(function(i) {
	    if(($(this).attr('name') != 'transport' && $(this).attr('name') != 'address') && $.trim($(this).val()) == '') ok = false;
	    params.push($.parseJSON('{"name":"' + $(this).attr('name') + '", "value":"' + $.trim($(this).val()) + '"}'));
	});
	for(i = 0; i < params.length; i++) {
	    if(params[i].name == 'money') {
		    m = true;
			break;
		};
	}
	for(i = 0; i < params.length; i++) {
	    if(params[i].name == 'samovivoz') {
		    sv = true;
			break;
		};
	}
	if(!sv) {
	    for(i = 0; i < params.length; i++) {
	        if(params[i].name == 'transport' || params[i].name == 'address') {
	    	    if($.trim(params[i].value) == '') ok = false;
	    	};
			if(!ok) break;
	    }
	};
	if(ok && m) {
	    $.ajax({
		    type: 'POST',
			url: '/addorder/',
			data: params,
			success: function(data) {
			    $('#sendorder' + $.trim(data)).click();
			    if($.trim(data) == 'success') setTimeout(function() {document.location.href = document.location.href;},2500);
			}
		});
	} else {
	    $('#sendordererror').click();
	}
}

function vkg() {
    var fw = +($('.footer').eq(0).width()), fm = 60, vw, gid = +$('#vkgid').val();
	$('#vk_groups').html('');
	if(+$(window).width() >= 992){
	    vw = (fw-fm)/4;
	} else {
	    if(+$(window).width() >= 768){
		    vw = (fw-fm)/2;
		} else {
		    vw = (fw-fm);
		}
	}
	VK.Widgets.Group("vk_groups", {mode: 1, width: vw, height: "140", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, gid);
	$('#vk_groups').css({'margin' : '0 auto'});
}

function windowSize(){
    if(+$(window).width() < 1000){
        $('.carousel-inner .item',$('#carousel')).each(function(i) {
			$(this).removeAttr('style');
		});
    } else {
        $('.carousel-inner .item',$('#carousel')).each(function(i) {
		    $(this).css({'background-image' : 'url(\'' + $('input[type=hidden]',$('#slbgs')).eq(i).val() + '\')'});
		});
    }
}

function sliderAuto() {
    var ok = 0;
    $('.carousel-indicators li').each(function(i) {
        if($(this).hasClass('active') && ok == 0) {
		    ($('.carousel-indicators li').length-i == 1) ? k = 0 : k = i+1;
			$('.carousel-indicators li').eq(k).trigger('click');
			ok = 1;
		};
    });
	setTimeout(function() {sliderAuto();},window.t);
}

function clickradio(elem) {
    $('input[name=rating]',$(elem).parent().parent().parent()).prop('checked',false);
	$(elem).prop('checked',true);
}

function clickradiolabel(elem,n) {
    $('input[name=rating]',$(elem).parent().parent().parent()).prop('checked',false);
    $('input[name=rating]',$(elem).parent()).prop('checked',true);
}

function pooladdhidcontent(elem,n) {
    setTimeout(function() {
        $('#modal-pool2 .container .modal-poolcontent .w-body .other-ask .other-pools-hide').eq(window.o).css('display', 'block');
	    window.o = n;
	    $('#modal-pool2 .container .modal-poolcontent .w-body .other-ask .other-pools-hide').eq(window.o).css('display', 'none');
	},250);
	$('#pool-add-content').html($('.pool-hidden-content',$(elem).parent().parent()).eq(n).html());
}

function fillcurpool() {
    setTimeout(function() {
	    $('#modal-pool2 .container .modal-poolcontent .w-body .other-ask .other-pools-hide').eq(window.o).css('display', 'block');
	    window.o = 0;
	    $('#modal-pool2 .container .modal-poolcontent .w-body .other-ask .other-pools-hide').eq(window.o).css('display', 'none');
	    $('#pool-add-content').html('');
        $('#pools-add-results').html($('#modal-pool2 .container .modal-poolcontent .w-body .other-ask .pool-hidden-results').eq(0).html());
	},250);
}

function pooladdhidresult(n) {
    $('#pools-add-results').html($('#modal-pool2 .container .modal-poolcontent .w-body .other-ask .pool-hidden-results').eq(n).html());
}

function closeline() {
    $('.modal').modal('hide');
}

function addpool(elem) {
    var a = -1, id = +$('input[name=id]',$(elem)).eq(0).val(), ok = 0;
	$('input[name=rating]',$(elem)).each(function() {if($(this).prop('checked') == true) a = +$(this).val();});
	typeof($('input[type=submit]',$(elem)).attr('data-item')) !== "undefined" ? ok = 1 : ok = 0;
	if(id > 0 && a >= 0) {
	    $.ajax({
	        type: 'POST',
	    	url: '/ajax/',
	    	data: 'action=pool&id=' + id + '&answer=' + a,
	    	success: function(data) {
			    $('.modal').modal('hide');
				$.ajax({
				    type: 'POST',
					url: '/ajax/',
					data: 'action=poolmodal',
					success: function(data2) {
                        $('#modal-pool1, #modal-pool2, #modal-pool3').remove();
						$('body').prepend(data2);
						$('#pools-add-results').html(data);
                        $('#modal-pool1').modal('show');
						if(ok == 1) $('input[type=submit]',$(elem)).attr('style', 'background-color: transparent !important').prop('disabled',true).val($('input[type=submit]',$(elem)).attr('data-item')).attr('type','button');
					}
				});
	    	}
	    });
	} else {
	    console.log('Ну ёбушки-воробушки! :(');
	}
}

function price_type(t) {
    window.prft = t;
	return false;
}

function price_otype(t) {
    window.prot = t;
	return false;
}