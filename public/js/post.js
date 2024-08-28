let lastLine = 0;

function addNewLine() {
    console.log("A");
    let postlinet = document.getElementById("post-line");

    let countLines = lastLine + 1;
    lastLine = countLines;

    postlinet.insertAdjacentHTML(
        "beforeend",
        `
         <div id="post-line-${countLines}" class="p-4 mt-4">
                                    <div class="mb-2 flex justify-end">
                                        <button class="material-symbols-outlined text-red-900 text-2xl" onclick="removeLine(this)">delete</button>
                                    </div>
                                    <div class="flex flex-col gap-y-5" >
                                        <input type="text" class="border-0 border-b p-2.5" name="post-line[${countLines}][subtitle]" value="" placeholder="Subtitulo">
                                        <textarea class="w-full p-2.5 border-0 border-b p-2.5" name="post-line[${countLines}][text]" placeholder="Texto"></textarea>
                                    </div>
                                </div>
    `
    );
}

function removeLine(e) {
    e.parentElement.parentElement.remove();
}

window.addEventListener("load", function (e) {
    document.querySelectorAll(".post-element-text").forEach((e) => {
        for (let i = 0; i < e.innerHTML.length; i++) {
            if (e.innerHTML[i] == "\n") {
                console.log("A");
            }
        }
    });
});
