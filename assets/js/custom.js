$(document).on('click', '.anchor', function(event){
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});

$(document).ready(function(){

    //Set primeiro item do slider da index ativo
    $(".carousel-inner .item:first-child").addClass("active");

    // Load de imagem
    $(document).on('change', '#input-imagem', function(){
        if($("#input-imagem").val() != ""){
            $(".info-imagem p").text("Imagem selecionada: " + $("#input-imagem").val());
            $(".info-imagem p").removeClass('info-imagem-error');
        }
        else{
            $(".info-imagem p").text("Nenhuma imagem foi selecionada")
            $(".info-imagem p").addClass('info-imagem-error');
        }
    });

    $.uploadPreview({
        input_field: "#image-upload",   // Default: .image-upload
        preview_box: "#image-preview",  // Default: .image-preview
        label_field: "#image-label",    // Default: .image-label
        label_default: "Choose File",   // Default: Choose File
        label_selected: "Change File",  // Default: Change File
        no_label: false                 // Default: false
    });

    carregaMascaras();
    defineMascaraCnpjCpf();
});

/*Input Masks*/
function carregaMascaras(){
    $('.telefone').mask('(00) 0000-0000');
    $('.celular').mask('(00) 00000-0000');
    $('.cep').mask('00000-000');
};

function defineMascaraCnpjCpf(){
    if($('.cnpj').val().length >= 14){
        //Muda para cnpj
        $('.cnpj').mask('00.000.000/0000-00');
    }
    else{
        //Muda para cpf
        $('.cnpj').mask('000.000.000-00');
    }
};


/*Métodos Search Temporários*/

$(".search").keyup(function () {
    console.log("cheguei");
    var texto = $(this).val().toUpperCase();
    if (texto != "") {
        $(".table tbody>tr").each(function () {
            if ($("td:nth-child(1)", this).html().toUpperCase().indexOf(texto) > -1) {
                $(this).show();
            }
            else {
                $(this).hide();
            }
        });          
    }
    else {
        $("table tbody>tr").show()
    }
    
});

$(".search-card").keyup(function () {
    var texto = $(this).val().toUpperCase();
    if (texto != "") {
        $(".card-anuncio").each(function () {
            if ($("h4", this).html().toUpperCase().indexOf(texto) > -1) {
                $(this).show();
            }
            else {
                $(this).hide();
            }
        });          
    }
    else {
        $(".card-anuncio").show()
    }
    
});

$("#searchCategoria").change(function () {
    var texto = $(this).val().toUpperCase();
    if (texto == "TODAS") {
        $(".card-anuncio").show()
    }else if (texto != "") {
        $(".card-anuncio").each(function () {
            if ($("#categoriaEmpresaSelect", this).val().toUpperCase().indexOf(texto) > -1) {
                $(this).show();
            }
            else {
                $(this).hide();
            }
        });          
    }
    else {
        $(".card-anuncio").show()
    }
    
});

