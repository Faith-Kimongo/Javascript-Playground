// Get the  elements
const modals = document.querySelectorAll(".modal");
const links = document.querySelectorAll(".trigger");
const closeButtons = document.querySelectorAll(".close-modal");

//Attach a click event to each link
links.forEach((link) => {
  link.addEventListener("click", (event) => {
    //call funtion to show corresponding model of each link
    showModal(link.id);
  });
});

// show modal function
function showModal(id) {
  //find the corresponding modal
  const modal = document.querySelector(`#${id}`);

  //show the modal
  modal.classList.remove("hidden");
  modal.classList.add("active");
}

// loop through each button
closeButtons.forEach((closeButton) => {
  //Add click eventlistner
  closeButton.addEventListener("click", (event) => {
    event.preventDefault();
    closeModal(closeButton.id);
  });
});

// close modal function
function closeModal(id) {
  //find the corresponding modal
  const modal = document.querySelector(`#${id}`);

  //close the modal
  modal.classList.add("hidden");
  modal.classList.remove("active");
  location.reload();
}

// Get the file input element
const fileInputs = document.querySelectorAll('input[type="file"]');

fileInputs.forEach((fileInput) => {
  fileInput.addEventListener("change", (event) => {
    let file = fileInput.files[0];

    //select the current active modal
    const currentModal = document.querySelector(".active");

    //select  child of active modal that is file-details
    const fileDetails = currentModal.querySelector("#file-details");

    //make the file-detail div visible
    fileDetails.classList.remove("hidden");

    //displaying the file metadata

    // file name
    let fileName = document.createElement("p");
    fileName.innerHTML = "File name: " + file.name;
    fileDetails.appendChild(fileName);

    // file size
    let fileSize = document.createElement("p");
    fileSize.innerHTML = "File size: " + file.size + " bytes";
    fileDetails.appendChild(fileSize);

    //file type
    var fileType = document.createElement("p");
    fileType.innerHTML = "File type: " + file.type;
    fileDetails.appendChild(fileType);

    //file last modified date
    var fileLastModified = document.createElement("p");
    fileLastModified.innerHTML = "Last modified: " + file.lastModifiedDate;
    fileDetails.appendChild(fileLastModified);
  });
});
