<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class sect extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'sect';
    const DB_TablePK = 'sid';

    public $title = '';
    public $key= '';
} ?>