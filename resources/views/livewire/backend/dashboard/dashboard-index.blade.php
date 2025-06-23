<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      
<div class="row g-6">
<!-- Card Border Shadow -->
<div class="col-lg-3 col-sm-6">
  <div class="card card-border-shadow-primary h-100">
    <div class="card-body">
      <div class="d-flex align-items-center mb-2">
        <div class="avatar me-4">
          <span class="avatar-initial rounded bg-label-primary"><i class="icon-base bx bxs-truck icon-lg"></i></span>
        </div>
        <h4 class="mb-0">42</h4>
      </div>
      <p class="mb-2">On route vehicles</p>
      <p class="mb-0">
        <span class="text-heading fw-medium me-2">+18.2%</span>
        <span class="text-body-secondary">than last week</span>
      </p>
    </div>
  </div>
</div>
<div class="col-lg-3 col-sm-6">
  <div class="card card-border-shadow-warning h-100">
    <div class="card-body">
      <div class="d-flex align-items-center mb-2">
        <div class="avatar me-4">
          <span class="avatar-initial rounded bg-label-warning"><i class="icon-base bx bx-error icon-lg"></i></span>
        </div>
        <h4 class="mb-0">8</h4>
      </div>
      <p class="mb-2">Vehicles with errors</p>
      <p class="mb-0">
        <span class="text-heading fw-medium me-2">-8.7%</span>
        <span class="text-body-secondary">than last week</span>
      </p>
    </div>
  </div>
</div>
<div class="col-lg-3 col-sm-6">
  <div class="card card-border-shadow-danger h-100">
    <div class="card-body">
      <div class="d-flex align-items-center mb-2">
        <div class="avatar me-4">
          <span class="avatar-initial rounded bg-label-danger"><i class="icon-base bx bx-git-repo-forked icon-lg"></i></span>
        </div>
        <h4 class="mb-0">27</h4>
      </div>
      <p class="mb-2">Deviated from route</p>
      <p class="mb-0">
        <span class="text-heading fw-medium me-2">+4.3%</span>
        <span class="text-body-secondary">than last week</span>
      </p>
    </div>
  </div>
</div>
<div class="col-lg-3 col-sm-6">
  <div class="card card-border-shadow-info h-100">
    <div class="card-body">
      <div class="d-flex align-items-center mb-2">
        <div class="avatar me-4">
          <span class="avatar-initial rounded bg-label-info"><i class="icon-base bx bx-time-five icon-lg"></i></span>
        </div>
        <h4 class="mb-0">13</h4>
      </div>
      <p class="mb-2">Late vehicles</p>
      <p class="mb-0">
        <span class="text-heading fw-medium me-2">-2.5%</span>
        <span class="text-body-secondary">than last week</span>
      </p>
    </div>
  </div>
