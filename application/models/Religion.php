<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Religion extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'religion';
    const DB_TablePK = 'rid';

    public $title = '';
    public $key= '';
    public $value = '';
} ?>