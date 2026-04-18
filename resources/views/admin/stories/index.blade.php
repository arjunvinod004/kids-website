<x-admin-layout>
    <x-slot name="header">Stories Library</x-slot>

    @if(session('success'))
        <div class="alert alert-success d-flex align-items-center gap-2 mb-4">
            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
        </div>
    @endif

    <div class="row g-4">
        <!-- Add Story Form -->
        <div class="col-lg-4">
            <div class="admin-card">
                <div class="admin-card-header">
                    <span>Add New Story</span>
                    <i class="bi bi-plus-circle"></i>
                </div>
                <div class="admin-card-body">
                    <form action="{{ route('admin.stories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label-sm d-block mb-1">Title (EN)</label>
                            <input type="text" name="title" id="title" required value="{{ old('title') }}"
                                   class="form-control form-control-sm" placeholder="Enter English Title">
                            @error('title')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="title_ml" class="form-label-sm d-block mb-1">Title (ML)</label>
                            <input type="text" name="title_ml" id="title_ml" value="{{ old('title_ml') }}"
                                   class="form-control form-control-sm" placeholder="മലയാളം ശീർഷകം">
                        </div>

                        <div class="mb-3">
                            <label for="age_group" class="form-label-sm d-block mb-1">Age Group</label>
                            <select name="age_group" id="age_group" required class="form-select form-select-sm">
                                <option value="">Select...</option>
                                <option value="3-5" {{ old('age_group') === '3-5' ? 'selected' : '' }}>3-5 Years</option>
                                <option value="6-9" {{ old('age_group') === '6-9' ? 'selected' : '' }}>6-9 Years</option>
                                <option value="10-14" {{ old('age_group') === '10-14' ? 'selected' : '' }}>10-14 Years</option>
                            </select>
                            @error('age_group')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label-sm d-block mb-1">Content (EN)</label>
                            <textarea name="content" id="content" rows="6" required class="form-control form-control-sm"
                                      placeholder="Once upon a time...">{{ old('content') }}</textarea>
                            @error('content')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="content_ml" class="form-label-sm d-block mb-1">Content (ML)</label>
                            <textarea name="content_ml" id="content_ml" rows="4" class="form-control form-control-sm"
                                      placeholder="മലയാളം ഉള്ളടക്കം...">{{ old('content_ml') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-warning fw-bold w-100 text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.08em;">
                            <i class="bi bi-save me-1"></i> Save Story
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Stories List -->
        <div class="col-lg-8">
            <div class="admin-card">
                <div class="admin-card-header">
                    <span>Stories List</span>
                    <span class="badge bg-light text-dark fw-bold">{{ $stories->count() }} Total</span>
                </div>
                <div class="table-responsive">
                    <table class="table admin-table mb-0">
                        <thead>
                            <tr>
                                <th style="width: 40px;">#</th>
                                <th>Title</th>
                                <th>Age</th>
                                <th>Lang</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stories as $story)
                                <tr>
                                    <td class="text-muted"><i class="bi bi-grip-vertical"></i></td>
                                    <td>
                                        <span class="fw-bold">{{ $story->title }}</span>
                                        @if($story->title_ml)
                                            <br><small class="text-muted">{{ Str::limit($story->title_ml, 30) }}</small>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary">{{ $story->age_group ?? 'All' }}</span>
                                    </td>
                                    <td>
                                        <span class="badge {{ $story->title_ml ? 'bg-success' : 'bg-warning text-dark' }}">
                                            {{ $story->title_ml ? 'Bi-lingual' : 'EN' }}
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end gap-1">
                                            <span class="btn-action btn-action-view" title="View">
                                                <i class="bi bi-eye-fill"></i>
                                            </span>
                                            <a href="{{ route('admin.stories.edit', $story) }}" class="btn-action btn-action-edit" title="Edit">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <form action="{{ route('admin.stories.destroy', $story) }}" method="POST" onsubmit="return confirm('Delete this story?');" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn-action btn-action-delete" title="Delete">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            @if($stories->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted fw-bold" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em;">
                                        No stories found. Add one!
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>