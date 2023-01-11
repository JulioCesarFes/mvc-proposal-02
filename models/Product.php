<?php class Product extends Model {

	protected static $table = 'products';
	protected static $permitted = ['name'];

	public $id;
	public $name;
}