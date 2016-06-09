<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'users';
    const DB_TablePK = 'uid';
    
    public $username = '';
    
    
    public $email = '';
    public $password= '';
    public $phone_number= '';
    public $profile_image_path = '';
    public $joining_date = '';
    public $is_admin = '';
    public $is_member = '';
    public $is_organization = '';
    public $is_email_verified = '';
    public $is_approved_by_admin= '';
    

} ?>