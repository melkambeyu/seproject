@extends('company.layout.main')
@section('content')
           <div class="row jobs"  style="margin-top: 10px;">
              @include('company.includes.jobs')
           </div>

           <div class="row exams hidden">
             @include('company.includes.exams')
           </div>

           <div class="row applicants hidden">
             @include('company.includes.seekers')
           </div>

           <div class="row new_question hidden" style="margin: 5% 2%;">
           		<div class="form_body">
           			
           		</div>

           		<div class="col s8 offset-s1" style="margin-top: 0.5em;">
		           <button id="q_save" class="btn waves-effect waves-light" type="submit">
		                  Submit
		                  <!-- <i class="material-icons right">send</i> -->
		          </button>
		      </div>
           </div>
@endsection
@section('script')
<script src="/js/jquery.js"></script>
<script src="/js/materialize.js"></script>
<script src="/js/company.js"></script>
<script src="/js/compSidebar.js"></script>
@endsection
