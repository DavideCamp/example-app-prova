<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
       
    </head>
    <body>




        


        <div class="container">

                <h1>Short url</h1>

                @if(session('success_message'))
                    {!!session('success_message')!!}
                @endif
            <div class="mb-3">
                <form method="POST" action="{{route('short.url')}}">
                @csrf
                    <input type="url" name="original_url"/>

                    
                    <button type="submit"class="btn btn-success" >
                        accorciami
                    </button>



                </form>
            </div>
                    
                    
                </div>
           
        </div>
    </body>
</html>
