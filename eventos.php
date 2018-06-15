<?php
    //Conectando ao banco de dados
    //include "conexao.php";
    

    //$consulta = $conexao->query("SELECT * FROM eventos;"); 

    //while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
        //echo "Nome: {$linha['nome']} - E-mail: {$linha['email']}<br />";
        //$vetor[] = $linha;
    //}

    //Passando vetor em forma de json
    
    
    $evento = [
		"title" => "Programao ler livro",
		"start" => date('Y-m-d H:m:s')
	];
	
	$evento2 = [
		"title" => "teste 23333aasd",
		"start" => "2018-06-21 11:06:49",
		"end" => "2018-06-21 13:06:49"	
	
		];
	
	
	$eventos[] = $evento;
	$eventos[] = $evento2;
    
    
    echo json_encode($eventos);
    
?>


