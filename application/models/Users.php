<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'users';
    const DB_TablePK = 'uid';
    
    public $username = '';
    public $firstname = '';
    public $lastname = '';
    
    
    public $email = '';
    public $password= '';
    public $conpassword= '';
    public $phoneNumber= '';
    public $profilePhoto = '';
    public $joiningDate = '';
    public $packageID = '';
    public $userRole = '';
    public $profilestauts = '';
    public $gender = '';
    public $isemailvarified= '';
    public $is_approved_by_admin= '';
    public $isActive = '';
    public $isDeleted = '';
    public $DeletedBy = '';
    

} ?>