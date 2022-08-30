$(document).ready(function() {

    $('.logout').click(function(e) {
        e.preventDefault()
        $.ajax({
            type: 'POST',
            dataType: 'json',
            assync: true,
            url: 'src/vendedor/model/logout-vendedor.php',
            success: function(dados) {
                Swal.fire({
                    title: 'E-RIFAS',
                    text: dados.mensagem,
                    icon: dados.tipo,
                    confirmButtonText: 'OK'
                })

                if (dados.tipo === 'success') {
                    $(location).attr('href', 'index.html');
                }
            }
        })
    })
})