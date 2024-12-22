
function loadPicture(path,alt) {
    var htmlImg = ``
    htmlImg = `
        <a href=${path} target="_blank">
            <img src=${path} alt=${alt}>
        </a>
    `
    var put = document.getElementById("imgarticle")
    put.innerHTML = put.innerHTML + htmlImg
}