<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }

    public function azurerequest(Request $request)
    {
        $curl = curl_init();
        $data = '{
                  "Inputs": {
                    "input1": {
                      "ColumnNames": [
                        "201",
                        "303",
                        "Is Male",
                        "prereq",
                        "BYU",
                        "30 hr",
                        "acc",
                        "FIN",
                        "Bus M",
                        "hrs"
                      ],
                      "Values": [
                        [
                          "1",
                          "'.$request->input('201-grade').'",
                          "'.$request->input('303-grade').'",
                          "'.$request->input('gender').'",
                          "'.$request->input('pre-gpa').'",
                          "'.$request->input('byu-gpa').'",
                          "'.$request->input('last-gpa').'",
                          "'.$request->input('acc-grade').'",
                          "'.$request->input('fin-grade').'",
                          "'.$request->input('busm-grade').'",
                          "'.$request->input('credits').'"
                        ],
                        [
                          "0",
                          "0",
                          "0",
                          "0",
                          "0",
                          "0",
                          "0",
                          "0",
                          "0",
                          "0",
                          "0"
                        ]
                      ]
                    }
                  },
                  "GlobalParameters": {}
                }';
        //echo $data;
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://ussouthcentral.services.azureml.net/workspaces/5d4bc69e2b9e4a68baf75e6c477497cc/services/09e79fcaacc44159aec1a268e1ed7306/execute?api-version=2.0&format=swagger",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer kq8eKAYgeaGAr1h7L9d3AvxiZyzjYh4IkgD+DXBmOXR5fcWZBq5Gubdeet/XG1xJDXBmy1dWyorv/o3/bWqcSg==",
                "cache-control: no-cache",
                "content-length: ".strlen($data),
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        }

        return $response;
    }
}

