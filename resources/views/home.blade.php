@extends('layout/base')

@section('body')


    <div class="container">

        <div class="row">
            <div class="col s12">
                <h1 class="white-text center">Advanced Internship Calculator</h1>
                <hr/>
                <div class="col s6 offset-s3">
                    <div class="main-box grey lighten-3 z-depth-4">
                        <form class="col s12">
                            <h3>Calculate</h3>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Number of Info Sessions</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">On-Campus Interviews</label>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop