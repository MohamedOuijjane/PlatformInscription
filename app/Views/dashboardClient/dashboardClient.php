<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Client</title>
    <link rel="stylesheet" href="style.css" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

:root {
  --main-color: #075ac1;
  --color-dark: #1d2231;
  --text-gray: #8390a2;
  --body-bg: #f1f5f9;
}

* {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  text-decoration: none;
  list-style-type: none;
  box-sizing: border-box;
}

body {
  background-color: var(--body-bg);
  font-family: 'Roboto', sans-serif;
}

/* Sidebar */
#sidebar-toggle {
  display: none;
}

.sidebar {
  height: 100%;
  width: 240px;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 100;
  background-color: var(--main-color);
  color: #ffffff;
  overflow-y: auto;
  transition: width 500ms;
}

.sidebar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 60px;
  padding: 0 1rem;
}

.sidebar-menu {
  padding: 1rem;
}

.sidebar li {
  margin-bottom: 1.2rem;
}

/* Sidebar links hover effect */
.sidebar a {
  color: #ffffff;
  font-size: 0.9rem;
  display: flex;
  align-items: center;
  transition: background 0.3s, padding-left 0.3s;
}

.sidebar a:hover {
  background-color: rgba(255, 255, 255, 0.1);
  padding-left: 1rem;
}

.sidebar a span:last-child {
  padding-left: 0.6rem;
}

/* Sidebar Toggle */
#sidebar-toggle:checked ~ .sidebar {
  width: 60px;
}

#sidebar-toggle:checked ~ .sidebar .sidebar-header h3 span,
#sidebar-toggle:checked ~ .sidebar li span:last-child {
  display: none;
}

#sidebar-toggle:checked ~ .sidebar .sidebar-header,
#sidebar-toggle:checked ~ .sidebar li {
  display: flex;
  justify-content: center;
}

#sidebar-toggle:checked ~ .main-content {
  margin-left: 60px;
}

#sidebar-toggle:checked ~ .main-content header {
  left: 60px;
  width: calc(100% - 60px);
}

/* Main Content */
.main-content {
  position: relative;
  margin-left: 240px;
  transition: margin-left 500ms;
}

header {
  position: fixed;
  top: 0;
  left: 240px;
  z-index: 100;
  width: calc(100% - 240px);
  background-color: #ffffff;
  height: 60px;
  padding: 0 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid #ccc;
  transition: 500ms;
}

/* Header shadow animation */
header {
  transition: box-shadow 0.3s;
}

header:hover {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.search-wrapper {
  display: flex;
  align-items: center;
}

.search-wrapper input {
  border: none;
  outline: none;
  padding: 1rem;
  height: 38px;
  transition: background 0.3s;
}

/* Search input focus animation */
.search-wrapper input:focus {
  background-color: #e0e7ff;
}

.social-icons {
  display: flex;
  align-items: center;
}

.social-icons span,
.social-icons div {
  margin-left: 1.2rem;
}

.social-icons div {
  height: 38px;
  width: 38px;
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url(img/hardylutula.jpeg);
  border-radius: 50%;
  transition: transform 0.3s;
}

/* Social icons hover effect */
.social-icons div:hover {
  transform: scale(1.1);
}

main {
  margin-top: 60px;
  background-color: #f1f5f9;
  min-height: 90vh;
  padding: 1rem 3rem;
}

.dash-title {
  color: var(--color-dark);
  margin-bottom: 1rem;
}

.dash-cards {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-column-gap: 3rem;
}

/* Card Styles */
.card-single {
  background-color: #ffffff;
  border-radius: 7px;
  box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s, box-shadow 0.3s;
}

/* Card hover effect */
.card-single:hover {
  transform: translateY(-10px);
  box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.2);
}

.card-body {
  padding: 1.3rem 1rem;
  display: flex;
  align-items: center;
}

.card-body span {
  font-size: 1.5rem;
  color: #777;
  padding-right: 1.4rem;
}

.card-body h5 {
  color: var(--text-gray);
  font-size: 1rem;
}

.card-body h4 {
  color: var(--color-dark);
  font-size: 1.1rem;
  margin-top: 0.2rem;
}

