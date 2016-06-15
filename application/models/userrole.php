<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserRole extends MY_Model {



    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'userrole';
    const DB_TablePK = 'urid';

    public $title = '';
    public $key= '';
    public $value= '';
} ?>