
function ocultarCasa() {

    document.getElementById('collapseCasa').style.display = 'none';
    document.getElementById("input-valor_casa").value = "";
    document.getElementById('collapseDepartamento').style.display = 'block';

}

function ocultarEdificio() {
    document.getElementById('collapseDepartamento').style.display = 'none';
    document.getElementById("input-valor_departamento").value = "";
    document.getElementById('collapseCasa').style.display = 'block';
}

function show_hide_plan(plan_id) {
    var collapseOne = document.getElementById('collapseOne');
    var collapseTwo = document.getElementById('collapseTwo');
    var collapseTree = document.getElementById('collapseTree');
    var collapseFour = document.getElementById('collapseFour');

    if (plan_id == 'input-plan_one') {
        collapseOne.style.display = 'block';
        collapseTwo.style.display = 'none';
        collapseTree.style.display = 'none';
        collapseFour.style.display = 'none';
    } else if (plan_id == 'input-plan_two') {
        collapseOne.style.display = 'none';
        collapseTwo.style.display = 'block';
        collapseTree.style.display = 'none';
        collapseFour.style.display = 'none';
    } else if (plan_id == 'input-plan_three') {
        collapseOne.style.display = 'none';
        collapseTwo.style.display = 'none';
        collapseTree.style.display = 'block';
        collapseFour.style.display = 'none';
    } else if (plan_id == 'input-plan_four') {
        collapseOne.style.display = 'none';
        collapseTwo.style.display = 'none';
        collapseTree.style.display = 'none';
        collapseFour.style.display = 'block';
    } else {
        console.log('error!');
    }

}

$(function () {
    $('#form').validate(
        {
            rules:
            {
                Color: { required: true }
            },
            messages:
            {
                Color:
                {
                    required: "Please select a Color<br/>"
                }
            },
            errorPlacement: function (error, element) {
                if (element.is(":radio")) {
                    error.appendTo(element.parents('.container'));
                }
                else { // This is the default behavior 
                    error.insertAfter(element);
                }
            }
        });

});

$(function () {
    $("#form").validate({
        rules: {
            tipo_edificacion: "required"
        },
        messages: {
            tipo_edificacion: "You must select an account type"
        }
    });
});

function show_hide_datos() {

    $("#collapseDatosOne").toggle();


    /*
    if (datos_id == 'display_one') {
        document.getElementById('collapseDatosOne').style.display = 'block';
        document.getElementById('collapseDatosTwo').style.display = 'none';
    } else if (datos_id == 'display_two') {
        document.getElementById('collapseDatosOne').style.display = 'none';
        document.getElementById('collapseDatosTwo').style.display = 'block';
    } else {
        console.log('Error');
    }*/

}

function show_eps_actual() {
    var divCollapse = document.getElementById('div_eps_actual');
    divCollapse.style.display = 'block';
    document.getElementById('aviso').style.display = 'none';
}

function hide_eps_actual() {
    var divCollapse = document.getElementById('div_eps_actual');
    divCollapse.style.display = 'none';
    document.getElementById("input-eps_actual").value = '';
    document.getElementById("input-compania_seguro").value = '';
    document.getElementById("input-adjunto_plan_salud").value = '';
    document.getElementById("input-adjunto_siniestralidad").value = '';
    document.getElementById('aviso').style.display = 'block';
}

function show_casa_playa() {
    document.getElementById('divCasaPlaya').style.display = "block";
    document.getElementById("input-club_playa").checked = false;
}

function hide_casa_playa() {

    document.getElementById('divCasaPlaya').style.display = 'none';
    document.getElementById("input-metros_orilla").value = "";
    document.getElementById("input-club_playa").checked = false;

}


$("#form").validate({
    errorPlacement: $.noop,
    submitHandler: function (form) {
        $('#preloader').show();
        form.submit();
    }
});

/* -------------------- Select 2 ------------------ */

