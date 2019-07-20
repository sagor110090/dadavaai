<?php

namespace App\Http\Controllers;

use App\Client;
use App\Draft;
use App\Sent;
use App\Subscription;
use Illuminate\Support\Facades\Mail;
use Response;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MailController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mailbox');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function compose()
    {
        // Get all client
        $clients = Client::all()->sortByDesc('id');

        // Get all subscription
        $subscription = Subscription::all()->sortByDesc('id');

        return view('admin.compose', compact('clients', 'subscription'));
    }

    /**
     * Send mail.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMail(Request $request)
    {
        // Validate form data
        $rules = array(
            'subject' => 'required',
            'mailbody' => 'required',
        );

        // Return error message if validator fails
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()){
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        }

        // Check if email is set
        if (empty($request->mailto) && empty($request->email)){
            return response()->json(['errors' => ['email' => 'No email provided!']]);
        }

        // Array declaration
        $emails = array();

        // Check if mailto field is set
        if (isset($request->mailto)){
            // Get emails & explode them by comma
            $emails_temp = explode(';', $request->mailto);
            foreach($emails_temp as $key => $value){
                array_push($emails, $value);
            }
        }

        // Check if client mail field is set
        if (isset($request->email)){
            // Check if client mail field is set to all
            if ($key = array_search('All', $request->email) !== false){
                // Get all clients & subscription email
                $clients = Client::all();
                $subscription = Subscription::all();

                // Get emails by looping over
                foreach ($clients as $client){
                    array_push($emails, $client->email);
                }
                foreach ($subscription as $subscription){
                    array_push($emails, $subscription->email);
                }
            }else{
                foreach($request->email as $key => $value){
                    array_push($emails, $value);
                }
            }
        }

        // Send the mail
        Mail::send([], [], function($message) use ($request, $emails) {
            $message->from('no-replay@offtica.com');
            $message->bcc($emails);
            $message->subject($request->subject);
            $message->setBody($request->mailbody, 'text/html');
        });

        // Store to sentbox
        $sent = new Sent();
        $sent->mail_to = json_encode($emails);
        $sent->subject = $request->subject;
        $sent->mail_body = $request->mailbody;
        $sent->save();

        // Check if it is from draft
        if (isset($request->id)){
            // Get the draft $ delete it
            Draft::destroy($request->id);
        }

        return response()->json();
    }
}
