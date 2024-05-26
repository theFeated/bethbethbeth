@extends('layouts.app')

@section('title', '')

@section('contents')

<style>
  <style>
      .modal {
      background-color: transparent;
  }

  .modal-backdrop {
      display: none;
      
  }
</style>

<body>

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">
        <div class="section-title">
            <h2>About</h2>
            <p>Learn more about me</p>
        </div>
        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/me.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ $personalDetail->title }}</h3>
                <p class="fst-italic">
                    {{ $personalDetail->description }}
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>{{ $personalDetail->name }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $personalDetail->birthday}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $personalDetail->phone }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{ $personalDetail->address }}</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $personalDetail->age }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $personalDetail->degree }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $personalDetail->email }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Dance Instructor:</strong> <span>{{ $personalDetail->dance_instructor }}</span></li>
                        </ul>
                    </div>
                </div>
                <p>
                    {{ $personalDetail->additional_info }}
                </p>
            </div>
        </div>
    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">
        <div class="row">
            @foreach($counts as $count)
            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="{{ $count->icon }}"></i>
                    <span data-purecounter-start="0" data-purecounter-end="{{ $count->count_value }}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>{{ $count->title }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        @foreach ($skills as $skill)
          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->percentage }}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
        @endforeach
      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        @foreach ($interests as $interest)
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="{{ $interest->icon }}" style="color: {{ $interest->color }};"></i>
              <h3>{{ $interest->name }}</h3>
            </div>
          </div>
        @endforeach
      </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Goals</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          @foreach ($goals as $goal)
          <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{ $goal->description }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ Voyager::image($goal->image) }}" class="testimonial-img" alt="">
                <h3>{{ $goal->author }}</h3>
              </div>
            </div><!-- End testimonial item -->
          @endforeach

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Summary</h3>
          <div class="resume-item pb-0">
            <h4>{{ $personalDetail->name }}</h4>
            <p><em>{{ $personalDetail->about_me }}</em></p>
            <p>
            <ul>
              <li>{{ $personalDetail->address }}</li>
              <li>{{ $personalDetail->phone }}</li>
              <li>{{ $personalDetail->email }}</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>

          @foreach ($educations as $education)
              <div class="resume-item">
                  <h4>{{ $education->institution }}</h4>
                  <h5>{{ date('Y', strtotime($education->start_date)) }} - {{ $education->end_date ? date('Y', strtotime($education->end_date)) : 'Present' }}</h5>
                  <p><em>{{ $education->location }}</em></p>
                  <p>{{ $education->description }}</p>
              </div>
          @endforeach
        </div>

    </div>

    <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            @foreach($professionalExperiences as $experience)
                <div class="resume-item">
                    <h4>{{ $experience['title'] }}</h4>
                    <h5>{{ date('Y', strtotime($experience['start_date'])) }} - {{ $experience['end_date'] ? date('Y', strtotime($experience['end_date'])) : 'Present' }}</h5>
                    <p><em>{{ $experience['role'] }}</em></p>
                    <p>
                        <ul>
                            @foreach(explode(', ', $experience['description']) as $description)
                                <li>{{ $description }}</li>
                            @endforeach
                        </ul>
                    </p>
                </div>
            @endforeach
        </div>

  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      @foreach ($services as $service)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="{{ $service->icon }}"></i></div>
            <h4><a href="">{{ $service->title }}</a></h4>
            <p>{{ $service->description }}</p>
          </div>
        </div>
      @endforeach

      </div>

    </div>
  </section><!-- End Services Section -->


  <section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>My Works</p>
        </div>

        <div class="row portfolio-container">
            @foreach ($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 portfolio-item {{ strtolower($portfolio->category) }}" data-cat="{{ strtolower($portfolio->category) }}">
                <div class="portfolio-wrap">
                    <img src="{{ Voyager::image($portfolio->image1) }}" class="img-fluid" style="height: 250px; width: 100%; object-fit: cover;" alt="{{ $portfolio->description }}">
                    <div class="portfolio-info">
                        <h4>{{ $portfolio->description }}</h4>
                        <p>{{ $portfolio->category }}</p>
                        <div class="portfolio-links">
                            <a class="" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $portfolio->id }}"><i class="bx bx-link"></i></a>
                            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $portfolio->id }}" class="glightbox portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>

                <!-- Portfolio Modal -->
                <div class="modal fade" id="portfolioModal{{ $portfolio->id }}" tabindex="-1" role="dialog" aria-labelledby="portfolioModalLabel{{ $portfolio->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <!-- ======= Portfolio Details ======= -->
                                <div class="portfolio-details mt-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-end">
                                                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="bi bi-x" style="font-size: 2rem; color: white;"></i>
                                                </button>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="portfolio-details-slider swiper">
                                                    <div class="swiper-wrapper align-items-center">
                                                        <div class="swiper-slide">
                                                            <img src="{{ Voyager::image($portfolio->image1) }}" alt="">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="{{ Voyager::image($portfolio->image2) }}" alt="">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="{{ Voyager::image($portfolio->image3) }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 portfolio-info">
                                                <h3>Project information</h3>
                                                <ul>
                                                    <li><strong>Category</strong>: {{ $portfolio->category }}</li>
                                                    <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                                                    <li><strong>Project date</strong>: {{ $portfolio->project_date }}</li>
                                                    <li><strong>Project URL</strong>: <a href="{{ $portfolio->project_url }}" target="_blank">{{ $portfolio->project_url }}</a></li>
                                                </ul>
                                                <p><strong>Description:</strong> {{ $portfolio->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Details -->
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>          

        <div class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link bg-dark" href="{{ $portfolios->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @foreach(range(1, $portfolios->lastPage()) as $page)
                    <li class="page-item {{ ($portfolios->currentPage() == $page) ? 'active' : '' }}">
                        <a class="page-link bg-dark" href="{{ $portfolios->url($page) }}">{{ $page }}</a>
                    </li>
                @endforeach
                <li class="page-item">
                    <a class="page-link bg-dark" href="{{ $portfolios->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    
</section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    @livewire('contact-form')
  </section><!-- End Contact Section -->


</body>

@endsection