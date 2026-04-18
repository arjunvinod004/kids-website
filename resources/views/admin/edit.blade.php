<x-admin-layout>
    <x-slot name="header">Edit System Content</x-slot>

    <div class="row justify-content-center">
        <div class="col-xl-7">
            <div class="mb-3">
                <a href="{{ route('admin.index') }}" class="text-muted text-decoration-none fw-bold" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em;">
                    <i class="bi bi-chevron-left"></i> Back to Dashboard
                </a>
            </div>

            <div class="admin-card">
                <div class="admin-card-header">
                    <span>Edit Payload: <code class="text-warning">{{ $content->key }}</code></span>
                    <i class="bi bi-gear-fill"></i>
                </div>
                <div class="admin-card-body">
                    <form action="{{ route('admin.update', $content) }}" method="POST">
                        @csrf @method('PUT')

                        <div class="mb-3">
                            <label for="key" class="form-label-sm d-block mb-1">Content Key</label>
                            <input type="text" name="key" id="key" required value="{{ old('key', $content->key) }}"
                                   class="form-control" style="font-family: monospace; font-weight: 700;">
                            @error('key')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="value" class="form-label-sm d-block mb-1">Value (JSON Payload)</label>
                            <textarea name="value" id="value" rows="12" required class="form-control"
                                      style="background:#212529; color:#fbbf24; font-family: monospace; font-size: 0.85rem; line-height: 1.6;">{{ old('value', json_encode($content->value, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) }}</textarea>
                            @error('value')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="d-flex justify-content-end gap-3 pt-3 border-top">
                            <a href="{{ route('admin.index') }}" class="btn btn-outline-secondary fw-bold">Discard</a>
                            <button type="submit" class="btn btn-warning fw-bold px-4">
                                <i class="bi bi-save me-1"></i> Update Content
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>