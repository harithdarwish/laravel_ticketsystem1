<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;


class TicketController extends Controller
{
    //2. Create - use request 
    public function createTicket(Request $request){
        Ticket::create($request->all());
        return redirect('home'); //use return redirect 
    }

    //1. Read
    public function readAllTicket(){
        $tickets = Ticket::all();
        //dd($tickets);
       return view('home', compact("tickets"));
    }

    //3. Update 

    //edit: use find($id) to select the user data from the table
    public function viewTicketById($id){
        $ticket = Ticket::find($id);
        return view('edit-ticket',compact("ticket"));
    }

    //save the alter data by admin:
    public function modifiedTicket($id,Request $request){
        $ticket = Ticket::find($id);
        $ticket->name = $request->name;
        $ticket->phone = $request->phone;
        $ticket->email = $request->email;
        $ticket->status = $request->status;
        $ticket->level = $request->level;
        $ticket->msg = $request->msg;
        $ticket->save();

        return redirect('home'); //use return redirect 
    }


    //4. Delete
    public function deleteTicketById($id){
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect('home');

    }


}
