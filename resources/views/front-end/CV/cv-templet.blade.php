@extends('backend.master')

@section('content')
@section('css')
<style>
    body {
      font-family: Arial, sans-serif;
      /* text-transform: capitalize;  */
      margin: 0;
      padding: 20px;
      /* background-color: #f4f4f4; */
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
    }

    h1, h2, h3 {
      color: #000000;
    }

    .header, .section, .contact-info, .skills, .experience, .education {
      margin-bottom: 20px;
    }

    .contact-info p, .section-content p {
      margin: 5px 0;
    }

    .contact-info a {
      color: #000000;
      text-decoration: none;
    }

    .section h2 {
      border-bottom: 2px solid #333;
      padding-bottom: 5px;
      margin-bottom: 10px;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    ul li {
      margin-bottom: 5px;
    }

    .download {
      display: inline-block;
      background-color: #000000;
      color: #fff;
      padding: 10px 15px;
      text-decoration: none;
      border-radius: 5px;
    }

    .download i {
      margin-right: 8px;
    }
</style>
@endsection

<a href="{{ route('downloadCV') }}" class="download" download>
    <i class="fas fa-download"></i> Download CV
</a>

<div class="container">
    <header class="header">
      <h1>{{ $basicInfo->name }}</h1>
      <h2>{{ $basicInfo->jobTitle }}</h2>
    </header>

    <div class="contact-info">
      <p>Email: {{ $basicInfo->email }}</p>
      <p>Phone: {{ $basicInfo->phoneNumber }}</p>
      
      @if (!empty($basicInfo->linkedin))
        <p><a href="{{ $basicInfo->linkedin }}">LinkedIn Profile</a></p>
      @endif
    @if (!empty($basicInfo->github))
        <p><a href="{{$basicInfo->github}}">Github Profile</a></p> 
    @endif
       
</div>

    <div class="section profile">
      <h2>Profile</h2>
      <div class="section-content">
        <p>{{ $profile->profile }}</p>
      </div>
    </div>

    <div class="section experience">
      @if ($experiences->count() >= 1)
        <h2>Experience</h2>
        @foreach ($experiences as $experience)
          <div class="section-content">
              <h3>{{ $experience->position }}, {{ $experience->company_name }}</h3>
              <p>{{ $experience->startDate }} - {{ $experience->endDate }}</p>
              <p>{{ $experience->description }}</p>
          </div>
        @endforeach  
      @endif
      
    </div>

    <div class="section education">
      @if ($educations->count() >= 1)
         <h2>Education</h2>
          @foreach ($educations as $education)
            <div class="section-content">
                <h3>{{ $education->department }}, {{ $education->education_level }}</h3>
                <p>{{ $education->startDate }} - {{ $education->endtDate }}</p>
                {{-- <p>It’s okay to brag about your GPA, awards, and honors. Feel free to summarize your coursework too.</p> --}}
            </div>
          @endforeach 
      @endif
    </div>

    <div class="section education">
      @if ($projects->count() >= 1)
        <h2>Projects</h2>
        @foreach ($projects as $project)
            <div class="section-content">
                <h3>{{ $project->project_name }}</h3>
                <p>{{ $project->Technologies }}</p>
                <p>{{ $project->description }}</p>
            </div>
        @endforeach
      @endif

    </div>

    <div class="section skills">
      <h2>Skills</h2>
      <div class="section-content">
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </div>

</div>
@endsection
