<?
error_reporting(0);
class Database{

    private $db_host = "localhost";  
    private $db_user = "root";  
    private $db_pass = "";  
    private $db_name = "tourreps";  

    public function connect(){
        if(!$this->con){
            $myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass);  
            if($myconn){
                $seldb = @mysql_select_db($this->db_name,$myconn); 
                if($seldb){
                    $this->con = true;
                    return true;  
                }else{
                    array_push($this->result,mysql_error()); 
                    die("Connection failed"); 
                }  
            }else{
                array_push($this->result,mysql_error());
                die("Connection failed");
            }  
        }else{  
            return true;  
        }   
    }

    public function insert($table,$params=array()){
        // Check to see if the table exists
         if($this->tableExists($table)){
            $sql='INSERT INTO `'.$table.'` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';
            $this->myQuery = $sql; 
            if($ins = @mysql_query($sql)){
                array_push($this->result,mysql_insert_id());
                return true; 
            }else{
                array_push($this->result,mysql_error());
                return false; 
            }
        }else{
            return false; 
        }
    }

    public function select($table, $rows = '*', $join = null, $where = null, $order = null, $limit = null){
        $q = 'SELECT '.$rows.' FROM '.$table;
        if($join != null){
            $q .= ' JOIN '.$join;
        }
        if($where != null){
            $q .= ' WHERE '.$where;
        }
        if($order != null){
            $q .= ' ORDER BY '.$order;
        }
        if($limit != null){
            $q .= ' LIMIT '.$limit;
        }
        $this->myQuery = $q; 
        if($this->tableExists($table)){
            $query = @mysql_query($q);
            if($query){
                $this->numResults = mysql_num_rows($query);
                for($i = 0; $i < $this->numResults; $i++){
                    $r = mysql_fetch_array($query);
                    $key = array_keys($r);
                    for($x = 0; $x < count($key); $x++){
                        if(!is_int($key[$x])){
                            if(mysql_num_rows($query) >= 1){
                                $this->result[$i][$key[$x]] = $r[$key[$x]];
                            }else{
                                $this->result = null;
                            }
                        }
                    }
                }
                return true; 
            }else{
                array_push($this->result,mysql_error());
                return false; // No rows where returned
            }
        }else{
            return false; // Table does not exist
        }
    }

    public function delete($table,$where = null){
         if($this->tableExists($table)){
            if($where == null){
                $delete = 'DROP TABLE '.$table; 
            }else{
                $delete = 'DELETE FROM '.$table.' WHERE '.$where; 
            }

            if($del = @mysql_query($delete)){
                array_push($this->result,mysql_affected_rows());
                $this->myQuery = $delete; 
                return true; 
            }else{
                array_push($this->result,mysql_error());
                return false; 
            }
        }else{
            return false; 
        }
    }

    public function update($table,$params=array(),$where){
        if($this->tableExists($table)){
            $args=array();
            foreach($params as $field=>$value){
                $args[]=$field.'="'.$value.'"';
            }
            $sql='UPDATE '.$table.' SET '.implode(',',$args).' WHERE '.$where;
            $this->myQuery = $sql; 
            if($query = @mysql_query($sql)){
                array_push($this->result,mysql_affected_rows());
                return true; 
            }else{
                array_push($this->result,mysql_error());
                return false; 
            }
        }else{
            return false; 
        }
    }

    
    private function tableExists($table){
        $tablesInDb = @mysql_query('SHOW TABLES FROM '.$this->db_name.' LIKE "'.$table.'"');
        if($tablesInDb){
            if(mysql_num_rows($tablesInDb)==1){
                return true; 
            }else{
                array_push($this->result,$table." does not exist in this database");
                return false; 
            }
        }
    }

    public function escapeString($data){
        return mysql_real_escape_string($data);
    }

    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }
}
?>