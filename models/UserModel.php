<?php
/**
 *
 * UserModel extends the DbConfig PDO class to interact with the auth DB table
 */
class UserModel extends DbConfig
{

    /**
     * @var array available columns in the DB
     */
    protected $_columns = ['id', 'name', 'email'];

    /**
     * Initialises the $_db config variable
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $id | null
     * @return return selectted data
     */
    public function get($id = null)
    {
        $sql = "SELECT * FROM users WHERE 1=1";
        $placeholders = [];
         if($id != null){
                 $sql .= ' AND id = :id';
            $placeholders[':id'] = $id;
         }
        return $this->select($sql, $placeholders);
    }
    /**
    * @param $data
    * @return insert success
    *
    ****/
    public function create($data){
          $sql = "INSERT INTO users (name, email) VALUES (:name, :email);";
          $placeholders = [":name"=>$data->name, ":email"=>$data->email];
         $result = $this->insert($sql, $placeholders);
        return $result;
    }

    /**
     * @param $id | $data
     * @return return edit success
     */
    public function edit($id, $data)
    {
        $sql = "UPDATE users SET email= :email, name= :name WHERE id= :id;";
        $placeholders = [":name"=>$data->name, ":email"=>$data->email, ":id"=>$id];
        return $this->update($sql, $placeholders);
    }
    /**
    * @param $id
    * @return remove success
    *
    ****/
    public function remove($id){
          $sql          = "DELETE FROM users WHERE id=:id;";
        $placeholders = [":id"=>$id];

        return $this->delete($sql, $placeholders);
     }
} 