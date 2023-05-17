<x-HeaderFooter>
    <div class="row pt-5 px-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="row g-0 h-100">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <img class="card-img-top h-100" src="/images/my_job.jpg" alt="Company Logo">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold"><a href="/listings/{{ $job->id }}">{{ $job->job_title }}</a></h5>
                            <p class="card-text mb-1"><strong>Tags:</strong></p>
                            <ul class="list-inline mb-2">
                                @foreach (explode(',', $job->tags) as $tag)
                                    <li class="list-inline-item">
                                        <a href="/?tag={{ $tag }}" class="badge bg-primary">{{ $tag }}</a>
                                    </li>
                                @endforeach
                            </ul>

                            <p class="card-text mb-1"><strong>Company:</strong> {{ $job->company_name }}</p>
                            <p class="card-text mb-1">
                                <i class="fas fa-map-marker-alt"></i>
                                {{ $job->location }}
                            </p>
                            <p class="card-text mb-1">
                                <i class="fas fa-envelope"></i> <!-- Email Icon -->
                                {{ $job->email }}
                            </p>
                            <p class="card-text mb-1">
                                <i class="fas fa-globe"></i> <!-- Website Icon -->
                                {{ $job->website }}
                            </p>

                            <p class="card-text mb-1"><strong>Description:</strong> {{ $job->job_description }}</p>
                            <p class="card-text mb-1"><strong>Deadline:</strong> {{ $job->deadline ? date('jS F Y', strtotime($job->deadline)) : 'Not specified' }}</p>
{{--                             <div class="mt-3">
                                <a href="/editJob/{{ $job->id }}" class="btn btn-primary">Edit</a>
                                <form action="/delete/{{ $job->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-HeaderFooter>