.card-footer {
  padding: 0.2rem 1rem;
  background: #f9fcfc;
}

.card-footer a {
  color: var(--main-color);
  transition: color 0.3s;
}

/* Card footer link hover */
.card-footer a:hover {
  color: #004a9c;
}

/* Activity and Summary */
.recent {
  margin: 3rem 0;
}

.activity-grid {
  display: grid;
  grid-template-columns: 75% 25%;
  grid-column-gap: 1.5rem;
}

.activity-card,
.summery-card,
.bday-card {
  background-color: #ffffff;
  border-radius: 7px;
}

.activity-card h3 {
  color: var(--text-gray);
  margin: 1rem;
}

.activity-card table {
  width: 100%;
  border-collapse: collapse;
}

.activity-card thead {
  background: #efefef;
  text-align: left;
}

th,
td {
  font-size: 0.9rem;
  padding: 1rem;
  color: var(--color-dark);
}

td {
  font-size: 0.8rem;
}

tbody tr:nth-child(even) {
  background: #f9fafc;
}

/* Badge */
.badge {
  padding: 0.2rem 1rem;
  border-radius: 20px;
  font-weight: 700;
  font-size: 0.7rem;
}

.badge.success {
  background: #def7ec;
  color: var(--main-color);
}

.badge.warning {
  background: #f0f6b2;
  color: orange;
}

/* Team Images */
.td-team {
  display: flex;
  align-items: center;
}

.img-1,
.img-2,
.img-3 {
  height: 38px;
  width: 38px;
  border-radius: 50%;
  margin-left: -15px;
  border: 3px solid #efefef;
  background-size: cover;
  background-repeat: no-repeat;
  transition: transform 0.3s;
}

.img-1 {
  background-image: url(img/hardylutula.jpeg);
}

.img-2 {
  background-image: url(img/hardy2.jpeg);
}

/* Team images hover */
.img-1:hover,
.img-2:hover,
.img-3:hover {
  transform: scale(1.1);
}

/* Summary Card */
.summery-card {
  margin-bottom: 1.5rem;
  padding: 0.5rem 0;
}

.summery-single {
  padding: 0.5rem 1rem;
  display: flex;
  align-items: center;
}

.summery-single span {
  font-size: 1.5rem;
  color: #777;
  padding-right: 1rem;
}

.summery-single h5 {
  color: var(--main-color);
  font-size: 1.1rem;
  margin-bottom: 0;
}

.summery-single small {
  font-weight: 700;
  color: var(--text-gray);
}

/* Birthday Card */
.bday-flex {
  display: flex;
  align-items: center;
  margin-bottom: 0.3rem;
}

.bday-card {
  padding: 1rem;
}

.bday-img {
  height: 60px;
  width: 60px;
  border-radius: 50%;
  border: 3px solid #efefef;
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url(img/hardylutula.jpeg);
  margin-left: 0.7rem;
  transition: transform 0.3s;
}

.bday-img:hover {
  transform: scale(1.1);
}

/* Text Center */
.text-center {
  text-align: center;
}

.text-center button {
  background-color: var(--main-color);
  color: #ffffff;
  border: 1px solid var(--main-color);
  border-radius: 4px;
  padding: 0.4rem 1rem;
  transition: background 0.3s, transform 0.2s;
}

.text-center button:hover {
  background-color: #004a9c;
  transform: scale(1.05);
}

/* Responsive */
@media only screen and (max-width: 1200px) {
  .sidebar {
    width: 60px;
  }

  .sidebar .sidebar-header h3 span,
  .sidebar li span:last-child {
    display: none;
  }

  .sidebar .sidebar-header,
  .sidebar li {
    display: flex;
    justify-content: center;
  }

  .main-content {
    margin-left: 60px;
  }

  .main-content header {
    left: 60px;
  }
}

