<div class="col-lg-4 col-md-6 service-item">
            <div class="block">
                <span class="colored-box text-center h3 mb-4">{{ $x }}</span>
                <h3 class="mb-3 service-title">{{ $service->title }}</h3>
                <p class="mb-0 service-description">{{ $service->short_desc }}</p>
                 <a class="btn btn-sm btn-outline-primary" href="{{ route('servicePage', $service->id) }}"> 
                    View Details
                    <i class="las la-arrow-right ms-1"></i>
                </a> 
                <!-- <a class="text-black" href="{{ route('servicePage', $service->id) }}"> View Details</a> -->
                <!-- Debug Marker -->
                <div>Debug: {{$service->title}}</div>
            </div>
        </div>