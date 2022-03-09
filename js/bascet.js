function dellbascet(elem) {
	var postidm = jQuery(elem).data("postid");

	var  jqXHR = jQuery.post(
		allAjax.ajaxurl,
		{
			action: 'del_bascet',		
			nonce: allAjax.nonce,	
			postid:postidm,	
		}
		
	);
	
	
	jqXHR.done(function (responce) {
		location.reload();	
	});
	
	jqXHR.fail(function (responce) {
		console.log("ERROR!");
	});	
}

function recalcbascet(elem) {
	var postidm = jQuery(elem).data("postid");
	var elcountm = jQuery(elem).val();
	
	
	if (elcountm<=0) elcountm = 1;
	
	// console.log(elcount);
	
	var  jqXHR = jQuery.post(
		allAjax.ajaxurl,
		{
			action: 'rec_bascet',		
			nonce: allAjax.nonce,	
			postid:postidm, 
			elcount:elcountm,
			
		}
		
	);
	
	
	jqXHR.done(function (responce) {
		location.reload();
	});
	
	jqXHR.fail(function (responce) {
		console.log("ERROR!");
	});	
}

function toBascetFnk (postidm, tovskum, tovtypem, groupidm, offeridm, dpricem, qty, mod) {
		
		var  jqXHR = jQuery.post(
					allAjax.ajaxurl,
					{
						action: 'to_bascet',		
						nonce: allAjax.nonce,
						postid:postidm, 
						tovsku:tovskum, 
						tovtype:tovtypem, 
						groupid:groupidm, 
						offerid:offeridm,
						dprice:dpricem,
						qty: qty,
						mod: mod				
					}
					
				);
				
				
				jqXHR.done(function (responce) {
					var rezm = responce.split("|");
					jQuery(".inputCount").html(rezm[0]);
					jQuery(".inputPrice").html(rezm[1]);
					//jQuery("#bascetblk .bascetsod").html(rezm[1]);
					jQuery('#buy-modal').arcticmodal("close");
				});
				
				jqXHR.fail(function (responce) {
					console.log("ERROR!");
				});
}

function checkInputs() {
	jQuery('.checkout-form__block input, .checkout-form__block textarea').focusout(function() {
		

		if(jQuery(this).val() !== '' && jQuery(this).hasClass('mascedphoneclass')) {
			var regex = /^((8|\+7)[\-]?)?(\(?\d{3}\)?[\-]?)?[\d\-]{7,10}$/;
			var phone = jQuery(this).val();
			var valid = regex.test(phone);
			if(valid) {
				jQuery(this).next().show();
				jQuery(this).siblings('.checkout-form__block-wrong').hide();
			}
			else {
				jQuery(this).siblings('.checkout-form__block-wrong').show();
				jQuery(this).next().hide();
			}
		} else if(jQuery(this).hasClass("checkout-form__email")) {
			var regex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
			var email = jQuery(this).val();
			var valid_email = regex.test(email);
			if(valid_email || jQuery(this).val() == '') {
				jQuery(this).next().show();
				jQuery(this).siblings('.checkout-form__block-wrong').hide();
			} else {
				jQuery(this).siblings('.checkout-form__block-wrong').show();
				jQuery(this).next().hide();
			}
		} else if(jQuery(this).val() !== '') {
			jQuery(this).next().show();
			jQuery(this).siblings('.checkout-form__block-wrong').hide();
		} else {
			jQuery(this).next().hide();
			jQuery(this).siblings('.checkout-form__block-wrong').show();
		}
	});
}

checkInputs();

