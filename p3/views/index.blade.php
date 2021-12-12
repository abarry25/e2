@extends('templates.master')

@section('title')
    Pass the Pigs!
@endsection

@section('navigation')
    <header></header>
@endsection

@section('content')

    <body>
        <div class="body">

            <div class="title">
                <h1> PASS THE PIGS </h1>
            </div>

            <div>
                <img class="pig" src="images/pig_home.png" alt="pig">
                <div>

                    <form method='POST' action='/process'>
                        <div id='displaySubmit'>
                            <button type='submit' class='btn' name='roll' label='roll'> Roll Again </button> </a>
                        </div>
                    </form>
    </body>
@endsection
