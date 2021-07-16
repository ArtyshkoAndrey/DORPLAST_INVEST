<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsesRequest;
use App\Models\Newses;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NewsesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class NewsesCrudController extends CrudController
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
    CRUD::setModel(Newses::class);
    CRUD::setRoute(config('backpack.base.route_prefix') . '/newses');
    CRUD::setEntityNameStrings('новости', 'новость');
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

    /**
     * Columns can be defined using the fluent syntax or array syntax:
     * - CRUD::column('price')->type('number');
     * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
     */
    $this->crud->addColumn(['name' => 'title', 'label' => 'Заголовок']);
    $this->crud->addColumn(['name' => 'description', 'label' => 'Описание']);
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
    CRUD::setValidation(NewsesRequest::class);

//    CRUD::setFromDb(); // fields
    $this->crud->addField([
      'label' => "Заголовок",
      'name' => "title",
      'type' => 'text',
    ]);
    $this->crud->addField([
      'label' => "Содержание",
      'name' => "content",
      'type' => 'wysiwyg',
    ]);
    $this->crud->addField([
      'label' => "Описание",
      'name' => "description",
      'type' => 'textarea',
    ]);
    $this->crud->addField([
      'label' => "Банер",
      'name' => "baner",
      'type' => 'browse',
    ]);
    /**
     * Fields can be defined using the fluent syntax or array syntax:
     * - CRUD::field('price')->type('number');
     * - CRUD::addField(['name' => 'price', 'type' => 'number']));
     */
  }
}
