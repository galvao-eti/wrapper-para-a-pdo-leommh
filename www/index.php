<?php

	include_once ("../autoload.php");

	use Turma3\Wrapper;

	$wrapper = new Wrapper();

	

		// INSERIR
		$wrapper->inserirCategoria('Nova Categoria');

		// EDITAR
		// $wrapper->editarCategoria('ID','novo nome');

		// DELETAR
		// $wrapper->deletarCategoria('ID');

		// LISTAR
		// $wrapper->listarCategoria();

	

	$wrapper->listarCategorias();