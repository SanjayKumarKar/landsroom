function showBox(element, id) {
    $(".treat-tab").removeClass("active");
    $(element).addClass("active");
    $('.treat-box').hide();
    $("#" + id).show();
}



$('.rent-slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: false,
    nav: false,
    items: 3,
    dots: false,
    slideTransition: 'linear',
    autoplaySpeed: 10000,
    navText: ["<img src='img/left-arrow.svg'>", "<img src='img/slider-right-arrow.svg'>"],
    responsive: {
        0: {
            items: 1,
            margin: 15,
            nav: false
        },
        480: {
            items: 1,
            margin: 15,
            nav: false
        },
        768: {
            items: 1,
            margin: 15,
            nav: false
        },
        992: {
            items: 3,
            margin: 15
        }
    }
});


$('.sales-slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: false,
    nav: true,
    items: 4,
    dots: false,
    slideTransition: 'linear',
    autoplaySpeed: 10000,
    navText: ["<img src='img/left-arrow.svg'>", "<img src='img/slider-right-arrow.svg'>"],
    responsive: {
        0: {
            items: 1.2,
            margin: 15,
            nav: false
        },
        480: {
            items: 1.5,
            margin: 15,
            nav: false
        },
        768: {
            items: 1.5,
            margin: 15,
            nav: false
        },
        992: {
            items: 4,
            margin: 15
        }
    }
});

$('.testi-slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: false,
    nav: true,
    items: 4,
    dots: false,
    slideTransition: 'linear',
    autoplaySpeed: 10000,
    navText: ["<img src='img/left-arrow.svg'>", "<img src='img/slider-right-arrow.svg'>"],
    responsive: {
        0: {
            items: 1,
            margin: 15,
            nav: false
        },
        480: {
            items: 1,
            margin: 15,
            nav: false
        },
        768: {
            items: 1,
            margin: 15,
            nav: false
        },
        992: {
            items: 3,
            margin: 15
        }
    }
});

$('.tab-slider').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: false,
    loop: true,
    items: 3,
    dots: false,
    // slideTransition: 'linear',
    // autoplaySpeed:10000,
    // navText: ["<img src='img/arrow-left.png'>","<img src='img/arrow-right.png'>"],
    responsive: {
        0: {
            items: 2,
            nav: false
        },
        480: {
            items: 2.2,
            nav: false
        },
        768: {
            items: 2.2,
            nav: false
        },
        992: {
            items: 8,
            nav: false,
        }
    }
});


$('.listing-img-slider').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    items: 3,
    dots: false,
    nav: false,
    // slideTransition: 'linear',
    autoplayTimeout: 5000,
    // navText: ["<img src='img/arrow-left.png'>","<img src='img/arrow-right.png'>"],
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        480: {
            items: 1,
            nav: false
        },
        768: {
            items: 1,
            nav: false
        },
        992: {
            items: 1,
            nav: false,
        }
    }
});


$('.details-img-slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: false,
    nav: true,
    items: 3,
    dots: false,
    slideTransition: 'linear',
    autoplaySpeed: 10000,
    navText: ["<img src='img/left-arrow.svg'>", "<img src='img/slider-right-arrow.svg'>"],
    responsive: {
        0: {
            items: 1,
            margin: 15,
            nav: false
        },
        480: {
            items: 1,
            margin: 15,
            nav: false
        },
        768: {
            items: 1,
            margin: 15,
            nav: false
        },
        992: {
            items: 1,
            margin: 15
        }
    }
});


$(document).ready(function () {
    $('.select-flat').select2();
});
$(document).ready(function () {
    $('.select-diff').select2();
});
$(document).ready(function () {
    $('.select-property').select2();
});
$(document).ready(function () {
    $('.select-property').select2();
});

$(document).ready(function () {
    $('.select-offer').select2();
});

$(document).ready(function () {
    $('.select-property-status').select2();
});

