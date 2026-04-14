<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Quiz') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Create New Quiz</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.quizzes.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Quiz Title</label>
                                    <input type="text" name="title" id="title" class="form-control" required placeholder="Enter quiz title" value="{{ old('title') }}">
                                    @error('title')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="title_ml" class="form-label">Quiz Title (Malayalam)</label>
                                    <input type="text" name="title_ml" id="title_ml" class="form-control" placeholder="Enter quiz title in Malayalam" value="{{ old('title_ml') }}">
                                    @error('title_ml')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="questions" class="form-label">Questions (JSON)</label>
                                    <textarea name="questions" id="questions" rows="15" class="form-control font-monospace" required placeholder='[
  {
    "question": "What is 2+2?",
    "options": ["3", "4", "5"],
    "answer": 1
  },
  {
    "question": "What color is the sky?",
    "options": ["Green", "Blue", "Red"],
    "answer": 1
  }
]'>{{ old('questions') }}</textarea>
                                    <div class="form-text">Format: Array of objects with "question", "options" (array), and "answer" (index starting from 0)</div>
                                    @error('questions')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="questions_ml" class="form-label">Questions (Malayalam JSON)</label>
                                    <textarea name="questions_ml" id="questions_ml" rows="15" class="form-control font-monospace" placeholder='[
  {
    "question": "Malayalam question here",
    "options": ["3", "4", "5"],
    "answer": 1
  }
]'>{{ old('questions_ml') }}</textarea>
                                    <div class="form-text">Optional Malayalam version using the same JSON structure.</div>
                                    @error('questions_ml')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="age_group" class="form-label">Age Group</label>
                                    <select name="age_group" id="age_group" class="form-select" required>
                                        <option value="">Select age group</option>
                                        <option value="3-5" {{ old('age_group') === '3-5' ? 'selected' : '' }}>3-5 years</option>
                                        <option value="6-9" {{ old('age_group') === '6-9' ? 'selected' : '' }}>6-9 years</option>
                                        <option value="10-14" {{ old('age_group') === '10-14' ? 'selected' : '' }}>10-14 years</option>
                                    </select>
                                    @error('age_group')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('admin.quizzes.index') }}" class="btn btn-secondary me-2">Cancel</a>
                                    <button type="submit" class="btn btn-warning">Create Quiz</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
