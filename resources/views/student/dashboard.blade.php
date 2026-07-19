@extends('layouts.app')

@section('content')
<div style="max-width: 960px; margin: 0 auto; padding: 24px; font-family: Arial, sans-serif;">
    <h1 style="margin-bottom: 8px;">Student Dashboard</h1>
    <p style="margin-top: 0; color: #555;">Welcome to your BNYSVerse student workspace.</p>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-top: 24px;">
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>My Courses</h3>
            <p>View enrolled subjects and upcoming classes.</p>
        </div>
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Assignments</h3>
            <p>Track pending tasks and submission deadlines.</p>
        </div>
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Progress</h3>
            <p>Monitor your academic performance and milestones.</p>
        </div>
    </div>
</div>
@endsection
