<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'users';
    const DB_TablePK = 'uid';
    
    public $username = '';
    public $firstName = '';
    public $lastName = '';
    public $email = '';
    public $joiningDate = '';
    public $password= '';
    public $phoneNumber= '';
    public $profilePhoto = '';
    public $packageID = '';
    public $profilestatus = '';
    public $userrole = '';
    public $gender = '';
    public $isemailverified= '';
    public $isActive = '';
    public $isDeleted = '';
    public $DeletedBy = '';
    

} ?>