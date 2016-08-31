$(document).ready(function(){
    $(".material-box").change(function(){
        
            //console.log("check");
            var valid = false;
                $( ".material-box" ).each(function( index ) {
                
          console.log( index + ": " + $( this ).prop('checked') );
          if ($( this ).prop('checked')){ valid = true; }
        });
        
        if (!valid){  
                        alert("Вы не выбрали материал");
                        console.log( $("#option1").prop('checked'));
                       $("#option1").prop("checked", true);
                }
    });
    $("#category-box").change(function(){
        var category = $("#category-box :selected").val();
        // console.log(category);
         switch (category) {
            case '0':
                  console.log('hide');
                $("#material-boxes").hide();
                 $("#option1").prop("checked", true);
                $("#option1").prop("value", 'empty');
                  $("#option1").prop("checked", false);
                  $("#option2").prop("value", 'empty');
                   
              break;
            case '1':
                 console.log('show');
                 $("#option1").prop("value", 'С пяткой');
                  $("#label-option1").html( 'С пяткой');
                  $("#option2").prop("value", 'Без пятки');
                   $("#label-option2").html('Без пятки');
                $("#material-boxes").show();
              break;
            case '2':
                 console.log('show');
                 $("#option1").prop("value", 'Дерево');
                  $("#label-option1").html( 'Дерево');
                  $("#option2").prop("value", 'Деревопластик');
                   $("#label-option2").html( 'Деревопластик');
              $("#material-boxes").show();
              break;
            default:
              alert( 'Я таких значений не знаю' );
            }
    });
    var loc = window.location.href.split("/");
    var priceblock = '<div class="col-lg-12 skispriceblock"><button type="button" class="btn btn-danger btn-xs" onclick="delblock(this);"><i class="fa fa-times"></i></button><div class="col-lg-4 form-group"><label>Ростовка</label><input class="form-control" type="text" name="rostovka" /></div><div class="col-lg-4 form-group"><label>Ширина</label><input class="form-control" type="text" name="width" /></div><div class="col-lg-4 form-group"><label>Цена</label><input class="form-control" type="text" name="price" /></div></div>';
	var poolablock = '<div class="skispriceblock"><button type="button" class="btn btn-danger btn-xs" onclick="delblock(this);"><i class="fa fa-times"></i></button><div class="form-group"><label>На русском</label><input class="form-control" type="text" name="answers_ru" /></div><div class="form-group"><label>На английском</label><input class="form-control" type="text" name="answers_en" /></div></div>';
	if(loc[4] == 'goods') {
	    $('#' + loc[5]).addClass('active');
	} else {
	    $('#' + loc[4]).addClass('active');
	}
        //Some shit-code here
        
	if(loc[4] == 'login') {
	    $('form input').keyup(function(e) {if(e.keyCode == 13) $('form .btn-success').trigger('click');});
		$('form .btn-success').click(function() {
			params = 'action=login&email=' + $('form .form-group input[name=email]').val() + '&password=' + $('form .form-group input[name=password]').val();
			if($.trim($('form .form-group input[name=email]').val()).length > 0 && $.trim($('form .form-group input[name=password]').val()).length > 0) {
			$.ajax({
			    type: 'POST',
				url: '/admin/ajax/',
				data: params,
				success: function(data) {
					showalert($('.alert_' + data));
					if(data == 'success') setTimeout(function() {document.location.href = '/admin/';},2500);
				}
			});
			} else {
				showalert($('.alert_error'));
			}
			return false;
		});
	};
	if(loc[4] == 'settings') {
		form = '#settings-update';
		$(form).submit(function(event) {
		    event.preventDefault();
			params = $(form).serializeArray();
			params.push(
			    {'name': 'action', 'value': 'item-settingsupdate'},
				{'name': 'error_text_ru', 'value': escapeHtml(tinyMCE.get('textarea-description').getContent())},
				{'name': 'error_text_en', 'value': escapeHtml(tinyMCE.get('textarea-description3').getContent())},
				{'name': 'rules_expluatation_ru', 'value': escapeHtml(tinyMCE.get('textarea-description2').getContent())},
				{'name': 'rules_expluatation_en', 'value': escapeHtml(tinyMCE.get('textarea-description4').getContent())}
			);
			go_ajax(params, form);
		});
	    if(typeof($('#textarea-description3')) !== "undefined") {
	    	tinymce.init({
	    		language: 'ru',
                theme: "modern",
	    		fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                plugins: [
                     "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                     "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                     "save table contextmenu directionality emoticons template paste textcolor textpattern imagetools jbimages"
                ],
                content_css: "css/content.css",
	    		image_advtab: true,
	    		relative_urls: false,
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | backcolor forecolor sizeselect fontselect fontsizeselect | emoticons jbimages link image media | print preview fullpage", 
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ],
	    		selector: "#textarea-description3"
	    	});
	    };
	    if(typeof($('#textarea-description4')) !== "undefined") {
	    	tinymce.init({
	    		language: 'ru',
                theme: "modern",
	    		fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                plugins: [
                     "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                     "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                     "save table contextmenu directionality emoticons template paste textcolor textpattern imagetools jbimages"
                ],
                content_css: "css/content.css",
	    		image_advtab: true,
	    		relative_urls: false,
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | backcolor forecolor sizeselect fontselect fontsizeselect | emoticons jbimages link image media | print preview fullpage", 
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ],
	    		selector: "#textarea-description4"
	    	});
	    };
	};
	if(typeof($('#textarea-description')) !== "undefined") {
		tinymce.init({
			language: 'ru',
            theme: "modern",
			fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                 "save table contextmenu directionality emoticons template paste textcolor textpattern imagetools jbimages"
            ],
            content_css: "css/content.css",
			image_advtab: true,
			relative_urls: false,
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | backcolor forecolor sizeselect fontselect fontsizeselect | emoticons jbimages link image media | print preview fullpage", 
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ],
			selector: "#textarea-description"
		});
	};
	if(typeof($('#textarea-description2')) !== "undefined") {
		tinymce.init({
			language: 'ru',
            theme: "modern",
			fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                 "save table contextmenu directionality emoticons template paste textcolor textpattern imagetools jbimages"
            ],
            content_css: "css/content.css",
			image_advtab: true,
			relative_urls: false,
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | backcolor forecolor sizeselect fontselect fontsizeselect | emoticons jbimages link image media | print preview fullpage", 
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ],
			selector: "#textarea-description2"
		});
	};
	$('.deleteitem').click(function() {if(confirm('Подтвердите удаление')) go_ajax([{'name': 'action', 'value': 'item-delete'}, {'name': 'item', 'value': $(this).attr('data-id')}], "none");});
	$('.showhide').click(function() {if(confirm('Подтвердите действие')) go_ajax([{'name': 'action', 'value': 'item-visible'}, {'name': 'item', 'value': $(this).attr('data-id')}], "none");});
	$('.positem').click(function() {go_ajax([{'name': 'action', 'value': 'item-pos'}, {'name': 'item', 'value': $(this).attr('data-id')}], "none");});
	$('.create_button').click(function() {
               
		$('#' + loc[4] + '-form')[0].reset();
		$('#' + loc[4] + '-form input[name=action]').val('item-create');
		$('#scorebutton').val('Неизвестно');
		$('#myModalLabel').text('Добавить');
		$('#form input[name=score]').prop('disabled', false);
		if(typeof($('.uploadposter img')) !== "undefined") $('.uploadposter img').attr('src', '/documents/noimage.png?' + Date.now());
		if(typeof($('#form input[name=item]')) !== "undefined") $('#form input[name=item]').remove();
		if(loc[4] == 'goods' && loc[5] == 'goods_cat1') {
            $('.skispriceblock',$('#skisprice')).remove();
			$('#optionsRadiosInline1').trigger('click');
            $('#skisprice').append(priceblock);
		};
		if(loc[4] == 'pools') {
		    $('#pa_count').val('');
			$('#addpoolanswer').fadeIn(1);
		};
	});
	$('#form input[type=checkbox]').change(function() {
		parseInt($('#form input[name=' + $(this).attr('data-name') + ']').val(), 10) == 0 ? $('#form input[name=' + $(this).attr('data-name') + ']').val(1) : $('#form input[name=' + $(this).attr('data-name') + ']').val(0);
	});
	$('#settings_checkboxes input[type=checkbox]').change(function() {
	    parseInt($('#settings-update input[name=' + $(this).attr('data-item') + ']').val(), 10) == 0 ? $('#settings-update input[name=' + $(this).attr('data-item') + ']').val(1) : $('#settings-update input[name=' + $(this).attr('data-item') + ']').val(0);
	});
	$('.poolq').change(function() {
	    $('input[name=' + $(this).attr('name') + ']',$('#pools-form')).val($(this).val());
	});
	$('.skisprice input[type=radio]').change(function() {
	    if($(this).val() == 'summ') {
		    $('#skispricesumm').prop('disabled',false);
		} else {
		    $('#skispricesumm').prop('disabled',true);
			$('.skispriceblock',$('#skisprice')).each(function(i) {
			    if(i > 0) $(this).remove();
			});
		}
	});
	$('#skispricesumm').click(function() {
	    $('#skisprice').append(priceblock);
	});
	$('#addpoolanswer').click(function() {
	    $('#pool_answers_add').append(poolablock);
	});
	$('.editbutton').click(function() {
                
                 
		$('#' + loc[4] + '-form')[0].reset();
		var id = $(this).attr('data-id'), tbl = '', tbl2 = '', ok1 = 0;
		loc[4] == 'goods' ? tbl = loc[5] : tbl = loc[4];
		loc[4] == 'goods' ? tbl2 = loc[4] + '/' + loc[5] : tbl2 = loc[4];
		$.ajax({
			type: 'POST',
			url: '/admin/ajax/',
			data: 'action=item-editinfo&table=' + tbl + '&item=' + id,
			success: function(data) {
				var it = $.parseJSON(data);
                                //console.log(it);
                                    
                                   $('#option1').prop("checked", false);
                                  
                                   $('#option2').prop("checked", false); 
                                   //option3 ...
				$.each(it, function(i, item) {
                                       
					$('#form input[name=' + item.name + ']').val(item.value);
					if(item.name == 'metacontent') $('textarea[name=' + item.name + ']').val(item.value);
                                        //To add options add  option3 ...
                                        if(item.name == 'option1'  ) {
                                            $('#option1').prop("checked", item.value);
                                          
                                        }
                                        if(item.name == 'option2' ) {
                                            $('#option2').prop("checked", item.value);
                                           
                                        }
                                        //Set selected category
                                        if (item.name == 'category')  {$("div.cat-sel select").val(item.value);  $("#category-box").change(); }
					if(item.name == 'description_ru') tinyMCE.get('textarea-description').setContent(unescapeHtml(item.value));
					if(item.name == 'description_en') tinyMCE.get('textarea-description2').setContent(unescapeHtml(item.value));
					if(item.name == 'poster') $('.uploadposter img').attr('src', '/documents/' + tbl2 + '/' + item.value);
					if(item.name == 'photos') {
                        photos = item.value.split("-");
						if($('#goodphotos').val() == '-' || $('#goodphotos').val() == '') photos = [];
						for(k = 0; k < photos.length; k++) {
						    if($.trim(photos[k]).length < 1 || $.trim(photos[k]) == '' || $.trim(photos[k]) == '-') {
							    delete(photos[k]);
							} else {
                                $('.modal-body .uploadgoodphoto .goodphotos').append('<div class="goodposterm"><div class="goodposterdel"><a href="#" OnClick="delgoodphoto(this, \'' + photos[k] + '\');return false;"><i class="fa fa-times"></i></a></div><img src="/documents/' + loc[4] + '/' + loc[5] + '/photos/m/' + photos[k] + '?' + Date.now() + '" /></div>');
							};
						}
					};
					if(loc[4] == 'slider' && item.name == 'good_cat') {
					    $('#form select[name=' + item.name + '] option').prop('selected',false);
						$('#form select[name=' + item.name + '] option').each(function() {
						    $(this).val() == item.value ? $(this).prop('selected', true) : $(this).prop('selected', false);
						});
					};
					if(loc[4] == 'articles' && item.name == 'cat') {
					    $('#form select[name=' + item.name + '] option').prop('selected',false);
						$('#form select[name=' + item.name + '] option').each(function() {
						    $(this).val() == item.value ? $(this).prop('selected', true) : $(this).prop('selected', false);
						});
					};
					if(loc[4] == 'pools') {
					    if(item.name == 'title_ru' || item.name == 'title_en') {
						    $('.poolq').each(function(i) {
							    if($(this).attr('name') == item.name) $(this).val(item.value);
							});
						};
						if(item.name == 'answers_ru') {
						    aru = item.value.split("|");
							if(ok1 == 0) {
							    $('.skispriceblock',$('#pool_answers_add')).remove();
								for(k = 0; k < aru.length; k++) {
							        $('#pool_answers_add').append(poolablock);
							    	ok1 = 1;
							    }
							};
							$('input[name=' + item.name + ']',$('#pool_answers_add')).each(function(k) {
							    if(aru[k] != '') {$(this).val(aru[k]);};
								if(no == 1) $('.btn-danger',$(this).parent().parent()).remove();
							});
						};
						if(item.name == 'answers_en') {
						    aen = item.value.split("|");
							$('input[name=' + item.name + ']',$('#pool_answers_add')).each(function(k) {
							    if(aen[k] != '') {$(this).val(aen[k]);};
							});
						};
						if(item.name == 'answers_count') {
							var no = 0, pacarr = item.value.split("|");
							for(i = 0; i < pacarr.length; i++) {
							    if(+pacarr[i] > 0) {
								    no = 1;
									$('#addpoolanswer').fadeOut(1);
									break;
								};
							}
							if(no == 1) $('input[name=answers_ru]',$('#pool_answers_add')).each(function(k) {$('.btn-danger',$(this).parent().parent()).remove();});
						};
					};
					if(loc[4] == 'goods' && loc[5] == 'goods_cat1') {
					    if(item.name == 'obl') {
						    $('#form select[name=' + item.name + '] option').prop('selected',false);
							$('#form select[name=' + item.name + '] option').each(function() {
						        $(this).val() == item.value ? $(this).prop('selected', true) : $(this).prop('selected', false);
						    });
						};
						if(item.name == 'price' || item.name == 'rostovka' || item.name == 'width') {
						    var pr = item.value.split("-");
							(pr.length == 1 || pr[0] == '') ? lol = 1 : lol = 2;
							$('#optionsRadiosInline' + lol).trigger('click');
							if(pr.length == 1 || pr[0] == '') {
							    $('input[name=' + item.name + ']',$('#skisprice')).val(item.value);
							} else {
								if(ok1 == 0) {
								    $('.skispriceblock',$('#skisprice')).remove();
									for(k = 0; k < pr.length; k++) {
								        $('#skisprice').append(priceblock);
								    	ok1 = 1;
								    }
								};
								$('input[name=' + item.name + ']',$('#skisprice')).each(function(k) {
								    if(pr[k] != '') {$(this).val(pr[k]);};
								});
							}
						};
					};
					if($('#form input[name=' + item.name + ']').attr('data-type') == 'checkbox') {
						if(item.name == 'visible') {
						    parseInt(item.value,10) == 0 ? $('#checkbox-' + item.name).prop('checked', true) : $('#checkbox-' + item.name).prop('checked', false);
						} else {
							parseInt(item.value,10) == 1 ? $('#checkbox-' + item.name).prop('checked', true) : $('#checkbox-' + item.name).prop('checked', false);
						}
					};
                                     $("#category-box").change();   
				});
                                
				if(typeof($('#form input[name=item]')) === "undefined") $('#' + loc[4] + '-form').append('<input type="hidden" name="item" />');
				$('#form input[name=action]').val('item-update');
				$('#form input[name=item]').val(id);
				$('#myModalLabel').text('Редактировать');
			}
		});
	});
	$('#' + loc[4] + '-form').submit(function(event) {
		event.preventDefault();
		var ok = 1, k = 0;
		if(loc[4] == 'pools') {
		    var arr = [], arr3 = [], no = 0;
			pacarr = $('#pa_count').val().split("|");
			$('input[name=answers_ru]',$('#pool_answers_add')).each(function(i) {arr.push($(this).val());});
			for(i = 0; i < pacarr.length; i++) {
			    if(+pacarr[i] > 0) no = 1;
			    break;
			}
			if(no == 0 && (pacarr.length != arr.length || typeof(pac) === "undefined")) {
			    for(i = 0; i < arr.length; i++) arr3.push(0);
				$('#pa_count').val(arr3.join("|"));
			};
			delete(arr);
			delete(arr3);
			delete(pacarr);
		};
		params = $(this).serializeArray();
		for(i = k; i < params.length; i++) {
			if($.trim(params[i].value) == '') {
			    if(params[i].name == 'description_ru' || params[i].name == 'description_en') {
					if(params[i].name == 'description_ru') params[i].value = escapeHtml(tinyMCE.get('textarea-description').getContent());
					if(params[i].name == 'description_en') params[i].value = escapeHtml(tinyMCE.get('textarea-description2').getContent());
					if(params[i].value == '' && params[i].name != 'description_en') {
						ok = 0;
						break;
					};
				} else {
				    if(params[i].name != 'metakeywords' && params[i].name != 'metacontent') {
						ok = 0;
			            break;
					};
				}
			};
		}
		if(loc[4] == 'pools') {
		    var arr = [], arr2 = [], aru = '', aen = '';
			$('input[name=answers_ru]',$('#pool_answers_add')).each(function(i) {arr.push($(this).val());});
			$('input[name=answers_en]',$('#pool_answers_add')).each(function(i) {arr2.push($(this).val());});
			aru = arr.join("|");
			aen = arr2.join("|");
			params.push({'name': 'answers_ru', 'value': aru});
			params.push({'name': 'answers_en', 'value': aen});
		};
		if(loc[4] == 'goods' && loc[5] == 'goods_cat1') {
		    var skisprice = $('.skisprice input[type=radio]:checked').val(), price = '', rostovka = '', w = '';
			if(skisprice == 'one') {
			    $('#skisprice .skispriceblock').each(function(i) {
				    if(i == 0) {
					    price = $('input[name=price]',$(this)).val();
						rostovka = $('input[name=rostovka]',$(this)).val();
						w = $('input[name=width]',$(this)).val();
					};
				});
			} else {
			    var arr = [], arr2 = [], arr3 = [];
				$('#skisprice .skispriceblock').each(function(i) {
					arr.push($('input[name=price]',$(this)).val());
					arr2.push($('input[name=rostovka]',$(this)).val());
					arr3.push($('input[name=width]',$(this)).val());
				});
				price = arr.join("-");
				rostovka = arr2.join("-");
				w = arr3.join("-");
			}
			params.push({'name': 'price', 'value': price});
			params.push({'name': 'rostovka', 'value': rostovka});
			params.push({'name': 'width', 'value': w});
		};
		ok == 0 ? showalert($('.alert_error')) : go_ajax(params, $(this).attr('id'));
	});
	$('.admspoilerlink').click(function(){
		var arr = ['ru', 'en'];
		for(i = 0; i < arr.length; i++) {
		    var admspoiler = $('#admspoiler-' + $(this).attr('data-item') + '-' + arr[i]);
		    admspoiler.css('display') == 'none' ? $(this).text($(this).attr('data-txt2')) : $(this).text($(this).attr('data-txt'));
		    admspoiler.css('display') == 'none' ? admspoiler.slideDown(250).animate({'opacity' : 1.0},250) : admspoiler.animate({'opacity' : 0.5},250).slideUp(250);
			delete(admspoiler);
		}
		return false;
	});
	$('.admspoilerlink2').click(function(){
		var admspoiler = $('#admspoiler-' + $(this).attr('data-item'));
		admspoiler.css('display') == 'none' ? $(this).text($(this).attr('data-txt2')) : $(this).text($(this).attr('data-txt'));
		admspoiler.css('display') == 'none' ? admspoiler.slideDown(250).animate({'opacity' : 1.0},250) : admspoiler.animate({'opacity' : 0.5},250).slideUp(250);
		return false;
	});
	$('.changesitelogo img').hover(function() {
	    $(this).animate({'opacity' : 1.0},250);
	},function() {
	    $(this).animate({'opacity' : 0.7},250);
	});
	$('.changesitelogo img').click(function() {
	    $('form input[type=file]',$(this).parent()).trigger('click');
	});
	$('.changesitelogo form input[type=file]').change(function() {
        var $input = $(this), fd = new FormData, target = $('.changesitelogo img');
        if(typeof($input.prop('files')[0]) !== "undefined") {
            fd.append('file', $input.prop('files')[0]);
            fd.append('action', 'item-changesitelogo');
            $.ajax({
                url: '/admin/ajax/',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
		    	    var img = JSON.parse(data);
                    if(img.status == 'success') {
					    target.animate({'opacity' : 0.0},250);
						setTimeout(function() {
						    target.attr('src', '/documents/' + img.name + '?' + Date.now()).delay(50).animate({'opacity' : 0.7},250);
						},300);
					};
                }
            });
		};
	});
	$('.uploadposter img').hover(function() {
	    $(this).animate({'opacity' : 1.0},250);
	},function() {
	    $(this).animate({'opacity' : 0.7},250);
	});
	$('.uploadposter img').click(function() {
	    $('form input[type=file]',$(this).parent()).trigger('click');
	});
	$('.uploadposter form input[type=file]').change(function() {
        var $input = $(this), fd = new FormData, target = $('.uploadposter img'), tbl = '',
		    sizes = {
			    o: {
				    articles: '706:235',
					news: '706:235',
					goods: '0:0',
					slider: '0:0'
				},
				m: {
				    articles: '306:199',
					news: '306:128',
					goods: '195:109',
					slider: '0:0'
				}
			};
        if(typeof($input.prop('files')[0]) !== "undefined") {
		    loc[4] == 'goods' ? tbl = loc[4] + '/' + loc[5] : tbl = loc[4];
            fd.append('file', $input.prop('files')[0]);
            fd.append('action', 'item-uploadposter');
			fd.append('tbl', tbl);
			fd.append('size', sizes.o[loc[4]] + '-' + sizes.m[loc[4]]);
            $.ajax({
                url: '/admin/ajax/',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
					var img = JSON.parse(data);
                    if(img.status == 'success') {
					    $('#poster').val(img.name);
					    target.animate({'opacity' : 0.0},250);
						setTimeout(function() {
						    target.attr('src', '/documents/' + tbl + '/' + img.name + '?' + Date.now()).delay(50).animate({'opacity' : 0.7},250);
						},300);
					};
                }
            });
		};
	});
	$('.uploadgoodphoto form input[type=file]').change(function() {
        var $input = $(this), fd = new FormData, target = $('.goodphotos',$(this).parent().parent()), photos = $('#goodphotos').val(),
		    sizes = {
			    o: '0:0',
				m: '195:109'
			};
		if(photos == '-' || photos == '') {
		    photos = '';
			$('#goodphotos').val('');
		};
		photos2 = photos.split("-");
        if(typeof($input.prop('files')[0]) !== "undefined") {
            fd.append('file', $input.prop('files')[0]);
            fd.append('action', 'item-uploadgoodphoto');
			fd.append('tbl', loc[4] + '-' + loc[5]);
			fd.append('size', sizes.o + '-' + sizes.m);
            $.ajax({
                url: '/admin/ajax/',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
		    	    var img = JSON.parse(data);
                    if(img.status == 'success') {
						photos2[photos2.length] = img.name;
						for(i = 0; i < photos2.length; i++) if($.trim(photos2[i]).length < 1 || $.trim(photos2[i]) == '' || $.trim(photos2[i]) == '-') delete(photos2[i]);
						photos2.length == 0 ? $('#goodphotos').val('-') : $('#goodphotos').val(photos2.join("-"));
					    target.append('<div class="goodposterm"><div class="goodposterdel"><a href="#" OnClick="delgoodphoto(this, \'' + img.name + '\');return false;"><i class="fa fa-times"></i></a></div><img src="/documents/' + loc[4] + '/' + loc[5] + '/photos/m/' + img.name + '?' + Date.now() + '" /></div>');
					};
                }
            });
		};
	});
	$('.uploadgoodphoto .addgoodphotolink').click(function() {
	    $('form input[type=file]',$(this).parent()).trigger('click');
		return false;
	});
});

