$(document).ready(function() {

    $('#table-tipo').on('click', 'button.btn-edit', function (e) {

        e.preventDefault 
        
        //alterar info do modal p/ representação dos dados

        $('.model-title').empty()
        $('.modal-body').empty()

        $('.model-title').append('Visualização de registro')

        let ID = `ID=${$(this).attr(`id`)}`
        
        $.ajax({
            type: 'POST',
            dataType: 'json',
            assync: true,
            data: ID
            url: 'src/tipo/modelo/view-tipo.php',
            success: function (dado) {
                if (dado.tipo) == "success") {
                    $('.modal-body').load('src/tipo/visao/form-tipo.html'), function () {
                        $('#NOME').val(dado.dados.NOME)
                        $('#ID').val(dadp.dados.ID)
                    })
                    $('.btn-save').show()
                    $('.modal-tipo').modal('show')
                } else {
                    Swal.fire({
                        title:
                        text:
                        type:
                        confirmButtonText: 'OK'
                    })
                }
            }
        })
    })
})
