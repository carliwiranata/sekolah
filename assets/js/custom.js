document.addEventListener("DOMContentLoaded", function() {
    var inputTextArea = document.getElementById("inputText");
    var initialTextLength = inputTextArea.value.length;
    var remainingChars = 280 - initialTextLength;
    var counter = document.getElementById("characterCount");

    counter.textContent = Math.max(0, remainingChars) + " karakter tersisa"; // Pastikan pesan tidak negatif

    inputTextArea.addEventListener("input", function() {
        var inputLength = this.value.length;
        var remainingChars = 280 - inputLength;

        counter.textContent = Math.max(0, remainingChars) + " karakter tersisa";

        if (remainingChars < 0) {
            counter.classList.add("exceeded");
            var excessChars = Math.abs(remainingChars);
            this.value = this.value.slice(0, -excessChars); // Hapus karakter yang melebihi batas
        } else {
            counter.classList.remove("exceeded");
        }
    });
});
document.addEventListener("DOMContentLoaded", function() {
    var inputTextArea = document.getElementById("inputText1");
    var initialTextLength = inputTextArea.value.length;
    var remainingChars = 280 - initialTextLength;
    var counter = document.getElementById("characterCount1");

    counter.textContent = Math.max(0, remainingChars) + " karakter tersisa"; // Pastikan pesan tidak negatif

    inputTextArea.addEventListener("input", function() {
        var inputLength = this.value.length;
        var remainingChars = 280 - inputLength;

        counter.textContent = Math.max(0, remainingChars) + " karakter tersisa";

        if (remainingChars < 0) {
            counter.classList.add("exceeded");
            var excessChars = Math.abs(remainingChars);
            this.value = this.value.slice(0, -excessChars); // Hapus karakter yang melebihi batas
        } else {
            counter.classList.remove("exceeded");
        }
    });
});


