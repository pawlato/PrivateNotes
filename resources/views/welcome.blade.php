<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', "PrivateNotes")}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>

        <header>
            <h1>PrivateNotes</h1> 
        </header>

        <nav>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
              
          <section class="page-section">
            <table>
                <tr>
                    <td class="box">
                        <img src="style/notes.png">
                            <h3>notes</h3>
                                <p>add your own notes</p>
                    </td>
                    <td class="box">
                        <img src="style/todos.png">
                            <h3>todos</h3>
                                <p>add the activities you need to do</p>
                    </td>
                    <td class="box">
                        <img src="style/calendar.png">
                            <h3>calendar</h3>
                                <p>plan your every day</p>
                    </td>
                    <td class="box">
                        <img src="style/rankings.png">
                            <h3>rankings</h3>
                                <p>save movies, series, books and music</p>
                    </td>
                </tr>
            </table>
          </section>
        
    </body>
</html>
