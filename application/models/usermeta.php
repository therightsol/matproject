<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usermeta extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'usermeta';
    const DB_TablePK = 'umid';

    public $uid = '';
    public $key= '';
    public $value = '';

} ?>