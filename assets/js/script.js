'use strict';

// இந்தக் குறியீடு `elementToggleFunc` எனப்படும் செயல்பாட்டை வரையறுக்கிறது, இது `classList.toggle()` முறையைப் பயன்படுத்தி கொடுக்கப்பட்ட உறுப்பில் CSS கிளாஸ் "செயலில்" இருப்பதை மாற்றுகிறது.
const elementToggleFunc = function (elem) {
  elem.classList.toggle("active");
};

// இந்தக் குறியீடு இரண்டு மாறிகளை வரையறுக்கிறது: `sidebar` மற்றும் `sidebarBtn`, இவை DOM உறுப்புகளுக்கான குறிப்புகளை ஒதுக்குகின்றன. `சைட்பார்` மாறியானது `[data-sidebar]` பண்புக்கூறு கொண்ட DOM உறுப்புக்கான குறிப்பையும், `sidebarBtn` மாறியானது `[data-sidebar-btn] உள்ள DOM உறுப்புக்கான குறிப்பையும் ஒதுக்குகிறது. `பண்பு.
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// sidebar toggle functionality for mobile
sidebarBtn.addEventListener("click", function () {
  elementToggleFunc(sidebar);
});

// testimonials variables
const testimonialsItem = document.querySelectorAll("[data-testimonials-item]");
const modalContainer = document.querySelector("[data-modal-container]");
const modalCloseBtn = document.querySelector("[data-modal-close-btn]");
const overlay = document.querySelector("[data-overlay]");

// modal variable
const modalImg = document.querySelector("[data-modal-img]");
const modalTitle = document.querySelector("[data-modal-title]");
const modalText = document.querySelector("[data-modal-text]");

// modal toggle function
const testimonialsModalFunc = function () {
  modalContainer.classList.toggle("active");
  overlay.classList.toggle("active");
};

// add click event to all modal items
for (let i = 0; i < testimonialsItem.length; i++) {
  testimonialsItem[i].addEventListener("click", function () {
    modalImg.src = this.querySelector("[data-testimonials-avatar]").src;
    modalImg.alt = this.querySelector("[data-testimonials-avatar]").alt;
    modalTitle.innerHTML = this.querySelector("[data-testimonials-title]").innerHTML;
    modalText.innerHTML = this.querySelector("[data-testimonials-text]").innerHTML;
    testimonialsModalFunc();
  });
}

// add click event to modal close button
modalCloseBtn.addEventListener("click", testimonialsModalFunc);
overlay.addEventListener("click", testimonialsModalFunc);

// custom select variables
const select = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-select-value]");
const filterBtn = document.querySelectorAll("[data-filter-btn]");

// toggle select dropdown on click
select.addEventListener("click", function () {
  elementToggleFunc(this);
});

// add event to all select items
for (let i = 0; i < selectItems.length; i++) {
  selectItems[i].addEventListener("click", function () {
    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    elementToggleFunc(select);
    filterFunc(selectedValue);
  });
}

// filter variables
const filterItems = document.querySelectorAll("[data-filter-item]");

// filter function
const filterFunc = function (selectedValue) {
  for (let i = 0; i < filterItems.length; i++) {
    if (selectedValue === "all") {
      filterItems[i].classList.add("active");
    } else if (selectedValue === filterItems[i].dataset.category) {
      filterItems[i].classList.add("active");
    } else {
      filterItems[i].classList.remove("active");
    }
  }
};

// add event to all filter button items for large screen
let lastClickedBtn = filterBtn[0];

for (let i = 0; i < filterBtn.length; i++) {
  filterBtn[i].addEventListener("click", function () {
    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    filterFunc(selectedValue);
    lastClickedBtn.classList.remove("active");
    this.classList.add("active");
    lastClickedBtn = this;
  });
}

// contact form variables
const form = document.querySelector("[data-form]");
const formInputs = document.querySelectorAll("[data-form-input]");
const formBtn = document.querySelector("[data-form-btn]");

