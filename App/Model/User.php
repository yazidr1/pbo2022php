<?php 
namespace App\Model;

use Core\Model;

class User extends Model
{
    // VAR
    // protected
    protected $id; //int
    protected $username; //str
    protected $password; //str

    // public
    public $email; //str

    // METHODS
    public function login(): void
    {
        # code...
    }

    public function register(): void
    {
        # code...
    }
}
?>