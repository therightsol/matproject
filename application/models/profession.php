<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profession extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'profession';
    const DB_TablePK = 'pid';

    public $title = '';
    public $key= '';
    public $value= '';
} ?>