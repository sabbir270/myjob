<x-HeaderFooter>
    <div class="container py-5">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Post a New Job</h2>
            <form action="/" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="job_title" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title" required value="{{ old('job_title') }}">
                @error('job_title')
                 <p class="card-text mb-1 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags"  value="{{ old('tags') }}">
                @error('tags')
                <p class="card-text mb-1 text-danger">{{ $message }}</p>
               @enderror
            </div>
            <div class="mb-3">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name"  value="{{ old('company_name') }}">
                @error('company_name')
                <p class="card-text mb-1 text-danger">{{ $message }}</p>
               @enderror
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" >
                @error('location')
                <p class="card-text mb-1 text-danger">{{ $message }}</p>
               @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                <p class="card-text mb-1 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control" id="website" name="website" value="{{ old('website') }}">
                @error('website')
                <p class="card-text mb-1 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group row">
                <label for="logo" class="col-md-4 col-form-label text-md-right">Logo</label>
                <div class="col-md-6">
                    <input type="file" class="form-control-file" id="logo" name="logo" >
                </div>
            </div>
            <div class="mb-3">
                <label for="job_description" class="form-label">Job Description</label>
                <textarea class="form-control" id="job_description" name="job_description" rows="5" value="{{ old('job_description') }}"></textarea>
                @error('job_description')
                <p class="card-text mb-1 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deadline" class="form-label">Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
        </div>
    </div>


</x-HeaderFooter>
