var width = window.innerWidth;

function loadPuzzle(pgnData, gameNum) {
    console.log("pgndata :" + pgnData)
    console.log("gameNum :" + gameNum)
    square = Math.round(width / 60)
    console.log("square :" + square)
    htmlIframe = `
    <iframe src='/pgnweb/puzzler.php?pgnData=${pgnData}&amp;gameNum=${gameNum}&amp;squareSize=${square}&amp;lightColorHex=EFF4EC&amp;darkColorHex=C6CEC3&amp;controlBackgroundColorHex=EFF4EC&amp;controlTextColorHex=888888&amp;frameBorderColorHex=A4A4A4' class='puzzler'>
    iframe support required to display the chesss puzzler
    </iframe>
    `
    var put = document.getElementById("chesspuzzler" + gameNum)
    put.innerHTML = htmlIframe
}