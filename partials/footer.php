<section class="comment-section" id="contact">
        <div class="container">
          <h2 class="wow fadeInDown text-center" data-wow-delay="300ms">
            Need Help<br /><span> Let's talk about your need</span>
          </h2>
          <p class="wow fadeInDown text-center" data-wow-delay="300ms">
            we are here to help you, send us an email or knock in Chat box.
          </p>
          <div class="text-center contactMainWrapper">
            <h4>Contact address</h4>
            <div class="col-12 col-lg-12">
              Phone: +92 300 0635571<br />
              Email: info@pfd-pk.com <br />Office Hour: Mon-Sat 10am-6pm <br />
              Address: 704, Floor 7,The Workpalace <br />
              12-A Block E/ll, Gulberg lll, <br />Lahore, Pakistan.
            </div>
          </div>
          <div class="row padding-top" id="phn_padding_top">
            <div class="col-12 col-lg-4"></div>

            <div class="col-12 col-lg-4 wow fadeInDown" data-wow-delay="400ms">
              <a data-bs-toggle="modal" data-bs-target="#animatedModal">
                <div class="card box text-center">
                  <div class="feature-icon text-center">
                    <i class="far fa-edit"></i>
                  </div>
                  <div class="card-body">
                    <p>Click here to submit our query</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 col-lg-4"></div>
          </div>
        </div>

        <div
          class="modal fade"
          id="animatedModal"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
               

                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body sust_modal_body">
                <h1 class="modal-title fs-5 text-center pb-md-5 p-0" id="exampleModalLabel">
                  Contact Form <br>
                  <span class="text-pink js-rotating">Giver Your Feedback</span>
                </h1>
                <form class="contact-form" id="modal-contact-form-data">
                  <div class="row">
                    <!--Result-->
                    <div class="col-12" id="quote_result"></div>
                    <!--Left Column-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <input
                          class="form-control"
                          id="quote_name"
                          name="quoteName"
                          placeholder="Name"
                          required=""
                          type="text"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          class="form-control"
                          id="quote_contact"
                          name="userPhone"
                          placeholder="Contact "
                          required=""
                          type="text"
                        />
                      </div>
                    </div>
                    <!--Right Column-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <input
                          class="form-control"
                          id="quote_email"
                          name="userEmail"
                          placeholder="Email"
                          required=""
                          type="email"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          class="form-control"
                          id="subject"
                          name="userSubject"
                          placeholder="Subject"
                          required=""
                          type="text"
                        />
                      </div>
                    </div>
                    <!--Full Column-->
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea
                          class="form-control"
                          id="userMessage"
                          name="userMessage"
                          placeholder="Please give us your feedback here"
                        ></textarea>
                      </div>
                    </div>
                    <!--Button-->
                    <div class="col-md-12 text-center">
                      <a
                        class="btn button btn-rounded white-btn modal_contact_btn"
                        id="quote_submit_btn"
                        href="javascript:void(0);"
                      >
                        Submit Now
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>