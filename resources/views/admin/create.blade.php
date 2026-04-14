<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Content') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Create New Content</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="key" class="form-label">Key</label>
                                    <input type="text" name="key" id="key" class="form-control" required placeholder="Enter content key">
                                    @error('key')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="value" class="form-label">Value (JSON)</label>
                                    <textarea name="value" id="value" rows="6" class="form-control font-monospace" required placeholder='{"example": "data"}'></textarea>
                                    @error('value')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('admin.index') }}" class="btn btn-secondary me-2">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Create Content</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>