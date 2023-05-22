<?php

namespace App\Controllers;

use App\Models\Contact;
class HomeController extends Controller
{
  public function index ()
  {

    $contactModel = new Contact();


    // asi se hace una consulta llamando la pagina de contact, se puede llamar a un metodo desde otro metodo, ya que el metodo query tiene un return con el objeto $this, lo que permite que el elemento $this completo se retorne y se use en el metodo get, que obtiene todas las consultas
    
    // return $contactModel->query('select * from contacts')->get();
    
    return $this->view('home', [
      'title' => 'home',
      'description' => 'esta es la pagina de home'
    ]);
  }
};