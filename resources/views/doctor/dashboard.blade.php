@extends('layouts.app')

@section('content')
<div style="max-width: 960px; margin: 0 auto; padding: 24px; font-family: Arial, sans-serif;">
    <h1 style="margin-bottom: 8px;">Doctor Dashboard</h1>
    <p style="margin-top: 0; color: #555;">Manage your clinical schedule and patient care activities.</p>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-top: 24px;">
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Appointments</h3>
            <p>Review today's appointments and follow-ups.</p>
        </div>
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Patients</h3>
            <p>Access patient records and care notes quickly.</p>
        </div>
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Reports</h3>
            <p>Generate and review clinical performance reports.</p>
        </div>
    </div>
</div>
@endsection
