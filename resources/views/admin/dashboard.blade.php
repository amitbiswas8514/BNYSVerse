@extends('layouts.app')

@section('content')
<div style="max-width: 960px; margin: 0 auto; padding: 24px; font-family: Arial, sans-serif;">
    <h1 style="margin-bottom: 8px;">Admin Dashboard</h1>
    <p style="margin-top: 0; color: #555;">Overview of platform administration and management tools.</p>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-top: 24px;">
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Users</h3>
            <p>Manage student, doctor, patient, and staff accounts.</p>
        </div>
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Content</h3>
            <p>Review and publish important platform updates.</p>
        </div>
        <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; background: #f9fafb;">
            <h3>Reports</h3>
            <p>Analyze system activity and operational insights.</p>
        </div>
    </div>
</div>
@endsection
