<?php 
class postsController extends controller {

	public function index() {
		echo "Lista das postagens";
	}

	public function ver($url) {
		echo "Nome da noticia que veremos: ".$url;
	}
}