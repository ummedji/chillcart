<?php
/* janakiraman */
App::uses('AppController', 'Controller');

class TestsController extends AppController
{
    public $helpers = array('Html', 'Form', 'Session', 'Javascript');
    
  //  public $uses = array('Aboutus', 'User', 'CustomerAddressBook', 'City',
  //      'Location', 'State', 'Order', 'ShoppingCart',
  //      'StripeCustomer', 'Status', 'ProductImage', 'Notification', 'Review');
  //  public $components = array('Updown', 'Functions', 'Mpdf', 'CakeS3');

    /**
     * CustomersController::admin_index()
     * Admin View CustomerManagement
     * @return void
     */
    
    public function test(){
        
        echo "here";die;
        
       // $this->layout = 'frontend';
       // $this->set('test');
    }
    

}
