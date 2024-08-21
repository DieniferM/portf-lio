<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['vl_euro']) && !empty($_POST['celular'])) {
        $valorEuro = $_POST['vl_euro'];
        $celular = $_POST['celular'];

        // Função para buscar as cotações do euro
        function fetchExchangeRates() {
            $response = file_get_contents('https://economia.awesomeapi.com.br/json/last/EUR-BRL');
            $data = json_decode($response, true);
            // Verifica se a solicitação foi bem-sucedida
            if ($data && isset($data['EURBRL']['bid'])) {
                $euroValue = floatval($data['EURBRL']['bid']);
                return $euroValue;
            } else {
                return false;
            }
        }

        $euroValue = fetchExchangeRates();

        if ($euroValue !== false) {
            if ($euroValue <= $valorEuro) {
                enviarMensagemWhatsApp($celular, "O valor do euro é $euroValue. Você será notificado quando atingir ou ultrapassar $valorEuro.");
            } else {
                enviarMensagemWhatsApp($celular, "O valor do euro é $euroValue.");
            }
        } else {
            echo "Erro ao buscar as cotações do euro.";
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
} else {
    echo "Método de requisição inválido.";
}

// Função para enviar mensagem para o celular via WhatsApp

function enviarMensagemWhatsApp($numero, $mensagem) {
    $url = 'https://api2024.dienifermendonca.tech/cambio.php';
    $apiKey = 'comunidadezdg.com.br'; 
    $data = array(
        'phone' => $numero,
        'message' => $mensagem
    );

    $options = array(
        'http' => array(
            'header'  => "Content-Type: application/json\r\n" .
                         "Authorization: Bearer $apiKey\r\n",  // Se precisar de autenticação com Bearer Token
            'method'  => 'POST',
            'content' => json_encode($data),
        ),
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) {
        // Handle error
        return "Erro ao enviar mensagem.";
    }

    return $result;
}

// Teste a função
$numero = '5521999999999';  // Substitua com o número de telefone de teste
$mensagem = 'Olá, esta é uma mensagem de teste!';
$response = enviarMensagemWhatsApp($numero, $mensagem);
echo $response;

?>

