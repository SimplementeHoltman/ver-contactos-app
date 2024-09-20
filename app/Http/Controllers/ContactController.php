<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Obtener todos los contactos ordenados por la fecha de creación de forma descendente
        $contacts = Contact::orderBy('created_at', 'desc')->get();

        // Retornar la vista con los contactos
        return view('contacts.index', compact('contacts'));
    }
}
