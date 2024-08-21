<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo 'css/style.css?v=' .filemtime('css/style.css'); ?>" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <title>Euro Hoje</title>
    </head>
    <body class="cambio_pag">
        <form action="integra_cambio.php">
            <div class="frase_inicial">
                <label for="frase" class="frase">Gostaria saber o valor atual do Euro porém não tem tempo de ficar olhando todos os dias?</label>
            </div>
            <div class="form__group field">
                <input type="input" class="form__field" placeholder="Name" name="vl_euro" id='vl_euro' maxlength="4" required />
                <label for="vl_euro" class="form__label">Avisa-me quando o euro estiver no valor de:</label>
            </div>
            <div class="form__group field">
                <input type="input" class="form__field" placeholder="Name" name="celular" id='celular' maxlength="16"required />
                <label for="celular" class="form__label">Whatsapp</label>
            </div>
            <button type="submit">Enviar</button>
        </form>
        <script>

            function mascara(o,f){
                v_obj=o
                v_fun=f
                setTimeout("execmascara()",1)
            }
            function execmascara(){
                v_obj.value=v_fun(v_obj.value)
            }
            function mtel(v){
                v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
                v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
                v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
                return v;
            }
            function id( el ){
                return document.getElementById( el );
            }
            window.onload = function(){
                id('celular').onkeyup = function(){
                    mascara( this, mtel );
                }
            }
            function adicionarVirgulaAutomaticamente(event) {
                var input = event.target;
                var valor = input.value.replace(/[^\d]/g, ''); 
                if (valor.length > 1) {
                    valor = valor.slice(0, 1) + ',' + valor.slice(1);
                }
                input.value = valor;
            }
            document.getElementById('vl_euro').addEventListener('input', adicionarVirgulaAutomaticamente);

            //API WHATS
            // $.ajax({
            //     // url: 'http://127.0.0.1:8000/api/pedidos/' + id,
            //     method: 'PUT',
            //     data: { 
            //     chatId : "numeros",
            //     contentType: "tipo",
            //     Content : "mensagem"},
            //     success: function(response) {
            //         alert(response.message);
            //         location.reload();
            //     },
            //     error: function(error) {
            //         alert('Ocorreu um erro ao tentar atualizar o status, por favor, tente novamente!');
            //     }
            // }); 
        </script>
    </body>
</html>