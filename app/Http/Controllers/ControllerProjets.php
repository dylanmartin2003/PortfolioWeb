<?php

namespace App\Http\Controllers;

use App\Models\Projets;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class ControllerProjets extends Controller
{
    private $send;

    /**
     * @throws \PHPMailer\PHPMailer\Exception
     */
    function smtpMailer($from, $body, $obj, $nom) {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->encodeHeader('UTF-8');
        $mail->encodeString('UTF-8');
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'contact.martindylan@gmail.com';
        $mail->Password = 'vrrratzgrpqdielp';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        //sender information
        $mail->setFrom($from, $nom);

        $mail->addAddress('contact.martindylan@gmail.com');

        $mail->addCC('martindylan0406@gmail.com');

        $mail->isHTML(false);

        $mail->Subject = $obj;
        $mail->Body    = $body;

        global $send;

        if (!$mail->send()) {
            $send=false;
        } else {
            $send=true;
        }
        $mail->smtpClose();

        return $send;
    }

    function show($id){
        $projet = Projets::findOrFail($id);
        return view('projets.show',['projet'=>$projet]);
    }

    function index(Request $request){
        $comp = $request->comp;
        if($comp=="web"){
            $projets = Projets::where(function ($query) {
                $query->where('tag1', 'HTML')
                    ->orWhere('tag1', 'JavaScript')
                    ->orWhere('tag1', 'PHP')
                    ->orWhere('tag1', 'CSS')
                    ->orWhere('tag2', 'HTML')
                    ->orWhere('tag2', 'JavaScript')
                    ->orWhere('tag2', 'PHP')
                    ->orWhere('tag2', 'CSS')
                    ->orWhere('tag3', 'HTML')
                    ->orWhere('tag3', 'JavaScript')
                    ->orWhere('tag3', 'PHP')
                    ->orWhere('tag3', 'CSS')
                ;})->get();
            return view('projets.index', ['projets' => $projets]);
        }
        elseif ($comp=="python"){
            $projets = Projets::where(function ($query) {
                $query->where('tag1', 'Python')
                    ->orWhere('tag2', 'Python')
                    ->orWhere('tag3', 'Python')
                ;})->get();
            return view('projets.index', ['projets' => $projets]);
        }
        elseif ($comp=="java"){
            $projets = Projets::where(function ($query) {
                $query->where('tag1', 'Java')
                    ->orWhere('tag2', 'Java')
                    ->orWhere('tag3', 'Java')
                ;})->get();
            return view('projets.index', ['projets' => $projets]);
        }
        else{
            $projets = Projets::all();
            return view('projets.index', ['projets' => $projets]);
        }
    }

    function send(Request $request){
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ],
            [
                'required' => 'Le champ :attribute est obligatoire'
            ]
        );
        $msg = "
        From : $request->email, $request->name
        Message : $request->message
        ";
        $send = $this->smtpMailer($request->email, $msg, $request->subject, $request->name);
        if (!$send) {
            return view('contact',['msg'=>"Le message n'a pas pu être envoyé !",'projet'=>" "]);
        } else {
            return view('contact',['msg'=>"Le message a été envoyé !",'projet'=>" "]);
        }
    }

    function contact($projet){
        return view('contact',['msg'=>"",'projet'=>$projet]);
    }
}
