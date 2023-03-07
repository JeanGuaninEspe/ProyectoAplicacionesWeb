//hacer que .fs4  tenga animacion de entrada con jquery
$(document).ready(function(){
    $('.fs-4').addClass('animated fadeInUp');
});

$(document).ready(function(){
    $('input').addClass('animated fadeInUp');
});
$(document).ready(function(){
    $('label').addClass('animated fadeInUp');
});
$(document).ready(function(){
    $('h1').addClass('animated fadeInUp');
});
$(document).ready(function(){
    $('select').addClass('animated fadeInUp');
});


$(document).ready(function(){
    $('.wel').addClass('animated fadeInUp',2000);
});

$(document).ready(function(){
    $('img').addClass('animated fadeInUp',2000);
});
$(document).ready(function(){
    $('p').addClass('animated fadeInUp',2000);
});



//al hacer hover sobre .fw-bold subrayar y luego quitar subrayado
$(document).ready(function(){
    $('.fw-bold').hover(function(){
        $(this).css('text-decoration','underline');
    },function(){
        $(this).css('text-decoration','none');
    });
});

//al hacer hover sobre li subrayar y luego quitar subrayado
$(document).ready(function(){
    $('a').hover(function(){
        $(this).css('text-decoration','underline');
    },function(){
        $(this).css('text-decoration','none');
    });
});

//ocultar section .pt-4
$(document).ready(function(){
    $('.pt-4').hide();
});
//al hacer click sobre .btn-sistema mostrar el section .pt-4 si esta oculto y ocultarlo si esta visible
$(document).ready(function(){
    $('.btn-sistema').click(function(){
        $('.pt-4').toggle();
    });
});

//ocultar el formulario
$(document).ready(function(){
    $('form').hide();
});



//al hacer click sobre .btn-form mostrar el formulario si esta oculto y ocultarlo si esta visible


$(document).ready(function(){
    $('.btn-form').click(function(){
        $('form').toggle();
    });
});




//validad que en #name solo se ingresen letras
$(document).ready(function(){
    $('#name').keypress(function(e){
        var key = e.keyCode;
        if(key >= 48 && key <= 57){
            e.preventDefault();
        }
    });
});

//validar que en #email tenga @ y . si falta marcar con rojo el borde\
$(document).ready(function(){
    $('#email').blur(function(){
        var email = $(this).val();
        if(email.indexOf('@') == -1 || email.indexOf('.') == -1){
            $(this).css('border','2px solid red');
        }else{
            $(this).css('border','2px solid green');
        }
    });
});

//validar que en #message tenga mas de 10 caracteres
$(document).ready(function(){
    $('#message').blur(function(){
        var message = $(this).val();
        if(message.length < 10){
            $(this).css('border','2px solid red');
        }else{
            $(this).css('border','2px solid green');
        }
    });
});


//validar que en #subject tenga mas de 10 caracteres y menos de 50 ademas que no tenga numeros
$(document).ready(function(){
    $('#subject').blur(function(){
        var subject = $(this).val();
        if(subject.length < 10 || subject.length > 50){
            $(this).css('border','2px solid red');
        }else{
            $(this).css('border','2px solid green');
        }
    });
});

//validar que #name no este vacio
$(document).ready(function(){
    $('#name').blur(function(){
        var name = $(this).val();
        if(name == ''){
            $(this).css('border','2px solid red');
        }else{
            $(this).css('border','2px solid green');
        }
    });
});





//al hacer click sobre .btn1 si los campos estan vacios mostrar un alert con el mensaje "Todos los campos son obligatorios"
$(document).ready(function(){
    $('.btn1').click(function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();
        if(name == '' || email == '' || subject == '' || message == ''){
            alert('Todos los campos son obligatorios');
        }
    });
});

//emvar formulario al hacer click sobre .btn1 si los campos estan llenos
$(document).ready(function(){
    $('.btn1').click(function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();
        if(name != '' && email != '' && subject != '' && message != ''){
            $('#form').submit();
        }
    });
});

//al hacer click sobre .btn1 si los campos estan llenos mostrar un alert con el mensaje "Mensaje enviado"
$(document).ready(function(){
    $('.btn1').click(function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();
        if(name != '' && email != '' && subject != '' && message != ''){
            alert('Mensaje enviado');
        }
    });
});

