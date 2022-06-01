$( document ).ready(function() {
    console.log( "ready!" );


    $(".btnEditar").on("click", function(){
        var id = $(this).val();
        console.log("sou o clicar do editar");
    });
    $(".btnExcluir").on("click", function(){
        console.log("sou o clicar do Excluir");
    });
});
