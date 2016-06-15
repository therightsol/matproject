<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Package extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'packages';
    const DB_TablePK = 'pid';

    public $title = '';
    public $key= '';
    public $value= '';
    public $allowed_searches= '';
    public $price= '';
    public $packageDuration= '';
} ?>