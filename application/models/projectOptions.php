<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class projectOptions extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = ' projectOptions';
    const DB_TablePK = 'umid';

    public $value = '';
    public $key= '';
} ?>