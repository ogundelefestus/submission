@extends('layout.master')
@section('title')
OASM
@endsection
@section('content')



    <div class="page-content" style="margin-top:90px;">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
           <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                    <li><a href="student.html"><i class="glyphicon glyphicon-calendar"></i>Students Entry</a></li>
                    <li><a href="view.html"><i class="glyphicon glyphicon-stats"></i>View Entry</a></li>
                    <li><a href="lecturer.html"><i class="glyphicon glyphicon-list"></i>Lecturer Entry</a></li>
                    <li><a href="score.html"><i class="glyphicon glyphicon-record"></i>Score</a></li>
                   <!-- <li><a href=".html"><i class="glyphicon glyphicon-pencil"></i></a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i></a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>-->
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
        </div>
        </div>
		  


    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright &nbsp; 2019 &nbsp;<a href='#'>Website</a>
            </div>
            
         </div>
      </footer>


        @endsection