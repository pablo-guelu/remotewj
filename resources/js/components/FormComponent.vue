<template>
  <div class="container">
    <form @submit.prevent="checkForm()" action="" class="my-2">
      <!-- @csrf -->

      <div class="m-3 p-3 border rounded-3 shadow-sm">
        <h2>Job Info</h2>

        <!-- first row -->
        <div class="row">
          <!-- Title -->
          <div class="col-md-8 p-3">
            <h5 class="mt-4">Title <span class="">💼</span></h5>
            <input
              type="text"
              class="form-control"
              id=""
              placeholder="Ex. Full Stack Developer"
              v-model="job.title"
            />
            <div id="invalidJobTitle" class="invalid-feedback">
              Please provide a Job Title
            </div>
          </div>

          <!-- Category -->
          <div class="col-md-4 p-3">
            <h5 class="mt-4">Category <span class="">📇</span></h5>
            <select class="form-select" id="" v-model="job.category">
              <option>Full Stack Developent</option>
              <option>Backend Development</option>
              <option>Frontend Development</option>
              <option>Customer Support</option>
              <option>Marketing</option>
              <option>Sales</option>
              <option>Design</option>
              <option>Other Remote</option>
            </select>
            <div id="invalidJobCategory" class="invalid-feedback">
              Please select a category
            </div>
          </div>
        </div>

        <!-- second row -->
        <div class="row">
          <!-- Remote? -->
          <div class="col-md-4 px-3">
            <h5 class="mt-4">Is this Job Remote?<span>📡</span></h5>
            <select class="form-select" id="" v-model="job.isremote">
              <option v-for="remote in isremote" :key="remote">
                {{ remote }}
              </option>
            </select>
            <div id="invalidJobRemote" class="invalid-feedback">
              Please select if your job offer is remote or not
            </div>
          </div>

          <!-- Type -->
          <div class="col-md-4 px-3">
            <h5 class="mt-4">Type <span>🧪</span></h5>
            <select class="form-select" id="" v-model="job.type">
              <option v-for="type in types" :key="type">{{ type }}</option>
            </select>
            <div id="invalidJobType" class="invalid-feedback">
              Please select the type of job you offer
            </div>
          </div>

          <!-- Days -->
          <div class="col-md-4 px-3">
            <h5 class="mt-4">Days per Week?<span>📅</span></h5>
            <select class="form-select" id="" v-model="job.days">
              <option v-for="day in days" :key="day">{{ day }}</option>
            </select>
            <div id="invalidJobDays" class="invalid-feedback">
              Please select how many days per week you require
            </div>
          </div>
        </div>

        <!-- Description -->
        <div class="row mt-5">
          <div class="form-group col p-3">
            <h5>Job Description <span>⌨</span></h5>
            <tinymce class="mb-3"></tinymce>
            <!-- <textarea
              class="form-control my-3"
              id="descriptionEditor"
              rows="10"
              v-model="job.description"
            ></textarea> -->
            <div id="invalidJobDescription" class="invalid-feedback">
              Please enter a job description
            </div>
          </div>
        </div>

        <!-- Apply Link -->
        <div class="row mt-1">
          <div class="col px-3">
            <h5>How to apply link <span>🚀</span></h5>
            <input
              type="text"
              class="form-control"
              id=""
              placeholder=""
              v-model="job.url"
            />
            <div id="" class="form-text">
              Link to the application page or email
            </div>
            <div id="invalidJobUrl" class="invalid-feedback">
              Please share the job offer website
            </div>
          </div>
        </div>
      </div>

      <div class="mt-5 mx-3 p-3 border rounded-3 shadow-sm">
        <h2>Company Info</h2>

        <div class="row">
          <!-- Name -->
          <div class="col-md-8 p-3">
            <h5>Company Name <span>🗿</span></h5>
            <input
              type="text"
              class="form-control"
              id=""
              placeholder=""
              v-model="company.name"
            />
            <div id="invalidCompanyName" class="invalid-feedback">
              Please share your company name
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Website -->
          <div class="col-md-6 p-3">
            <h5>Website <span>🌐</span></h5>
            <input
              type="text"
              class="form-control"
              id=""
              placeholder=""
              v-model="company.website"
            />
            <div id="invalidCompanyWebsite" class="invalid-feedback">
              Please share your company website
            </div>
          </div>
          <!-- Contact Email -->
          <div class="col-md-6 p-3">
            <h5>Contact email <span>📧</span></h5>
            <input
              type="text"
              class="form-control"
              id=""
              placeholder=""
              v-model="company.email"
            />
          </div>
        </div>

        <div class="row">
          <!-- company description -->
          <div class="form-group col p-3">
            <h5>Company Brief Description <span>⌨</span></h5>
            <textarea
              class="form-control my-3"
              id="basic-example"
              rows="4"
              v-model="company.description"
            ></textarea>
            <div id="" class="form-text">
              Tell us a little bit about what your company does
            </div>
          </div>
        </div>

        <div class="row">

        </div>
        <div class="form-group col p-2">
          <h5>Company Logo <span>🚩</span></h5>
          <input type="file" class="form-control-file" id="" lang="en" />
        </div>
      </div>

      <div class="my-5 text-center">
        <button type="submit" class="btn btn-primary btn-lg">Post Job</button>
      </div>
    </form>
  </div>
