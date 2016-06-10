<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class interests extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'interests';
    const DB_TablePK = 'interestid';

    public $title = '';
    public $key= '';
} ?>