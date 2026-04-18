<x-admin-layout>
    <x-slot name="header">Edit Story</x-slot>

    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="mb-3">
                <a href="{{ route('admin.stories.index') }}" class="text-muted text-decoration-none fw-bold" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em;">
                    <i class="bi bi-chevron-left"></i> Back to Stories
                </a>
            </div>

            <div class="admin-card">
                <div class="admin-card-header">
                    <span>Edit Story: {{ $story->title }}</span>
                    <i class="bi bi-pencil-square"></i>
                </div>
                <div class="admin-card-body">
                    <form action="{{ route('admin.stories.update', $story) }}" method="POST">
                        @csrf @method('PUT')

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="title" class="form-label-sm d-block mb-1">Title (EN)</label>
                                <input type="text" name="title" id="title" required value="{{ old('title', $story->title) }}"
                                       class="form-control">
                                @error('title')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label for="title_ml" class="form-label-sm d-block mb-1">Title (ML)</label>
                                <input type="text" name="title_ml" id="title_ml" value="{{ old('title_ml', $story->title_ml) }}"
                                       class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="age_group" class="form-label-sm d-block mb-1">Age Group</label>
                                <select name="age_group" id="age_group" required class="form-select">
                                    <option value="">Select...</option>
                                    <option value="3-5" {{ old('age_group', $story->age_group) === '3-5' ? 'selected' : '' }}>3-5 Years</option>
                                    <option value="6-9" {{ old('age_group', $story->age_group) === '6-9' ? 'selected' : '' }}>6-9 Years</option>
                                    <option value="10-14" {{ old('age_group', $story->age_group) === '10-14' ? 'selected' : '' }}>10-14 Years</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label-sm d-block mb-1">Content (EN)</label>
                            <textarea name="content" id="content" rows="12" required class="form-control" style="font-size: 1rem; line-height: 1.7;">{{ old('content', $story->content) }}</textarea>
                            @error('content')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="content_ml" class="form-label-sm d-block mb-1">Content (ML)</label>
                            <textarea name="content_ml" id="content_ml" rows="10" class="form-control" style="font-size: 1rem; line-height: 1.7;">{{ old('content_ml', $story->content_ml) }}</textarea>
                        </div>

                        <div class="d-flex justify-content-end gap-3 pt-3 border-top">
                            <a href="{{ route('admin.stories.index') }}" class="btn btn-outline-secondary fw-bold">Discard</a>
                            <button type="submit" class="btn btn-warning fw-bold px-4">
                                <i class="bi bi-save me-1"></i> Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