function delgoodphoto(elem, img) {
    var photos = $('#goodphotos').val().split("-"), loc = document.location.href.split("/"), photos2 = '';
    if($('#goodphotos').val() == '-' || $('#goodphotos').val() == '') {
        photos = [];
    	$('#goodphotos').val('');
    };
	for(i = 0; i < photos.length; i++) {
	    if($.trim(photos[i]).length < 1 || $.trim(photos[i]) == '' || $.trim(photos[i]) == '-') delete(photos[i]);
	    if(photos[i] == img) delete(photos[i]);
	}
	photos2 = photos.join("-");
    $.ajax({
	    type: 'POST',
		url: '/admin/ajax/',
		data: 'action=item-delgoodphoto&item=' + img + '&tbl=' + loc[5],
		success: function(data) {
			if(data == 'success') {
			    $(elem).parent().parent().remove();
			    $('#goodphotos').val(photos2);
			};
		}
	});
    return false;
}

function showalert(elem) {
	elem.slideDown(250).animate({'opacity': 1.0},250);
	setTimeout(function() {elem.animate({'opacity': 0.7},250).slideUp(250);},1500);
}

function go_ajax(params, form) {
    var loc = window.location.href.split("/"), tbl = '';
	loc[4] == 'goods' ? tbl = loc[5] : tbl = loc[4];
	params.push({'name': 'table', 'value': tbl});
	$.ajax({
    	type: 'POST',
    	url: '/admin/ajax/',
    	data: params,
    	success: function(data) {
			if(typeof(params[0]) !== "undefined" && params[0].value == 'item-delete') {
			    hidedelrow($('#adminrow-' + params[1].value));
			    t = 1000;
			} else {
				if(typeof(params[0]) !== "undefined" && params[0].value == 'item-visible') {
					$('#adminrow-' + params[1].value).addClass('warning');
					t = 100;
				} else {
				    if(typeof(params[0]) !== "undefined" && params[0].value == 'item-pos') {
						document.location.href = document.location.href;
					} else {
					    showalert($('.alert_' + data));
					    if(loc[4] == 'settings') {
					    	t = 2500;
					    } else {
					        setTimeout(function() {$('.modal-header:first .close:first').click();},2500);
				            t = 3000;
					    }
					}
				}
			}
			if(data == 'success') setTimeout(function() {document.location.href = document.location.href;},t);
    	}
    });
}

function adminpages(page) {
	loc = document.location.href.split("/");
	document.location.href = "/admin/" + loc[4] + "/" + page + "/";
}

function hidedelrow (elem) {
	elem.animate({'opacity': 0.0},500).slideUp(500);
}

function delblock(elem) {
    $(elem).parent().remove();
}

function escapeHtml(text) {
  return text
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
}

function unescapeHtml(text) {
  return text
      .replace(/&amp;/g, "&")
      .replace(/&lt;/g, "<")
      .replace(/&gt;/g, ">")
      .replace(/&quot;/g, '"')
      .replace(/&#039;/g, "'");
}