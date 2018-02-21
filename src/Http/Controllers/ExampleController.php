<?php

namespace SortableGrid\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends SortableGridController
{
    protected $initial_field = 'id';

    protected $initial_order = 'desc';

    protected $initial_perpage = 10;

    protected $fields = [
        'id'         => 'ID',
        'name'       => 'Nome',
        'email'     => 'E-mail',
        'created_at' => 'Criação',
        'Ações'
    ];

    protected $searchable_fields = [
        'name',
        'email',
    ];

    protected $orderly_fields = [
        'id',
        'name',
        'email',
        'created_at',
    ];

    /**
     * Devolve a coleção que será usada para a busca.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function getSearchableCollection()
    {
        return \App\User::query();
    }

    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->searchableView('sortablegrid::index');
    }
}
