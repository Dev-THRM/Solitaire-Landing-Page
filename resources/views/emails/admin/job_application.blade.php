<x-mail::message>
# New Job Application Received

A new application has been submitted for the position of **{{ $application->jobListing->title }}**.

**Candidate Details:**
- **Name:** {{ $application->name }}
- **Email:** {{ $application->email }}
- **Phone:** {{ $application->phone }}
- **Location:** {{ $application->location }}

The candidate's resume has been attached to this email.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
