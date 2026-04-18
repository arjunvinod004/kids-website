<x-admin-layout>
    <x-slot name="header">Add System Content</x-slot>

    <div class="row justify-content-center">
        <div class="col-xl-7">
            <div class="mb-3">
                <a href="{{ route('admin.index') }}" class="text-muted text-decoration-none fw-bold" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em;">
                    <i class="bi bi-chevron-left"></i> Back to Dashboard
                </a>
            </div>

            <div class="admin-card">
                <div class="admin-card-header">
                    <span>Add New System Content</span>
                    <i class="bi bi-plus-circle-fill"></i>
                </div>
                <div class="admin-card-body">
                    <form action="{{ route('admin.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="key" class="form-label-sm d-block mb-1">Content Key</label>
                            <input type="text" name="key" id="key" required value="{{ old('key') }}"
                                   class="form-control" style="font-family: monospace;" placeholder="e.g. platform_hero_text">
                            @error('key')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="value" class="form-label-sm d-block mb-1">Value (JSON)</label>
                            <textarea name="value" id="value" rows="10" required class="form-control"
                                      style="background:#212529; color:#fbbf24; font-family: monospace; font-size: 0.85rem;"
                                      placeholder='{ "title": "...", "body": "..." }'>{{ old('value') }}</textarea>
                            @error('value')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="d-flex justify-content-end gap-3 pt-3 border-top">
                            <a href="{{ route('admin.index') }}" class="btn btn-outline-secondary fw-bold">Cancel</a>
                            <button type="submit" class="btn btn-warning fw-bold px-4">
                                <i class="bi bi-save me-1"></i> Save Content
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>