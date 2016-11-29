@extends('layout/base')

@section('body')


    <div class="container">

        <div class="row">
            <div class="col m3">
                <div class="main-heading">Will I Make It In the Program?</div>
                <hr/>
            </div>
            <div class="col m9">

                <div class="col s12">
                    <div class="main-box z-depth-4">
                        <form class="col s12">
                            <h3>Calculate</h3>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">class</i>
                                    <select name="gender">
                                        <option value="" disabled selected>Select your gender:</option>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                    <label>Gender</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">class</i>
                                    <input type="number" step="0.01" name="credits" class="validate">
                                    <label for="last_name">Total Number of Credits</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">class</i>
                                    <input type="number" step="0.01" name="pre-gpa" class="validate">
                                    <label for="last_name">Pre-Requisite GPA</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">class</i>
                                    <input type="number" step="0.01" name="byu-gpa" class="validate">
                                    <label for="last_name">BYU GPA</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">class</i>
                                    <input type="number" step="0.01" name="last-gpa" class="validate">
                                    <label for="last_name">Last 30 hrs GPA</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">class</i>
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
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">class</i>
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
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">class</i>
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
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">class</i>
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
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">class</i>
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
                            <a id="submit-btn" class="waves-effect waves-light btn">Get A Prediction</a>
                        </form>
                    </div>
                </div>
                <div class="col s12">
                    <div class="jumbotron">
                        <div id="result">

                        </div>
                        <div id="result-error">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function() {
            $('select').material_select();
        });

    </script>

    <script>
        $('#submit-btn').click(function(){
            $.ajax({
                type: 'POST',
                url: '/',
                data: $('form').serialize(),
                success: function(response) {
                    var raw = response;
                    var data = JSON.parse(response);
                    var labels = data.Results.output1.value.Values[0][1];
                    var probabilities = data.Results.output1.value.Values[1][1];
                    var buy = '';
                    console.log(probabilities);
                    if(probabilities >= .5)
                    {
                        buy = 'will not buy';
                        console.log('no buy');
                    }
                    else {
                        buy = 'will buy';
                        console.log('buy');
                    }
                    console.log('Lables: ' + labels+' Probabilities: '+ probabilities);
                    $('#result').html('<h3>There is a ' + labels + ' that this person '+buy+'</h3><p>Raw JSON:  '+raw+'</p>');

                },
                error: function() {
                    $('#result-error').html('<h1 class="danger">ERROR!!</h1>');
                }
            });
        });
    </script>
@stop