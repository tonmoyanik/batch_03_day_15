<?php
namespace App\classes;
class PasswordGenerator
{

    protected $length;
    protected $data = [];
    protected $password;
    protected $i;
    protected $index;

    public function __construct($post = null)
    {
        $this->length = $post['password_length'];
    }

        public function newPassword()
        {
            $this->data = ['#', '@', '1', 'A', 'a', ')', '6', '1', '8', '9', '*', '5' ];
            for ($this->i=0; $this->i < $this->length; $this->i++)
            {
               $this->index = rand(0,11);
               $this->password =  $this->data[$this->index];
            }
            return $this->password;

        }


}