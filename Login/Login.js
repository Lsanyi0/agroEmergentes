$(document).ready(function(){
    $("#btnIniciar").click(function(){
        var vusser=$("#txtUsu").val();
        var vpass=$("#txtPass").val();
        if (vusser=='' && vpass=='') {
            alert("Los campos deben ser llenados");
        }
        else {
            $.post(
                "http://localhost/agroEmergentes/Login/login.php",
                {
                    usser:vusser,
                    pass:vpass
                },
                function(response,status){
                    /*$('#login')[0].reset();*/
                });
        }
    });
});