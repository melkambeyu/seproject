<div class="container"><ul class="collapsible" data-collapsible="expandable">
<?php $row = 0;?>
@foreach($jobs as $job)
	
	<li>
      <div class="collapsible-header" style="background-color: #546e7a;">
      	<strong>{{ $job->name }}</strong><strong style="float: right;">V</strong>
 	</div>
	 
	@foreach($applicants[$row] as $entry)
	      <div class="collapsible-body" style="padding: 0px 30px;"><p>{{ $entry->firstName }}{{ $entry->lastName }}</p></div>
	@endforeach    
    </li>
	 <?php $row++; ?>
@endforeach
</ul>
</div>