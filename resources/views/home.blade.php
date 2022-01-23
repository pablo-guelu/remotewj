<x-layout>
    <div>

        <main>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Remote Weekend Job</h1>
                <p class="fs-5 text-muted">
                    Remote Weekend Job is a platform to offer flexibility to those
                    who think that working remotely on weekends is a better option
                    for them.
                </p>
                <p class="fs-5 text-muted">
                    It is also a platform where employers can hire the best talent
                    there is for the time they really need it.
                </p>
                <p class="fs-5 text-muted">
                    The golden rule here is that there are no jobs that requires
                    more than 3 days a week.
                </p>
            </div>
        </main>
        <section>
            <div class="py-5 text-center container">
                <div class="h-100 p-3 bg-light border rounded-3 shadow-sm subscribe-card">
                    <h2>Subscribe to find the job you need</h2>
                    <p>Receive weekly alerts of new job offerings to work on weekends</p>
                    <form>
                        <div class="w-80 row g-0 justify-content-evenly flex-nowrap">
                            <input type="email" class="col-8 p-2 me-2" placeholder="Your email..." name='subscriptionEmail' v-model="lead.email" />
                            <button class="btn btn-outline-primary col-4 fs-5" type="submit">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
        </section>
        <section>

            <h2 class="text-center m-5"> Featured Jobs </h2>
            @foreach ($jobs as $job)
            <div class="m-3 border rounded-3 shadow-sm">
                <a class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <img src="{{$job->company->logo}}" alt="{{$job->company->name}}" width="32" height="32" class="rounded-circle flex-shrink-0" />
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ $job->title }}</h6>
                            <p class="mb-0 opacity-75" v-if="job->company">
                                {{$job->company->name}}
                            </p>
                            <p class="mb-0 opacity-75">
                                {{$job->type}} / {{$job->region}}
                            </p>
                        </div>
                        <small class="opacity-50 text-nowrap">now</small>
                    </div>
                </a>
            </div>
            @endforeach
        </section>

    </div>


</x-layout>