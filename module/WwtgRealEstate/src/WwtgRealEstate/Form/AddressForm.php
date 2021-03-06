<?php
namespace WwtgRealEstate\Form;

use Zend\Form\Form;

class AddressForm extends Form {

    public function __construct($name = null){

        //we want to ignore the name passed
        parent::__construct('address');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'AddressId',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));

        $this->add(array(
            'name' => 'longitude',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Longitude',
            ),
        ));
        $this->add(array(
            'name' => 'latitude',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Latitude',
            ),
        ));
        $this->add(array(
            'name' => 'street',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'street',
            ),
        ));
        $this->add(array(
            'name' => 'phone',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Phone',
            ),
        ));
        $this->add(array(
            'name' => 'housenr',
            'attributes' => array(
                'type' => 'integer',
            ),
            'options' => array(
                'label' => 'House number',
            ),
        ));
        $this->add(array(
            'name' => 'housenr_ext',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'House number extension',
            ),
        ));
        $this->add(array(
            'name' => 'postcalcode',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Postal code',
            ),
        ));
        $this->add(array(
            'name' => 'state',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'State',
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
        $this->add(array(
            'name' => 'countryName',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Country',
            ),
        ));
        $this->add(array(
            'name' => 'locationName',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Location',
            ),
        ));
        $this->add(array(
            'name' => 'areaName',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Area',
            ),
        ));


    }

}