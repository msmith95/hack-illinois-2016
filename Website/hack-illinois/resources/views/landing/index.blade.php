@extends('layouts.app')

@section('landing')
<link rel="stylesheet" href="css/landing.css">
@endsection

@section('content')


<div class="headerImage text-center">
    <img class="img-responsive center-block" src="assets/cobalt_logo_large.png" alt="Cobalt" width="600" height="600">
</div>
<div class="headerImageFooter">Footer</div>
<div class="container-fluid landingContainer">
    <div class="container innerContainer">
        <!-- <h2 class="text-center">Features</h2> -->
        
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="lead">Useful</div>
                <div class="lead smallLead">Track your chores</div>
                <div class="lead smallLead">Keep roomates accountable</div>
                <div class="lead smallLead">no more dirty dishes!</div>
            </div>
            <div class="col-md-4 text-center">
                <div class="lead">Simple</div>
                <div class="lead smallLead">Create custom Chores</div>
                <div class="lead smallLead">Feature slot 2</div>
                <div class="lead smallLead">Feature slot 3</div>
            </div>
            <div class="col-md-4 text-center">
                <div class="lead">Cheap</div>
                <div class="lead smallLead">Feature slot 1</div>
                <div class="lead smallLead">Feature slot 2</div>
                <div class="lead smallLead">Feature slot 3</div>
            </div>

        </div>
    </div>
</div>
@endsection