</style>
  </head>
  <body>
    <input type="checkbox" id="sidebar-toggle" />
    <!--side bar-->
    <div class="sidebar">
      <!--sidebar-header-->
      <div class="sidebar-header">
        <h3 class="brand">
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-grid-1x2-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"
              />
            </svg>
          </span>
          <span>DA Report</span>
        </h3>
        <label for="sidebar-toggle" style="cursor: pointer">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-list"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
            />
          </svg>
        </label>
      </div>

      <!--sidebar-menu-->
      <div class="sidebar-menu">
        <ul>
          <li>
            <a href="#">
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-house"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"
                  />
                  <path
                    fill-rule="evenodd"
                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"
                  />
                </svg>
              </span>
              <span>Home</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-emoji-smile"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                  />
                  <path
                    d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"
                  />
                </svg>
              </span>
              <span>Teams</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-bar-chart-steps"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"
                  />
                </svg>
              </span>
              <span>Tasks</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>
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
              </span>
              <span>Leaves</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-grid-3x3-gap"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"
                  />
                </svg>
              </span>
              <span>Projects</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-bar-chart-line"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"
                  />
                </svg>
              </span>
              <span>POE</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-gear"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"
                  />
                  <path
                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"
                  />
                </svg>
              </span>
              <span>Setting</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!--main-content-->
    <div class="main-content">
      <!--header-->
      <header>
        <div class="search-wrapper">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
            </span>
            <input type="text" name="search" placeholder="Search" />
        </div>

        <div class="social-icons">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                  </svg>
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                  </svg>
            </span>
            <div></div>
        </div>
      </header>

      <!--main-->
      <main>
        <h2 class="dash-title">Overview</h2>

        <!--cards-->
        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
                          </svg>
                    </span>
                    <div>
                        <h5>To-do</h5>
                        <h4>1,098</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#">View all</a>
                </div>
            </div>

            <div class="card-single">
                <div class="card-body">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-collapse" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z"/>
                          </svg>
                    </span>
                    <div>
                        <h5>Pending</h5>
                        <h4>397</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#">View all</a>
                </div>
            </div>

            <div class="card-single">
                <div class="card-body">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                          </svg>
                    </span>
                    <div>
                        <h5>Processed</h5>
                        <h4>701</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#">View all</a>
                </div>
            </div>
        </div>

        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Recent activity</h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Assigned To</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Stocko App Dev</td>
                                <td>1 Jan, 2021</td>
                                <td>2 Feb, 2021</td>
                                <td class="td-team">
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                </td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>

                            <tr>
                                <td>Linkskills App Dev</td>
                                <td>27 Feb, 2021</td>
                                <td>2 Apl, 2021</td>
                                <td class="td-team">
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                </td>
                                <td>
                                    <span class="badge warning">Processing</span>
                                </td>
                            </tr>

                            <tr>
                                <td>PWD recruitement</td>
                                <td>1 Jun, 2021</td>
                                <td>2 Dec, 2021</td>
                                <td class="td-team">
                                    <div class="img-1"></div>
                                </td>
                                <td>
                                    <span class="badge warning">Processing</span>
                                </td>
                            </tr>

                            <tr>
                                <td>DataScience Bootcamp</td>
                                <td>1 Jun, 2021</td>
                                <td>2 Dec, 2021</td>
                                <td class="td-team">
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                </td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>

                            <tr>
                                <td>POES development</td>
                                <td>1 Jun, 2021</td>
                                <td>2 Dec, 2021</td>
                                <td class="td-team">
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                    <div class="img-1"></div>
                                </td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="summary">
                    <div class="summery-card">
                        <div class="summery-single">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                  </svg>
                            </span>

                            <div>
                                <h5>196</h5>
                                <small>Number of staff</small>
                            </div>
                        </div>

                        <div class="summery-single">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                  </svg>
                            </span>

                            <div>
                                <h5>17</h5>
                                <small>Number of leave</small>
                            </div>
                        </div>

                        <div class="summery-single">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                  </svg>
                            </span>
                            <div>
                                <h5>12</h5>
                                <small>Profile update request</small>
                            </div>
                        </div>
                    </div>

                    <div class="bday-card">
                        <div class="bday-flex">
                            <div class="bday-img"></div>
                            <div class="bday-info">
                                <h5>Dylut</h5>
                                <small>Birthday Today</small>
                            </div>
                        </div>

                        <div class="text-center">
                            <button>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                      </svg>
                                </span>
                                Wish Dylut
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
      </main>
    </div>
  </body>
</html>
