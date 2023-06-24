<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\DataTables\ClientDataTable;
use App\DataTables\ClientsDataTable;
use App\DataTables\EmployeeDataTable;
use App\Models\Employee;
use App\Services\ClientsService;
use App\Services\EmployeesService;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the clients.
     *
     * @param  EmployeeDataTable  $dataTable
     * @return \Illuminate\View\View
     */
    public function index(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('employees.index');
    }

    /**
     * Show the form for creating a new client.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created client in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // Add any other validation rules you need
        ]);
        $client = new Employee();
        $client->name = $request->input('name');
        $client->save();
        // Client::create($request->all());

        return ['message' => 'Client created successfully'];

    }

    /**
     * Display the specified client.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\View\View
     */
    public function show(Employee $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified client.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\View\View
     */
    public function edit(Employee $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified client in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            // Add any other validation rules you need
        ]);

        $employee->update($request->all());

        return ['message' => 'Employee created successfully'];

    }

    /**
     * Remove the specified client from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Employee $employee)
    {

        // Delete the emplo$employee
        $employee->delete();

        return ['message' => 'Client deleted successfully'];

    }

    public function generateSelectOptions(Request $request)
    {
        $data = [];
        if ($request->has('q')) {
            $search = $request->has('q') ? $request->q : '';
            $data = EmployeesService::generateSelectOptions($search);
        }
        return response()->json($data);
    }
}