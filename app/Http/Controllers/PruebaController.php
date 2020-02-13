<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Http\Controllers\Controller;

class PruebaController extends Controller{
	public function prueba($param){
		return 'Estoy dentro de PruebaController y recibi este parametro: '.$param ;
	}
}