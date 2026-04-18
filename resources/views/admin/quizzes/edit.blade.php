<x-admin-layout>
    <x-slot name="header">Edit Quiz</x-slot>

    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="mb-3">
                <a href="{{ route('admin.quizzes.index') }}" class="text-muted text-decoration-none fw-bold" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em;">
                    <i class="bi bi-chevron-left"></i> Back to Quizzes
                </a>
            </div>

            <div class="admin-card">
                <div class="admin-card-header">
                    <span>Edit Quiz: {{ $quiz->title }}</span>
                    <i class="bi bi-cpu-fill"></i>
                </div>
                <div class="admin-card-body">
                    <form action="{{ route('admin.quizzes.update', $quiz) }}" method="POST">
                        @csrf @method('PUT')

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="title" class="form-label-sm d-block mb-1">Module Title (EN)</label>
                                <input type="text" name="title" id="title" required value="{{ old('title', $quiz->title) }}"
                                       class="form-control">
                                @error('title')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label for="title_ml" class="form-label-sm d-block mb-1">Regional Title (ML)</label>
                                <input type="text" name="title_ml" id="title_ml" value="{{ old('title_ml', $quiz->title_ml) }}"
                                       class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="age_group" class="form-label-sm d-block mb-1">Target Age Group</label>
                                <select name="age_group" id="age_group" required class="form-select">
                                    <option value="">Select Tier...</option>
                                    <option value="3-5" {{ old('age_group', $quiz->age_group) === '3-5' ? 'selected' : '' }}>3-5 Years</option>
                                    <option value="6-9" {{ old('age_group', $quiz->age_group) === '6-9' ? 'selected' : '' }}>6-9 Years</option>
                                    <option value="10-14" {{ old('age_group', $quiz->age_group) === '10-14' ? 'selected' : '' }}>10-14 Years</option>
                                </select>
                                @error('age_group')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="questions" class="form-label-sm d-block mb-1">Questions JSON (EN)</label>
                            <textarea name="questions" id="questions" rows="14" required class="form-control"
                                      style="background:#212529; color:#4ade80; font-family: monospace; font-size: 0.85rem; line-height: 1.6;">{{ old('questions', json_encode($quiz->questions, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) }}</textarea>
                            @error('questions')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="questions_ml" class="form-label-sm d-block mb-1">Questions JSON (ML) <span class="text-muted fw-normal">— optional</span></label>
                            <textarea name="questions_ml" id="questions_ml" rows="8" class="form-control"
                                      style="background:#212529; color:#818cf8; font-family: monospace; font-size: 0.85rem; line-height: 1.6;">{{ old('questions_ml', $quiz->questions_ml ? json_encode($quiz->questions_ml, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea>
                        </div>

                        <div class="d-flex justify-content-end gap-3 pt-3 border-top">
                            <a href="{{ route('admin.quizzes.index') }}" class="btn btn-outline-secondary fw-bold">Discard</a>
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
