<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserProfile extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'userprofile';

    const DB_TablePK = 'upid';
    public $uid = '';

    public $dob = '';
    public $profileImages = '';
    public $interestedIn = '';
    public $religion= '';
    public $sect= '';
    public $languages = '';
    public $motherTongue= '';
    public $livingIn_Country= '';
    public $livingIn_city = '';
    public $base_country = '';
    public $base_city= '';
    public $profession = '';
    public $aboutme= '';
    public $interests= '';
    


} ?>