</div>
<!--/ Card Border Shadow -->
<!-- Vehicles overview -->
<div class="col-xxl-6">
  <div class="card h-100">
    <div class="card-header d-flex align-items-center justify-content-between">
      <div class="card-title mb-0">
        <h5 class="m-0 me-2">Vehicles Overview</h5>
      </div>
      <div class="dropdown">
        <button class="btn p-0" type="button" id="vehiclesOverview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="icon-base bx bx-dots-vertical-rounded icon-lg text-body-secondary"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="vehiclesOverview">
          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
          <a class="dropdown-item" href="javascript:void(0);">Share</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="d-none d-lg-flex vehicles-progress-labels mb-6">
        <div class="vehicles-progress-label on-the-way-text" style="width: 39.7%;">On the way</div>
        <div class="vehicles-progress-label unloading-text" style="width: 28.3%;">Unloading</div>
        <div class="vehicles-progress-label loading-text" style="width: 17.4%;">Loading</div>
        <div class="vehicles-progress-label waiting-text text-nowrap" style="width: 14.6%;">Waiting</div>
      </div>
      <div class="vehicles-overview-progress progress rounded-3 mb-6 bg-transparent overflow-hidden" style="height: 46px;">
        <div class="progress-bar fw-medium text-start shadow-none bg-lighter text-heading px-4 rounded-0" role="progressbar" style="width: 39.7%" aria-valuenow="39.7" aria-valuemin="0" aria-valuemax="100">39.7%</div>
        <div class="progress-bar fw-medium text-start shadow-none bg-primary px-4" role="progressbar" style="width: 28.3%" aria-valuenow="28.3" aria-valuemin="0" aria-valuemax="100">28.3%</div>
        <div class="progress-bar fw-medium text-start shadow-none text-bg-info px-2 px-sm-4" role="progressbar" style="width: 17.4%" aria-valuenow="17.4" aria-valuemin="0" aria-valuemax="100">17.4%</div>
        <div class="progress-bar fw-medium text-start shadow-none snackbar text-paper px-1 px-sm-3 rounded-0 px-lg-4" role="progressbar" style="width: 14.6%" aria-valuenow="14.6" aria-valuemin="0" aria-valuemax="100">14.6%</div>
      </div>
      <div class="table-responsive">
        <table class="table card-table table-border-top-0">
          <tbody class="table-border-bottom-0">
            <tr>
              <td class="w-50 ps-0">
                <div class="d-flex justify-content-start align-items-center">
                  <div class="me-2">
                    <i class="icon-base bx bx-car icon-lg text-heading"></i>
                  </div>
                  <h6 class="mb-0 fw-normal">On the way</h6>
                </div>
              </td>
              <td class="text-end pe-0 text-nowrap">
                <h6 class="mb-0">2hr 10min</h6>
              </td>
              <td class="text-end pe-0">
                <span>39.7%</span>
              </td>
            </tr>
            <tr>
              <td class="w-50 ps-0">
                <div class="d-flex justify-content-start align-items-center">
                  <div class="me-2">
                    <i class="icon-base bx bx-down-arrow-circle icon-lg text-heading"></i>
                  </div>
                  <h6 class="mb-0 fw-normal">Unloading</h6>
                </div>
              </td>
              <td class="text-end pe-0 text-nowrap">
                <h6 class="mb-0">3hr 15min</h6>
              </td>
              <td class="text-end pe-0">
                <span>28.3%</span>
              </td>
            </tr>
            <tr>
              <td class="w-50 ps-0">
                <div class="d-flex justify-content-start align-items-center">
                  <div class="me-2">
                    <i class="icon-base bx bx-up-arrow-circle icon-lg text-heading"></i>
                  </div>
                  <h6 class="mb-0 fw-normal">Loading</h6>
                </div>
              </td>
              <td class="text-end pe-0 text-nowrap">
                <h6 class="mb-0">1hr 24min</h6>
              </td>
              <td class="text-end pe-0">
                <span>17.4%</span>
              </td>
            </tr>
            <tr>
              <td class="w-50 ps-0">
                <div class="d-flex justify-content-start align-items-center">
                  <div class="me-2">
                    <i class="icon-base bx bx-time-five icon-lg text-heading"></i>
                  </div>
                  <h6 class="mb-0 fw-normal">Waiting</h6>
                </div>
              </td>
              <td class="text-end pe-0 text-nowrap">
                <h6 class="mb-0">5hr 19min</h6>
              </td>
              <td class="text-end pe-0">
                <span>14.6%</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--/ Vehicles overview -->

<!-- Shipment statistics-->
<div class="col-xxl-6 col-lg-7">
  <div class="card h-100">
    <div class="card-header d-flex align-items-center justify-content-between">
      <div class="card-title mb-0">
        <h5 class="mb-1">Shipment statistics</h5>
        <p class="card-subtitle">Total number of deliveries 23.8k</p>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-label-primary">January</button>
        <button type="button" class="btn btn-label-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">January</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">February</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">March</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">April</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">May</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">June</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">July</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">August</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">September</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">October</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">November</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">December</a></li>
        </ul>
      </div>
    </div>
    <div class="card-body">
      <div id="shipmentStatisticsChart"></div>
    </div>
  </div>
</div>
<!--/ Shipment statistics -->

