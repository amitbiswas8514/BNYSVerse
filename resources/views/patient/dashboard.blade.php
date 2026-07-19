@extends('layouts.app')

@section('content')
<div style="max-width: 960px; margin: 0 auto; padding: 24px; font-family: Arial, sans-serif;">
    <h1 style="margin-bottom: 8px;">Patient Dashboard</h1>
    <p style="margin-top: 0; color: #555;">Stay connected with your care journey on BNYSVerse.</p>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-top: 24px;">
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Appointments</h3>
            <p>View your upcoming consultations and visit details.</p>
        </div>
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Medical Records</h3>
            <p>Access reports, prescriptions, and care plans.</p>
        </div>
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Support</h3>
            <p>Reach out to your care team for assistance.</p>
        </div>
    </div>
</div>
@endsection
