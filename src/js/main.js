img_number = null;
current_img = document.getElementById("detail_image");

current_img.addEventListener('load', hideLoader);

function showLoader(){
    document.getElementById("loader").style.display = "block";
    document.getElementById("loading").style.display = "block";
}

function hideLoader(){
    document.getElementById("loader").style.display = "none";
    document.getElementById("loading").style.display = "none";
}

function closeImages(){
    document.getElementById("shadow").style.display = "none";
}

function showImages(index){
    document.getElementById("shadow").style.display = "block";
    current_img.src = "images/gallery/" + index + ".jpeg";
    showLoader();

    img_number = index;
    if(img_number == 1){
        prev_img_number = 20;
    }else{
        prev_img_number = img_number - 1;
    }
    if(img_number == 20){
        next_img_number = 1;
    }else{
        next_img_number = img_number + 1;
    }

    document.getElementById("prev_mini_image").src = "images/gallery/mini/" + prev_img_number + ".jpeg";
    document.getElementById("curr_mini_image").src = "images/gallery/mini/" + img_number + ".jpeg";
    document.getElementById("next_mini_image").src = "images/gallery/mini/" + next_img_number + ".jpeg";
/*
    console.log(index);
    console.log("images/gallery/" + index + ".jpeg");*/
}

function nextImage(){
    if(img_number >= 20){
        img_number = 1;
    }else{
        img_number++;
    }

    current_img.src = "images/gallery/" + img_number + ".jpeg";    
    showLoader();
    
    if(img_number == 1){
        prev_img_number = 20;
    }else{
        prev_img_number = img_number - 1;
    }
    if(img_number == 20){
        next_img_number = 1;
    }else{
        next_img_number = img_number + 1;
    }

    document.getElementById("prev_mini_image").src = "images/gallery/mini/" + prev_img_number + ".jpeg";
    document.getElementById("curr_mini_image").src = "images/gallery/mini/" + img_number + ".jpeg";
    document.getElementById("next_mini_image").src = "images/gallery/mini/" + next_img_number + ".jpeg";
}

function prevImage(){
    if(img_number == 1){
        img_number = 20;
    }else{
        img_number--;
    }

    document.getElementById("detail_image").src = "images/gallery/" + img_number + ".jpeg";
    showLoader();
    
    if(img_number == 1){
        prev_img_number = 20;
    }else{
        prev_img_number = img_number - 1;
    }
    if(img_number == 20){
        next_img_number = 1;
    }else{
        next_img_number = img_number + 1;
    }

    document.getElementById("prev_mini_image").src = "images/gallery/mini/" + prev_img_number + ".jpeg";
    document.getElementById("curr_mini_image").src = "images/gallery/mini/" + img_number + ".jpeg";
    document.getElementById("next_mini_image").src = "images/gallery/mini/" + next_img_number + ".jpeg";
}
//Při kliknutí mimo fotku se zavře detail
document.addEventListener("click", function (event){
    if(document.getElementById("shadow").isSameNode(event.target)){
        closeImages();
    }
});