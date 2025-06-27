<x-app-layout title="Contact Us">
    @section('title', 'Contact Us')
  <div class="tp-contact-us-ptb p-relative">
    <div class="tp-career-shape-1">
        <span><svg xmlns="http://www.w3.org/2000/svg" width="123" height="130" viewBox="0 0 123 130" fill="none">
                <path d="M58.2803 1.15449C63.3023 14.3017 71.049 54.3533 48.1082 67.0973C36.1831 73.4283 11.7107 77.3064 2.37778 43.9355C-1.14293 31.3468 9.61622 20.8908 32.0893 28.8395C45.055 33.4255 76.4207 44.0467 90.5787 70.0771C98.0511 83.8154 104.166 111.84 99.1745 129.671M99.1745 129.671C100.942 121.014 108.128 104.495 122.737 107.673M99.1745 129.671C100.181 123.978 97.0522 110.014 76.485 99.698M75.3644 33.2431C80.479 35.6688 96.6446 46.4742 101.81 64.2891" stroke="black" stroke-width="1.5"></path>
            </svg></span>
    </div>
    <div class="container container-1230">
        <div class="ar-about-us-4-hero-ptb">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="tp-contact-us-heading tp_fade_anim" data-delay=".3" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <div class="ar-about-us-4-title-box d-flex align-items-center mb-20">
                            <span class="tp-section-subtitle pre tp_fade_anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">contact us</span>
                            <div class="ar-about-us-4-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9" fill="none">
                                    <rect y="4" width="80" height="1" fill="#000"></rect>
                                    <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#000" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="tp-career-title pb-30">Your creative
                            <span class="shape-1"><img src="assets/img/about-us/about-us-4/about-us-4-shape-1.png" alt=""></span> <br>journey starts here
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <div class="tp-faq-text tp_fade_anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <p class="m-0">We are dedicated to helping businesses navigate this complex landscape by providing comprehensive solutions tailored to their specific needs..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-contact-us-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tp-contact-us-text smooth">
                        <a href="contact-us-light.html#down">
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewBox="0 0 15 21" fill="none">
                                    <rect x="6.25781" width="1.5" height="21" fill="#000"></rect>
                                    <path d="M14.1641 13.6257C10.28 13.6257 7.13714 16.9239 7.13714 21" stroke="#000" stroke-width="1.5" stroke-miterlimit="10"></path>
                                    <path d="M7.13672 21C7.13672 16.9239 3.99384 13.6257 0.109797 13.6257" stroke="#000" stroke-width="1.5" stroke-miterlimit="10"></path>
                                </svg> Scroll to explore</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tp-contact-us-text d-none d-md-block text-md-end">
                        <p>See in Map our Office</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="down" class="tp-contact-us-form-ptb pt-60 pb-120">
    <div class="container container-1750">
        <div class="tp-contact-us-form-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-contact-us-map p-relative">
                        <div class="tp-contact-map-icon-box">
                            <div class="tp-contact-map-icon">
                                <span><img src="assets/img/contact/map-icon.svg" alt=""></span>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193596.26002818075!2d-74.1443121872927!3d40.69728463485858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1745055504744!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-contact-us-wrap">
                        <h4 class="tp-contact-us-title mb-55">Send a Message</h4>
                        <form id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Full name*</label>
                                        <input name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Email address*</label>
                                        <input name="email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Phone</label>
                                        <input name="phone" type="number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Subject</label>
                                        <input name="subject" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>How Can We Help You*
                                        </label>
                                        <textarea name="message"></textarea>
                                    </div>
                                    <div class="tp-contact-form-btn">
                                        <button class="w-100" type="submit"><span>
                                                <span class="text-1">Send Message</span>
                                                <span class="text-2">Send Message</span>
                                            </span>
                                        </button>
                                        <p class="ajax-response mt-5"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
<script>
const form = document.getElementById('contactForm');
const notyf = new Notyf();

form.addEventListener('submit', async (e) => {
  e.preventDefault();

  const formData = new FormData(form);

  try {
    const res = await fetch('{{ route('messages.store') }}', {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      },
      body: formData
    });

    if (!res.ok) {
      const errorData = await res.json();

      // Handle Laravel validation error (422)
      if (res.status === 422 && errorData.errors) {
        const messages = Object.values(errorData.errors).flat();
        notyf.error(messages[0] || 'Validation error.');
      } else {
        notyf.error(errorData.message || 'Unknown error occurred.');
      }
      return;
    }

    const data = await res.json();
    if (data.success) {
      notyf.success('Message sent!');
      form.reset();
    } else {
      notyf.error(data.message || 'Unexpected error.');
    }
  } catch (err) {
    notyf.error('Something went wrong.');
  }
});
</script>


