const urlField = document.querySelector(".url");
const previewArea = document.querySelector(".preview-area");
const imageTag = document.querySelector(".thumbnail");
const hiDen = document.querySelector('.hidden-input');

urlField.onkeyup = () => {
  let imageURL = urlField.value;
  previewArea.classList.add("active");

  if (imageURL.indexOf("https://www.youtube.com/watch?v=") != -1) {
    let vidUrl = imageURL.split("v=")[1].substring(0, 11);
    let ytThumbUrl = `https://img.youtube.com/vi/${vidUrl}/maxresdefault.jpg`;
    imageTag.src = ytThumbUrl; //src vidThumbnail
  } else if (imageURL.indexOf("https://www.youtu.be/") != -1) {
    let vidUrl = imageURL.split("be/")[1].substring(0, 11);
    let ytThumbUrl = `https://img.youtube.com/vi/${vidUrl}/maxresdefault.jpg`;
    imageTag.src = ytThumbUrl; //src vidThumbnail
  } else if (imageURL.match(/\.(jpe?g|png|gif|bmp|webp)$/i)) {
    imageTag.src = imageURL;
  } else {
    imageTag.src = '';
    previewArea.classList.remove('active');
  }
  hiDen.value = imageTag.src

};
