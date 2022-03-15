const filterParamLoad = document.location.protocol+'//'+document.location.host+'/wp-json/gensvet/v2/get_filter'

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

document.addEventListener("DOMContentLoaded", () => {

   
    let qParam = getRequests();
    console.log(qParam);

    if (document.getElementById('tovarCategoryId') == null) return;
    
    let category = tovarCategoryId.dataset.id;
     
    const xhr = new XMLHttpRequest()

    xhr.open('GET', filterParamLoad+"?catid="+category)
    xhr.responseType='json'
    xhr.setRequestHeader('Content-Type', 'application/json')

    xhr.onload = () => {
        console.log(xhr.response);
        
        // Цвет
        // let uStr = ""
        // xhr.response.offer_brand.forEach((element, index) => {
            
        //     let checed = (qParam.brand != undefined && qParam.brand.includes(element) )?"checked":"";

        //     uStr += '<label for="check_brand'+index+'" class="checkbox catalog-sec__sidebar-spollers-checkbox">'+
        //                 '<input id="check_brand'+index+'" data-error="Ошибка" class="checkbox__input" type="checkbox" '+checed+' value="'+element+'" name="brand[]">'+
        //                 '<span class="checkbox__text"><span>'+element+'</span></span>'+
        //             '</label>'
        // });
        // filterBrandWrapper.innerHTML = uStr;

        // Страна
        uStr = ""

        xhr.response.tov_material.forEach((element, index) => {

            let checed = (qParam.material != undefined && qParam.material.includes(element) )?"checked":"";
            
            uStr += '<label for="check_material'+index+'" class="checkbox catalog-sec__sidebar-spollers-checkbox">'+
				'<input id="check_material'+index+'" data-error="Ошибка" class="checkbox__input" type="checkbox" '+checed+' value="'+element+'" name="material[]">'+
				'<span class="checkbox__text"><span>'+element+'</span></span>'+
			'</label>';
            console.log(element);
        });

        filterMaterialWrapper.innerHTML = uStr;



        // check_nal.checked  = (qParam.nal == undefined)?false:true;
        
        priceOt.value = (qParam.price_ot == undefined)?xhr.response.offer_price_min:qParam.price_ot;
        priceDo.value = (qParam.price_do == undefined)?xhr.response.offer_price_max:qParam.price_do;


        categoryFilterLoader.style.display = "none";
        categoryFilterForm.style.display = "block";
    }

    xhr.send();

});