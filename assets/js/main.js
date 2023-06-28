function togglePassword(iconId, inputId){
    $('#'+iconId).toggleClass('bi-eye-fill bi-eye-slash-fill');

    var password = $('#'+ inputId);
    if(password.attr('type') === 'password'){
        password.attr('type', 'text');
    }else{
        password.attr('type', 'password');
    }
}