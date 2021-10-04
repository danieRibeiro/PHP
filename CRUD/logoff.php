<?php
session_start();

// Destroi todos os indices da sessão
session_destroy();


// Redireciona para o index
header('location: index.php?login=logoff');
