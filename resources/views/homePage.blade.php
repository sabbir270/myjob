<x-HeaderFooter>
    <div class="row pt-5 px-5">
        @foreach ($jobs as $index => $job)
            <div class="col-sm-6">
                <div class="card">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <img class="card-img-top h-100" src="{{ $job->logo? asset('storage/'. $job->logo):asset('/images/my_job.jpg') }}"alt="Company Logo">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold"> <a href="/job/{{ $job->id }}">{{ $job->job_title }}</a></h5>
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
                                    <strong>Location:</strong> {{ $job->location }}
                                </p>
                                <p class="card-text mb-1"><strong>Deadline:</strong> {{ $job->deadline ? date('jS F Y', strtotime($job->deadline)) : 'Not specified' }}</p>
                                <a href="#" class="btn btn-primary">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (($index + 1) % 2 === 0)
                </div>
                <div class="row pt-5 px-5">
            @endif
        @endforeach
    </div>
</x-HeaderFooter>
