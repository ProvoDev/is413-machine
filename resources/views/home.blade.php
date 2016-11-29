@extends('layout/base')

@section('body')
    <script src="{{ url('/js/typed/js/typed.js') }}"></script>
    <script>
        $(function(){

            $("#typed").typed({
                // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
                stringsElement: $('#typed-strings'),
                typeSpeed: 50,
                backDelay: 500,
                loop: false,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false,
            });

            $(".reset").click(function(){
                $("#typed").typed('reset');
            });

        });

    </script>

    <section id="top-typed">
        <div class="container-fluid">
            <div class="row">
                <div class="col m12">
                    <div class="wrap blue darken-3 white-text">
                        <h1 class="typed-header">BYU</h1>
                        <h1 class="typed-header">Information Systems</h1>

                        <div class="type-wrap">
                            <div id="typed-strings">
                                <span>Welcome to the <strong>BYU IS</strong> program.</span>
                                <p>We built this <em>awesome</em> tool to help you.</p>
                                <p>Scroll down to see your chances of getting in.</p>
                                <p>Good luck!</p>
                            </div>
                            <span id="typed" style="white-space:pre;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="prediction" class="container-fluid grey darken-1">
        <div class="container">

        <div class="row">
            <div class="col m12">
                <h1 class="calc-header">See your possibilities.</h1>
                <hr/>
                <div class="col s8 offset-s2">
                    <div class="main-box z-depth-4">
                        <form class="col s12">
                            <div class="row">
                                <h6>Personal Info</h6>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">perm_identity</i>
                                    <select name="gender">
                                        <option value="" disabled selected>Select your gender:</option>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                    <label>Gender</label>
                                </div>
                                <h6>BYU Academics</h6>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">work</i>
                                    <input type="number" step="0.01" name="credits" class="validate">
                                    <label for="last_name">Total Number of Credits</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="material-icons prefix">work</i>
                                    <input type="number" step="0.01" name="byu-gpa" class="validate">
                                    <label for="last_name">BYU GPA</label>
                                </div>


                                <div class="input-field col s6">
                                    <i class="material-icons prefix">work</i>
                                    <input type="number" step="0.01" name="last-gpa" class="validate">
                                    <label for="last_name">Last 30 hrs GPA</label>
                                </div>

                                <h6>IS Academics</h6>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">star</i>
                                    <input type="number" step="0.01" name="pre-gpa" class="validate">
                                    <label for="last_name">Pre-Requisite GPA</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="material-icons prefix">star</i>
                                    <select name="201-grade">
                                        <option value="" disabled selected>Select your grade</option>
                                        <option value="4.00">A</option>
                                        <option value="3.66">A-</option>
                                        <option value="3.33">B+</option>
                                        <option value="3.00">B</option>
                                        <option value="2.66">B-</option>
                                        <option value="2.33">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.66">C-</option>
                                        <option value="1.33">D+</option>
                                        <option value="1">D</option>
                                        <option value="0.66">D-</option>
                                        <option value="0.33">F+</option>
                                        <option value="0">F</option>
                                    </select>
                                    <label>201 Grade</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">star</i>
                                    <select name="303-grade">
                                        <option value="" disabled selected>Select your grade</option>
                                        <option value="4.00">A</option>
                                        <option value="3.66">A-</option>
                                        <option value="3.33">B+</option>
                                        <option value="3.00">B</option>
                                        <option value="2.66">B-</option>
                                        <option value="2.33">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.66">C-</option>
                                        <option value="1.33">D+</option>
                                        <option value="1">D</option>
                                        <option value="0.66">D-</option>
                                        <option value="0.33">F+</option>
                                        <option value="0">F</option>
                                    </select>
                                    <label>303 Grade</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">star</i>
                                    <select name="fin-grade">
                                        <option value="" disabled selected>Select your grade</option>
                                        <option value="4.00">A</option>
                                        <option value="3.66">A-</option>
                                        <option value="3.33">B+</option>
                                        <option value="3.00">B</option>
                                        <option value="2.66">B-</option>
                                        <option value="2.33">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.66">C-</option>
                                        <option value="1.33">D+</option>
                                        <option value="1">D</option>
                                        <option value="0.66">D-</option>
                                        <option value="0.33">F+</option>
                                        <option value="0">F</option>
                                    </select>
                                    <label>Finance Grade</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">star</i>
                                    <select name="acc-grade">
                                        <option value="" disabled selected>Select your grade</option>
                                        <option value="4.00">A</option>
                                        <option value="3.66">A-</option>
                                        <option value="3.33">B+</option>
                                        <option value="3.00">B</option>
                                        <option value="2.66">B-</option>
                                        <option value="2.33">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.66">C-</option>
                                        <option value="1.33">D+</option>
                                        <option value="1">D</option>
                                        <option value="0.66">D-</option>
                                        <option value="0.33">F+</option>
                                        <option value="0">F</option>
                                    </select>
                                    <label>Accounting Grade</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">star</i>
                                    <select name="busm-grade">
                                        <option value="" disabled selected>Select your grade</option>
                                        <option value="4.00">A</option>
                                        <option value="3.66">A-</option>
                                        <option value="3.33">B+</option>
                                        <option value="3.00">B</option>
                                        <option value="2.66">B-</option>
                                        <option value="2.33">C+</option>
                                        <option value="2">C</option>
                                        <option value="1.66">C-</option>
                                        <option value="1.33">D+</option>
                                        <option value="1">D</option>
                                        <option value="0.66">D-</option>
                                        <option value="0.33">F+</option>
                                        <option value="0">F</option>
                                    </select>
                                    <label>Marketing Grade</label>
                                </div>

                            </div>

                        </form>
                    </div>
                    <div class="btn-box">
                        <a href="#results" id="submit-btn" class="waves-effect waves-light btn col s12 blue darken-3">Get A Prediction</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    <section id="results">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div id="result">

                    </div>
                    <div id="result-error">

                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>

        $(document).ready(function() {
            $('select').material_select();
            $('.modal').modal();

            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });

    </script>

    <script>
        $('#submit-btn').click(function(){
            //window.location.hash = '#results';

            $.ajax({
                type: 'POST',
                url: '/',
                data: $('form').serialize(),
                success: function(response) {
                    var raw = response;
                    var data = JSON.parse(response);
                    var labels = data.Results.output1.value.Values[0][1];
                    labels = labels*100;
                    var probabilities = data.Results.output1.value.Values[1][1];
                    var buy = '';
                    console.log(probabilities);
                    if(probabilities >= .5)
                    {
                        buy = 'not make it';
                        console.log('no buy');
                    }
                    else {
                        buy = 'make it';
                        console.log('buy');
                    }
                    console.log('Lables: ' + labels+' Probabilities: '+ probabilities);
                    $('#raw-json').html(raw);
                    $('#result').html('<h3>You have a ' + labels + '% chance that you will '+buy+' into the program</h3><br/><a class="waves-effect waves-light btn blue darken-3" href="#prediction">Adjust your values</a>');


                },
                error: function() {
                    $('#result-error').html('<h1 class="danger">ERROR!!</h1>');
                }
            });
        });
    </script>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Raw Results</h4>
            <p id="raw-json"></p>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close Window</a>
        </div>

    </div>
@stop