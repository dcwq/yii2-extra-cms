<?php

return array(

    'news' => [
        ['label'=>'News wyróżniony', 'name'=>'News wyróżniony', 'code'=>'is_featured', 'type'=>'checkbox', 'required'=>false],
    ],

    'article' => [
        ['label'=>'Microservices', 'type'=>'text'],
        ['label'=>'Description', 'type'=>'textarea'],
    ],

    'tutorials' => [
        ['label'=>'Poziom trudności', 'name'=>'Level', 'code'=>'level', 'type'=>'text', 'required'=>true],
        ['label'=>'Autor', 'name'=>'Autor', 'code'=>'author', 'type'=>'text', 'required'=>true],
    ],

    'documentation' => [
        ['label'=>'Iframe URL', 'name'=>'Iframe URL', 'code'=>'iframe_url', 'type'=>'text', 'required'=>true],
        ['label'=>'PDF URL', 'name'=>'PDF URL', 'code'=>'pdf_url', 'type'=>'text', 'required'=>false],
        ['label'=>'Product Version', 'name'=>'test', 'code'=>'product_version', 'type'=>'relation', 'required'=>true],
        ['label'=>'Data wydania', 'name'=>'Release date', 'code'=>'release_date', 'type'=>'date', 'required'=>true],

        ['label'=>'Paczka z dokumentacją', 'name'=>'Paczka z dokumentacją', 'code'=>'mkdocs', 'type'=>'mkdocs', 'required'=>false],
    ],

    'download' => [
//        ['label'=>'Files', 'type'=>'files'],
//        ['label'=>'Description', 'type'=>'textarea'],
//        ['label'=>'Versions', 'type'=>'relation'],
    ],

    'versions' => [
        ['label'=>'Files', 'type'=>'files'],
        ['label'=>'Description', 'type'=>'textarea'],
    ],

    /**
     * Single pages
     */

    'single-homepage' => [

        ['label'=>'Images header text', 'name'=>'Images header text', 'code'=>'images_header', 'type'=>'text', 'required'=>true],

        ['label'=>'Image left', 'name'=>'Image left', 'code'=>'image_left_1', 'type'=>'image', 'required'=>true],
        ['label'=>'Image right', 'name'=>'Image right', 'code'=>'image_right_1', 'type'=>'image', 'required'=>true],

        ['label'=>'Left image header', 'name'=>'Left image header', 'code'=>'left_image_header', 'type'=>'text', 'required'=>true],
        ['label'=>'Right image header', 'name'=>'Right image header', 'code'=>'right_image_header', 'type'=>'text', 'required'=>true],

        ['label'=>'Left image text', 'name'=>'Left image text', 'code'=>'left_image_text', 'type'=>'text', 'required'=>true],
        ['label'=>'Right image text', 'name'=>'Right image text', 'code'=>'right_image_text', 'type'=>'text', 'required'=>true],

        ['label'=>'Left image button text', 'name'=>'Left image button text', 'code'=>'left_image_btn', 'type'=>'text', 'required'=>true],
        ['label'=>'Right image button text', 'name'=>'Right image button text', 'code'=>'right_image_btn', 'type'=>'text', 'required'=>true],

        ['label'=>'Left image button link', 'name'=>'Left image button link', 'code'=>'left_image_link', 'type'=>'text', 'required'=>true],
        ['label'=>'Right image button link', 'name'=>'Right image button link', 'code'=>'right_image_link', 'type'=>'text', 'required'=>true],

        ['label'=>'Box 1 Title', 'name'=>'Box 1 Title', 'code'=>'box_1_title', 'type'=>'text', 'required'=>0],
        ['label'=>'Box 1 Line 1', 'name'=>'Box 1 Line 1', 'code'=>'box_1_line_1', 'type'=>'text', 'required'=>0],
        ['label'=>'Box 1 Line 2', 'name'=>'Box 1 Line 2', 'code'=>'box_1_line_2', 'type'=>'text', 'required'=>0],
        ['label'=>'Box 1 Button text', 'name'=>'Box 1 Button text', 'code'=>'box_1_button_text', 'type'=>'text', 'required'=>0],
        ['label'=>'Box 1 Button link', 'name'=>'Box 1 Button link', 'code'=>'box_1_button_link', 'type'=>'text', 'required'=>0],

        ['label'=>'Box 1 Image', 'name'=>'Box 1 Image', 'code'=>'box_1_image', 'type'=>'image', 'required'=>0],

    ],

    'single-contact' => [

        ['label'=>'Form header text', 'name'=>'Form header text', 'code'=>'form_header_text', 'type'=>'text', 'required'=>true],
        ['label'=>'Form categories', 'name'=>'Form categories', 'code'=>'form_categories', 'type'=>'options', 'required'=>true],

        ['label'=>'Company / Name', 'name'=>'Company / Name', 'code'=>'company_name', 'type'=>'text', 'required'=>true],
        ['label'=>'Company / KRS', 'name'=>'Company / KRS', 'code'=>'company_krs', 'type'=>'text', 'required'=>true],
        ['label'=>'Company / NIP', 'name'=>'Company / NIP', 'code'=>'company_nip', 'type'=>'text', 'required'=>true],
        ['label'=>'Company / REGON', 'name'=>'Company / REGON', 'code'=>'company_regon', 'type'=>'text', 'required'=>true],
        ['label'=>'Company / Adres', 'name'=>'Company / Adres', 'code'=>'company_address', 'type'=>'textarea', 'required'=>true],

        ['label'=>'Company / Map position', 'name'=>'Company / Map position', 'code'=>'company_map_position', 'type'=>'text', 'required'=>true],
    ]
);