jQuery(document).ready(function($) {

		
		$("body").change(function () {
		  $(".modal-mod").text($("input[name='mod']:checked").val())
		});
		jQuery(".toBascetInWin").click(function(){ 
			
			toBascetFnk(
				jQuery('#buy-modal .postId').html(),
				jQuery('#buy-modal .tovSKU').html(),
				jQuery('#buy-modal .tovType').html(),
				jQuery('#buy-modal .tovGroupID').html(),
				jQuery('#buy-modal .order-popup__param').val(),
				jQuery('#buy-modal .tovPrice').html(),
				'1',
				$(".modal-mod").text()
			);
			$(".modal-mod").text('');
		});
		
			$("body").change(function () {
			  $(".choice-mod").text($("input[name='mod']:checked").val())
			});
		
		jQuery(".toBascetInPage").click(function(){ 
			
			console.log(jQuery(this).data("postid"));
			console.log(jQuery(this).data("offersku"));
			console.log(jQuery(this).data("offertype"));
			console.log(jQuery(this).data("groupid"));
			console.log(jQuery('#order-popup__param_page').val());
			console.log(jQuery('.product-loop__price-current .product-loop__price-current_load').html());
		
				console.log($(".choice-mod").text());
			console.log(jQuery('input[name=mod]').val());
			toBascetFnk(
				jQuery(this).data("postid"),
				jQuery(this).data("offersku"),
				jQuery(this).data("offertype"),
				jQuery(this).data("groupid"),
				jQuery('#order-popup__param_page').val(),
				jQuery('.product-loop__price-reg .price-reg').html(),
				'1',
				$(".choice-mod").text()
			);
			jQuery('#messgeModal #lineMsg').html("Товар добавлен в корзину");
			jQuery('#messgeModal').arcticmodal();
		});
		
		
		jQuery('.cancel-link').click(function() {
			jQuery('#buy-modal').arcticmodal("close");
			  $('.modal-mod').text('');
		});
		
		jQuery('.link-buy').click(function(e) {
     		e.preventDefault();
			var groupid = jQuery(this).data("groupid");
			var offertype = jQuery(this).data("offertype");
			var postid = jQuery(this).data("postid");
			
			console.log(postid);
			
			var src = jQuery(this).attr('data-src');
			var name = jQuery(this).parent().siblings('.products-loop__title').text();
			var price = jQuery(this).parent().parent().find(".products-loop__price").html();
			var priceOld = jQuery(this).parent().parent().find('.products-loop__price-old').html();
			jQuery('.loadImg').attr('src', src);
			jQuery('.tovName').text(name);
			
			if (priceOld === undefined) 
				jQuery('#buy-modal .single-price__old').hide();
			else 
				jQuery('#buy-modal .single-price__old').show();
			console.log(priceOld);
			
			jQuery('#buy-modal .tovPrice').html(price);
			jQuery('#buy-modal .tovOldPrice').html(priceOld);
			
			jQuery('#buy-modal .postId').html(jQuery(this).data("postid"));
			jQuery('#buy-modal .tovSKU').html(jQuery(this).data("offersku"));
			jQuery('#buy-modal .tovType').html(jQuery(this).data("offertype"));
			jQuery('#buy-modal .tovGroupID').html(jQuery(this).data("groupid"));
			
			
			var  jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
				  action: 'get_tov_option',    
				  nonce: allAjax.nonce,
				  groupid: groupid,
				  offertype: offertype,
				  postid:postid
				}
				
			  );
			  
			  
			  jqXHR.done(function (responce) {
				console.log(responce);
				
				if (responce != ""){
					jQuery('#buy-modal #order-popup__param').show();
					jQuery('#buy-modal #order-popup__param').html(responce);
				}else {
					jQuery('#buy-modal #order-popup__param').hide();
					jQuery('#buy-modal #order-popup__param').html("");
				}
			  });
			  
			  jqXHR.fail(function (responce) {
				jQuery('#buy-modal #order-popup__param').hide();
				jQuery('#buy-modal #order-popup__param').html("");
			  });
			  
			  jQuery('#buy-modal').arcticmodal({
				afterClose: function() {
				  $('.modal-mod').text('');
				}
			  });
    });			
      
 //  jQuery('#buy-modal').arcticmodal({
	// afterClose: function() {
	//   $('.modal-mod').text('');
	// }
 //  });
		
	
	jQuery(".oformlenieZak").click(function(){


		if (jQuery("#checkout-form__name").val() == "")
		{
			jQuery("#checkout-form__name").css("background", "#f69679");
			return;
		}
	
		
		if (jQuery("#checkout-form__phone").val() == "")
		{
			jQuery("#checkout-form__phone").css("background", "#f69679");
			return;
		}
		

		
		var  jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'oformit_zak',		
				nonce: allAjax.nonce,
				namecl:jQuery("#checkout-form__name").val(),
				phonecl:jQuery("#checkout-form__phone").val(),
				emailcl:jQuery("#checkout-form__email").val(),
				sdostcl:jQuery("#checkout-form__delivery").val(),
				adrdost:jQuery("#checkout-form__address").val(),
				msgst:jQuery("#checkout-form__comment").val()
			}
			
		);
		
		
		jqXHR.done(function (responce) {
			jQuery(".inputCount").html(0);
			jQuery(".inputPrice").html(0);
			jQuery('.bascetTextZonn').html(responce);
			jQuery('#messgeModal #lineMsg').html(responce);
			jQuery('#messgeModal').arcticmodal();
			window.location.replace("https://kombinat.asmi-studio.ru/spasibo-za-zayavku/");
		
		});
		
		jqXHR.fail(function (responce) {
			console.log("ERROR!");
		});	
		
		
	});
	
	jQuery('#order-link').click(function(e) {
    	e.preventDefault();
    	var size = jQuery('#order-popup__param_page option:selected').html();
    	var price = jQuery('.product-loop__price-current_load').html();
    	
		if(size) {
    		var html = '<div><label>Характеристики товара:</label> <br/> <span class = "tovCr">' + size + '</span></div><br/>';
    		html += '<div><label>Цена:</label> <br/> <span class = "tovPr">' + price + '</span> руб.</div>';
    		jQuery('#order-modal .product-content__block').append(html);
    	}
		
    	
		
    	jQuery('#order-modal').arcticmodal({
    		afterClose: function() {
    			jQuery('#order-modal .product-content__block').empty();
    		}
    	});
    });

	
	
	jQuery(".oneClickBay").click(function(){ 
     
	 var phone = jQuery("#order-modal-form-phone").val();
      if ((phone == "")||(phone.indexOf("_")>0)) {
        jQuery("#order-modal-form-phone").css("background-color","#ff91a4")
      } else {
        console.log(jQuery("#order-modal-form .tovCr").html());
		var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'one_click_bay',    
            nonce: allAjax.nonce,
            tovarname: jQuery("#order-modal-form .section-title").html(),
            tovcaracter: jQuery("#order-modal-form .tovCr").html(),
            tovsku: jQuery(this).data("offersku"),
            tovprice: jQuery("#order-modal-form  .tovPr").html(),
            clname: jQuery("#order-modal-form-name").val(),
            cltel: phone,
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          jQuery("#order-modal").arcticmodal('close');
          jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
          jQuery('#messgeModal').arcticmodal();
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });

	
		

});
