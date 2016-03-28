<?php
/* janakiraman */
App::import('Vendor', 'Mpdf', array('file' => 'mpdf' . DS . 'mpdf.php'));
App::uses('CakeEmail', 'Network/Email');
App::uses('AppController', 'Controller');

class AboutusController extends AppController
{
    public $helpers = array('Html', 'Form', 'Session', 'Javascript');
    public $uses = array('Aboutus', 'User', 'CustomerAddressBook', 'City',
        'Location', 'State', 'Order', 'ShoppingCart',
        'StripeCustomer', 'Status', 'ProductImage', 'Notification', 'Review');
    public $components = array('Updown', 'Functions', 'Mpdf', 'CakeS3');

    /**
     * CustomersController::admin_index()
     * Admin View CustomerManagement
     * @return void
     */
    
    public function aboutus_index(){
        $this->render();
        
    }
    

}
