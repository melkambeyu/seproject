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

           <div class="row new_question hidden" style="margin: 5% 2%; height: 430px;">
           		<div class="form_body">
           			
           		</div>

           		<div style="margin-top: 0.5em;">
		           <button class="btn waves-effect waves-light btn-large col s3 offset-s1" id="q_save" class="btn waves-effect waves-light" type="submit" style="width: 100%;">
		                  Submit
		                  <!-- <i class="material-icons right">send</i> -->
		          </button>
              <div>
                <button class="btn waves-effect waves-light btn-large col s3 offset-s1" onclick="window.location.reload()" style="width: 100%;"> Finish</button>
              </div>
              <div class="loader col s8"></div>
		      </div>
           </div>
           <div class="row grades hidden">
             @include('company.includes.grades')
           </div>

@endsection
@section('script')
<script src="/js/jquery.js"></script>
<script src="/js/materialize.js"></script>
<script src="/js/company.js"></script>
<script src="/js/compSidebar.js"></script>
@endsection
