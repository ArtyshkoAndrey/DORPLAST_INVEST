<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImagesRequest;
use App\Models\Images;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ImagesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ImagesCrudController extends CrudController
{
  use ListOperation;
  use CreateOperation;
  use UpdateOperation;
  use DeleteOperation;
  use ShowOperation;

  /**
   * Configure the CrudPanel object. Apply settings to all operations.
   *
   * @return void
   */
  public function setup()
  {
    CRUD::setModel(Images::class);
    CRUD::setRoute(config('backpack.base.route_prefix') . '/images');
    CRUD::setEntityNameStrings('картину', 'Картинки');
  }

  /**
   * Define what happens when the List operation is loaded.
   *
   * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
   * @return void
   */
  protected function setupListOperation()
  {
//    CRUD::setFromDb(); // columns

    $this->crud->addColumn(['name' => 'title', 'label' => 'Заголовок']);
    /**
     * Columns can be defined using the fluent syntax or array syntax:
     * - CRUD::column('price')->type('number');
     * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
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

  /**
   * Define what happens when the Create operation is loaded.
   *
   * @see https://backpackforlaravel.com/docs/crud-operation-create
   * @return void
   */
  protected function setupCreateOperation()
  {
    CRUD::setValidation(ImagesRequest::class);

//    CRUD::setFromDb(); // fields

    $this->crud->addField([
      'label' => "Заголовок",
      'name' => "title",
      'type' => 'text',
    ]);

    $this->crud->addField([
      'label' => "Картинка",
      'name' => "image",
      'type' => 'browse',
    ]);

    /**
     * Fields can be defined using the fluent syntax or array syntax:
     * - CRUD::field('price')->type('number');
     * - CRUD::addField(['name' => 'price', 'type' => 'number']));
     */
  }
}
