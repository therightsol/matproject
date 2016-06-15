<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gender extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'gender';
    const DB_TablePK = 'gid';

    public $title = '';
    public $key= '';
    public $value= '';

} ?>