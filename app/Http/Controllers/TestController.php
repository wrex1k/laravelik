<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function testAction(){
        echo "Funguje to?";
    }

    public function viewForm() {
        return view('form');
    }

    public function submitForm (Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $age = $request->input('age');

        if ($age < 18) {
            return response()->json([
                'status' => Response::HTTP_FORBIDDEN,
                'message' => "Nemôžete sa pripojiť, ak máte menej ako 18 rokov.",
            ]);
        } else {
            return response()->json([
                'status' => Response::HTTP_OK,
                'message' => "$name, s emailom $email bol úspešne pridaný.",
            ]);
        }
    }

    public function submitForm2 (Request $request) {
        $data = $request->only(['name', 'email', 'age']);

        if ($data['age'] < 18) {
            return response()->json([
                'status' => Response::HTTP_FORBIDDEN,
                'message' => "Nemôžete sa pripojiť, ak máte menej ako 18 rokov.",
            ]);
        } else {
            return response()->json([
                'status' => Response::HTTP_OK,
                'message' => "{$data['name']}, s emailom {$data['email']} bol úspešne pridaný.",
            ]);
        }
    }
}
