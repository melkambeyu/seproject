<div style="margin: 5% 5%;">

<?php $row = 0;?>
@foreach($jobs as $job)
	<div class="section tables">
    @if(!count($applicants))
      <h2 style="margin: 5% 5%; font-style: italic;">No Applicants yet!!</h2>
    @else
    <h5 style="margin-right: 7px;">Applicants for <b>{{ $job->name }}</b></h5>
    <span>{{ $job->description }}</span><br>
    <a class="waves-effect waves-light btn hider">Toggle Table</a>
    <table class="bordered striped highlight centered hidden">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Sex</th>
              <th data-field="price">Email</th>
          </tr>
        </thead>
	    
        <tbody>
	@foreach($applicants[$row] as $entry)
          <tr>
            <td>{{ $entry->firstName }} {{ $entry->lastName }}</td>
            <td>{{ $entry->sex }}</td>
            <td>{{ $entry->email }}</td>
          </tr>
	@endforeach    
        </tbody>
      </table>
    @endif
	</div>
	
	 <?php $row++; ?>
@endforeach
</ul>
</div>