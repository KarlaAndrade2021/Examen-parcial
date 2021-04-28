<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Vendedor;
class Vendedores extends Controller{
// metodo que permite mostrar la pagina de inicio
    public function index(){
        $vendedor = new Vendedor();
        //array con todos los registros de la tabla de la base de datos
        $datos['vendedores']=$vendedor->findAll();
        return view('vendedores/listarVendedores',$datos);
    }
    //metodo para ver formulario de ingreso de datos
    public function agregar(){
        return view('vendedores/nuevoVendedor');
    }
    //metodo que permite guardar datos del nuevo vendedor
    public function guardar(){
         //referencia al modelo
         $vendedor = new Vendedor();
         
        $datos=[
            'codigo_vendedor'=>$this->request->getVar('txtCod'),
            'nombre_vendedor'=>$this->request->getVar('txtNombre'),
            'fecha_envio'=>$this->request->getVar('txtFecha'),
            'producto'=>$this->request->getVar('txtProd'),
            'precio'=>$this->request->getVar('txtPrecio'),
            'cantidad'=>$this->request->getVar('txtCant'),
            'total'=>$this->request->getVar('txtTotal')
        ];
        //print_r($datos);
            //instruccion para agregar datos
            $vendedor->insert($datos);
            echo "Datos almacenados con exito";

        //permite visualizar inmediatamente los datos de la tabla vendedores
        return $this->response->redirect(base_url('/listarvendedores')); 
    }
    //metodo que permite eliminar registros de la tabla
    public function eliminar($codigo_vendedor=null){

        $vendedor = new Vendedor();

        $datosvendedor=$vendedor->where('codigo_vendedor',$codigo_vendedor)->first();

        //instruccion para eliminar datos
        $vendedor->where('codigo_vendedor',$codigo_vendedor)->delete($codigo_vendedor);
        //echo"Datos borarrados ".$Codigo_vendedor;

        //permite visualizar inmediatamente los datos de la tabla vendedores
        return $this->response->redirect(base_url('/listarvendedores')); 
        
        
    }
    //metodo que permite editar los datos de la tabla
    public function editar($codigo_vendedor=null){
        
        echo $codigo_vendedor;

        $vendedor=new Vendedor();
        $datos['vendedor']=$vendedor->where('codigo_vendedor',$codigo_vendedor)->first();

        return view('vendedores/actualizarVendedor',$datos);
    }
    //metodo que guarda y actualiza datos de la tabla
    public function actualizar(){
        
        $vendedor = new Vendedor();

        $datos=[
           
            'nombre_vendedor'=>$this->request->getVar('txtNombre'),
            'fecha_envio'=>$this->request->getVar('txtFecha'),
            'producto'=>$this->request->getVar('txtProd'),
            'precio'=>$this->request->getVar('txtPrecio'),
            'cantidad'=>$this->request->getVar('txtCant'),
            'total'=>$this->request->getVar('txtTotal')
        ];
        //recibiendo datos del codigo
        $codigo_vendedor=$this->request->getVar('txtCod');
        
        //instruccion para actualizar datos
        $vendedor->update($codigo_vendedor,$datos);
        
        return $this->response->redirect(base_url('/listarvendedores'));
    }
}