<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env("APP_NAME") }}</title>
        <link rel="icon" href="{{ App\Models\setting::find(1)->value }}" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-900">

        <span style="font-size: 55px;font-weight: 900"> <span style="color: rgb(145, 0, 0)">G</span>raduation <span style="color: slateblue">P</span>roject ( <span style="color: mediumseagreen">G</span>revona ) <span style="color: steelblue">B</span>ackend <span style="color: rgb(0, 255, 191)">A</span><span style="color: rgb(17, 0, 255)">P</span><span style="color: rgb(255, 0, 55)">I</span> </span>

        <div class="container mx-auto my-10">
            <h1 class="text-2xl font-bold text-center mb-6">API Endpoints Documentation 21-9-2025</h1>

            <div>
                <table class="w-100 bg-white border border-gray-300 rounded-lg shadow-md">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left">HTTP Method</th>
                            <th class="px-6 py-3 text-left">Endpoint</th>
                            <th class="px-6 py-3 text-left">Description</th>
                            <th class="px-6 py-3 text-left">Parameters</th>
                            <th class="px-6 py-3 text-left">Response Example</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (App\Models\info_api::get() as $key => $value)
                        <tr class="border-b border-gray-300">
                            @if ($value->HTTP_Method == "GET")
                            <td class="px-6 py-3 text-green-600 font-bold">{{$value->HTTP_Method}}</td>
                            @else
                            <td class="px-6 py-3 text-blue-600 font-bold">{{$value->HTTP_Method}}</td>
                            @endif
                            <td class="px-6 py-3">{{$value->Endpoint}}</td>
                            <td class="px-6 py-3">{{$value->Description}}</td>
                            <td class="px-6 py-3">{!!$value->Parameters!!}</td>
                            <td style="text-align: center">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$key}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                    </svg>
                                </button>

                                <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-12" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {!! $value->Response_Example !!}
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>


            <h2 class="text-xl font-semibold mt-10 mb-4">Domain Information</h2>
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">Domain</th>
                        <th class="px-6 py-3 text-left">Environment</th>
                        <th class="px-6 py-3 text-left">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="px-6 py-3">graduation.knowhow-solution.com</td>
                        <td class="px-6 py-3">Production</td>
                        <td class="px-6 py-3">domain for the APIs</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
