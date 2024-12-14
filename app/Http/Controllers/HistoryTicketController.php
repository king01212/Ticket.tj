<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Users_ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HistoryTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketsID = DB::table('users_tickets')
            ->where('user_id', Auth::id())
            ->get('ticket_id');

        $arrayTicketId = [];
        foreach ($ticketsID as $ticketId)
        {
            foreach ($ticketId as $item => $key)
            {
                array_push($arrayTicketId, $key);
            }
        }

        $arrayTickets = [];

        for ($i=0; $i<count($arrayTicketId); $i++){
            $arrayTickets[$i] = DB::table('tickets')
                ->where('id', $arrayTicketId[$i])
                ->first();
        }


        return view('history', ["tickets" => $arrayTickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
