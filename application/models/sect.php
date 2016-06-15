<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sect extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'sect';
    const DB_TablePK = 'sid';

    public $title = '';
    public $key= '';
    public $value= '';

} ?>
