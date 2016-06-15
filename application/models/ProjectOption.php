<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ProjectOption extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = ' projectoptions';
    const DB_TablePK = 'umid';

    public $key= '';
    public $value = '';

} ?>