<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('un produit', 'produits');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('identifier');
        //CRUD::column('image');
        CRUD::column('name');
        //CRUD::column('description');
        CRUD::column('price');
        CRUD::column('category_id');
        CRUD::column('has_discount');
        //CRUD::column('created_at');
        //CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);

        //CRUD::field('id');
        CRUD::addField([
				    'name'  => 'identifier',
				    'label' => "Identifiant",
				    'type'  => 'text',
				    'default' => uniqid(16)
				]);
        
        //CRUD::field('image');
        CRUD::addField([   // Upload
				    'name'      => 'image',
				    'label'     => 'Image',
				    'type'      => 'upload',
				    'upload'    => true,
				    'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
				    // optional:
				    // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
				]); 

        CRUD::field('name');
        CRUD::field('description');
        CRUD::field('price');
        
        //CRUD::field('category_id');
        CRUD::addField([  // Select
				   'label'     => "Categorie",
				   'type'      => 'select',
				   'name'      => 'category_id', // the db column for the foreign key

				   // optional
				   // 'entity' should point to the method that defines the relationship in your Model
				   // defining entity will make Backpack guess 'model' and 'attribute'
				   //'entity'    => 'category',

				   // optional - manually specify the related model and attribute
				   'model'     => "App\Models\Category", // related model
				   'attribute' => 'name', // foreign key attribute that is shown to user

				   // optional - force the related options to be a custom query, instead of all();
				   'options'   => (function ($query) {
				        return $query->orderBy('name', 'ASC')->get();
				    }), //  you can use this to filter the results show in the select
				]);

				CRUD::addField([
			    'name'  => 'has_discount',
			    'label' => 'Soldé',
			    'type'  => 'checkbox'
				]);

        //CRUD::field('created_at');
        //CRUD::field('updated_at');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
