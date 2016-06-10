<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class userProfile extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'userProfile';
    const DB_TablePK = 'upid';

    public $dob = '';
    public $interestedIn = '';
    public $religion= '';


    public $languages = '';
    public $sect= '';
    public $motherTongue= '';
    public $living_country= '';
    public $profileImages = '';
    public $joiningDate = '';
    public $living_city = '';
    public $base_city= '';
    public $base_country = '';
    public $profession = '';
    public $aboutme= '';
    public $interests= '';
    


} ?>