</template>

<script>


let defaultJob = {
  id: null,
  title: "",
  type: "",
  days: "",
  isremote: "",
  description: "",
  url: "",
  timezone: "",
  region: "",
  category: "",
};

let defaultCompany = {
  id: null,
  name: "",
  headquarters: "",
  statement: "",
  logo: "",
  website: "",
  email: "",
  description: "",
};

import tinymce from './tinyMCE'

export default {

  components: {
    tinymce
  },
  
  data() {



    return {
     
      job: Object.assign({}, defaultJob),
      company: Object.assign({}, defaultCompany),

      regions: [
        "Anywhere",
        "Asia",
        "Africa",
        "North America",
        "South America",
        "Europe",
        "Australia/New Zealand",
      ],

      timezones: [
        "(GMT-12:00) International Date Line West",
        "(GMT-11:00) Coordinated Universal Time-11",
        "(GMT-11:00) Samoa",
        "(GMT-10:00) Hawaii",
        "(GMT-09:30) Marquesas Islands",
        "(GMT-09:00) Alaska",
        "(GMT-08:00) Baja California",
        "(GMT-08:00) Pacific Time (US & Canada)",
        "(GMT-07:00) Chihuahua,Mazatlan",
        "(GMT-07:00) Arizona",
        "(GMT-07:00) Mountain Time (US & Canada)",
        "(GMT-06:00) Central Time (US & Canada)",
        "(GMT-06:00) Central America",
        "(GMT-06:00) Guadalajara, Mexico City, Monterrey",
        "(GMT-06:00) Saskatchewan",
        "(GMT-05:00) Bogota, Lima, Quito",
        "(GMT-05:00) Eastern Time (US & Canada)",
        "(GMT-05:00) Indiana (East)",
        "(GMT-04:30) Caracas",
        "(GMT-04:00) Atlantic Time (Canada)",
        "(GMT-04:00) Asuncion",
        "(GMT-04:00) Cuiaba",
        "(GMT-04:00) Santiago",
        "(GMT-04:00) Georgetown, La Paz, Manaus, San Juan",
        "(GMT-03:30) Newfoundland",
        "(GMT-03:00) Buenos Aires",
        "(GMT-03:00) Brasilia",
        "(GMT-03:00) Cayenne, Fortaleza",
        "(GMT-03:00) Montevideo",
        "(GMT-03:00) Greenland",
        "(GMT-02:00) Coordinated Universal Time-02",
        "(GMT-02:00) Mid-Atlantic",
        "(GMT-01:00) Azores",
        "(GMT-01:00) Cape Verde Is.",
        "(GMT+00:00) Casablanca",
        "(GMT+00:00) Monrovia,Reykjavik",
        "(GMT+00:00) Greenwich Mean Time : Dublin,Edinburgh,Lisbon, London",
        "(GMT+01:00) Sarajevo,Skopje, Warsaw, Zagreb",
        "(GMT+01:00) West Central Africa",
        "(GMT+01:00) Belgrade,Bratislava, Budapest, Ljubljana, Prague",
        "(GMT+01:00) Brussels, Copenhagen,Madrid, Paris",
        "(GMT+01:00) Amsterdam,Berlin, Bern, Rome,Stockholm, Vienna",
        "(GMT+02:00) Harare, Pretoria",
        "(GMT+02:00) Damascus",
        "(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius",
        "(GMT+02:00) Windhoek",
        "(GMT+02:00) Minsk",
        "(GMT+02:00) Athens,Bucharest, Istanbul",
        "(GMT+02:00) Amman",
        "(GMT+02:00) Beirut",
        "(GMT+02:00) Jerusalem",
        "(GMT+02:00) Cairo",
        "(GMT+03:00) Kuwait, Riyadh",
        "(GMT+03:00) Moscow, St. Petersburg, Volgograd",
        "(GMT+03:00) Baghdad",
        "(GMT+03:00) Nairobi",
        "(GMT+03:30) Tehran",
        "(GMT+04:00) Port Louis",
        "(GMT+04:00) Tbilisi",
        "(GMT+04:00) Baku",
        "(GMT+04:00) Yerevan",
        "(GMT+04:00) Abu Dhabi, Muscat",
        "(GMT+04:30) Kabul",
        "(GMT+05:00) Yekaterinburg",
        "(GMT+05:00) Islamabad,Karachi",
        "(GMT+05:00) Tashkent",
        "(GMT+05:30) Chennai, Kolkata, Mumbai,New Delhi",
        "(GMT+05:30) Sri Jayawardenepura",
        "(GMT+05:45) Kathmandu",
        "(GMT+06:00) Dhaka",
        "(GMT+06:00) Novosibirsk",
        "(GMT+06:00) Astana",
        "(GMT+06:30) Yangon (Rangoon)",
        "(GMT+07:00) Krasnoyarsk",
        "(GMT+07:00) Bangkok, Hanoi,Jakarta",
        "(GMT+08:00) Ulaanbaatar",
        "(GMT+08:00) Perth",
        "(GMT+08:00) Taipei",
        "(GMT+08:00) Kuala Lumpur,Singapore",
        "(GMT+08:00) Beijing,Chongqing,Hong Kong, Urumqi",
        "(GMT+08:00) Irkutsk",
        "(GMT+08:30) Pyongyang",
        "(GMT+08:30) Eucla",
        "(GMT+09:00) Seoul",
        "(GMT+09:00) Osaka,Sapporo, Tokyo",
        "(GMT+09:00) Yakutsk",
        "(GMT+09:30) Darwin",
        "(GMT+09:30) Adelaide",
        "(GMT+10:00) Hobart",
        "(GMT+10:00) Vladivostok",
        "(GMT+10:00) Guam, Port Moresby",
        "(GMT+10:00) Brisbane",
        "(GMT+10:00) Canberra,Melbourne, Sydney",
        "(GMT+10:30) Lord Howe Island",
        "(GMT+11:00) Magadan, Solomon Is.,New Caledonia",
        "(GMT+12:00) Fiji",
        "(GMT+12:00) Petropavlovsk-Kamchatsky",
        "(GMT+12:00) Auckland, Wellington",
        "(GMT+12:00) Coordinated Universal Time+12",
        "(GMT+12:45) Chatham Islands",
        "(GMT+13:00) Phoenix Islands, Tokelau, Tonga",
        "(GMT+14:00) Line Islands",
      ],

      types: ["contract", "permanent", "temporary"],

      isremote: ["yes", "no", "partial"],

      days: [1, 2, 3, 4],
    };
  },

  methods: {

    checkForm(e) {
      if (!this.job.title) {
        document.getElementById("invalidJobTitle").style.display = "block";
      }

      if (!this.job.description) {
        document.getElementById("invalidJobDescription").style.display =
          "block";
      }

      if (!this.job.category) {
        document.getElementById("invalidJobCategory").style.display = "block";
      }

      if (!this.job.type) {
        document.getElementById("invalidJobType").style.display = "block";
      }

      if (!this.job.days) {
        document.getElementById("invalidJobDays").style.display = "block";
      }

      if (!this.job.isremote) {
        document.getElementById("invalidJobRemote").style.display = "block";
      }

      if (!this.job.url) {
        document.getElementById("invalidJobUrl").style.display = "block";
      }

      // if (!this.job.timezone) {
      //   document.getElementById("invalidJobTimezone").style.display = "block";
      // }

      // if (!this.job.region) {
      //   document.getElementById("invalidJobRegion").style.display = "block";
      // }

      if (!this.company.name) {
        document.getElementById("invalidCompanyName").style.display = "block";
      }

      if (!this.company.website) {
        document.getElementById("invalidCompanyWebsite").style.display =
          "block";
      }

      if (
        this.job.title &&
        this.job.description &&
        this.job.type &&
        this.job.days &&
        this.job.isremote &&
        this.job.url &&
        this.job.category &&
        this.company.name &&
        this.company.website
      ) {
        this.axios
          .post("/api/jobs", { job: this.job, company: this.company })
          .then((response) => {
            console.log(response);
          })
          .catch(function (error) {
            console.log(error.response.data.errors);
          });
      }
    },
  },
};
</script>

<style></style>