$(document).ready(function () {
    $('.select-location').select2();
});

$(document).ready(function () {
    $('.select-property-id').select2();
});


$(document).ready(function () {
    $('.sort-by').select2();
});

$(document).ready(function () {
    $('.select-user-type').select2();
});

$(document).ready(function () {
    $('.select-location-upload').select2();
});









const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");
const addExperienceBtn = document.querySelector(".add-exp-btn");
const experiencesGroup = document.querySelector(".experiences-group");
const btnComplete = document.querySelector(".btn-complete");
btnComplete.addEventListener("click", () => {
    document.getElementsByTagName('form').submit
})
let formStepsNum = 0;
let experienceNum = 1;

// addExperienceBtn.addEventListener("click", () => {
//     experienceNum++;
//     let text = `
//     <hr>
// <div class='experience-item'>
//     <div class='input-group' >
//     <label for='title'>Company name</label>
//     <input type='text' name='title[]' id='title'>
// </div>
// <div class='input-group'>
//     <label for='start-date'>Start date</label>
//     <input type='date' name='start-date[]' id='start-date'>
// </div>
// <div class='input-group'>
//     <label for='end-date'>End date</label>
//     <input type='date' name='nd-date[]' id='end-date'>
// </div>
// <div class='input-group'>
//     <label for='job-description'>Description</label>
//     <textarea name='job-description[]' id='job-description' cols='42' rows='6'></textarea>
// </div>
// </div > `
//     experiencesGroup.insertAdjacentHTML('beforeend', text);
// })

function updateFormSteps() {

    formSteps.forEach(formStep => {
        formStep.classList.contains("active") &&
            formStep.classList.remove("active");
    })
    formSteps[formStepsNum].classList.add("active");
}

function updateProgressBar() {
    progressSteps.forEach((progressStep, idx) => {
        if (idx < formStepsNum + 1) {
            progressStep.classList.add("active");
        } else {
            progressStep.classList.remove("active");
        }
    })

    const progressActive = document.querySelectorAll(".progress-step.active");
    progress.style.width = ((progressActive.length - 1) / (progressSteps.length - 1)) * 90 + '%';
}


nextBtns.forEach(btn => {
    btn.addEventListener("click", function () {
        formStepsNum++;
        updateFormSteps();
        updateProgressBar();
        console.log("kk")
    })
})


prevBtns.forEach(btn => {
    btn.addEventListener("click", function () {
        formStepsNum--;
        updateFormSteps();
        updateProgressBar();
        console.log("kk")
    })
})







function increment(button) {
    const numberField = button.parentNode.previousElementSibling;
    numberField.value = parseInt(numberField.value) + 1;
}

function decrement(button) {
    const numberField = button.parentNode.nextElementSibling;
    const currentValue = parseInt(numberField.value);
    if (currentValue > 0) {
        numberField.value = currentValue - 1;
    }
}





const tabs = document.querySelectorAll(".scrollable-tabs-container a");
const rightArrow = document.querySelector(
    ".scrollable-tabs-container .right-arrow svg"
);
const leftArrow = document.querySelector(
    ".scrollable-tabs-container .left-arrow svg"
);
const tabsList = document.querySelector(".scrollable-tabs-container ul");
const leftArrowContainer = document.querySelector(
    ".scrollable-tabs-container .left-arrow"
);
const rightArrowContainer = document.querySelector(
    ".scrollable-tabs-container .right-arrow"
);

const removeAllActiveClasses = () => {
    tabs.forEach((tab) => {
        tab.classList.remove("active");
    });
};

tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        removeAllActiveClasses();
        tab.classList.add("active");
    });
});

