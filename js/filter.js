const filterParamLoad = document.location.protocol+'//'+document.location.host+'/wp-json/gensvet/v2/get_filter'

function chengeSort(param) {
    sortFormFilter.value = param;
    categoryFilterForm.submit();
}

function clearFilter() {
    document.location.href = document.location.protocol+'//'+document.location.host+document.location.pathname
}

function getRequests() {
    var s1 = location.search.substring(1, location.search.length).split('&'),
        r = {}, s2, i;
    for (i = 0; i < s1.length; i += 1) {
        s2 = s1[i].split('=');
        let arrayIndex = decodeURIComponent(s2[0]).toLowerCase();
        if (arrayIndex.indexOf('[') == -1)
            {
                r[arrayIndex] = decodeURIComponent(s2[1]);
            } else {
                arrayIndex = arrayIndex.substring(0, arrayIndex.indexOf('['));
                if (typeof r[arrayIndex] === 'object')
                    r[arrayIndex].push(decodeURIComponent(s2[1]).replaceAll('+', ' '))
                else 
                    r[arrayIndex] = [decodeURIComponent(s2[1]).replaceAll('+', ' ')]
            }
    }
    return r;
};

function get_color_name(color) { 
    if ( color == '#000000') return "Черный";
	if ( color == '#EC1C24') return "Красный";
	if ( color == '#39B44A')  return "Зеленый";
	if ( color == '#7d0000')  return "Бордовый";
	if ( color == '##00ADEE')  return "Синий";
	if ( color == '#FFFF00')  return "Желтый";
	if ( color == '#6f00cc')  return "Фиолетовый";
	if ( color == '#D9A52A')  return "Золотой";
	if ( color == '#C0C0C0')  return "Серебристый";

    return ""
}

document.addEventListener("DOMContentLoaded", () => {

    let qParam = getRequests();

    if (qParam.sort == "price_ub")  {
        price_ub.checked  = true;
    }

    if (qParam.sort == "price_vozr")  {
        price_vozr.checked  = true;
    }

    

    if (document.getElementById('tovarCategoryId') == null) return;
    
    let category = tovarCategoryId.dataset.id;
    
    console.log(category);

    const xhr = new XMLHttpRequest()

    xhr.open('GET', filterParamLoad+"?catid="+category)
    xhr.responseType='json'
    xhr.setRequestHeader('Content-Type', 'application/json')

    xhr.onload = () => {
        console.log(xhr.response);
        
        // Цвет
        let uStr = ""
        xhr.response.tov_color.forEach((element, index) => {
            
            let checed = (qParam.color != undefined && qParam.color.includes(element) )?"checked":"";

            uStr += '<div class="form_radio">'+
                        '<input id="check_color'+index+'" type="checkbox" name="color[]" '+checed+' value="'+element+'">'+
                        '<label title ="'+get_color_name(element)+'" for="check_color'+index+'" style="background: '+element+';"></label>'+
                    '</div>';

        });
        if (document.getElementById("filterColorWrapper")) filterColorWrapper.innerHTML = uStr;

        // Материал
        let uStr1 = ""

        xhr.response.tov_material.forEach((element, index) => {

            let checed = (qParam.material != undefined && qParam.material.includes(element) )?"checked":"";
            
            uStr1 += '<label for="check_material'+index+'" class="checkbox catalog-sec__sidebar-spollers-checkbox">'+
				'<input id="check_material'+index+'" data-error="Ошибка" class="checkbox__input" type="checkbox" '+checed+' value="'+element+'" name="material[]">'+
				'<span class="checkbox__text"><span>'+element+'</span></span>'+
			'</label>';
            console.log(element);
        });

        if (document.getElementById("filterMaterialWrapper")) filterMaterialWrapper.innerHTML = uStr1;


        
        // Вид росписи
        let uStr2 = ""
        let mainPage1 = "<option selected disabled>Выберите вид росписи</option>"

        xhr.response.tov_vid_rosp.forEach((element, index) => {

            let checed = (qParam.vid_rosp != undefined && qParam.vid_rosp.includes(element) )?"checked":"";
            
            uStr2 += '<label for="check_vid_rosp'+index+'" class="checkbox catalog-sec__sidebar-spollers-checkbox">'+
				'<input id="check_vid_rosp'+index+'" data-error="Ошибка" class="checkbox__input" type="checkbox" '+checed+' value="'+element+'" name="vid_rosp[]">'+
				'<span class="checkbox__text"><span>'+element+'</span></span>'+
			'</label>';

            mainPage1 += '<option value="'+element+'">'+element+'</option>'
        });

        if (document.getElementById("filterVidRospWrapper")) filterVidRospWrapper.innerHTML = uStr2;
        if (document.getElementById("filterVidRospWrapper_main")) filterVidRospWrapper_main.innerHTML = mainPage1;

        // Вид рисунка
        let uStr3 = ""
        let mainPage2 = "<option selected disabled>Выберите вид рисунка</option>"

        xhr.response.tov_vid_ris.forEach((element, index) => {
    
            let checed = (qParam.vid_ris != undefined && qParam.vid_ris.includes(element) )?"checked":"";
            
            uStr3 += '<label for="check_vid_ris'+index+'" class="checkbox catalog-sec__sidebar-spollers-checkbox">'+
                '<input id="check_vid_ris'+index+'" data-error="Ошибка" class="checkbox__input" type="checkbox" '+checed+' value="'+element+'" name="vid_ris[]">'+
                '<span class="checkbox__text"><span>'+element+'</span></span>'+
            '</label>';

            mainPage2 += '<option value="'+element+'">'+element+'</option>'
        });
    
        if (document.getElementById("filterVidRisWrapper")) filterVidRisWrapper.innerHTML = uStr3;
        if (document.getElementById("filterVidRisWrapper_main")) filterVidRisWrapper_main.innerHTML = mainPage2;


        // check_nal.checked  = (qParam.nal == undefined)?false:true;
        
        if (document.getElementById("price_ot")) price_ot.value = (qParam.price_ot == undefined)?xhr.response.offer_price_min:qParam.price_ot;
        if (document.getElementById("price_do")) price_do.value = (qParam.price_do == undefined)?xhr.response.offer_price_max:qParam.price_do;


        if (document.getElementById("categoryFilterLoader")) categoryFilterLoader.style.display = "none";
        if (document.getElementById("categoryFilterForm")) categoryFilterForm.style.display = "block";

        let selects = document.getElementsByTagName('select');
        if (selects.length > 0) {
          selects_init(selects);
        }

    }

    xhr.send();

});