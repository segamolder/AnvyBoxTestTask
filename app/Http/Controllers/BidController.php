<?php


	namespace App\Http\Controllers;


	use App\Services\Bid\Store\Database;
    use App\Services\Bid\Store\File;
    use Illuminate\Http\Request;

    class BidController extends Controller
	{
        public function store(Request $request) {
            $this->validate($request, [
               'name'=>'required',
               'phone' => 'required|regex:/^\+?7\d{10}$/',
               'text' => 'required'
            ], [
               'phone.regex'=>'Wrong phone format. Example: +71234567890'
            ]);

            $data = $request->post();

            $bidFile = new File($data['name'], $data['phone'], $data['text']);
            $result['File'] = $bidFile->store()?'Success':'Error.';

            $bidDb = new Database($data['name'], $data['phone'], $data['text']);
            $result['Database'] = $bidDb->store()?'Success':'Error';

            return response($result);
        }
	}
