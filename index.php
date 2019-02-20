<?php
	/*Iniciando a interação com o PHP
	Saída de dados na tela do usuário
	comandos echo, var_dump, print_r

	//Comentário na linha
	
	#Comentário na linha
	
	/* Comentário em 
	várias linhas */


//echo "Olá, mundo!"; 

	/*Comandos de sáida

	echo "Primeira Aula PHP";
	print("Primeira Aula PHP²");

	$vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa');
	var_dump($vetor);

	$vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa');
	print_r($vetor);
	*/

	/*
	Toda váriavel inicia com $

	//$nome = "Pedro";
	//$sobrenome = "Ficuciello";
	echo "$nome $sobrenome";
	*/

	/* 
	Váriavel nunca começam com números
	Não possuem espaços.
	Não caracteres especiais.
	Não usar variáveis com mais de 15 caracteres.
	Usar palavras em minúsculo.
	Para variáveis compostas, segunda palavra em maiúsculo.
	Ex.: 'codPgto' 
	*/

	/*
	Váriaveis booleano

	$exibir_nome = true;

	if ($exibir_nome) {
		echo "José da Silva";
	}

	$exibir_nome = false;

	if ($exibir_nome) {
		echo "José da Silva";
	}
	*/

	/*
	$umidade = 81; //alterar para modificar

	$vai_chover = ($umidade > 90);

	if ($vai_chover) {
		echo "Está chovendo";
	} else {
		echo "Não está chovendo";
	}
	*/

	/*
	Váriavel do tipo numérico

	$a = 1234; //Número decimal
	$a = -1234; // Negativo
	$a = 0123; // Númeração octagonal
	$a = 0x1a; // Hexadecimal
	$a = 1.234 //Ponto Flutuante
	$a = 4e23 // Notações científicas
	*/

	/*
	Aspas dupla printa na tela
	Aspas simples dar valor para variável

	$variável = 'Isto é um teste';
	$variável = "Isto é um teste";
	*/

	//PHP se adapta a variável descrita

	/*
	Define a posição que quer imprimir

	$carros = array('Palio','Corsa', 'Gol');
	echo $carros [1];
	*/
		/**
		 * 
		 */


		/*
		class Computador
		{
			var $cpu;
			function ligar ()
			{
				echo "Ligando o Computador a {$this ->cpu}...";
			}
		}

		$obj = new Computador;
		$obj-> cpu="500mhz";
		$obj-> ligar();
		*/
?>