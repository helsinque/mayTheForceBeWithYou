<?php
 
	require_once('WhatsAPI/src/whatsprot.class.php');
	
   	/**
	*  Informações necessárias (Passo 1 e 2)
	*  // Necessary Info (Steps 1 and 2)
	*/

	$username = "5511999999999"; 
	// Seu celular ex: 5511999999999';
	// Your phone number here 'number with international prefix but without + and 00';
	
	$nomeDoPerfil = "Your Name"; 
	// Seu apelido
	// Your nickname

	/**
	*  1. Obter o código de acesso WhatsApp ( Fornecido  via SMS "No aparelho celular" )
	*  // Getting the WhatsApp Code (Supplied bySMS in your cellphone)
	*/
		/*
		$identity = strtolower(urlencode(sha1($username, true)));
		$w = new WhatsProt($username, $identity, $nomeDoPerfil, true);
		$w->codeRequest();
		*/


	/**
	*  2. Obter a senha de acesso utilizando o código fornecido (Fornecido pela empresa via HTML "Em tela")
    	*  // Getting the WhatsApp Password (Supplied by HTML in your browser)
	*/
		/*
		$code = ''; //Colocar o Código pego no primeiro passo
		$identity = strtolower(urlencode(sha1($username, true)));
		$w = new WhatsProt($username, $identity, $nomeDoPerfil, true);
		$result = $w->codeRegister($code);
		$password = $result->pw;
		echo "Password is $password";
		*/

		
		
	/**
	*  3. Enviar a Mensagem.
	*	// Sending the message
	*/
		/**
		*  Informações necessárias (Passo 3)
		*  // Necessary Info (Step 3)
		*/

		$password = 'You Password'
		// Coloque a senha que foi gerada no 2º passo;
		// The password generated in the second step;
		
		/*
		$identity = strtolower(urlencode(sha1($username, true)));
		$w = new WhatsProt($username, $identity, $nomeDoPerfil, true);
		$w->Connect();
		$w->LoginWithPassword($password);
		$dst = '5511983991969';// Coloque o número de destino;
		$msg = 'texto da mensagem'// Coloque aqui o texto da mensagem;
		$w->sendMessage($dst , $msg);
		$w->disconnect();
		*/
 
?>
