<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests;
use App\Http\Requests\AccountsRequest;
use App\Region;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AccountsController extends Controller
{
    /**
     * @return View
     * go to show all the accounts
     */
    public function index()
    {

        $accounts = Account::orderBy('fname', 'asc')->get();

        return view('accounts.accounts', compact('accounts'));
    }

    /**
     * @return View
     * create an account
     */
    public function create()
    {


        $items = Region::select()
                ->distinct()
                ->lists('name','id')->all();

        return view('accounts.register',compact('items','status'));
    }

    //save
    /**
     * @param AccountsController $request
     *
     */
    public function store(AccountsRequest $request)
    {

        Account::create($request->all());

       return redirect('accounts');
    }

    /**
     * Show an indiviidual account
     * @param $id
     * @return View
     */

    public function show($id)
    {
        $user = Account::FindOrFail($id);

        return view('accounts.show', compact('user'));
    }

    /**
     * Edit methhode
     * @param $id
     * @return Factory|View
     */
    public function edit($id)
    {

        $account = Account::findOrFail($id);

        return view('accounts.edit', compact('account'));
    }

    /*
     *
     * update with validation
     * */
    public function update($id, AccountsRequest $request)
    {

        $account = Account::findOrFail($id);

        $account->update($request->all());

        return redirect('accounts');
    }
}
