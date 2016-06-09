<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 

class MY_Model extends CI_Model {

    const DB_TableName = 'users';
    const DB_TablePK = 'userID';

    public function insertRecord() { 
        //if(isset($this->DB_TablePK)){ echo 'hiiiiiiii';};
       // echo '<tt><pre>' . var_export($this, True) . '</pre></tt>';
        $this->db->insert($this::DB_TableName, $this);
        $this->{$this::DB_TablePK} = $this->db->insert_id();
         return $this->db->insert_id();
        //echo $this->{$this::DB_TablePK};
        //if(isset($this->{$this::DB_TablePK})){ echo 'hiissdfsfiiiiii';};
        //echo '<tt><pre>' . var_export($this->{$this::DB_TablePK}, True) . '</pre></tt>';
    }

    public function deleteRecord($columnName, $value) { 
       
            $this->db->where($columnName, $value);
            $success = $this->db->delete($this::DB_TableName); 
            return $this->db->affected_rows(); 
      
    }
    
    /**
     * Update record.
     * @param type $data is an array of data that is  need to update.
     * @param type $columnName is the column name where this data has to be updated
     * @param type $update_where is the id , where acutlly data has to be updated
     * @return type , 1 or nothing. if successful then it returns 1 else nothing.
     */
    public function updateRecord($columnName = 'customerID', $data='' , $update_where='', $nameOfUpdatingColumn=False) {
        if($nameOfUpdatingColumn){
            $data = array(
              $nameOfUpdatingColumn => $data,  
            );
            return $this->db->update($this::DB_TableName, $data, array($columnName => $update_where));
        }else{
            $this->db->update($this::DB_TableName, $data, array($columnName => $update_where));
            return $this->db->affected_rows();
        } 
    }
    
    /*
     * This function will get / fetch record for specific columns.
     * for example:
     * SELECT `userName`, `Name`, `PhoneNumber`, `EmailAddress` FROM `users` WHERE `isRegularCustomer` = 1
     * 
     * here, $columns is array that will contains DB_Column_Names
     *       $where_columnName is column name for where clause.
     *       $$whereValue is simply where value.
     */
    public function getSpecificColumnRec($columns = FALSE, $where_array = false){
        if($columns){
            $this->db->select($columns);
        }
        $query = $this->db->get_where($this::DB_TableName, $where_array);
        return $query->result_array();
        
    }

    public function getRecord_like($columAndvalues = FALSE, $limit = FALSE, $like = FALSE, $like_value = FALSE) {
        if ($columAndvalues) {
            $this->db->where($columAndvalues);
        }
        if($limit){
            $this->db->order_by($this::DB_TablePK, "desc");
            $this->db->limit($limit);
        }
        if($like){
            $this->db->like($like, $like_value);
        }
        $query = $this->db->get($this::DB_TableName);

        return $query->result_array();

    }
    
    /*
     * countRow('isApproved', 1);
     */
    
     public function countRow($columns = FALSE, $whereValue = FALSE){
        $this->db->like($columns, $whereValue);
        $this->db->from($this::DB_TableName);
        return $this->db->count_all_results();
        
    }
    
    /*
     * get_condition_record($condition = array('name' => 'ali', 'class' => 2))
     * get_condition_record($condition , array('name', class))
     */
    
      public function get_conditon_record($columAndvalues = FALSE, $columns = FALSE, $order = FALSE) { 
          if ($columAndvalues && $columns) {
            $query = $this->db->select($columns);
            $query = $this->db->where($columAndvalues);
            $query = $this->db->get($this::DB_TableName);
            return $query->result_array();
            }elseif ($columAndvalues && $order) {
            $query = $this->db->where($columAndvalues);
            $query = $this->db->order_by($order, "desc"); 
            $query = $this->db->get($this::DB_TableName);
            return $query->result_array();
        
        }elseif($columAndvalues){
            $query = $this->db->where($columAndvalues);
            $query = $this->db->get($this::DB_TableName);
            return $query->result_array();
          }
      }
      
      public function updateBatch($column, $whereValue) {
          $query = $this->db->update_batch($this::DB_TableName, $column, $whereValue);
           return $query;
      }
      public function insertBatch($data){
          $query = $this->db->insert_batch($this::DB_TableName, $data);
          $this->inserted_num_rows = $this->db->affected_rows();
          return $this->inserted_num_rows;
      }
      
      public function getDateRange($columnName, $date1, $date2, $key = FALSE, $value = FALSE){
            $this->db->where($columnName.' >=', $date1);
            $this->db->where($columnName.'<=', $date2);
          if($key){
              $query = $this->db->get_where($this::DB_TableName, array($key => $value));

          }else{
              $query = $this->db->get($this::DB_TableName);
          }
          if ($query->num_rows() > 0) {
                return $query->result();
                } else {
                return false;
            }
      }
      
