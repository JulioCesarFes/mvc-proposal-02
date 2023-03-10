<?php class ProductsController extends Controller {

	static $views_folder = 'products';

	function index () {
		$products = Product::all();
		self::render('index', get_defined_vars());
	}
	
	function show ($id) {
		$product = Product::find($id);
		self::render('show', get_defined_vars());
	}
	
	function new () {
		self::render('new', get_defined_vars());
	}
	
	function create () {
		Product::new($_POST);
		self::redirect('/produtos');
	}
	
	function edit ($id) {
		$product = Product::find($id);
		self::render('edit', get_defined_vars());
	}
	
	function update ($id) {
		$product = Product::find($id);
		$product->update($_POST);
		self::redirect('/produtos');
	}
	
	function destroy ($id) {
		Product::destroy($id);
		self::redirect('/produtos');
	}
}