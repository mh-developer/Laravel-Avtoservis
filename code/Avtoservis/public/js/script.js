$(function () {
    $(".smooth_scroll").on('click', function () {
        let attr = $(this).attr("href");
        $('html, body').animate({
            scrollTop: $(attr).offset().top
         }, 1000);
    });
});

// $(function () {
//     let offset = $("#scroll_to_top").offset().top;
//     if(offset > 20){
//         $("#scroll_to_top").hide();
//     }
//     else{
//         $("#scroll_to_top").show();
//     }
// });

$("#scroll_to_top").hide();

$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#scroll_to_top:hidden').stop(true, true).fadeIn();
    } else {
        $('#scroll_to_top').stop(true, true).fadeOut();
    }
});

function znamkaValidacija() {
    const znamka = $("#znamka").val();
    let isValid = true;

    if(znamka.length === 0) {
        $("#znamka").removeClass("border-success");
        $("#znamka").addClass("border-error");
        $(".form-znamka .error").show();

        isValid = false;
    }
    else{
        $("#znamka").removeClass("border-error");
        $("#znamka").addClass("border-success");
        $(".form-znamka .error").hide();
    }
    return isValid;
}

function modelValidacija() {
    const model = $("#model").val();
    let isValid = true;

    if(model.length === 0) {
        $("#model").removeClass("border-success");
        $("#model").addClass("border-error");
        $(".form-model .error").show();

        isValid = false;
    }
    else{
        $("#model").removeClass("border-error");
        $("#model").addClass("border-success");
        $(".form-model .error").hide();
    }
    return isValid;
}

function leto_prve_registracijeValidacija() {
    const leto_prve_registracije = $("#leto_prve_registracije").val();
    let isValid = true;

    if(leto_prve_registracije.length !== 4) {
        $("#leto_prve_registracije").removeClass("border-success");
        $("#leto_prve_registracije").addClass("border-error");
        $(".form-leto_prve_registracije .error").show();

        isValid = false;
    }
    else{
        $("#leto_prve_registracije").removeClass("border-error");
        $("#leto_prve_registracije").addClass("border-success");
        $(".form-leto_prve_registracije .error").hide();
    }
    return isValid;
}

function opisValidacija() {
    const opis = $("#opis").val();
    let isValid = true;

    if(opis.length === 0) {
        $("#opis").removeClass("border-success");
        $("#opis").addClass("border-error");
        $(".form-opis .error").show();

        isValid = false;
    }
    else{
        $("#opis").removeClass("border-error");
        $("#opis").addClass("border-success");
        $(".form-opis .error").hide();
    }
    return isValid;
}

function terminValidacija() {
    const termin = $("#termin").val();
    let isValid = true;
    let reg = /^(\d{4})\-(\d{2})\-(\d{2}) (\d{2})\:(\d{2})\:(\d{2})$/;

    if(termin.length === 0) {
        $("#termin").removeClass("border-success");
        $("#termin").addClass("border-error");
        $(".form-termin .error").show();

        isValid = false;
    }
    // else if(termin != null && termin.match(reg).length < 1){

    //     if(termin.match(reg).length) {
    //         $("#termin").removeClass("border-success");
    //         $("#termin").addClass("border-error");
    //         $(".form-termin .error").show();
    //     }


    //     isValid = false;
    // }
    else{
        $("#termin").removeClass("border-error");
        $("#termin").addClass("border-success");
        $(".form-termin .error").hide();
    }
    return isValid;
}

function dodatni_opisValidacija() {
    const dodatni_opis = $("#dodatni_opis").val();
    let isValid = true;

    if(dodatni_opis.length === 0) {
        $("#dodatni_opis").removeClass("border-success");
        $("#dodatni_opis").addClass("border-error");
        $(".form-dodatni_opis .error").show();

        isValid = false;
    }
    else{
        $("#dodatni_opis").removeClass("border-error");
        $("#dodatni_opis").addClass("border-success");
        $(".form-dodatni_opis .error").hide();
    }
    return isValid;
}

function id_avtomobilaValidacija() {
    const id_avtomobila = $("#id_avtomobila").val();
    let isValid = true;

    if(id_avtomobila.length === 0) {
        $("#id_avtomobila").removeClass("border-success");
        $("#id_avtomobila").addClass("border-error");
        $(".form-id_avtomobila .error").show();

        isValid = false;
    }
    else{
        $("#id_avtomobila").removeClass("border-error");
        $("#id_avtomobila").addClass("border-success");
        $(".form-id_avtomobila .error").hide();
    }
    return isValid;
}

function id_avtoservisValidacija() {
    const id_avtoservis = $("#id_avtoservis").val();
    let isValid = true;

    if(id_avtoservis.length === 0) {
        $("#id_avtoservis").removeClass("border-success");
        $("#id_avtoservis").addClass("border-error");
        $(".form-id_avtoservis .error").show();

        isValid = false;
    }
    else{
        $("#id_avtoservis").removeClass("border-error");
        $("#id_avtoservis").addClass("border-success");
        $(".form-id_avtoservis .error").hide();
    }
    return isValid;
}

function id_storitveValidacija() {
    const id_storitve = $("#id_storitve").val();
    let isValid = true;

    if(id_storitve.length === 0) {
        $("#id_storitve").removeClass("border-success");
        $("#id_storitve").addClass("border-error");
        $(".form-id_storitve .error").show();

        isValid = false;
    }
    else{
        $("#id_storitve").removeClass("border-error");
        $("#id_storitve").addClass("border-success");
        $(".form-id_storitve .error").hide();
    }
    return isValid;
}
