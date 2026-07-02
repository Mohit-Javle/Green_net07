@extends('layouts.admin')
@section('title', 'Inquiry Details')

@section('content')
<div class="page-head">
    <h2>Inquiry from {{ $inquiry->name }}</h2>
    <div style="display: flex; gap: 8px;">
        <a href="{{ route('admin.inquiries.index') }}" class="btn btn-secondary">
            <i class="fa-solid fa-arrow-left"></i> Back to List
        </a>
        <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST"
              onsubmit="return confirm('Delete this inquiry permanently?')">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fa-solid fa-trash"></i> Delete
            </button>
        </form>
    </div>
</div>

<div class="form-grid-2">
    <div class="card">
        <div class="card-header">
            <h3>Sender Details</h3>
        </div>
        <div class="card-body">
            <table class="admin-table" style="width: 100%;">
                <tbody>
                    <tr>
                        <td style="width: 150px; font-weight: 600; border-bottom: 1px solid var(--border);">Name:</td>
                        <td style="border-bottom: 1px solid var(--border);">{{ $inquiry->name }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600; border-bottom: 1px solid var(--border);">Email:</td>
                        <td style="border-bottom: 1px solid var(--border);">
                            <a href="mailto:{{ $inquiry->email }}" style="color: var(--primary); font-weight: 500; text-decoration: underline;">
                                {{ $inquiry->email }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600; border-bottom: 1px solid var(--border);">Phone:</td>
                        <td style="border-bottom: 1px solid var(--border);">
                            @if($inquiry->phone)
                            <a href="tel:{{ $inquiry->phone }}" style="color: var(--text);">{{ $inquiry->phone }}</a>
                            @else
                            <span style="color: var(--muted); font-style: italic;">Not provided</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600; border-bottom: 1px solid var(--border);">Company:</td>
                        <td style="border-bottom: 1px solid var(--border);">
                            @if($inquiry->company)
                            {{ $inquiry->company }}
                            @else
                            <span style="color: var(--muted); font-style: italic;">Not provided</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600; border-bottom: 1px solid var(--border);">Product/Interest:</td>
                        <td style="border-bottom: 1px solid var(--border);">
                            @if($inquiry->product_interest)
                            <span class="badge badge-warning" style="font-size: 13px;">{{ $inquiry->product_interest }}</span>
                            @else
                            <span class="badge badge-success" style="font-size: 13px;">General Inquiry</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600; border: none;">Date Received:</td>
                        <td style="border: none;">{{ $inquiry->created_at->format('l, F d, Y — h:i A') }} ({{ $inquiry->created_at->diffForHumans() }})</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Message</h3>
        </div>
        <div class="card-body">
            <div style="background: var(--bg); border: 1px solid var(--border); border-radius: var(--radius); padding: 20px; min-height: 180px; line-height: 1.6; white-space: pre-wrap; font-size: 14.5px;">{{ $inquiry->message }}</div>
            <div style="margin-top: 20px; display: flex; gap: 10px;">
                <a href="mailto:{{ $inquiry->email }}?subject=Re: AgroNet Solutions Inquiry regarding {{ rawurlencode($inquiry->product_interest ?? 'Shade Nets') }}"
                   class="btn btn-primary">
                    <i class="fa-solid fa-reply"></i> Reply via Email
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
