<?php

use \App\Core\Routing\Routes;

Routes::get('/' , 'Home@index');

Routes::get('/Home/index' , 'Home@index');

Routes::post('/Contacts/add' , 'Contacts@add');

Routes::get('/Contacts/delete/{ID}' , 'Contacts@delete');


