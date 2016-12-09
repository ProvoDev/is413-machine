@extends('layout/base')

@section('body')
    <script src="https://public.tableau.com/javascripts/api/tableau-2.0.0.min.js"></script>
    <script src="js/tableau.js"></script>
    <div class="navbar-fixed">
        <nav class="blue darken-3  white-text">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo">Wolfpack Software International</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html"></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s4">
                <div class="tab-heading">Select Workbook Sheets:</div>
                <div class="tab-heading">Filter by Region:</div>
                <div class="tab-heading">Select Marks:</div>
            </div>
            <div class="col s8">
                <div class="btn-group" role="group" aria-label="...">
                    <button id="dash-btn" onclick="displaySheet('Dashboard 1')" type="button" class="btn waves-effect waves-light">Dashboard</button>
                    <button type="button" onclick="displaySheet('Sheet 1')" class="btn waves-effect waves-light">Map</button>
                    <button type="button" onclick="displaySheet('Sheet 2')" class="btn waves-effect waves-light">Categories</button>
                    <button type="button" onclick="displaySheet('Sheet 3')" class="btn waves-effect waves-light">Cluster</button>
                </div>

                <div class="btn-group" role="group" aria-label="...">
                    <button onclick="regionFilter('All')" dataregion="United States" type="button" class="btn waves-effect waves-light">All Regions</button>
                    <button onclick="regionFilter('United Kingdom')" dataregion="United States" type="button" class="btn waves-effect waves-light">United Kingdom</button>
                    <button onclick="regionFilter('United States')" dataregion="United States" type="button" class="btn waves-effect waves-light">United States</button>
                </div>

                <div class="btn-group" role="group" aria-label="...">
                    <button onclick="selectCluster(1)" type="button" class="btn waves-effect waves-light">Cluster 1</button>
                    <button onclick="selectCluster(2)" dataregion="United States" type="button" class="btn waves-effect waves-light">Cluster 2</button>
                    <button onclick="selectCluster(3)" dataregion="United States" type="button" class="btn waves-effect waves-light">Cluster 3</button>
                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s9">
                <div id="tableauViz"></div>
            </div>
            <div class="col s3">
                <div id="mark-details"></div>
            </div>


        </div>
    </div>

    <script>
        initViz();
    </script>
@stop