const manageIcons = () => {
    if (tabsList.scrollLeft >= 20) {
        leftArrowContainer.classList.add("active");
    } else {
        leftArrowContainer.classList.remove("active");
    }

    let maxScrollValue = tabsList.scrollWidth - tabsList.clientWidth - 20;
    console.log("scroll width: ", tabsList.scrollWidth);
    console.log("client width: ", tabsList.clientWidth);

    if (tabsList.scrollLeft >= maxScrollValue) {
        rightArrowContainer.classList.remove("active");
    } else {
        rightArrowContainer.classList.add("active");
    }
};

rightArrow.addEventListener("click", () => {
    tabsList.scrollLeft += 200;
    manageIcons();
});

leftArrow.addEventListener("click", () => {
    tabsList.scrollLeft -= 200;
    manageIcons();
});

tabsList.addEventListener("scroll", manageIcons);

let dragging = false;

const drag = (e) => {
    if (!dragging) return;
    tabsList.classList.add("dragging");
    tabsList.scrollLeft -= e.movementX;
};

tabsList.addEventListener("mousedown", () => {
    dragging = true;
});

tabsList.addEventListener("mousemove", drag);

document.addEventListener("mouseup", () => {
    dragging = false;
    tabsList.classList.remove("dragging");
});


function scroll_animate(which, value) {
    let body = document.documentElement || document.body;
    let scrollHeight = body.scrollHeight;
    let scrollPosition;
    if (which == "prop") {
        scrollPosition = scrollHeight * value;
    } else if (which == "anny") {
        scrollPosition = scrollHeight * value;
    } else if (which == "nanny") {
        scrollPosition = scrollHeight * value;
    }// 10% from top

    window.scrollTo({
        top: scrollPosition,
        behavior: "smooth" // Smooth scrolling effect
    });
}





$(document).ready(function () {
    const fileUploadBox = $('.file-upload-box');
    const fileList = $('.file-list');
    const fileInput = $('.file-upload-input');

    // Handle drag and drop events
    fileUploadBox
        .on('dragover dragenter', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass('drag-over');
        })
        .on('dragleave dragend drop', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass('drag-over');
        });

    // Handle file selection
    fileInput.on('change', function (e) {
        const files = e.target.files;
        handleFiles(files);
    });

    // Handle dropped files
    fileUploadBox.on('drop', function (e) {
        const files = e.originalEvent.dataTransfer.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        Array.from(files).forEach(file => {
            // Create progress bar element
            const progressBar = $('<div class="upload-progress"></div>');

            const fileItem = $(`
                        <div class="file-item">
                            <i class="fas fa-file file-icon"></i>
                            <span class="file-name" title="${file.name}">${file.name}</span>
                            <i class="fas fa-times remove-file"></i>
                            ${progressBar.prop('outerHTML')}
                        </div>
                    `);

            fileList.append(fileItem);

            // Remove progress bar after animation
            setTimeout(() => {
                fileItem.find('.upload-progress').remove();
            }, 1000);

            // Handle file removal
            fileItem.find('.remove-file').on('click', function (e) {
                e.stopPropagation();
                fileItem.fadeOut(300, function () {
                    $(this).remove();
                });
            });

            // Get appropriate FontAwesome icon based on file type
            const fileIcon = fileItem.find('.file-icon');
            const fileExtension = file.name.split('.').pop().toLowerCase();

            const iconMap = {
                'pdf': 'fa-file-pdf',
                'doc': 'fa-file-word',
                'docx': 'fa-file-word',
                'xls': 'fa-file-excel',
                'xlsx': 'fa-file-excel',
                'ppt': 'fa-file-powerpoint',
                'pptx': 'fa-file-powerpoint',
                'jpg': 'fa-file-image',
                'jpeg': 'fa-file-image',
                'png': 'fa-file-image',
                'gif': 'fa-file-image',
                'zip': 'fa-file-archive',
                'rar': 'fa-file-archive',
                'txt': 'fa-file-alt'
            };

            if (iconMap[fileExtension]) {
                fileIcon.removeClass('fa-file').addClass(iconMap[fileExtension]);
            }
        });
    }
});









