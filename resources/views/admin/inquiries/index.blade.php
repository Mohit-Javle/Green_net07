@extends('layouts.admin')
@section('title', 'Inquiries')

@section('content')
<div class="page-head">
    <h2>Client Inquiries</h2>
</div>

<div class="card">
    <div class="card-header">
        <h3>Inquiry Records ({{ $inquiries->total() }})</h3>
    </div>
    <div style="overflow-x: auto;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Contact Info</th>
                    <th>Product Interest</th>
                    <th>Received Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($inquiries as $inquiry)
                <tr style="{{ !$inquiry->is_read ? 'background-color: rgba(42, 92, 42, 0.03); font-weight: 600;' : '' }}">
                    <td>
                        @if(!$inquiry->is_read)
                        <span class="badge badge-danger"><i class="fa-solid fa-envelope"></i> Unread</span>
                        @else
                        <span class="badge badge-success"><i class="fa-solid fa-envelope-open"></i> Read</span>
                        @endif
                    </td>
                    <td>
                        {{ $inquiry->name }}
                        @if($inquiry->company)
                        <div style="font-size: 11.5px; color: var(--muted); font-weight: normal; margin-top: 2px;">
                            Co: {{ $inquiry->company }}
                        </div>
                        @endif
                    </td>
                    <td>
                        <div style="font-size: 13px;">
                            <a href="mailto:{{ $inquiry->email }}" style="color: var(--primary); text-decoration: underline;">{{ $inquiry->email }}</a>
                        </div>
                        @if($inquiry->phone)
                        <div style="font-size: 12px; color: var(--muted); margin-top: 2px;">
                            <i class="fa-solid fa-phone" style="font-size: 10px;"></i> {{ $inquiry->phone }}
                        </div>
                        @endif
                    </td>
                    <td>
                        @if($inquiry->product_interest)
                        <span class="badge badge-warning">{{ $inquiry->product_interest }}</span>
                        @else
                        <span style="color: var(--muted); font-style: italic; font-weight: normal;">General Inquiry</span>
                        @endif
                    </td>
                    <td style="font-size: 13px; color: var(--muted);">
                        {{ $inquiry->created_at->format('M d, Y h:i A') }}
                        <div style="font-size: 11px; margin-top: 1px;">
                            {{ $inquiry->created_at->diffForHumans() }}
                        </div>
                    </td>
                    <td>
                        <div style="display: flex; gap: 6px;">
                            <a href="{{ route('admin.inquiries.show', $inquiry->id) }}"
                               class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-eye"></i> View
                            </a>
                            <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST"
                                  onsubmit="return confirm('Delete this inquiry from {{ addslashes($inquiry->name) }}?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; padding: 40px; color: var(--muted);">
                        No inquiries received yet.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($inquiries->hasPages())
    <div style="padding: 16px 22px; border-top: 1px solid var(--border);">
        {{ $inquiries->links() }}
    </div>
    @endif
</div>
@endsection