//al darle click a .btn1 si los campos estan llenos vaciar los campos
$(document).ready(function(){
    $('.btn1').click(function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();
        if(name != '' && email != '' && subject != '' && message != ''){
            $('#name').val('');
            $('#email').val('');
            $('#subject').val('');
            $('#message').val('');
        }
    });
});

//no permitir que en subject se ingresen numeros
$(document).ready(function(){
    $('#subject').keypress(function(e){
        var key = e.keyCode;
        if(key >= 48 && key <= 57){
            e.preventDefault();
        }
    });
});



//verificar que el campo nombre del formulario solo tenga letras
$(document).ready(function(){
    $('#nombre').keypress(function(e){
        var key = e.keyCode;
        if(key >= 48 && key <= 57){
            e.preventDefault();
        }
    });
}
)

//verificar que el campo correo este completo
$(document).ready(function(){
    $('#correo').blur(function(){
        var correo = $(this).val();
        if(correo.indexOf('@') == -1 || correo.indexOf('.') == -1){
            $(this).css('border','2px solid red');
        }else{
            $(this).css('border','2px solid green');
        }
    });
}
)

//verificar que el campo mensaje tenga mas de 10 caracteres
$(document).ready(function(){
    $('#mensaje').blur(function(){
        var mensaje = $(this).val();
        if(mensaje.length < 10){
            $(this).css('border','2px solid red');
        }else{
            $(this).css('border','2px solid green');
        }
    });
}
)

//verificar que el campo telefono solo tenga numeros
$(document).ready(function(){
    $('#telefono').keypress(function(e){
        var key = e.keyCode;
        if(key < 48 || key > 57){
            e.preventDefault();
        }
    });
}
)

//verificar que nombre ni telefono este vacio si no lo esta poner los bordes de verde

$(document).ready(function(){
    $('#nombre').blur(function(){
        var nombre = $(this).val();
        if(nombre == ''){
            $(this).css('border','2px solid red');
        }else{
            $(this).css('border','2px solid green');
        }
    });
}
)

$(document).ready(function(){
    $('#telefono').blur(function(){
        var telefono = $(this).val();
        if(telefono == ''){
            $(this).css('border','2px solid red');
        }else{
            $(this).css('border','2px solid green');
        }
    });
}
)

//solo enviar el formulario si los campos estan llenos si no mostrar un alerta y si se envio tambien mostrar alerta
$(document).ready(function(){
    $('#enviar-b').click(function(){
        var nombre = $('#nombre').val();
        var correo = $('#correo').val();
        var mensaje = $('#mensaje').val();
        var telefono = $('#telefono').val();
        if(nombre == '' || correo == '' || mensaje == '' || telefono == ''){
            alert('Todos los campos son obligatorios');
        }
    });
}
)

$(document).ready(function(){
    $('#enviar-b').click(function(){
        var nombre = $('#nombre').val();
        var correo = $('#correo').val();
        var mensaje = $('#mensaje').val();
        var telefono = $('#telefono').val();
        if(nombre != '' && correo != '' && mensaje != '' && telefono != ''){
            $('#form').submit();
        }
    });
}
)

$(document).ready(function(){
    $('#enviar-b').click(function(){
        var nombre = $('#nombre').val();
        var correo = $('#correo').val();
        var mensaje = $('#mensaje').val();
        var telefono = $('#telefono').val();
        if(nombre != '' && correo != '' && mensaje != '' && telefono != ''){
            alert('Mensaje enviado');
        }
    });
}
)

//al enviar el formulario ocultarlo y mostrar un mensaje de gracias
$(document).ready(function(){
    $('#enviar-b').click(function(){
        var nombre = $('#nombre').val();
        var correo = $('#correo').val();
        var mensaje = $('#mensaje').val();
        var telefono = $('#telefono').val();
        if(nombre != '' && correo != '' && mensaje != '' && telefono != ''){
            $('#form').hide();
            $('#gracias').show();
        }
    });
}
)





//evitar que la pagina se recargue al enviar el formulario








