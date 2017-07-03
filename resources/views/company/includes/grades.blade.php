@if(count($exams))
  <div class="tables">
    <table>
        <thead>
          <tr>
              <th>Applicant Name</th>
              <th>Job Title</th>
              <th>Score</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
  @foreach($exams as $exam)
    @if($exam->grades)
        @foreach($exam->grades as $grades)
          <tr>
            <td>{{ $grades->applicant->firstName}} {{ $grades->applicant->lastName }}</td>
            <td>{{ $exam->job->name }}</td>

            <td>{{ $grades->correct}} / {{ $grades->number }}</td>
            <td><a class="btn notify" href="notify/{{$grades->applicant->id}}/{{$exam->job->id}}">Interview</a></td>
          </tr>
          @endforeach
      @endif
  @endforeach
        </tbody>
      </table>
  </div>
@else
  <h2>No Exams Taken..</h2>
@endif