    // SELECT * FROM username WHERE id = 5, -- (Specific user full record means, if user have multiple records (rows))
    public function getRecord($whereValue = False, $columnName = FALSE, $specific_user_fullRecord = False) {
        if ($whereValue) {
            $query = $this->db->get_where($this::DB_TableName, array($columnName => $whereValue));
            if($specific_user_fullRecord){
                return $query->result_array();
            }else{
               return $query->row(); 
            } 
        }else if($columnName){
            $this->db->select($columnName);
            $query = $this->db->get($this::DB_TableName); 
            return $query->result_array();
        } 
        
        $query = $this->db->get($this::DB_TableName);
        return $query->result_array();
    }
    /**
    public function getRecord_like($columnName, $pattern, $just_LIKE = FALSE){
        
        if($just_LIKE){
            $sql = "SELECT * FROM " .$this::DB_TableName. " WHERE " . $columnName. " LIKE '". $pattern . "'"; 
            $query = $this->db->query($sql); 
            return $query->result_array();
        }
        
        $sql = "SELECT * FROM " .$this::DB_TableName. " WHERE " . $columnName. " LIKE '%". $pattern . "%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function getRecord_whereClause($firstColumn = FALSE, $firstMatchValue = FALSE, $secondColumn = FALSE, $secondMatchValue = FALSE){
        $sql = "SELECT * FROM " . $this::DB_TableName ." WHERE " . $firstColumn . " = '" . $firstMatchValue . "' AND " . $secondColumn . " = '"  . $secondMatchValue . "'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
   

     * This function will fetch all data OR limited data from Database.
     * This function will take table name from where data will fetch.
     * @param type $tableName, string that contain the table name.
     * @param type $limit_start, integer type, if set then this is starting point of fetching records from DB
     * @param type $limit_end, integer type, if set then this is end point of fetching records from DB
     * @return type, array of data.
     */
    public function get_all_Record_withTable($tableName = FALSE, $limit_end = FALSE, $limit_start = 0, $columnName = False, $sort = FALSE, $columAndvalues = FALSE) { 
        if($columAndvalues){
            $query = $this->db->where($columAndvalues);
            $query = $this->db->get($tableName, $limit_end, $limit_start); 
            return $query->result_array();
        }
        
        if($limit_end){
            $query = $this->db->get($tableName, $limit_end, $limit_start);
            return $query->result_array();
        }else if($tableName && $columnName && $sort){
            $this->db->order_by($columnName, $sort); 
            $query = $this->db->get($tableName);
            return $query->result_array();
        }else{ 
            $query = $this->db->get($tableName);
            return $query->result_array();
        }
        
    } 
    
    /**
     * This function will tell how many rows are there in a table.
     * This function take a string type argument that have table name.
     * @param type $tableName, string that contain the table name.
     * @return type, return how many rows are in that table.
     */
    public function getNumber_of_rows($tableName, $columnName = FALSE, $where_value = FALSE, $customQuery = FALSE, $columAndvalues = FALSE, $tableName = FALSE ){
        
        // if there is any special case, in which we want to fetch data with custom query.
        // then we will use customQuery as True. and so, this block of code will execute.
        // we must have to provide some column names and their values.
        //
        // currently used to fetch customers data to display view all customers data.
        if($customQuery && $columAndvalues && $tableName){
            $query = $this->db->where($columAndvalues);
            $query = $this->db->get($tableName);
             
            return $query->num_rows();
        }
        
        // if we want to fetch number of rows with some kind of limitation than
        // we can give columnName and whereValue.
        
        if($columnName && $where_value){
             
            $query = $this->db->get_where($this::DB_TableName, array($columnName => $where_value));
            return $query->num_rows();
        }
        
        // If we want to fetch total number of arrays in a table.
        
        $query = $this->db->get($this::DB_TableName);
        return $query->num_rows();
    }

    public function sql_join_two($where_value, $second_table, $join_where){
        $this->db->select('*');
        $this->db->from($this::DB_TableName);
        $this->db->join($second_table, $join_where, 'inner');

        if($where_value){
            $this->db->where($where_value);
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function sql_join_multi($where_value = false, $array){
        $this->db->select('*');

        $this->db->from($this::DB_TableName);

        foreach($array as $key => $value){
            $this->db->join($key, $value, 'inner');
        }

        if($where_value){
            $this->db->where($where_value);
        }
        $query = $this->db->get();
        return $query->result_array();
    }
    public function sql_join_left($where_value, $second_table, $join_where){
        $this->db->select('*');
        $this->db->from($this::DB_TableName);
        $this->db->join($second_table, $join_where, 'left');

        if($where_value){
            $this->db->where($where_value);
        }
        $query = $this->db->get();
        return $query->result_array();
    }
    public function like($like_value){
        $this->db->like($like_value);
        $query = $this->db->get($this::DB_TableName);

        return $query->result_array();
    }
 
} ?>