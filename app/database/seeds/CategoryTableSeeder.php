<?php
use TicketManager\Entities\Category;

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        Category::create(['Class_Id' => '2', 'level' => '1','Description' => 'SISTEMA SPRING','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2', 'level' => '1','Description' => 'SOFTWARE ROKYS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','level' => '1','Description' => 'SOFTWARE OFICINA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','level' => '1','Description' => 'HARDWARE','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);

        Category::create(['Class_Id' => '2','Sub_Id' => '1','level' => '2','Description' => 'LOGISTICA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '1','level' => '2','Description' => 'CUENTAS X PAGAR','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '1','level' => '2','Description' => 'CUENTAS X COBRAR','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '1','level' => '2','Description' => 'PLANILLAS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '1','level' => '2','Description' => 'CONTABILIDAD','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '1','level' => '2','Description' => 'ACTIVO FIJO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '1','level' => '2','Description' => 'RECURSOS HUMANOS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);

        Category::create(['Class_Id' => '2','Sub_Id' => '2','level' => '2','Description' => 'PUNTO VENTA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '2','level' => '2','Description' => 'CONSULTAS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '2','level' => '2','Description' => 'INVENTARIO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '2','level' => '2','Description' => 'TAREO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '2','level' => '2','Description' => 'ASISTENCIA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '2','level' => '2','Description' => 'COMPLEMENTO CAJA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '2','level' => '2','Description' => 'MARCKETING','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);

        Category::create(['Class_Id' => '1','Sub_Id' => '3','level' => '2','Description' => 'ANTIVIRUS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '3','level' => '2','Description' => 'OFIMATICA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '3','level' => '2','Description' => 'CLIENTE CORREO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '3','level' => '2','Description' => 'SOFTWARE TELEFONIA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);

        Category::create(['Class_Id' => '1','Sub_Id' => '4','level' => '2','Description' => 'ORDENADOR','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '4','level' => '2','Description' => 'EQUIPO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '4','level' => '2','Description' => 'REDES','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '4','level' => '2','Description' => 'TELEFONIA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);

        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'RECEPCION ORDEN DE COMPRA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'RECEPCION CONTRATOS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'RECEPCION VENTAS GRUPO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'INGRESO COMPRA MERCADERIA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'INGRESO COMPRA EFECTIVO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'INGRESO COMPRA BONIFICACION','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'CONSUMO MANUALES','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'CONSUMO PERSONAL','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'TRANSFERENCIA ENTRE AREAS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'TRANSF. TIENDAS MISMA EMPRESA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'REQUERIMIENTO PROGRAMADO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'REQUERIMIENTO LIBRE','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'PLANTILLAS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'FACTURACION ENTRE TIENDAS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'PLAN DE VENTAS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'AJUSTE DE ALMACEN','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'CONGELAR ALMACEN','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'CONTEO FISICO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'AUTORIZACION A USUARIO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '2','Sub_Id' => '5','level' => '3','Description' => 'KARDEX','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);

        Category::create(['Class_Id' => '1','Sub_Id' => '23','level' => '3','Description' => 'PC','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '23','level' => '3','Description' => 'LAPTOP','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '23','level' => '3','Description' => 'SERVIDOR','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '23','level' => '3','Description' => 'MOVIL','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);

        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'MONITOR','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'TECLADO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'MOUSE','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'CAMARA WEB','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'ESTABILIZADOR','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'UPS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'IMPRESORAS','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'SCANER','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'COPIADORA','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'MULTIFUNCIONAL','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'CIRCUITOS DIGITALES','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'ACCESS POINT','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '24','level' => '3','Description' => 'SWITCH','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);

        Category::create(['Class_Id' => '1','Sub_Id' => '47','level' => '4','Description' => 'LENOVO','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '47','level' => '4','Description' => 'HP','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '47','level' => '4','Description' => 'ACER','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '47','level' => '4','Description' => 'DELL','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);
        Category::create(['Class_Id' => '1','Sub_Id' => '47','level' => '4','Description' => 'COMPATIBLE','Status' => true,'RegisterBy' => 'ROOT','LastUser' => 'ROOT']);



    }
} 