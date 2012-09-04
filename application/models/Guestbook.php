<?php

class Application_Model_Guestbook
    extends Zend_Db_Table_Abstract
{
    protected $_name = 'guestbook';
    
    public function save(array $values)
    {
        $data = array(
            'email'=> $values['email'],
            'comment'=> $values['comment'],
            'created'=> $values['created'],
            'id' => isset($values['id']) ? (int)$values['id'] : null
        );
        
        if (null === $data['id']) {
            $this->insert($data);
        } else {
            $this->update($data, array('id = ?' => $data['id']));
        }
    }
    
    public function latest() 
    {
        $select = $this->select()
                    ->order('id DESC');
        return $select;
    }
}

