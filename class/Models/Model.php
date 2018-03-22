<?php


namespace Models;


abstract class Model
{
    public const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = new \Db();
        return $db->query
        (
            'SELECT * FROM ' . static::TABLE,[], static::class
        );
    }


    public static function findOne($id)
    {
        $db = new \Db();
        $data = $db->query
        (
            'SELECT * FROM ' . static::TABLE . ' WHERE id=:id',
            [':id' => $id],
            static::class
        );
        return $data ? $data[0] : null;
    }

    public function insert()
    {
        $properties = get_object_vars($this);
        $fields = [];
        $data = [];
        foreach($properties as $field => $value)
        {
            if('id' == $field){
                continue;
            }
            $fields[] = $field;
            $data[':'.$field] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' 
        (' . implode(',', $fields) . ') VALUES 
        (' . implode(',', array_keys($data)) . ')';

        $db = new \Db();
        $db->execute($sql, $data);

        $this->id = $db->getLastInsertedId();
    }

    public function update()
    {
        $properties = get_object_vars($this);
        $fields = [];
        $data = [];
        foreach($properties as $field => $value)
        {
            if('id' == $field){
                continue;
            }
            $fields[] = $field . '=:' . $field;
            $data[':'.$field] = $value;
        }
        $sql = 'UPDATE ' . static::TABLE . ' SET 
        ' . implode(',', $fields) . ' WHERE id=:id';

        $data[':id'] = $this->id;


        $db = new \Db();
        $db->execute($sql, $data);
    }

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';

        $db = new \Db();
        $db->execute($sql, [':id'=>$this->id]);
    }

    public function save()
    {
        if(self::findOne($this->id) != null)
        {
            $this->update();
        } else
        {
            $this->insert();
        }
    }

}