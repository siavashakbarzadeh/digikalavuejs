<?php
namespace App\Lib;
use DB;
/*require_once 'nusoap.php';*/
use nusoap_client;
class zarinpal
{
    public $MerchantID;
    public function __construct()
    {
        $this->MerchantID="1982b9c0-1bbb-11e9-afa0-005056a205be";
    }




    public function pay($Amount,$Email,$Mobile)
    {
        $Description = 'فروش محصول';  // Required
        $CallbackURL = url('/order/'.$Mobile); // Required


        $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentRequest', [
            [
                'MerchantID'     => $this->MerchantID,
                'Amount'         => $Amount,
                'Description'    => $Description,
                'Email'          => $Email,
                'Mobile'         => $Mobile,
                'CallbackURL'    => $CallbackURL,
            ],
        ]);

        //Redirect to URL You can do it also by creating a form
        if ($result['Status'] == 100) {
            return $result['Authority'];
        } else {
            return false;
        }



    }

    public function paygridle($Amount,$Email,$Mobile)
    {
        $Description = 'فروش محصول';  // Required
        $CallbackURL = url('/user/order/'.$Mobile); // Required


        $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentRequest', [
            [
                'MerchantID'     => $this->MerchantID,
                'Amount'         => $Amount,
                'Description'    => $Description,
                'Email'          => $Email,
                'Mobile'         => $Mobile,
                'CallbackURL'    => $CallbackURL,
            ],
        ]);

        //Redirect to URL You can do it also by creating a form
        if ($result['Status'] == 100) {
            return $result['Authority'];
        } else {
            return false;
        }



    }
    public function paycoaching($Amount,$Email,$Mobile)
    {
        $Description = 'فروش محصول';  // Required
        $CallbackURL = url('/user/orders/'.$Mobile); // Required


        $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentRequest', [
            [
                'MerchantID'     => $this->MerchantID,
                'Amount'         => $Amount,
                'Description'    => $Description,
                'Email'          => $Email,
                'Mobile'         => $Mobile,
                'CallbackURL'    => $CallbackURL,
            ],
        ]);

        //Redirect to URL You can do it also by creating a form
        if ($result['Status'] == 100) {
            return $result['Authority'];
        } else {
            return false;
        }



    }
    public function pays($Amount,$Email,$Mobile)
    {
        $Description = 'فروش محصول';  // Required
        $CallbackURL = url('/user/orderss/'.$Mobile); // Required


        $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentRequest', [
            [
                'MerchantID'     => $this->MerchantID,
                'Amount'         => $Amount,
                'Description'    => $Description,
                'Email'          => $Email,
                'Mobile'         => $Mobile,
                'CallbackURL'    => $CallbackURL,
            ],
        ]);

        //Redirect to URL You can do it also by creating a form
        if ($result['Status'] == 100) {
            return $result['Authority'];
        } else {
            return false;
        }



    }
    public function paysrefreee($Amount,$Email,$Mobile)
    {
        $Description = 'فروش محصول';  // Required
        $CallbackURL = url('/user/ordersss/'.$Mobile); // Required


        $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentRequest', [
            [
                'MerchantID'     => $this->MerchantID,
                'Amount'         => $Amount,
                'Description'    => $Description,
                'Email'          => $Email,
                'Mobile'         => $Mobile,
                'CallbackURL'    => $CallbackURL,
            ],
        ]);

        //Redirect to URL You can do it also by creating a form
        if ($result['Status'] == 100) {
            return $result['Authority'];
        } else {
            return false;
        }



    }
}
