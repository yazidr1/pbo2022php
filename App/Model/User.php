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
    public function login()
    {
        echo "login berhasil";
    }

    public function register(): void
    {
        # code...
    }
}
?>