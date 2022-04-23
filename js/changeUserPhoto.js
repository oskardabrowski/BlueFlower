const AddNewUserPhotoBtn = document.querySelector(".AddNewUserPhoto");
const ChangePhotoContainer = document.querySelector(".UserApp-container-profile-changePhoto");
const ClosePhotoContainer = ChangePhotoContainer.querySelector('span');



AddNewUserPhotoBtn.addEventListener('click', function(e) {
    e.preventDefault();
    ChangePhotoContainer.style.display = "flex";
})
ClosePhotoContainer.addEventListener('click', function(e) {
    ChangePhotoContainer.style.display = "none";
})

// alert('Working');