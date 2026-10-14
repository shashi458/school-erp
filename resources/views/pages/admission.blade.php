
@extends('layouts.app')

@section('title', 'Admissions | Bright Future School')

@section('content')

<section class="page-banner">
    <div class="container">
        <h1>Admissions</h1>
        <p>Take the first step towards a bright future.</p>
    </div>
</section>

<section class="container section two-column">
    <div>
        <span class="eyebrow">JOIN OUR COMMUNITY</span>
        <h2>Admission Process</h2>

        <div class="process-item">
            <span>01</span>
            <div>
                <h3>Submit Enquiry</h3>
                <p>Contact our school to express your interest.</p>
            </div>
        </div>

        <div class="process-item">
            <span>02</span>
            <div>
                <h3>Visit the School</h3>
                <p>Meet our team and explore the learning environment.</p>
            </div>
        </div>

        <div class="process-item">
            <span>03</span>
            <div>
                <h3>Complete Registration</h3>
                <p>Submit the required documents and application.</p>
            </div>
        </div>
    </div>

    <div class="form-card">
        <h2>Admission Enquiry</h2>
        <p>This is a UI demo form; it does not save data.</p>

        <form action="#" method="GET"
              onsubmit="alert('Demo only: connect this form to Laravel before accepting enquiries.'); return false;">

            <label for="parent">Parent Name</label>
            <input id="parent" type="text" placeholder="Enter parent name" required>

            <label for="student">Student Name</label>
            <input id="student" type="text" placeholder="Enter student name" required>

            <label for="class">Applying for Class</label>
            <select id="class" required>
                <option value="">Select class</option>
                <option>Nursery</option>
                <option>LKG</option>
                <option>UKG</option>
                <option>Class I - V</option>
                <option>Class VI - VIII</option>
            </select>

            <label for="phone">Contact Number</label>
            <input id="phone" type="tel" placeholder="Enter phone number" required>

            <button type="submit" class="btn btn-primary full-width">
                Submit Enquiry
            </button>
        </form>
    </div>
</section>

@endsection
