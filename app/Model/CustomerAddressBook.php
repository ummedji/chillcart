<?php
App::uses('Model', 'Model');

class CustomerAddressBook extends Model
{
    public $name = "CustomerAddressBook";
    public $belongsTo = array(
        'State' => array('className' => 'State',
            'foreignKey' => 'state_id',
            'dependent' => true),
        'Customer' => array('className' => 'Customer',
            'foreignKey' => 'customer_id',
            'dependent' => true),
        'Location' => array('className' => 'Location',
            'foreignKey' => 'location_id',
            'dependent' => true),
        'City' => array('className' => 'City',
            'foreignKey' => 'city_id',
            'dependent' => true),
    );
}
