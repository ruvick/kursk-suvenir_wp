<!-- В этом файле описываем все  всплывающие окна -->

<!-- Popup-JS -->
<div class="popup popup_callback">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div>
			<div class="popup__item d-flex">
				<div class="popup__img">
					<img src="<?php echo get_template_directory_uri();?>/img/popup-img.jpg" alt="">
				</div>
				<div class="popup__form-block"> 
					<h2>Заказать звонок</h2> 
					<div class="universal_form">
						<p class="popup__notific">Оставьте заявку и мы свяжемся с Вами в течении 15 минут</p> 
						<form action="#" class="form">
							<div class="form__line">
								<input placeholder="Введите имя" type="text" name="name" class="popup__form-input input">
								<input placeholder="Введите телефон" type="tel" name="tel" class="popup__form-input input">
							<p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a href="#">политикой
									конфиденциальности</a></p>
							<button type ="button" class="popup__form-btn btn btn-hover btn_red uniSendBtn">Заказать</button>
              </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <a href="#callback" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a> -->
<!-- Popup-JS End -->


<!-- Образец -->
<div style="display: none;">
	<div class="box-modal" id="messgeModal">
		<div class="box-modal_close arcticmodal-close"><? _e("закрыть", "rubex"); ?></div>

		<div class="modalline" id="lineIcon">
		</div>

		<div class="modalline" id="lineMsg">
		</div>
	</div>
</div>
<!-- ==================================================== -->


<div style="display: none;">
  <div class="box-modal" id="messgeModal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class = "modalline" id = "lineIcon">
  </div>
  
  <div class = "modalline" id = "lineMsg">
  </div>
  </div>
</div>
  <div style="display: none;">
    <div class="box-modal" id="buy-modal">
      <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close.svg" width = "15px" /></div>
      <div class = "modalline" id = "lineIcon">
        <form id="order-modal-form">
          <div class="order-popup-form__header">
              <img class="loadImg" src="" alt="">
              <div class="order-popup-form__header-text">
              <h2 class="tovName"></h2>
              <div class="order-popup-form__price"><span class="single-price__old"><span class="tovOldPrice"></span> </span> <span id = "tovPrice" class="tovPrice"></span></div>
              <div class="postId" style="display:none;"></div>
              <div class="tovSKU" style="display:none;"></div>
              <div class="tovType" style="display:none;"></div>
              <div class="tovGroupID" style="display:none;"></div>
              <div class="tovOfferID" style="display:none;"></div>
              <div class="tovWeight" style="display: none"></div>
              <div class="tovPackage" style="display: none;"></div>
              <div id="order-popup__param"></div>
          </div>
          </div>

          <div class="character-block">
            <div class="modal-mod"></div>
            <!-- <select name="order-popup__param" id="order-popup__param" class="order-popup__param">
             
            </select> -->
          </div>
          <div class="product-content__block">
            
          </div>
         <!--  <input type="text" id="order-modal-form-name" placeholder="Имя">
          <input type="tel" id="order-modal-form-phone" placeholder="Телефон"> -->
          <div class="character-block__btn">
            <div class="more-link cancel-link">Отмена</div>
            <div class="link-consultation product-add-to-cart button link-button btn-hover toBascetInWin" id="buy-submit-link">В корзину</div>
          </div>
        </form>    
      </div>
  
  <div class = "modalline" id = "lineMsg">
  </div>
  </div>
</div>

<div style="display: none;">
  <div class="box-modal" id="order-modal">
      <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close.svg" width = "15px" /></div>
      <div class = "order-modal-wrapper" id = "lineIcon">
        <div class="order-modal-photo"></div>
        <div class="order-modal-form-wrap">
          <h2>Обратный звонок</h2>
          <form action="">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="tel" name="tel" placeholder="Ваш телефон">
            <a href="#" class="uniSendBtn button">Отправить</a>
          </form>
        </div>
  </div>
  
  <div class = "modalline" id = "lineMsg">
  </div>
  </div>
</div>

<div style="display: none;">

    <div class="box-modal main-comp-modal" id="phone-modal">
        <!-- <img class = "formpers1" src = "<?php bloginfo("template_url")?>/images/formpers1.svg"> -->
        <!-- <img class = "formpers2" src = "<?php bloginfo("template_url")?>/images/formpers2.svg"> -->
    <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close.svg" width = "15px" /></div>
    <div class="uniConsultModal-wrapper">
      <div class="uniConsultModal-img">
        
      </div>
      <div class="uniConsultModal-form">
            <h2 id = "uniHeaderNdp">Наши специалисты свяжутся с вами в течении 15 минут</h2>
        <form class = "uniForm phone-modal">
            <input type = "hidden" class = "uniFormName" id = "ovFormName" value = "по кнопке">
            <!-- <input type = "text" class = "uniName" id = "uniName" placeholder = "Имя"> -->
            <input type = "tel" class = "uniTel mascedtel" id = "uniTel"  placeholder = "Телефон*">
            <!-- <textarea id = "uniMsg" class = "uniMes" placeholder = "Причина обращения"></textarea> -->
            <span class = "btn ovBtn button" data-formname = "phone-modal" >Позвоните мне</span>
          <span class="note-form">Нажимая на кнопку <span id="name_serv">Заказать услугу</span>, вы соглашаетесь с условиями обработки персональных данных</span>
        </form>
      </div>
    </div>
    
    </div>
</div>
<div class="dialog-cb-button dialog-cb-button__decstop">
    <a href="#callback" class="_popup-link"></a>
</div>
<div class="dialog-cb-button dialog-cb-button__mobile">
    <a class="mgo-number" href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a>
</div>