<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Country extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'countries';
    const DB_TablePK = 'countryid';

    public $title = '';
    public $key= '';
    public $value= '';
} ?>