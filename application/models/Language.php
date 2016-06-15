<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Language extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'languages';
    const DB_TablePK = 'lid';

    public $title = '';
    public $key= '';
    public $value= '';
} ?>