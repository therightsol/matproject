<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search_calculator extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'search_calculator';
    const DB_TablePK = 'shid ';
    
    public $uid = '';
    public $remaining= '';
    public $consumed= '';
} ?>