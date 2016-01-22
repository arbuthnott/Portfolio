<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Message;

use Illuminate\Http\Request;
use App\Http\Requests\EmailRequest;

class ResumeController extends Controller {

	public function index() {
        return view('resume.home');
    }
	
	public function overview() {
		return view('resume.overview');
	}
	
	public function contact() {
		return view('resume.contact');
	}
	
	public function send(EmailRequest $request) {
		$input = $request->all();
		Message::create($input);
		$headers = "From: " . $input['sender'];
		if (isset($input['copyme'])) {
			$headers .= ("\r\nCC: " . $input['sender'] . "\r\n");
		}
		mail('chris.arbuthnott@gmail.com', $input['subject'], $input['body'], $headers);
		$confirm = "Thanks for the email!  I will get back to you soon.";
		return view('resume.contact', compact('confirm'));
	}

}
