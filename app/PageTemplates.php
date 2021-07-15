<?php
/*
 * Copyright (c) 2021.
 * All code files are the property of the Fulliton Creator.
 * No one has the right to modify files without the consent of the creator.
 * The code is completely open and copyable is allowed.
 * GitHub https://github.com/ArtyshkoAndrey/
 */


namespace App;

trait PageTemplates
{
  /*
  |--------------------------------------------------------------------------
  | Page Templates for Backpack\PageManager
  |--------------------------------------------------------------------------
  |
  | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
  | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
  | template dropdown.
  |
  | Any fields defined here will show up after the standard page fields:
  | - select template
  | - page name (only seen by admins)
  | - page title
  | - page slug
  */

  private function index_page()
  {
    $this->crud->addField([   // CustomHTML
      'name' => 'metas_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>' . trans('backpack::pagemanager.metas') . '</h2><hr>',
    ]);
    $this->crud->addField([
      'name' => 'meta_title',
      'label' => trans('backpack::pagemanager.meta_title'),
      'fake' => true,
      'store_in' => 'extras',
    ]);
    $this->crud->addField([
      'name' => 'meta_description',
      'label' => trans('backpack::pagemanager.meta_description'),
      'fake' => true,
      'store_in' => 'extras',
    ]);
    $this->crud->addField([
      'name' => 'meta_keywords',
      'type' => 'textarea',
      'label' => trans('backpack::pagemanager.meta_keywords'),
      'fake' => true,
      'store_in' => 'extras',
    ]);


    $this->crud->addField([   // CustomHTML
      'name' => 's2_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>Секция 2</h2><hr>',
    ]);
    $this->crud->addField([
      'name' => 's2_header',
      'label' => 'Название компании',
      'type' => 'text',
      'fake' => true,
      'placeholder' => 'Название компании',
    ]);
    $this->crud->addField([
      'name' => 's2_content',
      'label' => 'Основной текст в секции',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Основной текст в секции',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's3_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>Секция 3</h2><hr>',
    ]);
    $this->crud->addField([   // CustomHTML
      'name' => 's3_1_separator',
      'type' => 'custom_html',
      'value' => '<br><h4>Пункт 1</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's3_header_1',
      'label' => 'Заголовок 1',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок 1',
    ]);
    $this->crud->addField([
      'name' => 's3_content_1',
      'label' => 'Содержание 1',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание 1',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's3_2_separator',
      'type' => 'custom_html',
      'value' => '<br><h4>Пункт 2</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's3_header_2',
      'label' => 'Заголовок 2',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок 2',
    ]);
    $this->crud->addField([
      'name' => 's3_content_2',
      'label' => 'Содержание 2',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание 2',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's3_3_separator',
      'type' => 'custom_html',
      'value' => '<br><h4>Пункт 3</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's3_header_3',
      'label' => 'Заголовок 3',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок 3',
    ]);
    $this->crud->addField([
      'name' => 's3_content_3',
      'label' => 'Содержание 3',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание 3',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's4_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>Секция 4</h2><hr>',
    ]);
    $this->crud->addField([
      'name' => 's4_short',
      'label' => 'Девиз компании',
      'type' => 'text',
      'fake' => true,
      'placeholder' => 'Девиз компании',
    ]);
    $this->crud->addField([
      'name' => 's4_header',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's4_list_separator',
      'type' => 'custom_html',
      'value' => '<br><h4>Список</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's4_list_1',
      'label' => 'Пункт 1',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Пункт 1',
    ]);
    $this->crud->addField([
      'name' => 's4_list_2',
      'label' => 'Пункт 2',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Пункт 2',
    ]);
    $this->crud->addField([
      'name' => 's4_list_3',
      'label' => 'Пункт 3',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Пункт 3',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's5_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>Секция 5</h2><hr>',
    ]);
    $this->crud->addField([
      'name' => 's5_header',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's6_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>Секция 6</h2><hr>',
    ]);
    $this->crud->addField([
      'name' => 's6_header',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's6_subheader',
      'label' => 'Подзаголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Подзаголовок',
    ]);
    $this->crud->addField([
      'name' => 's6_content',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's7_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>Секция 7</h2><hr>',
    ]);
    $this->crud->addField([
      'name' => 's7_header',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);

    $this->crud->addField([
      'name' => 's7_image',
      'label' => 'Изображение',
      'type' => 'browse',
      'fake' => true,
      'placeholder' => 'Изображение',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's7_list_separator',
      'type' => 'custom_html',
      'value' => '<br><h4>Список</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's7_list_1',
      'label' => 'Пункт 1',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Пункт 1',
    ]);
    $this->crud->addField([
      'name' => 's7_list_2',
      'label' => 'Пункт 2',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Пункт 2',
    ]);
    $this->crud->addField([
      'name' => 's7_list_3',
      'label' => 'Пункт 3',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Пункт 3',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's8_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>Секция 8</h2><hr>',
    ]);
    $this->crud->addField([
      'name' => 's8_header',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's8_separator_1',
      'type' => 'custom_html',
      'value' => '<br><h4>Пункт 2</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's8_list_header_1',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's8_list_content_1',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);
    $this->crud->addField([   // CustomHTML
      'name' => 's8_separator_2',
      'type' => 'custom_html',
      'value' => '<br><h4>Пункт 2</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's8_list_header_2',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's8_list_content_2',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);
    $this->crud->addField([   // CustomHTML
      'name' => 's8_separator_3',
      'type' => 'custom_html',
      'value' => '<br><h4>Пункт 2</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's8_list_header_3',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's8_list_content_3',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);
    $this->crud->addField([   // CustomHTML
      'name' => 's8_separator_4',
      'type' => 'custom_html',
      'value' => '<br><h4>Пункт 2</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's8_list_header_4',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's8_list_content_4',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's9_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>Секция 9</h2><hr>',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's9_separator_info',
      'type' => 'custom_html',
      'value' => '<br><h4>Информация</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's9_header_1',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's9_image_1',
      'label' => 'Изображение',
      'type' => 'browse',
      'fake' => true,
      'placeholder' => 'Изображение',
    ]);
    $this->crud->addField([
      'name' => 's9_content_1',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's9_separator_product_1',
      'type' => 'custom_html',
      'value' => '<br><h4>Продукция 1</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's9_header_2',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's9_image_2',
      'label' => 'Изображение',
      'type' => 'browse',
      'fake' => true,
      'placeholder' => 'Изображение',
    ]);
    $this->crud->addField([
      'name' => 's9_content_2',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's9_separator_product_2',
      'type' => 'custom_html',
      'value' => '<br><h4>Продукция 2</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's9_header_3',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's9_image_3',
      'label' => 'Изображение',
      'type' => 'browse',
      'fake' => true,
      'placeholder' => 'Изображение',
    ]);
    $this->crud->addField([
      'name' => 's9_content_3',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's9_separator_product_3',
      'type' => 'custom_html',
      'value' => '<br><h4>Продукция 3</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's9_header_4',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's9_image_4',
      'label' => 'Изображение',
      'type' => 'browse',
      'fake' => true,
      'placeholder' => 'Изображение',
    ]);
    $this->crud->addField([
      'name' => 's9_content_4',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's10_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>Секция 10</h2><hr>',
    ]);
    $this->crud->addField([
      'name' => 's10_header',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's10_subheader',
      'label' => 'Подзаголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Подзаголовок',
    ]);
    $this->crud->addField([
      'name' => 's10_content',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);
    $this->crud->addField([   // CustomHTML
      'name' => 's10_separator_1',
      'type' => 'custom_html',
      'value' => '<br><h4>Список</h4><hr>',
    ]);
    $this->crud->addField([
      'name' => 's10_list_1',
      'label' => 'Пункт 1',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Пункт 1',
    ]);
    $this->crud->addField([
      'name' => 's10_list_2',
      'label' => 'Пункт 2',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Пункт 2',
    ]);
    $this->crud->addField([
      'name' => 's10_list_3',
      'label' => 'Пункт 3',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Пункт 3',
    ]);

    $this->crud->addField([   // CustomHTML
      'name' => 's11_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>Секция 11</h2><hr>',
    ]);
    $this->crud->addField([
      'name' => 's11_header',
      'label' => 'Заголовок',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Заголовок',
    ]);
    $this->crud->addField([
      'name' => 's11_content',
      'label' => 'Содержание',
      'type' => 'textarea',
      'fake' => true,
      'placeholder' => 'Содержание',
    ]);
  }
}
