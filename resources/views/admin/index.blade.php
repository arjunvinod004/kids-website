<x-admin-layout>
    <x-slot name="header">Admin Dashboard</x-slot>

    @if(session('success'))
        <div class="alert alert-success d-flex align-items-center gap-2 mb-4" role="alert">
            <i class="bi bi-check-circle-fill"></i>
            {{ session('success') }}
        </div>
    @endif

    <!-- Stats Row -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="admin-card h-100">
                <div class="admin-card-header">
                    <span>Total Stories</span>
                    <i class="bi bi-journal-text"></i>
                </div>
                <div class="admin-card-body text-center py-4">
                    <h2 class="fw-black mb-1" style="font-size: 2.5rem; font-family: 'Outfit', sans-serif;">{{ $storiesCount }}</h2>
                    <a href="{{ route('admin.stories.index') }}" class="btn btn-sm btn-warning fw-bold mt-2">Manage Stories</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="admin-card h-100">
                <div class="admin-card-header">
                    <span>Total Quizzes</span>
                    <i class="bi bi-patch-question"></i>
                </div>
                <div class="admin-card-body text-center py-4">
                    <h2 class="fw-black mb-1" style="font-size: 2.5rem; font-family: 'Outfit', sans-serif;">{{ $quizzesCount }}</h2>
                    <a href="{{ route('admin.quizzes.index') }}" class="btn btn-sm btn-warning fw-bold mt-2">Manage Quizzes</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="admin-card h-100">
                <div class="admin-card-header">
                    <span>System Status</span>
                    <i class="bi bi-cpu"></i>
                </div>
                <div class="admin-card-body d-flex align-items-center gap-3 py-4">
                    <span class="badge bg-success px-3 py-2 fw-bold" style="font-size: 0.7rem; letter-spacing: 0.08em;">&#9679; Core Online</span>
                    <span class="badge bg-primary px-3 py-2 fw-bold" style="font-size: 0.7rem; letter-spacing: 0.08em;">&#9679; Secure Session</span>
                </div>
            </div>
        </div>
    </div>

    <!-- System Content Manager (Split View) -->
    <div class="row g-4">
        <!-- Add Content Form -->
        <div class="col-lg-4">
            <div class="admin-card">
                <div class="admin-card-header">
                    <span>Add System Content</span>
                    <i class="bi bi-plus-circle"></i>
                </div>
                <div class="admin-card-body">
                    <form action="{{ route('admin.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="key" class="form-label-sm d-block mb-1">Content Key</label>
                            <input type="text" name="key" id="key" required value="{{ old('key') }}"
                                   class="form-control form-control-sm" placeholder="platform_hero_text"
                                   style="font-family: monospace;">
                        </div>
                        <div class="mb-3">
                            <label for="value" class="form-label-sm d-block mb-1">Value (JSON)</label>
                            <textarea name="value" id="value" rows="6" required class="form-control form-control-sm"
                                      style="background: #212529; color: #fbbf24; font-family: monospace; font-size: 0.8rem;"
                                      placeholder='{"title": "...", "body": "..."}'>{{ old('value') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-warning fw-bold w-100 text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.08em;">
                            <i class="bi bi-save me-1"></i> Save Payload
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- System Content List -->
        <div class="col-lg-8">
            <div class="admin-card">
                <div class="admin-card-header">
                    <span>System Configuration Matrix</span>
                    <i class="bi bi-table"></i>
                </div>
                <div class="table-responsive">
                    <table class="table admin-table mb-0">
                        <thead>
                            <tr>
                                <th style="width: 40px;">#</th>
                                <th>Key</th>
                                <th>Preview</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contents as $content)
                                <tr>
                                    <td class="text-muted"><i class="bi bi-grip-vertical"></i></td>
                                    <td>
                                        <code class="bg-light text-primary px-2 py-1 rounded" style="font-size: 0.8rem;">{{ $content->key }}</code>
                                    </td>
                                    <td class="text-muted fst-italic" style="font-size: 0.8rem;">{{ Str::limit(json_encode($content->value), 50) }}</td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end gap-1">
                                            <a href="{{ route('admin.edit', $content) }}" class="btn-action btn-action-edit" title="Edit">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <form action="{{ route('admin.destroy', $content) }}" method="POST" onsubmit="return confirm('Delete this?');" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn-action btn-action-delete" title="Delete">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-5 text-muted fw-bold" style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase;">
                                        No system content found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>