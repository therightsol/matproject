<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class profession extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'professions';
    const DB_TablePK = 'pid';

    public $title = '';
    public $key= '';
} ?>