// add event to all form input fields
for (let i = 0; i < formInputs.length; i++) {
  formInputs[i].addEventListener("input", function () {
    // check form validation
    if (form.checkValidity()) {
      formBtn.removeAttribute("disabled");
    } else {
      formBtn.setAttribute("disabled", "");
    }
  });
}

// Page navigation variables
const navigationLinks = document.querySelectorAll("[data-nav-link]");
const pages = document.querySelectorAll("[data-page]");

// Add event listener to all navigation links
for (let i = 0; i < navigationLinks.length; i++) {
  navigationLinks[i].addEventListener("click", function () {
    for (let j = 0; j < pages.length; j++) {
      if (this.innerHTML.toLowerCase() === pages[j].dataset.page) {
        pages[j].classList.add("active");
        navigationLinks[j].classList.add("active");
        window.scrollTo(0, 0);
      } else {
        pages[j].classList.remove("active");
        navigationLinks[j].classList.remove("active");
      }
    }
  });
}

// _____________________________________________________________________

var textElement = document.getElementById("text");
var text = `I am deeply dedicated to transforming my love for development into a fulfilling career. With an insatiable thirst for knowledge and a penchant for generating innovative ideas, I find great joy in continuously expanding my expertise. Spending ample time exploring the depths of the internet has endowed me with valuable open-source skills.

Through this website, I aim to showcase my projects, skills, and experiences in development. I believe in creating efficient and visually appealing software that not only captivate users but also provide them with a seamless and enjoyable experience. From front-end design to back-end development, I strive to deliver high-quality solutions that meet the unique needs of each project.

Whether you're a potential client, fellow developer, or someone simply interested in the world of software development, I invite you to explore my portfolio. Here, you'll find a collection of my work, demonstrating my proficiency in various programming languages, frameworks, and technologies. I'm always open to collaboration and new opportunities, so feel free to reach out if you'd like to discuss a project or connect with me.

Thank you for visiting, and I hope you enjoy exploring my portfolio as much as I enjoyed creating it. Let's build remarkable digital experiences together!`;

// Exporting to HTML
var htmlText = text.replace(/\n/g, "<br>");

function showMore() {
  var readMoreButton = document.createElement("button");
  readMoreButton.textContent = "Read More..";
  readMoreButton.style.color = "white";
  readMoreButton.addEventListener("click", expandText);
  textElement.appendChild(readMoreButton);
}

function expandText() {
  textElement.innerHTML = htmlText;
  voiceElement.textContent = text; // Set the entire text for voice playback
}

showMore();

















// pop up

window.document.onkeydown = function (e) {
  if (!e) {
    e = event;
  }
  if (e.keyCode == 27) {
    lightbox_close();
  }
};

var isVideoPlaying = false;

function lightbox_open() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo1"); // Assuming you want to play the first video
  window.scrollTo(0, 0);
  document.getElementById('light').style.display = 'block';
  document.getElementById('fade').style.display = 'block';
  lightBoxVideo.play();
  lightBoxVideo.muted = false; // Set to true to mute video on open
  isVideoPlaying = true;
}

// close--------------------------------------------------

function lightbox_close() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo1"); // Assuming you want to close the first video
  document.getElementById('light').style.display = 'none';
  document.getElementById('fade').style.display = 'none';
  lightBoxVideo.pause();
  isVideoPlaying = false;
}

function switchTab(panelId) {
  // Pause all videos
  var videos = document.querySelectorAll("video");
  videos.forEach(function (video) {
    video.pause();
  });

  // Show the selected tab
  var panels = document.querySelectorAll(".panel");
  panels.forEach(function (panel) {
    if (panel.id === panelId) {
      panel.classList.add("active");
    } else {
      panel.classList.remove("active");
    }
  });

  // Mark the selected tab button as active
  var tabs = document.querySelectorAll(".tab");
  tabs.forEach(function (tab) {
    if (tab.getAttribute("aria-controls") === panelId) {
      tab.setAttribute("aria-selected", "true");
    } else {
      tab.setAttribute("aria-selected", "false");
    }
  });
}
