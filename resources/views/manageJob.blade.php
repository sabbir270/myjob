<x-HeaderFooter>
    <div class="container">
        <div class="card p-4">
            <header>
                <h1 class="text-3xl text-center font-bold my-6 uppercase">
                    Manage Jobs
                </h1>
            </header>

            <table class="table table-striped table-bordered">
                <tbody>
                    @unless ($jobs->isEmpty())
                    @foreach ($jobs as $job)
                    <tr>
                        <td class="text-lg">
                            <a href="/job/{{ $job->id }}">
                                {{ $job->job_title }}
                            </a>
                        </td>
                        <td class="text-lg">
                            <a href="/editJob/{{ $job->id }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                        </td>
                        <td class="text-lg">
                            <form method="POST" action="/delete/{{ $job->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="3" class="text-lg text-center">
                            <p>No jobs found</p>
                        </td>
                    </tr>
                    @endunless
                </tbody>
            </table>
        </div>
    </div>
</x-HeaderFooter>
