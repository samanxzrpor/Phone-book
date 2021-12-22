<?php
namespace App\Controllers;

use App\Models\Contact;
use App\Core\Request;

class Contacts
{
    private $contactModel ;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    
    public function add(array $getParams = null)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $params = $_POST;

            # if Number Not Exists in Database
            if ($this->contactModel->getCount(['number'=>$params['number']]) !== 0) 
                $data['bad-notif'] = 'این شماره همراه قبلا ثبت شده است';
           
            # create new User
            if (filter_var($params['email'] , FILTER_VALIDATE_EMAIL) == false)
                $data['bad-notif'] = 'ایمیل شما معتبر نمیباشد';
    
            if (!is_numeric($params['number']))
                $data['bad-notif'] = 'شماره همراه شما معتبر نمیباشد';
    
            if (isset($data['bad-notif']))
                echo $data['bad-notif'];

            if (!isset($data['bad-notif'])) {
                $this->contactModel->create([
                    'email' => $params['email'],
                    'name' => $params['name'],
                    'number' => $params['number']
                ]);

            }
        }

    }


}