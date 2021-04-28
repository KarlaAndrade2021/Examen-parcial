<?php 
namespace App\Models;

use CodeIgniter\Model;

class Vendedor extends Model{
    protected $table      = 'vendedores';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    //llave primaria
    protected $primaryKey ='codigo_vendedor';
    //campos permitidos de la tabla
    protected $allowedFields=['nombre_vendedor','fecha_envio','producto','precio','cantidad','total'];
}