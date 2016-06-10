<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cities extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'cities';
    const DB_TablePK = 'cityid';

    public $title = '';
    public $countryid = '';
    public $key= '';
} ?>