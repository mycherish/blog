<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
 
        <title>Laravel</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 
    </head>
    <body>
        <div id="app">
            {{-- <example-component></example-component> --}}
            
            <navbar></navbar>
        </div>
        
        {{-- <ul id="example-1">
            <li v-for="item in items">
              {{ item.message }}
            </li>
          </ul> --}}
    </body>
    
    <script src="{{ mix('js/app.js') }}"></script> <!--引入app.js-->

</html>