<!-- Delivery Performance -->
<div class="col-xxl-4 col-lg-5">
  <div class="card h-100">
    <div class="card-header d-flex justify-content-between">
      <div class="card-title mb-0">
        <h5 class="mb-1 me-2">Delivery Performance</h5>
        <p class="card-subtitle">12% increase in this month</p>
      </div>
      <div class="dropdown">
        <button class="btn text-body-secondary p-0" type="button" id="deliveryPerformance" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="icon-base bx bx-dots-vertical-rounded icon-lg"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryPerformance">
          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
          <a class="dropdown-item" href="javascript:void(0);">Share</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <ul class="p-0 m-0">
        <li class="d-flex mb-6 align-items-center">
          <div class="avatar flex-shrink-0 me-4">
            <span class="avatar-initial rounded bg-label-primary"><i class="icon-base bx bx-cube icon-lg"></i></span>
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <h6 class="mb-1 fw-normal">Packages in transit</h6>
              <p class="text-success mb-0">
                <i class="icon-base bx bx-chevron-up icon-lg me-1"></i>
                25.8%
              </p>
            </div>
            <div class="user-progress">
              <h6 class="mb-0">10k</h6>
            </div>
          </div>
        </li>
        <li class="d-flex mb-6 align-items-center">
          <div class="avatar flex-shrink-0 me-4">
            <span class="avatar-initial rounded bg-label-info"><i class="icon-base bx bxs-truck icon-lg"></i></span>
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <h6 class="mb-1 fw-normal">Packages out for delivery</h6>
              <p class="text-success mb-0">
                <i class="icon-base bx bx-chevron-up icon-lg me-1"></i>
                4.3%
              </p>
            </div>
            <div class="user-progress">
              <h6 class="mb-0">5k</h6>
            </div>
          </div>
        </li>
        <li class="d-flex mb-6 align-items-center">
          <div class="avatar flex-shrink-0 me-4">
            <span class="avatar-initial rounded bg-label-success"><i class="icon-base bx bx-check-circle icon-lg"></i></span>
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <h6 class="mb-1 fw-normal">Packages delivered</h6>
              <p class="text-danger mb-0">
                <i class="icon-base bx bx-chevron-down icon-lg me-1"></i>
                12.5
              </p>
            </div>
            <div class="user-progress">
              <h6 class="mb-0">15k</h6>
            </div>
          </div>
        </li>
        <li class="d-flex mb-6 align-items-center">
          <div class="avatar flex-shrink-0 me-4">
            <span class="avatar-initial rounded bg-label-warning"><i class="icon-base bx bxs-offer icon-lg"></i></span>
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <h6 class="mb-1 fw-normal">Delivery success rate</h6>
              <p class="text-success mb-0">
                <i class="icon-base bx bx-chevron-up icon-lg me-1"></i>
                35.6%
              </p>
            </div>
            <div class="user-progress">
              <h6 class="mb-0">95%</h6>
            </div>
          </div>
        </li>
        <li class="d-flex mb-6 align-items-center">
          <div class="avatar flex-shrink-0 me-4">
            <span class="avatar-initial rounded bg-label-secondary"><i class="icon-base bx bx-time-five icon-lg"></i></span>
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <h6 class="mb-1 fw-normal">Average delivery time</h6>
              <p class="text-danger mb-0">
                <i class="icon-base bx bx-chevron-down icon-lg me-1"></i>
                2.15
              </p>
            </div>
            <div class="user-progress">
              <h6 class="mb-0">2.5 Days</h6>
            </div>
          </div>
        </li>
        <li class="d-flex align-items-center">
          <div class="avatar flex-shrink-0 me-4">
            <span class="avatar-initial rounded bg-label-danger"><i class="icon-base bx bx-group icon-lg"></i></span>
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <h6 class="mb-1 fw-normal">Customer satisfaction</h6>
              <p class="text-success mb-0">
                <i class="icon-base bx bx-chevron-up icon-lg me-1"></i>
                5.7%
              </p>
            </div>
            <div class="user-progress">
              <h6 class="mb-0">4.5/5</h6>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--/ Delivery Performance -->

<!-- Reasons for delivery exceptions -->
<div class="col-xxl-4 col-lg-6">
  <div class="card h-100">
    <div class="card-header d-flex align-items-center justify-content-between">
      <div class="card-title mb-0">
        <h5 class="m-0 me-2">Reasons for delivery exceptions</h5>
      </div>
      <div class="dropdown">
        <button class="btn p-0" type="button" id="deliveryExceptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="icon-base bx bx-dots-vertical-rounded icon-lg text-body-secondary"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
          <a class="dropdown-item" href="javascript:void(0);">Share</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div id="deliveryExceptionsChart"></div>
    </div>
  </div>
</div>
<!--/ Reasons for delivery exceptions -->

