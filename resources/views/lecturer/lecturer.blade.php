@extends('layout.master')
@section('title')
laravel shopping-chart
@endsection
@section('content')



    <div class="page-content" style="margin-top:90px;">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10"  style="margin-top:50px;">
		  	<div class="row">
		  		<div class="col-md-6">
		  			<div class="conten-box-large">
		  				<div class="panel-heading">
							
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					<img src="http://researchandadvancement.nouedu.net/sites/default/files/NounAbujaGate.jpg" alt="" height="450" style="margin-bottom:50px;  width:1075px;">
		  				</div>
		  			</div>
		  		</div>



		  
		  
		  </div>
		</div>
    </div>
    <div class="contanier" style="margin-bottom:30px;">
<h2 color="black">What do you know about OASM?</h2>
<p style="font-weight:bold;">An online assignment handling is a system contained within the Module virtual learning environment. The functionality of the standard assignment handling module has been extended to cater for all the Department's needs in terms of receiving assignments from students, making them <br>available to tutors to mark, returning grades, comments and marked work to students and keeping Registry and course administrators informed at all stages of the process. Extension requests are an integral part of the system.

Universities, Polytechnics and colleges of education are <br>considered the main provider of knowledge in various fields. Various courses of studies are taught in institutions, covering several fields including applied Sciences, Math, Computer, Human Resource, and Accounting. Most courses at universities consist of theoretical as well as practical subject matter. To evaluate the level of understanding and degree of comprehension among students, assignments are often given.<br>
Assignments are submitted by students either individually or in groups. Assignment management involves collecting, marking, and redistributing to students. Tregobov (1998) breaks the process down into four stages: submission, recording, marking, and return. Online assignment submission and management (OASM) involves the use of the World-Wide Web, the Internet and computers to aid this process (Jones, 2003). With traditional assignment submission system, lots of problems arise especially when the students have to submit the answers of the assignment to the lecturer. There may be problems due to distance, time, or format of the assignment (written or printed). Also every learning process requires administrative support. Much of this administrative support is to some degree transparent but if the latter is not well organized it could disrupt the flow of learning between students and the staff.
As the educational world is moving faster and becoming more competitive, almost every university started to use an online submission system, or newer technologies to facilitate their task, to have more time, and to be in pace with this fast moving IT world.</p>

</div>


    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>


        @endsection