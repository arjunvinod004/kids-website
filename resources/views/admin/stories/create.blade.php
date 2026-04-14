<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Story') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Create New Story</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.stories.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Story Title</label>
                                    <input type="text" name="title" id="title" class="form-control" required placeholder="Enter story title" value="{{ old('title') }}">
                                    @error('title')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="title_ml" class="form-label">Story Title (Malayalam)</label>
                                    <input type="text" name="title_ml" id="title_ml" class="form-control" placeholder="Enter story title in Malayalam" value="{{ old('title_ml') }}">
                                    @error('title_ml')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Story Content</label>
                                    <textarea name="content" id="content" rows="12" class="form-control" required placeholder="Write your story here...">{{ old('content') }}</textarea>
                                    @error('content')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="content_ml" class="form-label">Story Content (Malayalam)</label>
                                    <textarea name="content_ml" id="content_ml" rows="12" class="form-control" placeholder="Write your story here in Malayalam...">{{ old('content_ml') }}</textarea>
                                    @error('content_ml')
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
                                    <a href="{{ route('admin.stories.index') }}" class="btn btn-secondary me-2">Cancel</a>
                                    <button type="submit" class="btn btn-success">Create Story</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