<!-- Orders by Countries -->
<div class="col-xxl-4 col-lg-6">
  <div class="card h-100">
    <div class="card-header d-flex justify-content-between">
      <div class="card-title mb-0">
        <h5 class="mb-1">Orders by Countries</h5>
        <p class="card-subtitle">62 deliveries in progress</p>
      </div>
      <div class="dropdown">
        <button class="btn text-body-secondary p-0" type="button" id="ordersCountries" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="icon-base bx bx-dots-vertical-rounded icon-lg"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ordersCountries">
          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
          <a class="dropdown-item" href="javascript:void(0);">Share</a>
        </div>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="nav-align-top">
        <ul class="nav nav-tabs nav-fill rounded-0 timeline-indicator-advanced" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-new" aria-controls="navs-justified-new" aria-selected="true">New</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-link-preparing" aria-controls="navs-justified-link-preparing" aria-selected="false">Preparing</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-link-shipping" aria-controls="navs-justified-link-shipping" aria-selected="false">Shipping</button>
          </li>
        </ul>
        <div class="tab-content border-0  mx-1">
          <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
            <ul class="timeline mb-0">
              <li class="timeline-item ps-6 border-left-dashed">
                <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                  <i class="icon-base bx bx-check-circle"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-success text-uppercase">sender</small>
                  </div>
                  <h6 class="my-50">Myrtle Ullrich</h6>
                  <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                </div>
              </li>
              <li class="timeline-item ps-6 border-transparent">
                <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                  <i class="icon-base bx bx-map"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-primary text-uppercase">Receiver</small>
                  </div>
                  <h6 class="my-50">Barry Schowalter</h6>
                  <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                </div>
              </li>
            </ul>
            <div class="border border-dashed my-4"></div>
            <ul class="timeline mb-0">
              <li class="timeline-item ps-6 border-left-dashed">
                <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                  <i class="icon-base bx bx-check-circle"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-success text-uppercase">sender</small>
                  </div>
                  <h6 class="my-50">Veronica Herman</h6>
                  <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                </div>
              </li>
              <li class="timeline-item ps-6 border-transparent">
                <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                  <i class="icon-base bx bx-map"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-primary text-uppercase">Receiver</small>
                  </div>
                  <h6 class="my-50">Helen Jacobs</h6>
                  <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
            <ul class="timeline mb-0">
              <li class="timeline-item ps-6 border-left-dashed">
                <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                  <i class="icon-base bx bx-check-circle"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-success text-uppercase">sender</small>
                  </div>
                  <h6 class="my-50">Barry Schowalter</h6>
                  <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                </div>
              </li>
              <li class="timeline-item ps-6 border-transparent border-left-dashed">
                <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                  <i class="icon-base bx bx-map"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-primary text-uppercase">Receiver</small>
                  </div>
                  <h6 class="my-50">Myrtle Ullrich</h6>
                  <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                </div>
              </li>
            </ul>
            <div class="border border-dashed my-4"></div>
            <ul class="timeline mb-0">
              <li class="timeline-item ps-6 border-left-dashed">
                <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                  <i class="icon-base bx bx-check-circle"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-success text-uppercase">sender</small>
                  </div>
                  <h6 class="my-50">Veronica Herman</h6>
                  <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                </div>
              </li>
              <li class="timeline-item ps-6 border-transparent">
                <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                  <i class="icon-base bx bx-map"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-primary text-uppercase">Receiver</small>
                  </div>
                  <h6 class="my-50">Helen Jacobs</h6>
                  <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
            <ul class="timeline mb-0">
              <li class="timeline-item ps-6 border-left-dashed">
                <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                  <i class="icon-base bx bx-check-circle"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-success text-uppercase">sender</small>
                  </div>
                  <h6 class="my-50">Veronica Herman</h6>
                  <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                </div>
              </li>
              <li class="timeline-item ps-6 border-transparent">
                <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                  <i class="icon-base bx bx-map"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-primary text-uppercase">Receiver</small>
                  </div>
                  <h6 class="my-50">Barry Schowalter</h6>
                  <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                </div>
              </li>
            </ul>
            <div class="border border-dashed my-4"></div>
            <ul class="timeline mb-0">
              <li class="timeline-item ps-6 border-left-dashed">
                <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                  <i class="icon-base bx bx-check-circle"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-success text-uppercase">sender</small>
                  </div>
                  <h6 class="my-50">Myrtle Ullrich</h6>
                  <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                </div>
              </li>
              <li class="timeline-item ps-6 border-transparent">
                <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                  <i class="icon-base bx bx-map"></i>
                </span>
                <div class="timeline-event ps-1">
                  <div class="timeline-header">
                    <small class="text-primary text-uppercase">Receiver</small>
                  </div>
                  <h6 class="my-50">Helen Jacobs</h6>
                  <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Orders by Countries -->

<!-- On route vehicles Table -->

<!--/ On route vehicles Table -->
</div>

</div>