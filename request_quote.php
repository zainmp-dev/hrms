<?php include 'header.php';?>
        
 <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Request A Quote</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Request a Quote</li>
                    </ul>
                </div>
            </div>
            <div class="divider"></div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="banner-shape1"><img src="assets/img/shape/shape9.png" alt="image"></div>
        </div>
        <!-- End Page Title Area -->

      <!-- Start Contact Area -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Get in Touch</h2>
                    <p> Unlock productivity and enhance efficiency using OfficeKit HR</p>
                </div>
                <div class="contact-form">
                  <div
      class="contact-form"
      style="
        width: 100%;
        max-width: 500px;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        box-sizing: border-box;
      "
    >
      <h2 style="text-align: center; color: #333">Contact Information</h2>
      <form id="form" style="text-align: left">
        <label
          for="name"
          style="display: block; margin-top: 10px; font-weight: bold"
          >Name<span style="color: red">*</span></label
        >
        <input
          type="text"
          id="name"
          name="formdata"
          placeholder="Enter your name"
          required=""
          style="
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
          "
        />

        <label
          for="formdata"
          style="display: block; margin-top: 10px; font-weight: bold"
          >Country Code<span style="color: red">*</span></label
        >
        <input
          type="text"
          id="formdata"
          name="formdata"
          placeholder="Enter your country code"
          required=""
          style="
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
          "
        />

        <label
          for="formdata"
          style="display: block; margin-top: 10px; font-weight: bold"
          >Contact Number<span style="color: red">*</span></label
        >
        <input
          type="number"
          id="formdata"
          class="contact-number"
          onchange="handleChange()"
          name="formdata"
          placeholder="Enter your contact number"
          required=""
          style="
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
          "
        />
        <p id="error-message"></p>

        <label
          for="formdata"
          style="display: block; margin-top: 10px; font-weight: bold"
          >Official email<span style="color: red">*</span></label
        >
        <input
          type="email"
          id="formdata"
          name="formdata"
          placeholder="Enter your official email"
          required=""
          style="
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
          "
        />

        <label
          for="formdata"
          style="display: block; margin-top: 10px; font-weight: bold"
          >Organisation Name<span style="color: red">*</span></label
        >
        <input
          type="text"
          id="formdata"
          name="formdata"
          placeholder="Enter your organisation name"
          required=""
          style="
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
          "
        />

        <label
          for="formdata"
          style="display: block; margin-top: 10px; font-weight: bold"
          >Number of Employees<span style="color: red">*</span></label
        >
        <input
          type="number"
          id="formdata"
          name="formdata"
          placeholder="Enter the number of employees"
          required=""
          style="
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
          "
        />
        <p id="common-error"></p>

        <button id="btn" type="submit">
          <span id="btnText">Send Message</span>
          <div class="check-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
              <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
            </svg>
          </div>
        </button>
      </form>
      <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type="number"] {
          -moz-appearance: textfield;
        }
        #error-message {
          color: red;
          margin-top: 0px;
        }
        * {
          margin: 0;
          padding: 0;
        }
        button {
          width: 100%;
          height: 50px;
          border: none;
          outline: none;
          background: #2f2f2f;
          color: #fff;
          font-size: 22px;
          border-radius: 40px;
          text-align: center;
          box-shadow: 0 6px 20px -5px rgba(0, 0, 0, 0.4);
          position: relative;
          overflow: hidden;
          cursor: pointer;
        }

        .check-box {
          width: 50px;
          height: 50px;
          border-radius: 40px;
          box-shadow: 0 0 12px -2px rgba(0, 0, 0, 0.5);
          position: absolute;
          top: 0;
          right: -50px;
          opacity: 0;
        }

        .check-box svg {
          width: 40px;
          margin: 5px;
        }

        svg path {
          stroke-width: 3;
          stroke: #fff;
          stroke-dasharray: 34;
          stroke-dashoffset: 34;
          stroke-linecap: round;
        }

        .active {
          background: #06b161;
          transition: 1s;
        }

        .active .check-box {
          right: 0;
          opacity: 1;
          transition: 1s;
        }

        .active p {
          margin-right: 125px;
          transition: 1s;
        }

        .active svg path {
          stroke-dashoffset: 0;
          transition: 1s;
          transition-delay: 1s;
        }
        .error {
          background: red;
          transition: 1s;
        }
        #common-error {
          color: red;
          margin-bottom: 10px;
        }
      </style>

      <script>
        const btn = document.querySelector("#btn");
        const commonError = document.querySelector("#common-error");
        const btnText = document.querySelector("#btnText");

        const showingErrorMessage = document.querySelector("#error-message");
        const BASE_URL = "https://app.getlead.co.uk/api/gl-website-contacts";
        const token = "gl_507ce989e0fefe46aadb";
        const form = document.querySelector("#form");
        const handleChange = () => {
          showingErrorMessage.innerText = "";
          commonError.innerText = "";
        };

        const handleSubmit = async (e) => {
          e.preventDefault();
          showingErrorMessage.innerText = "";
          commonError.innerText = "";
          const formData = new FormData(e.target);
          const [
            name,
            cuntryCode,
            mobileno,
            email,
            company_name,
            number_of_emp,
          ] = formData.getAll("formdata");
          

          try {
            const response = await fetch(
              `${BASE_URL}?token=${token}&name=${name}&countrycode=${cuntryCode}&mobileno=${mobileno}&source=Quote&email=${email}&company_name=${company_name}`,
              {
                method: "POST",
                headers: {
                  "Content-Type": "application/json",
                },
              }
            ).then((response) => response.json());
            if (response.status === "success") {
              btnText.innerHTML = "Succefully Send";
              form.reset();
              btn.classList.add("active");
            } else {
              // btnText.innerHTML = "Succefully Send";
              btn.classList.add("error");
              if (response?.message?.includes("mobileno")) {
                showingErrorMessage.innerText =
                  "* Contact should be between 8 and 14 digits";
              } else {
                commonError.innerText = response.message;
              }
            }
          } catch (error) {
            console.log(error);
          }
          setTimeout(() => {
            if (btn.classList.contains("active")) {
              btn.classList.remove("active");
              btnText.innerHTML = "Send Message";
            } else if (btn.classList.contains("error")) {
              btn.classList.remove("error");
              btnText.innerHTML = "Send Message";
            }
          }, 3000);
        };

        form.addEventListener("submit", handleSubmit);
      </script>
    </div>
                  <!--   <form>
                                        <div class="row">
                                           
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your company email" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                             <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Enter your first name" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                             <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Enter your last name" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                             <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Enter your phone number" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Number of employees" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="msg_subject" class="form-control" id="msg_subject"  placeholder="Seniority">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="msg_subject" class="form-control" id="msg_subject"  placeholder="Functional area">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                  </form>!-->
                                 <!--<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScQwZs46_-gqTnBpJbYO_AxCNundis7YUg-4Ul9pKXxVchaLg/viewform?embedded=true" width="640" height="1100" frameborder="0" marginheight="0" marginwidth="0" scrolling="no">Loading…</iframe>
                            !--> </div>
                               
                                            <!--   <div class="card">
                                                      <div class="card-body">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                           Employee Management


                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                          <label class="form-check-label" for="flexCheckChecked">
                                                            
                                                               Employee Self Service

                                                          </label>
                                                        </div>
                                                         <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                          <label class="form-check-label" for="flexCheckChecked">
                                                           Attendance Management

                                                          </label>
                                                        </div>
                                                         <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                          <label class="form-check-label" for="flexCheckChecked">
                                                            Leave Management

                                                          </label>
                                                        </div>
                                                         <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                          <label class="form-check-label" for="flexCheckChecked">
                                                          Payroll Management

                                                          </label>
                                                        </div>
                                                         <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                          <label class="form-check-label" for="flexCheckChecked">
                                                            Mobile App

                                                          </label>
                                                        </div>
                                                         <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                          <label class="form-check-label" for="flexCheckChecked">
                                                           Document Management

                                                          </label>
                                                        </div> <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                          <label class="form-check-label" for="flexCheckChecked">
                                                          Claims & Reimbursement

                                                          </label>
                                                        </div>
                                                         <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                          <label class="form-check-label" for="flexCheckChecked">
                                                           Others
                                                          </label>
                                                        </div>
                                                      </div>
                                             
                                                
                                                 </div>   <br>
                                                <center> <a href="#" class="default-btn">Submit</a></center>
                </div>!-->
            </div>
          <!--   <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46660.669043361966!2d-76.17429939609431!3d43.03529129888566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d9f3b8019f2991%3A0x58d5929e21a62e5!2sDinosaur%20Bar-B-Que!5e0!3m2!1sen!2sbd!4v1593527523138!5m2!1sen!2sbd"></iframe>
            </div> -->
        </div>
        <!-- End Contact Area -->
      
        <?php include 'footer.php';?>