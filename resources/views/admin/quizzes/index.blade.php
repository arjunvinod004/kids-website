<x-admin-layout>
    <x-slot name="header">Quiz Terminal</x-slot>

    @if(session('success'))
        <div class="alert alert-success d-flex align-items-center gap-2 mb-4">
            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
        </div>
    @endif

    <div class="row g-4">
        <!-- Add Quiz Form -->
        <div class="col-lg-4">
            <div class="admin-card">
                <div class="admin-card-header">
                    <span>Add New Module</span>
                    <i class="bi bi-plus-circle"></i>
                </div>
                <div class="admin-card-body">
                    <form action="{{ route('admin.quizzes.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label-sm d-block mb-1">Module Title (EN)</label>
                            <input type="text" name="title" id="title" required value="{{ old('title') }}"
                                   class="form-control form-control-sm" placeholder="Enter Title">
                            @error('title')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="title_ml" class="form-label-sm d-block mb-1">Regional Title (ML)</label>
                            <input type="text" name="title_ml" id="title_ml" value="{{ old('title_ml') }}"
                                   class="form-control form-control-sm" placeholder="മലയാളം ശീർഷകം">
                        </div>

                        <div class="mb-3">
                            <label for="age_group" class="form-label-sm d-block mb-1">Target Age</label>
                            <select name="age_group" id="age_group" required class="form-select form-select-sm">
                                <option value="">Select Tier...</option>
                                <option value="3-5" {{ old('age_group') === '3-5' ? 'selected' : '' }}>3-5 Years</option>
                                <option value="6-9" {{ old('age_group') === '6-9' ? 'selected' : '' }}>6-9 Years</option>
                                <option value="10-14" {{ old('age_group') === '10-14' ? 'selected' : '' }}>10-14 Years</option>
                            </select>
                            @error('age_group')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="questions" class="form-label-sm d-block mb-1">Questions (JSON)</label>
                            <textarea name="questions" id="questions" rows="8" required class="form-control form-control-sm"
                                      style="background:#212529; color: #4ade80; font-family: monospace; font-size: 0.78rem;"
                                      placeholder='[ {"question": "...", "options": ["A","B"], "answer": 0} ]'>{{ old('questions') }}</textarea>
                            @error('questions')<div class="text-danger" style="font-size:0.75rem;">{{ $message }}</div>@enderror
                        </div>

                        <button type="submit" class="btn btn-warning fw-bold w-100 text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.08em;">
                            <i class="bi bi-save me-1"></i> Deploy Module
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Quizzes List -->
        <div class="col-lg-8">
            <div class="admin-card">
                <div class="admin-card-header">
                    <span>Quizzes Inventory</span>
                    <span class="badge bg-light text-dark fw-bold">{{ $quizzes->count() }} Total</span>
                </div>
                <div class="table-responsive">
                    <table class="table admin-table mb-0">
                        <thead>
                            <tr>
                                <th style="width: 40px;">#</th>
                                <th>Identity</th>
                                <th>Age</th>
                                <th>Queries</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quizzes as $quiz)
                                <tr>
                                    <td class="text-muted"><i class="bi bi-grip-vertical"></i></td>
                                    <td>
                                        <span class="fw-bold">{{ $quiz->title }}</span>
                                        @if($quiz->title_ml)
                                            <br><small class="text-muted">{{ Str::limit($quiz->title_ml, 30) }}</small>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary">{{ $quiz->age_group ?? 'All' }}</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-light text-dark border" style="font-size: 0.7rem; font-weight: 800;">
                                            {{ count($quiz->questions ?? []) }} items
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end gap-1">
                                            <span class="btn-action btn-action-view" title="View">
                                                <i class="bi bi-eye-fill"></i>
                                            </span>
                                            <a href="{{ route('admin.quizzes.edit', $quiz) }}" class="btn-action btn-action-edit" title="Edit">
                                                <i class="bi bi-gear-fill"></i>
                                            </a>
                                            <form action="{{ route('admin.quizzes.destroy', $quiz) }}" method="POST" onsubmit="return confirm('Delete this quiz?');" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn-action btn-action-delete" title="Delete">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            @if($quizzes->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted fw-bold" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em;">
                                        No quizzes found. Add one!
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