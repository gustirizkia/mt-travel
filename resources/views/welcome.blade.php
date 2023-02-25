@extends('layouts.front')

@section('title')
   Explore Top Destination On Lebak Banten
@endsection

@section('content')
    <header class="">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6 d-flex flex-column justify-content-center">
            <h1>
              Explore The <span class="color__primary"> Beautiful World </span>
              <br />
              <span class="color__primary">As Easy</span> One Click
            </h1>
            <p class="mt-md-3 mt-2">
              You will see beautiful
              <br />
              moment you never see before
            </p>
            <div class="d-flex start">
              <a
                href="#"
                class="btn btn-get-started px-4 mt-md-4 mt-2 d-inline"
              >
                Get Started
              </a>
            </div>

            <div class="icon mt-md-5 mt-4 d-flex justify-content-between">
              <div class="">
                <img src="assets/images/ic_traveler (1) 1.png" alt="" />
                <div class="count mt-md-2">
                  <strong>80,409</strong>
                  <span class="text-secondary">travelers</span>
                </div>
              </div>
              <div class="">
                <img src="assets/images/ic_treasure 1.png" alt="" />
                <div class="count mt-md-2">
                  <strong>80,409</strong>
                  <span class="text-secondary">treasure</span>
                </div>
              </div>
              <div class="">
                <img src="assets/images/ic_cities 1.png" alt="" />

                <div class="count mt-md-2">
                  <strong>80,409</strong>
                  <span class="text-secondary">Lokasi</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 d-md-block d-none">
            <img src="assets/images/banner.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </header>

    <section class="rekomendasi mb-5 mt-md-0 mt-4">
      <div class="container">
        <h2>Explore Top Destination</h2>
        <div class="row mt-4">
          <div class="col-md-3 position-relative mb-3">
            <a href="{{ route('detail') }}"
              class="col__item position-relative d-flex flex-column justify-content-end align-items-star text-white p-3"
              style="
                background: linear-gradient(
                    180.1deg,
                    rgba(0, 0, 0, 0) 50%,
                    rgba(0, 0, 0, 0.5) 99.91%
                  ),
                  url(https://images.unsplash.com/photo-1590829197118-b0609523669d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80);
              "
            >
              <div class="time px-3 py-1 d-flex align-items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-clock-history"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"
                  />
                  <path
                    d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"
                  />
                  <path
                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"
                  />
                </svg>
                <div class="ms-2">12.00-15.00</div>
              </div>
              <div class="title">Pantai Sawarna</div>
              <div class="icon_item">
                <div class="d-flex align-items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-geo-alt-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                    />
                  </svg>
                  <p class="ms-2">Bayah</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3 position-relative mb-3">
            <a href="{{ route('detail') }}"
              class="col__item position-relative d-flex flex-column justify-content-end align-items-star text-white p-3"
              style="
                background: linear-gradient(
                    180.1deg,
                    rgba(0, 0, 0, 0) 50%,
                    rgba(0, 0, 0, 0.5) 99.91%
                  ),
                  url(https://www.gotravelly.com/blog/wp-content/uploads/2018/06/pantai-2.jpg);
              "
            >
              <div class="time px-3 py-1 d-flex align-items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-clock-history"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"
                  />
                  <path
                    d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"
                  />
                  <path
                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"
                  />
                </svg>
                <div class="ms-2">12.00-15.00</div>
              </div>
              <div class="title">Pantai Sawarna</div>
              <div class="icon_item">
                <div class="d-flex align-items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-geo-alt-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                    />
                  </svg>
                  <p class="ms-2">Bayah</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3 position-relative mb-3">
            <a href="{{ route('detail') }}"
              class="col__item position-relative d-flex flex-column justify-content-end align-items-star text-white p-3"
              style="
                background-image: linear-gradient(
                    180.1deg,
                    rgba(0, 0, 0, 0) 50%,
                    rgba(0, 0, 0, 0.5) 99.91%
                  ),
                  url(https://anekatempatwisata.com/wp-content/uploads/2014/03/Pantai-Sawarna.jpg);
              "
            >
              <div class="time px-3 py-1 d-flex align-items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-clock-history"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"
                  />
                  <path
                    d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"
                  />
                  <path
                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"
                  />
                </svg>
                <div class="ms-2">12.00-15.00</div>
              </div>
              <div class="title">Pantai Sawarna</div>
              <div class="icon_item">
                <div class="d-flex align-items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-geo-alt-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                    />
                  </svg>
                  <p class="ms-2">Bayah</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3 position-relative mb-3">
            <a href="{{ route('detail') }}"
              class="col__item position-relative d-flex flex-column justify-content-end align-items-star text-white p-3"
              style="
                background: linear-gradient(
                    180.1deg,
                    rgba(0, 0, 0, 0) 50%,
                    rgba(0, 0, 0, 0.5) 99.91%
                  ),
                  url(https://images.unsplash.com/photo-1590829197118-b0609523669d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80);
              "
            >
              <div class="time px-3 py-1 d-flex align-items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-clock-history"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"
                  />
                  <path
                    d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"
                  />
                  <path
                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"
                  />
                </svg>
                <div class="ms-2">12.00-15.00</div>
              </div>
              <div class="title">Pantai Sawarna</div>
              <div class="icon_item">
                <div class="d-flex align-items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-geo-alt-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                    />
                  </svg>
                  <p class="ms-2">Bayah</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="home-stay mb-5">
      <div class="container">
        <h2>Homestay</h2>
        <div class="row mt-4">
            @for ($i = 0; $i < 4; $i++)
                <div class="mb-3 col-md-3 col-6">
                <img src="https://images.unsplash.com/photo-1566571807426-61eca847576f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" class="img-fluid" alt="">
                    <div class="p-2">
                        <div class="name mt-1">Green Park</div>
                        <p class="location">Anyer</p>
                    </div>
                </div>

            @endfor
        </div>
      </div>
    </section>
@endsection
