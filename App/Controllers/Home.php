<?php
namespace App\Controllers;

use App\Models\Contact;

class Home
{
    private $contactModel ;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    
    public function index(array $getParams = null)
    {
        $countOfPage = $this->contactModel->getCount()/20;
         # if search box is Empty
        $res = $this->contactModel->get(['ID[>=]'=>1] , '*');
        # if User Searched for something
        if (isset($_GET['search']) && !is_null($_GET['search']))
            $res = $this->contactModel->searchData($_GET['search']);
        # Give Data to Ui
        $data = ['contacts'=>$res , 'countOfPage'=>intval($countOfPage)];
        loadView('index' , $data);
    }


}