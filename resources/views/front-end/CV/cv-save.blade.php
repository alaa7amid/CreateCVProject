<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    p {
        color: #000;
        font-weight: 700;
    }

    .download {
        margin-left: 30px;
        display: inline-block;
        background-color: #333;
        color: #fff;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
    }

    .download i {
        margin-right: 8px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        /* padding: 20px; */
        /* border-radius: 5px; */
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
    }

    h1, h2, h3 {
        color: #000;
        font-weight: 600;
    }

    .contact-info {
        margin-bottom: 20px;
    }

    .contact-info p {
        margin: 5px 0;
    }

    .section {
        /* margin-bottom: 20px; */
    }

    .section h2 {
        border-bottom: 2px solid #000;
        padding-bottom: 5px;
        /* margin-bottom: 10px; */
    }

    .section-content { 
        margin-left: 20px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        margin-bottom: 10px;
        font-weight: 400;
        color: #000;
    }
</style>

<div class="container">
    <header>
        <h1>{{$basicInfo->name}}</h1>
        <h2>Office Manager</h2>
    </header>

    <div class="contact-info">
        <p>Email: {{$basicInfo->email}}</p>
        <p>Phone: {{$basicInfo->phoneNumber}}</p>
        <p><a href="#" style="color: #000; text-decoration: none;">LinkedIn Profile</a></p>
    </div>

    <div class="section">
        <h2>Profile</h2>
        <div class="section-content">
            <p>{{ $profile->profile }}</p>
        </div>
    </div>
    
    <div class="section">
        <h2>Experience</h2>
        @foreach ($experiences as $experience)
            <div class="section-content">
                <h3>{{$experience->position}}, {{$experience->company_name}}</h3>
                <p>{{$experience->startDate}} -  {{$experience->endDate}}</p>
                <p>{{$experience->description}}</p>
            </div>
        @endforeach
    </div>

    <div class="section">
        <h2>Education</h2>
        @foreach ($educations as $education)
            <div class="section-content">
                <h3>{{$education->department}}</h3>
                <p>{{$education->education_level}}</p>
                <p>{{$education->startDate}} - {{$education->endtDate}}</p>
            </div>
        @endforeach
    </div>

    <div class="section">
        <h2>Projects</h2>
        @foreach ($projects as $project)
            <div class="section-content">
                <h3>{{ $project->project_name }}</h3>
                <p>{{ $project->Technologies }}</p>
                <p>{{ $project->description }}</p>
            </div>
        @endforeach
    </div>

    <div class="section">
        <h2>Skills</h2>
        <div class="section-content">
            <ul>
                @foreach($skills as $skill)
                    <li>{{$skill}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
